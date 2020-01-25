<?php

class Bootstrap {

    /**
     *
     * @var string $_url  
     */
    private $_url = null;

    /**
     *
     * @var object $_controller
     */
    private $_controller = null;

    /**
     * @var string $_controllerPath
     * @var string $_modelPath
     * @var string $_errorFile
     */
    private $_controllerPath = "controllers/";
    private $_modelPath = "models/";
    private $_errorFile = "error.php";
    private $_defaultFile = "index.php";

    /**
     * init - initiate the bootstrap
     * @return boolean
     */
    public function init() {
        //get the protected $_url
        $this->_getUrl();
        //If the url is empty...means no url load the default controller
        if (empty($this->_url[0])) {
            $this->_loadDefaultController();
            return false;
        }
        //Ensure that our controller really exists
        $this->_loadExistingController();
        //Calling method code
        $this->_callControllerMethod();
    }

    /**
     * {Optional} Set custom path to the controllers
     * @param string $path
     */
    public function setControllerPath($path) {
        $this->_controllerPath = trim($path, "/") . "/";
    }

    /**
     * {Optional} Set custom path to the models
     * @param string $path
     */
    public function setModelPath($path) {
        $this->_modelPath = trim($path, "/") . "/";
    }

    /**
     * {Optional} Set custom path to the error file
     * @param string $path Use the file name only
     * eg. error.php
     * 
     */
    public function setErrorFile($path) {
        $this->_errorFile = trim($path, "/");
    }

    /**
     * _getUrl() 
     */
    private function _getUrl() {
        //Getting the url typed in
        //Checking if it is set and then set it defaultly to index...the main page
        $url = isset($_GET['url']) ? $_GET['url'] : "index";
        $url = rtrim($url, "/");
        //Sanatizing the URL
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $this->_url = explode("/", $url);
    }

    /**
     * 
     */
    private function _loadDefaultController() {
        require $this->_controllerPath . $this->_defaultFile;
        $this->_controller = new Index();
        $this->_controller->index();
    }

    /**
     * 
     * @return boolean
     */
    private function _loadExistingController() {
        $file = $this->_controllerPath . $this->_url[0] . ".php";

        if (file_exists($file)) {
            //Controller including here
            require $file;
            $this->_controller = new $this->_url[0];
            $this->_controller->loadModel($this->_url[0], $this->_modelPath);
        } else {
            //require our error page
            $this->_error();
            return false;
        }
    }

    /**
     * _callControllerMethod -  
     */
    private function _callControllerMethod() {

        //switch case to route controller
        $lenght = count($this->_url);
        //Make sure we have the method we invoke
        if ($lenght > 1) {
            if (!method_exists($this->_controller, $this->_url[1])) {
                $this->_error();
            }
        }
        //Determine the route we take
        switch ($lenght) {
            case 5:
                //controller->method(param1, parm2, param3)
                $this->_controller->{$this->_url[1]}($this->_url[2], $this->_url[3], $this->_url[4]);
                break;
            case 4:
                $this->_controller->{$this->_url[1]}($this->_url[2], $this->_url[3]);
                break;
            case 3:
                $this->_controller->{$this->_url[1]}($this->_url[2]);
                break;
            case 2:
                $this->_controller->{$this->_url[1]}();
                break;
            default:
                $this->_controller->index();
                break;
        }
    }

    /**
     * Displays the error page if nothing exists
     * 
     */
    private function _error() {
        require $this->_controllerPath . $this->_errorFile;
        $this->_controller = new AnError();
        $this->_controller->index();
        exit;
    }

}

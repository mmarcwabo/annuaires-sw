<?php

class Controller {

    function __construct() {
        //echo "<br/>Main controller";
        $this->view = new View();
    }

    public function loadModel($name, $modelPath = 'models/') {
        //Path to the model
        $path = $modelPath . $name . "_model.php";

        if (file_exists($path)) {
            require $modelPath . $name . "_model.php";
            $modelName = $name . "_Model";
            //Instantiate the model
            $this->model = new $modelName();
        }
    }

}

<?php

/**
 * - Fill out a form
 *  - POST to PHP
 *  - Sanitize
 *  - Validate
 *  - Return data
 *  - Write to Database
 */
class Form {

    /**
     *
     * @var array $_postData stores the posted data
     * @var array $_currentItem stores the immediately posted 
     * @var object $_val the validator object
     * @var array $_error holds the current form errors
     * 
     * */
    private $_currentItem = null;
    private $_postData = array();
    private $_val = array();
    private $_error = array();

    /**
     * __construct - Instantiate the validator class
     */
    function __construct() {
        $this->_val = new Val();
    }

    /**
     * post - this is to run post
     * @param String $field The Html fieldname to post
     */
    public function post($field) {
        $this->_postData[$field] = $_POST[$field];
        $this->_currentItem = $field;
        return $this;
    }

    /**
     * fetch - return the posted data
     * @param mixed $fieldName
     * @return mixed String or array
     */
    public function fetch($fieldName = false) {
        if ($fieldName) {
            if (isset($this->_postData[$fieldName])) {
                return $this->_postData[$fieldName];
            } else {
                return false;
            }
        } else {
            return $this->_postData;
        }
    }

    /**
     * 
     * val - this is to validate data
     * @param string $typeOfValidator names the validation function from Val class
     * @param string  $arg a property to validate aginst
     * @return string a message showing the validation state
     * 
     */
    public function val($typeOfValidator, $arg = null) {
        if ($arg == null) {
            $error = $this->_val->{$typeOfValidator}(
                    $this->_postData[
                    $this->_currentItem]);
        } else {
            $error = $this->_val->{$typeOfValidator}(
                    $this->_postData[
                    $this->_currentItem], $arg);
        }

        if ($error) {
            $this->_error[$this->_currentItem] = $error;
        }
        return $this;
    }
    
    /**
     * submit - Handles the form and throws errors
     * @return boolean
     * @throws Exception
     */
    public function submit() {
        if (empty($this->_error)) {
            return true;
        } else {
            $str = "";
            foreach ($this->_error as $key => $value) {
                $str .= $key . " => " . $value . "\n";
            }
            throw new Exception($str);
        }
    }

}

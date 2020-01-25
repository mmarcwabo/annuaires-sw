<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Val {

    function __construct() {
        
    }

    public function minlength($data, $arg) {
        if (strlen($data) < $arg) {
            return "The string can at least be $arg long";
        }
    }

    public function maxlength($data, $arg) {
        if (strlen($data) > $arg) {
            return "The string cannot be more long than $arg ";
        }
    }

    public function _digit($data) {
        if (ctype_digit($data)== false) {
            return "The string must be a digit";
        }
    }
    
    public function __call($name, $arguments) {
        throw new Exception("$name no exist inside of ".__CLASS__);
    }

}

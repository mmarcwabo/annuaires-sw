<?php

/*
Index controller

*/

class Index extends Controller{

    function __construct(){
        parent::__construct();
        
    }

    function index(){
        $this->view->title = "Annuaires annexes sw";
        $this->view->render("index/index");
    }

}
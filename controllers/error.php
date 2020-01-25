<?php
/*
Error controller

*/

class AnError extends Controller {

    function __construct(){
        parent::__construct();
        //Displaying an error message
        //echo "<br/>Error, file <b>".$arg."</b> not found :-(";
        
        //$this->index();
        
    }

    //defaultly loaded function
    function index($arg=false){

        //Extracting the page name to display an error message
        $page = explode("/",rtrim($arg, ".php"))[0];
        //echo $page;
        $this->view->title = "404 Error";
        $this->view->message = "The page <b>".$page."</b> is not found on the server. :-(";
        $this->view->render("error/index");

        exit;
    }

}
<?php

/*
Help controller

*/

class Help extends Controller{

    function __construct(){
        parent::__construct();
        //echo "<br/>We are in index help ;-)";
        //$this->index();
        
    }

    //defaultly loaded function
    function index(){
        $this->view->title = "Help";
        $this->view->render("help/index");
    }

    public function other($arg=false){
        $content =  "<br/>We are inside other";
        if($arg){
            $content.= "<br/>Optional arg : ". $arg; 
        }
        
        //Include the model
        require "models/help_model.php";
        $model = new Help_Model();

        //Updating the view
        $this->view->render("help/index", $content);
        
    }

}
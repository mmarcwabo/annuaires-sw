<?php

/*
Dashboard controller

*/

class Dashboard extends Controller{

    function __construct(){
        parent::__construct();
        //JS files for this controller
        $this->view->js=array("scripts/js/main.js", "scripts/js/dashboard.js");
    }
    /**
     * 
     */
    function index(){
        $this->view->title = "Dashboard";
        $this->view->render("dashboard/index");
    }

    function logout(){
        Session::destroy();
        header('location: ../login');
        exit;
    }

}
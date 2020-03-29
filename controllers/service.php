<?php

/*
  Categorie controller
 */

//namespace "../models";
//use categorie_model.php;

class Service extends Controller {

    function __construct() {
        parent::__construct();
        //Model instantiation
        //JS files for this controller
        //$this->view->js = array("scripts/js/user.js");
    }

    function index() {
        $this->view->title = "Service";
        //Drag attributes to list if needed
        //and drop them to the view
        $this->listAttributeOfCategorie("titre");
        $this->view->render("service/index");
    }

    public function create() {
        require 'libs/Form.php';
        require 'libs/Val.php';
        //Getting data from form
        //$data = null;
        $form = new Form();
        try {
            $form->post('denomination')
                ->post('telephone')
                ->post('adressemail')
                ->post('adresse')
                ->post('horairedisponibilite')
                ->post('ville')
                ->post('nouvelleVille')
                ->post('details')
                ->post('categorie');
            $form->submit();
            //echo "the form passed";
            $data = $form->fetch();
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
        //Getting the user id here
        //Real insert here    
        $this->model->create($data);
        $this->view->render("service/index");
    }

    public function edit($id) {

        $this->view->title = "Modifier categorie";
        $this->view->categorie = $this->model->categorieSingleList($id);

        $this->view->render('service/edit');
    }

    public function editSave($id) {

        require 'libs/Form.php';
        require 'libs/Val.php';
        //Getting data from form
        //$data = null;
        $form = new Form();
        try {
            $form->post('denomination')
                ->post('telephone')
                ->post('adressemail')
                ->post('adresse')
                ->post('horairedisponibilite')
                ->post('ville')
                ->post('details')
                ->post('categorie');
            $form->submit();
            //echoing something for debug purpose
            //echo "the form passed";
            $data = $form->fetch();
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
        //Getting the user id here
        $data['idcategorie'] = 1;//Get the coordonnee id from database

        // @TODO: Do your error checking!

        $this->model->editSave($data);
        header('location: ' . URL . 'service');
    }

    public function delete($id) {
        
    }

    public function show() {
        
    }

    public function listAttributeOfCategorie($attribute) {
        require_once 'models/categorie_model.php';
        $model = new Categorie_Model();
        $this->view->paysNameList = Model::listItemFromDbTable("pays", "nom");
        $this->view->villeNameList = Model::listItemFromDbTable("ville", "nom");
        $this->view->categorieNameList = $model->showAttributeOfCategorieList($attribute);
    }


    public function showCategorieList() {
        
        print_r($model->showServiceList());
    }

    public function showSingleList($id) {
        $model = new Service_Model();
        print_r($model->showSingleList($id));
    }

    public function deleteCategorie($id) {
        $model = new Service_Model();
        $model->deleteService($id);
        print_r($model->showCategorieList());
    }

}
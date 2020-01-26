<?php

/*
  Categorie controller
 */

class Categorie extends Controller {

    function __construct() {
        parent::__construct();
        //Model instantiation
        //JS files for this controller
        
    }

    function index() {
        $this->view->title = "Categorie";
        $this->view->js = array("scripts/js/categorie.js");
        //Display categories' list before render it on the page
        $this->showCategorieList();
        $this->view->render("categorie/index");
    }

    public function create() {
        require 'libs/Form.php';
        require 'libs/Val.php';
        //Getting data from form
        //$data = null;
        $form = new Form();
        try {
            $form->post('titre')
                ->post('description');
            $form->submit();
            //echo "the form passed";
            $data = $form->fetch();
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
        //Getting the user id here
        //$data['coordonnees_idcordonnees'] = 1;
        //Real insert here    
        $this->model->create($data);
        $this->view->render("categorie/index");
    }

    public function edit($id) {

        $this->view->title = "Modifier categorie";
        $this->view->categorie = $this->model->showSingleList($id);
        $this->view->render('categorie/edit');
    }

    public function editSave($id) {

        require 'libs/Form.php';
        require 'libs/Val.php';
        //Getting data from form
        //$data = null;
        $form = new Form();
        try {
            $form->post('titre')
                ->post('description');
            $form->submit();
            //echo "the form passed";
            $data = $form->fetch();
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
        //Getting the user id here
        $data['idcategorie'] = 1;//Get the coordonnee id from database

        // @TODO: Do your error checking!

        $this->model->editSave($data);
        header('location: ' . URL . 'categorie');
    }

    public function delete($id) {
        
    }

    public function show() {
        
    }

    public function showCategorieList() {
        //Showing all the categories
        //Sending list of categories on the view
        $this->view->listOfCategorie = $this->model->showCategorieList();
    }

    public function showSingleList($id) {
        $model = new Categorie_Model();
        print_r($model->showSingleList($id));
    }

    public function deleteCategorie($id) {
        $model = new Categorie_Model();
        $model->deleteCategorie($id);
        print_r($model->showCategorieList());
    }

}

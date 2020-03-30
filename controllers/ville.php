<?php

#Class name : Ville
#Purpose : Ville controller
#Author : mwabo
#email : mwabo@exsofth.com

class Ville extends Controller {

    function __construct() {
        parent::__construct();
        //Model instantiation
        //JS files for this controller
        
    }

    function index() {
        $this->view->title = "Ville";
        //Javascript files for ajax calls
        $this->view->js = array(
            "scripts/js/main.js",
            "scripts/js/ville.js"
        );
        //Display villes' list before render it on the page
        //$this->showVilleList();
        $this->view->render("ville/index");
    }

    public function create() {
        require 'libs/Form.php';
        require 'libs/Val.php';
        //Getting data from form
        //$data = null;
        $form = new Form();
        try {
            $form->post('nom')
                ->post('pays_idpays')
                ->post('latitude')
                ->post('longitude');
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
        //Refresh ville' list before render it on the page
        $this->showVilleList();
        $this->view->render("ville/index");
    }

    /**
     * getVilleOfAPays - refresh as option to a select of the selected ville
     * @param string $paysName : the pays we want to display towns
     *
     * @return display the towns as options
     */
    public function getVilleOfAPays($paysName){
        //Adding only town
        echo @Utils::arrayToList($this->model->getVilleOfAPays($paysName));

    }


}
<?php

//user_model

class Service_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function create($data) {
        //Inserting data from form in the database
        $this->db->insert('servicereferenced', ['denomination' => $data['denomination'],
            'adresse' => $data['adresse'],
            'horairedisponibilite' => $data['horairedisponibilite'],
            'details' => $data['details'],
            'categorie_idcategorie' => $data['categorie_idcategorie']
            ]);
    }

    public function showServiceList() {
        return $this->db->select("SELECT * FROM servicereferenced");
    }

    public function showSingleList($id) {
        return $this->db->select("SELECT * FROM servicereferenced WHERE idservicereferenced= :id", array(":id" => $id));
    }
    
    /**
     * editCategorie - Saves the data edition to the database
     * @param array $data values to save to database
     */
    public function editService($data) {
        $this->db->update("servicereferenced", ['denomination' => $data['denomination'],
            'adresse' => $data['adresse'],
            'horairedisponibilite' => $data['horairedisponibilite'],
            'details' => $data['details'],
            'categorie_idcategorie' => $data['categorie_idcategorie']]
            , "`idservicereferenced` = {$data['idservicereferenced']}");
    }
    
    /**
     * deleteCategorie - 
     * @param Integer $id 
     * @return boolean
     */
    public function deleteCategorie($id) {
        $result = $this->db->select("SELECT * FROM servicereferenced WHERE idservicereferenced= :id", array(":id" => $id));
        /*if ($result[0]['roleutilisateur'] == 'Administrateur') {
            return false;
        }*/
        $this->db->delete("idservicereferenced", "idservicereferenced= '$id'");
    }

}
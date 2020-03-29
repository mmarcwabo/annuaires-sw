<?php
//user_model

class Service_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    /**
     * showAttributeOfCategorieList - Get lists for comboboxes and select html tags
     * @param string $attribute the table field we want to list
     */
    public function create($data) {
        //Inserting data from form in the database
        //If a new town has been created
        $nouvelleVille = isset($data['nouvelleVille']) ? $data['nouvelleVille'] : null;
        if($nouvelleVille!=null){
            $pays  = $data['nouvelleVille'];
        }

        print_r($nouvelleVille);
        return;


        $this->db->insert(
            'servicereferenced',
            [
            'denomination' => $data['denomination'],
            'contacts' => "T : ".($data['telephone']).",E : ".($data['adressemail']),
            'adresse' => $data['adresse'],
            'horairedisponibilite' => $data['horairedisponibilite'],
            'details' => $data['details'],
            'idville' => 1,
            'categorie_idcategorie' => 
            Model::getFieldFromAnyElse("categorie", "idcategorie", "titre",
             $data['categorie'])
            ]);
        //Redirect to the view that sent the request to avoid data duplication on error
        header('location:'.URL.'/service');
    }

    /**
     * showAttributeOfCategorieList - Get lists for comboboxes and select html tags
     * @param string $attribute the table field we want to list
     */
    public function showAttributeOfCategorieList($attribute) {
        return $this->db->select("SELECT ".$attribute." FROM categorie");
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
        $this->db->update("servicereferenced", [
            'denomination' => $data['denomination'],
            'contacts' => "T".$data['telephone']."E".$data['adressemail'],
            'adresse' => $data['adresse'],
            'horairedisponibilite' => $data['horairedisponibilite'],
            'details' => $data['details'],
            'idville' => $data['idville'],
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
        $this->db->delete("idservicereferenced", "idservicereferenced= '$id'");
    }

}
<?php

//categorie_model

class Categorie_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function create($data) {
        //Inserting data from form in the database
        $this->db->insert('categorie', ['titre' => $data['titre'],
            'description' => $data['description']
            ]);
        //Redirect to the view that sent the request to avoid data duplication on error
        header('location:'.URL.'categorie');
    }

    public function showCategorieList() {
        return $this->db->select("SELECT * FROM categorie");
    }

    /**
     * showAttributeOfCategorieList - Get lists for comboboxes and select html tags
     * @param string $attribute the table field we want to list
     */
    public function showAttributeOfCategorieList($attribute) {
        return $this->db->select("SELECT ".$attribute." FROM categorie");
    }

    public function showSingleList($id) {
        return $this->db->select("SELECT * FROM categorie WHERE idcategorie= :id", array(":id" => $id));
    }
    
    /**
     * editCategorie - Saves the data edition to the database
     * @param array $data values to save to database
     */
    public function editCategorie($data) {
        $this->db->update("categorie", ['titre' => $data['titre'],
            'description' => $data['description']]
            , "`idcategorie` = {$data['idcategorie']}");
    }
    
    /**
     * deleteUser - 
     * @param Integer $id 
     * @return boolean
     */
    public function deleteUser($id) {
        $result = $this->db->select("SELECT * FROM utilisateur WHERE idutilisateurs= :id", array(":id" => $id));
        if ($result[0]['roleutilisateur'] == 'Administrateur') {
            return false;
        }
        $this->db->delete("utilisateur", "idutilisateurs= '$id'");
    }

}

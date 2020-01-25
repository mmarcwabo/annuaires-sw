<?php

class Model {

    function __construct() {
        //Database connection object
        $this->db = new Database(DBTYPE, DBHOST, DBNAME, DBUSERNAME, DBPASSWORD);
      //Insert in a table
    }

}

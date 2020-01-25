<?php

class Database extends PDO {
    
    /**
     * __construct - 
     * @param string $DBTYPE - the type of the database
     * @param string $DBHOST - the database's host
     * @param string $DBNAME - the database's name
     * @param string $DBUSERNAME - the username for the database
     * @param string $DBPASSWORD - the password to accsess the database
     */

    function __construct($DBTYPE, $DBHOST, $DBNAME, $DBUSERNAME, $DBPASSWORD) {
        parent::__construct($DBTYPE . ":host=" . $DBHOST . ";dbname=" . $DBNAME, $DBUSERNAME, $DBPASSWORD);
        parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    /**
     * select
     * @param string $sql An SQL string
     * @param string $array Parameters to bind
     * @param object $fetchMode PDO fetch mode
     * @return mixed Select result
     */
    public function select($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC) {

        $sth = $this->prepare($sql);
        foreach ($array as $key => $value) {
            $sth->bindValue("$key", $value);
        }
        $sth->execute();
        return $sth->fetchAll($fetchMode);
    } 

    /**
     * insert
     * @param string $table Database table name to insert into
     * @param string $data Array of data that are supposed to be inserted in $table
     */
    public function insert($table, $data) {
        #Sorting the array order by key...as it is an associative one ;-)
        ksort($data);

        #fiedNames
        $fieldNames = implode(", ", array_keys($data));
        $fieldValues = ":" . implode(", :", array_keys($data));
        //Adding data in the database here
        $sth = $this->prepare("INSERT INTO $table ($fieldNames) VALUES ($fieldValues)");
        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value);
        }
        $sth->execute();
    }

    /**
     * update
     * @param string $table Database table name to update
     * @param string $data Array of data that are supposed to update $table
     * @param string $where The WHERE sql query part
     */
    public function update($table, $data, $where) {
        #Sorting the array order by key...as it is an associative one ;-)
        ksort($data);

        #fiedNames
        $fieldDetails = NULL;
        foreach ($data as $$key => $value) {
            $fieldDetails .= "'$key'=:$key,";
        }
        $fieldDetails = rtrim($fieldDetails, ',');
        //Adding data in the database here
        $sth = $this->prepare("UPDATE $table SET $fieldDetails WHERE $where");
        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value);
        }
        $sth->execute();
    }
    
    /**
     * delete
     * @param string $table
     * @param string $where
     * @param Integer $limit
     * @return Integer affected rows
     */
    public function delete($table, $where, $limit=1){
        return $this->exec("DELETE FROM $table WHERE $where LIMIT $limit");
    }

}

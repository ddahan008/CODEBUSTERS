<?php

class Group extends Model {
    public $id;
    public $name;
    public $descr;


    public function getAllGroups() {
        $stmt = $this->_connection->prepare(
            "SELECT * 
               FROM groups");

        $stmt->execute([]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "Group");
        return $stmt->fetchAll();
    }

    public function addGroup() {
        $stmt = $this->_connection->prepare(
            "INSERT INTO groups(name, descr) 
                  VALUES (:name, :descr)");

        $stmt->execute(['name'=>$this->name, 'descr'=>$this->descr]);
        return $stmt->rowCount();
    }
}

?>

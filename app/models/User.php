<?php

class User extends Model {
    public $id;
    public $uname;
    public $password_hash;

    public function getUserByUname($uname) {
        $stmt = $this->_connection->prepare(
            "SELECT * 
               FROM User 
              WHERE uname = :uname");

        $stmt->execute(['uname'=>$uname]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "User");
        return $stmt->fetch();
    }

    public function getUsersByUname($uname, $limit = null) {
        $stmt = "SELECT * 
                   FROM user 
                  WHERE uname LIKE :uname";
        if (isset($limit)) $stmt .= " LIMIT :cnt";

        $stmt = $this->_connection->prepare($stmt);

        if (isset($limit)) $stmt->bindParam('cnt', $limit, PDO::PARAM_INT);

        $stmt->bindValue('uname', "%$uname%");

        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, "User");
        return $stmt->fetchAll();
    }

    public function getUserById($id) {
        $stmt = $this->_connection->prepare(
            "SELECT * 
               FROM User 
              WHERE id = :id");

        $stmt->execute(['id'=>$id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "User");
        return $stmt->fetch();
    }

    public function getUsernameById($id) {
        $stmt = $this->_connection->prepare(
            "SELECT uname
               FROM user
              WHERE id = :id ");

        $stmt->execute(['id'=>$id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "User");
        $result = $stmt->fetch();
        return $result->uname;
    }

    public function insert() {
        $stmt = $this->_connection->prepare("INSERT INTO User(uname, password_hash) VALUES(:uname, :password_hash)");

        $stmt->execute(['uname'=>$this->uname, 'password_hash'=>$this->password_hash]);
        return $stmt->rowCount();
    }
}

?>
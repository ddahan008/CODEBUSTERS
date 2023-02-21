<?php

class Group extends Model {
    public $id;
    public $name;
    public $descr;
    public $creator_uid;

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
            "INSERT INTO groups(name, descr, creator_uid) 
                  VALUES (:name, :descr, :creator_uid)");

        $stmt->execute(['name'=>$this->name, 'descr'=>$this->descr, 'creator_uid'=>$this->creator_uid]);
        return $stmt->rowCount();
    }

    public function deleteGroup() {
        $stmt = $this->_connection->prepare(
            "DELETE FROM groups WHERE id = :id AND creator_uid = :creator_uid");

        $stmt->execute(['id'=>$this->id, 'creator_uid'=>$this->creator_uid]);
        return $stmt->rowCount();
    }

    public function isSubscribed() {
        $stmt = $this->_connection->prepare(
            "SELECT *
            FROM group_mem
            WHERE gid = :gid AND uid = :uid");

        try {
            $stmt->execute(['gid'=> $this->id,'uid'=> $_SESSION['user_id']]);
            return $stmt->fetch();
        }
        catch (Exception $e) { return 0; }
    }

    public function isCreator() {
        $stmt = $this->_connection->prepare(
            "SELECT *
            FROM groups
            WHERE id = :id AND creator_uid = :creator_uid");

        try {
            $stmt->execute(['id'=> $this->id,'creator_uid'=>$this->creator_uid]);
            return $stmt->fetch();
        }
        catch (Exception $e) { return 0; }
    }

    public function joinGroup() {
        $stmt = $this->_connection->prepare(
            "INSERT INTO group_mem(gid, uid) 
                  VALUES (:gid, :uid)");

        $stmt->execute(['gid'=>$this->id, 'uid'=>$_SESSION['user_id']]);
        return $stmt->rowCount();
    }

    public function leaveGroup() {
        $stmt = $this->_connection->prepare(
            "DELETE FROM group_mem
                  WHERE (gid = :gid AND uid = :uid)");

        $stmt->execute(['gid'=>$this->id, 'uid'=>$_SESSION['user_id']]);
        return $stmt->rowCount();
    }


}

?>

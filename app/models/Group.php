<?php

class Group extends Model {
    public $id;
    public $name;
    public $descr;
    public $creator_uid;

    /**
     * Retrieves all the group records from the DB.
     * 
     * @return array|false Array containing all the groups, or false if there are no groups.
     */
    public function getAllGroups() {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "SELECT * 
               FROM groups");

        $stmt->execute(); // execute the query
        $stmt->setFetchMode(PDO::FETCH_CLASS, "Group"); // set the retrieval to match an object of type Group
        return $stmt->fetchAll(); // returns all the group records in group objects as an array, or false
    }

    /**
     * Adds an group to the DB based on the current object status.
     *
     * @return int Number of affected rows. Expected to be 1.
     */
    public function addGroup() {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "INSERT INTO groups(name, descr, creator_uid) 
                  VALUES (:name, :descr, :creator_uid)");

        // supply the replacement parameters to the query
        $stmt->execute(['name'=>$this->name, 'descr'=>$this->descr, 'creator_uid'=>$this->creator_uid]);
        return $stmt->rowCount(); // return the number of affected rows (should be 1)
    }

    /**
     * Deletes a group from the DB based on the current object status.
     *
     * @return int Number of affected rows. Expected to be 1.
     */public function deleteGroup() {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "DELETE FROM groups WHERE id = :id AND creator_uid = :creator_uid");

        // supply the replacement parameters to the query
        $stmt->execute(['id'=>$this->id, 'creator_uid'=>$this->creator_uid]);
        return $stmt->rowCount(); // return the number of affected rows (should be 1)
    }

    /**
     * Checks whether or not a subscription record matching the current object status exists in the DB.
     *
     * @return int|mixed If the user is subscribed to the group, return the record. Otherwise return 0.
     */
    public function isSubscribed() {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "SELECT *
            FROM group_mem
            WHERE gid = :gid AND uid = :uid");

        try {
            // supply the replacement parameters to the query
            $stmt->execute(['gid'=> $this->id,'uid'=> $_SESSION['user_id']]);
            return $stmt->fetch(); // returns the subscription record if it exists, false otherwise
        }
        catch (Exception $e) { return 0; }
    }

    /**
     * Checks whether or not the group matching the current object status was created by the current user.
     *
     * @return int|mixed If the current user created the group, return the group. Otherwise, return 0.
     */
    public function isCreator() {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "SELECT *
            FROM groups
            WHERE id = :id AND creator_uid = :creator_uid");

        try {
            // supply the replacement parameters to the query
            $stmt->execute(['id'=> $this->id,'creator_uid'=>$this->creator_uid]);
            return $stmt->fetch(); // returns the group record if it exists, false otherwise
        }
        catch (Exception $e) { return 0; }
    }

    /**
     * Creates a record in the DB for the current user joining a group matching the current object status.
     *
     * @return int The number of affected rows. Expected to be 1.
     */
    public function joinGroup() {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "INSERT INTO group_mem(gid, uid) 
                  VALUES (:gid, :uid)");

        // supply the replacement parameters to the query
        $stmt->execute(['gid'=>$this->id, 'uid'=>$_SESSION['user_id']]);
        return $stmt->rowCount(); // return the number of affected rows (should be 1)
    }

    /**
     * Destroys the record in the DB for the current member being registered for a group matching the object status.
     *
     * @return int The number of affected rows. Expected to be 1.
     */
    public function leaveGroup() {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "DELETE FROM group_mem
                  WHERE (gid = :gid AND uid = :uid)");

        // supply the replacement parameters to the query
        $stmt->execute(['gid'=>$this->id, 'uid'=>$_SESSION['user_id']]);
        return $stmt->rowCount(); // return the number of affected rows (should be 1)
    }


}

?>

<?php

class Company extends Model {
    public $id;
    public $name;
    public $descr;
    public $creator_uid;

    /**
     * Retrieves all the company records from the DB.
     * 
     * @return array|false Array containing all the companys, or false if there are no companys.
     */
    public function getAllCompanies() {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "SELECT * 
               FROM company");

        $stmt->execute(); // execute the query
        $stmt->setFetchMode(PDO::FETCH_CLASS, "Company"); // set the retrieval to match an object of type Company
        return $stmt->fetchAll(); // returns all the company records in company objects as an array, or false
    }

    /**
     * Adds a company to the DB based on the current object status.
     *
     * @return int Number of affected rows. Expected to be 1.
     */
    public function addCompany() {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "INSERT INTO company(name, descr, creator_uid) 
                  VALUES (:name, :descr, :creator_uid)");

        // supply the replacement parameters to the query
        $stmt->execute(['name'=>$this->name, 'descr'=>$this->descr, 'creator_uid'=>$this->creator_uid]);
        return $stmt->rowCount(); // return the number of affected rows (should be 1)
    }

    /**
     * Deletes a company from the DB based on the current object status.
     *
     * @return int Number of affected rows. Expected to be 1.
     */public function deleteCompany() {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "DELETE FROM company WHERE id = :id AND creator_uid = :creator_uid");

        // supply the replacement parameters to the query
        $stmt->execute(['id'=>$this->id, 'creator_uid'=>$this->creator_uid]);
        return $stmt->rowCount(); // return the number of affected rows (should be 1)
    }

    /**
     * Checks whether or not a follow record matching the current object status exists in the DB.
     *
     * @return int|mixed If the user is following the company, return the record. Otherwise return 0.
     */
    public function isFollowing() {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "SELECT *
            FROM company_follower
            WHERE cid = :cid AND uid = :uid");

        try {
            // supply the replacement parameters to the query
            $stmt->execute(['cid'=> $this->id,'uid'=> $_SESSION['user_id']]);
            return $stmt->fetch(); // returns the subscription record if it exists, false otherwise
        }
        catch (Exception $e) { return 0; }
    }

    /**
     * Checks whether or not the company matching the current object status was created by the current user.
     *
     * @return int|mixed If the current user created the company, return the company. Otherwise, return 0.
     */
    public function isCreator() {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "SELECT *
            FROM company
            WHERE id = :id AND creator_uid = :creator_uid");

        try {
            // supply the replacement parameters to the query
            $stmt->execute(['id'=> $this->id,'creator_uid'=>$this->creator_uid]);
            return $stmt->fetch(); // returns the company record if it exists, false otherwise
        }
        catch (Exception $e) { return 0; }
    }

    /**
     * Creates a record in the DB for the current user following a company matching the current object status.
     *
     * @return int The number of affected rows. Expected to be 1.
     */
    public function followCompany() {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "INSERT INTO company_follower(cid, uid) 
                  VALUES (:cid, :uid)");

        // supply the replacement parameters to the query
        $stmt->execute(['cid'=>$this->id, 'uid'=>$_SESSION['user_id']]);
        return $stmt->rowCount(); // return the number of affected rows (should be 1)
    }

    /**
     * Destroys the record in the DB for the current member who is following a company matching the object status.
     *
     * @return int The number of affected rows. Expected to be 1.
     */
    public function unfollowCompany() {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "DELETE FROM company_follower
                  WHERE (cid = :cid AND uid = :uid)");

        // supply the replacement parameters to the query
        $stmt->execute(['cid'=>$this->id, 'uid'=>$_SESSION['user_id']]);
        return $stmt->rowCount(); // return the number of affected rows (should be 1)
    }


}

?>

<?php

class Upload extends Model {
    public $id;
    public $uid;
    public $file_name;
    public $file;

    /**
     * Uploads resume to database
     *
     * @return id of the resume that was just uploaded.
     */
    public function uploadResume() {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare("INSERT INTO resume (uid, file_name, resume) VALUES (:uid, :file_name, :resume);");
        $stmt->execute(['uid'=>$this->uid, 'file_name'=>$this->file_name, 'resume'=>$this->file]); // execute the query

        $stmt = $this->_connection->prepare("SELECT id FROM resume ORDER BY id DESC LIMIT 1;");
        $stmt->execute();

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $data["0"]["id"]; // returns the id
    }

    /**
     * Uploads cover letter to database
     *
     * @return id of the cover letter that was just uploaded.
     */
    public function uploadCLetter() {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare("INSERT INTO cletter (uid, file_name, cletter) VALUES (:uid, :file_name, :cletter);");
        $stmt->execute(['uid'=>$this->uid, 'file_name'=>$this->file_name, 'cletter'=>$this->file]); // execute the query

        $stmt = $this->_connection->prepare("SELECT id FROM cletter ORDER BY id DESC LIMIT 1;");
        $stmt->execute();

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $data["0"]["id"]; // returns the id
    }

    /**
     * Gets all the Resume rows in the db for a specific user
     *
     * @return objects of the resume type.
     */
    public function getUsersResume() {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare("SELECT * FROM resume WHERE uid = :uid");
        $stmt->execute(['uid'=>$this->uid]); // execute the query

        $stmt->setFetchMode(PDO::FETCH_CLASS, "Upload");
        return $stmt->fetchAll();
    }

    /**
     * Gets all the Cletter rows in the db for a specific user
     *
     * @return objects of the cleter type.
     */
    public function getUsersCLetter() {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare("SELECT * FROM cletter WHERE uid = :uid");
        $stmt->execute(['uid'=>$this->uid]); // execute the query

        $stmt->setFetchMode(PDO::FETCH_CLASS, "Upload");
        return $stmt->fetchAll();
    }
}

?>

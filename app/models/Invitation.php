<?php

class Invitation extends Model {
    public $master; // invitor
    public $slave; // invitee

    public function create() {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "INSERT INTO invitation(master, slave) 
                  VALUES (:master, :slave)"
        );

        // supply the replacement parameters to the query
        $stmt->execute(['master'=>$_SESSION['user_id'], 'slave'=>$this->slave]);
        return $stmt->rowCount(); // execute the query and return the number of affected rows (should be 1)
    }

    public function destroy() {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "DELETE FROM invitation 
             WHERE master=:master AND slave=:slave"
        );

        // supply the replacement parameters to the query
        $stmt->execute(['master'=>$this->master, 'slave'=>$_SESSION['user_id']]);
        return $stmt->rowCount(); // execute the query and return the number of affected rows (should be 1)
    }

    public function getAllInvitationsForCurrentUser() {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "SELECT *
             FROM invitation
             WHERE slave=:id"
        );

        $stmt->execute(['id'=>$_SESSION['user_id']]); // supply the replacement parameters to the query
        $stmt->setFetchMode(PDO::FETCH_CLASS, "Invitation"); // set the retrieval to match an object of type Connection
        return $stmt->fetchAll(); // execute the query and return the result
    }

    public function getAllInvitedProfiles() {
        require_once 'app/models/Profile.php'; // load the Profile object model
        $profile = new Profile(); // instantiate a profile object
        $invitees = $this->getAllInvitationsForCurrentUser();
        $connectedProfiles = [];

        foreach ($invitees as $invitee) {
            $profile->id = $invitee->master;
            array_push($connectedProfiles, $profile->getProfile());
        }

        return $connectedProfiles;
    }
}

?>
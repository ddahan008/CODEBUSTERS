<?php

class Connection extends Model {
    public $master; // me
    public $slave; // users connected to me

    /**
     * Fetches all the profiles from the DB. For profiles who are connected to the current user,
     * the system adds a boolean field to the appropriate profile element.
     *
     * @return array Array of all the profiles in the system, including connection status to the current user.
     */
    public function getAllProfilesWithConnectionStatus() {
        require_once 'app/models/Profile.php'; // load the Profile object model
        $profile = new Profile(); // instantiate a profile object
        $allProfiles = $profile->getAllProfiles(); // retrieve all the profiles from the DB

        // for every $i, from 0 to the number of profiles,
        for ($i = 0; $i < sizeof($allProfiles); $i++) {
            $cProf = $allProfiles[$i]; // set the current profile
            if ($this->isConnected($cProf->id)) { // check if the profile is connected to the current user
                $cProf->isConnected = true; // set the profile connected field for the connected profile
            }
        }

        return $allProfiles; // return array of all the profiles, with connection status where applicable
    }

    /**
     * Fetches all the profiles that are connected to the current user.
     *
     * @return array Array of all the profiles connected to the current user.
     */
    public function getConnectedProfiles() {
        require_once 'app/models/Profile.php'; // load the Profile object model
        $profile = new Profile(); // instantiate a profile object
        $allProfiles = $profile->getAllProfiles(); // call the method to retrieve all the profiles from the DB
        $connectedProfiles = []; // declare a resulting array to store all the connected profiles

        foreach ($allProfiles as $cProf) { // for each profile in the profiles array
            if ($this->isConnected($cProf->id)) { // if the current profile is connected to the current user
                array_push($connectedProfiles, $cProf); // add the current profile to the result connection array
            }
        }

        // return the array of connected profiles
        return $connectedProfiles;
    }


    /**
     * Checks whether or not the current user is connected with the user having the passed user_ID.
     *
     * @param $sid int The user ID for the user to check connection status.
     *
     * @return mixed Returns the record if it exists, or false otherwise.
     */
    public function isConnected($sid) {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "SELECT *
             FROM connection
             WHERE master=:id AND slave=:sid"
        );

        $stmt->execute(['id'=>$_SESSION['user_id'], 'sid'=>$sid]); // supply the replacement parameters to the query
        $stmt->setFetchMode(PDO::FETCH_CLASS, "Connection"); // set the retrieval to match an object of type Connection
        return $stmt->fetch(); // execute the query and return the result
    }


    /**
     * Creates a connection record in the DB based on the current object status.
     *
     * @return int Number of rows affected. Expected to be 1.
     */
    public function create() {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "INSERT INTO connection(master, slave) 
                  VALUES (:master, :slave)"
        );

        // supply the replacement parameters to the query
        $stmt->execute(['master'=>$_SESSION['user_id'], 'slave'=>$this->slave]);
        return $stmt->rowCount(); // execute the query and return the number of affected rows (should be 1)
    }


    /**
     * Destroys a connection record in the DB based on the current object status.
     *
     * @return int Number of rows affected. Expected to be 1.
     */
    public function remove() {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "DELETE FROM connection 
             WHERE master=:master AND slave=:slave"
        );

        // supply the replacement parameters to the query
        $stmt->execute(['master'=>$_SESSION['user_id'], 'slave'=>$this->slave]);
        return $stmt->rowCount(); // execute the query and return the number of affected rows (should be 1)
    }
}


?>

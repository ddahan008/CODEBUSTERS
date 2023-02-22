<?php

class Event extends Model {
    public $id;
    public $name;
    public $descr;
    public $date;
    public $creator_uid;

    /**
     * Retrieves all the events from the DB.
     *
     * @return array|false Array containing all events in the DB, or false if there are no events.
     */
    public function getAllEvents() {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "SELECT * 
               FROM events");

        $stmt->execute(); // execute the query
        $stmt->setFetchMode(PDO::FETCH_CLASS, "Event"); // set the retrieval to match an object of type Event
        return $stmt->fetchAll(); // fetch all the resulting records and return them as Event objects
    }

    /**
     * Adds an event to the DB based on the current object status.
     *
     * @return int Number of affected rows. Expected to be 1.
     */
    public function addEvent() {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "INSERT INTO events(name, descr, date, creator_uid) 
                  VALUES (:name, :descr, :date, :creator_uid)");

        // supply the replacement parameters to the query
        $stmt->execute(['name'=>$this->name, 'descr'=>$this->descr, 'date'=>$this->date, 'creator_uid'=>$this->creator_uid]);
        return $stmt->rowCount(); // return the number of affected rows (should be 1)
    }

    /**
     * Deletes an event record from the DB based on the current object status.
     *
     * @return int Number of affected rows. Expected to be 1.
     */
    public function deleteEvent() {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "DELETE FROM events WHERE id = :id AND creator_uid = :creator_uid");

        // supply the replacement parameters to the query
        $stmt->execute(['id'=>$this->id, 'creator_uid'=>$this->creator_uid]);
        return $stmt->rowCount(); // return the number of affected rows (should be 1)
    }

    /**
     * Checks whether or not a subscription record matching the current object status exists in the DB.
     *
     * @return int|mixed If the user is subscribed to the event, return the record. Otherwise return 0.
     */
    public function isSubscribed() {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "SELECT *
            FROM event_mem
            WHERE eid = :eid AND uid = :uid");

        try {
            // supply the replacement parameters to the query
            $stmt->execute(['eid'=> $this->id,'uid'=> $_SESSION['user_id']]);
            return $stmt->fetch(); // returns the subscription record if it exists, false otherwise
        }
        catch (Exception $e) { return 0; }
    }

    /**
     * Checks whether or not the event matching the current object status was created by the current user.
     *
     * @return int|mixed If the current user created the event, return the event. Otherwise, return 0.
     */
    public function isCreator() {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "SELECT *
            FROM events
            WHERE id = :id AND creator_uid = :creator_uid");

        try {
            // supply the replacement parameters to the query
            $stmt->execute(['id'=> $this->id,'creator_uid'=>$this->creator_uid]);
            return $stmt->fetch(); // return the event record if it exists, or false otherwise
        }
        catch (Exception $e) { return 0; }
    }

    /**
     * Creates a record in the DB for the current user joining an event matching the current object status.
     *
     * @return int The number of affected rows. Expected to be 1.
     */
    public function joinEvent() {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "INSERT INTO event_mem(eid, uid) 
                  VALUES (:eid, :uid)");

        // supply the replacement parameters to the query
        $stmt->execute(['eid'=>$this->id, 'uid'=>$_SESSION['user_id']]);
        return $stmt->rowCount(); // return the number of affected rows (should be 1)
    }

    /**
     * Destroys the record in the DB for the current member being registered for an event matching the object status.
     *
     * @return int The number of affected rows. Expected to be 1.
     */
    public function leaveEvent() {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "DELETE FROM event_mem
                  WHERE (eid = :eid AND uid = :uid)");

        // supply the replacement parameters to the query
        $stmt->execute(['eid'=>$this->id, 'uid'=>$_SESSION['user_id']]);
        return $stmt->rowCount(); // return the number of affected rows (should be 1)
    }
}

?>

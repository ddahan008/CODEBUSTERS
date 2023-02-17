<?php

class Event extends Model {
    public $id;
    public $name;
    public $descr;
    public $date;

    public function getAllEvents() {
        $stmt = $this->_connection->prepare(
            "SELECT * 
               FROM events");

        $stmt->execute([]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "Event");
        return $stmt->fetchAll();
    }

    public function addEvent() {
        $stmt = $this->_connection->prepare(
            "INSERT INTO events(name, descr, date) 
                  VALUES (:name, :descr, :date)");

        $stmt->execute(['name'=>$this->name, 'descr'=>$this->descr, 'date'=>$this->date]);
        return $stmt->rowCount();
    }

    public function isSubscribed() {
        $stmt = $this->_connection->prepare(
            "SELECT *
            FROM event_mem
            WHERE eid = :eid AND uid = :uid");

        try {
            $stmt->execute(['eid'=> $this->id,'uid'=> $_SESSION['user_id']]);
            return $stmt->fetch();
        }
        catch (Exception $e) { return 0; }
    }

    public function joinEvent() {
        $stmt = $this->_connection->prepare(
            "INSERT INTO event_mem(eid, uid) 
                  VALUES (:eid, :uid)");

        $stmt->execute(['eid'=>$this->id, 'uid'=>$_SESSION['user_id']]);
        return $stmt->rowCount();
    }

    public function leaveEvent() {
        $stmt = $this->_connection->prepare(
            "DELETE FROM event_mem
                  WHERE (eid = :eid AND uid = :uid)");

        $stmt->execute(['eid'=>$this->id, 'uid'=>$_SESSION['user_id']]);
        return $stmt->rowCount();
    }
}

?>

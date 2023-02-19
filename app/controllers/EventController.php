<?php

class EventController extends Controller {
    public function index() {
        $event = $this->model('Event');
        $events = $event->getAllEvents();
        $this->view('Event/Index', $events);
    }

    public function add() {
        if(isset($_POST['action'])) {
            $event = $this->model('Event');
            $event->name = $_POST['name'];
            $event->descr = $_POST['descr'];
            $date = date_create($_POST['date']);
            $event->date = date_format($date, "Y/m/d H:i:s");
            $event->creator_uid = $_SESSION['user_id'];
            $event->addEvent();
            header("Location: /Event");
        }
        $this->view('Event/AddEvent');
    }

    public function delete($eid) {
        $event = $this->model('Event');
        $event->id = $eid;
        $event->creator_uid = $_SESSION['user_id'];
        $event->deleteEvent();
        $this->index();
    }

    public function amSubscribed($eid) {
        $event = $this->model('Event');
        $event->id = $eid;
        return is_array($event->isSubscribed());
    }

    public function amCreator($eid) {
        $event = $this->model('Event');
        $event->id = $eid;
        $event->creator_uid = $_SESSION['user_id'];
        return is_array($event->isCreator());
    }

    public function join($eid) {
        $event = $this->model('Event');
        $event->id = $eid;
        $event->joinEvent();
        $this->index();
    }

    public function leave($eid) {
        $event = $this->model('Event');
        $event->id = $eid;
        $event->leaveEvent();
        $this->index();
    }
}

?>
<?php

class EventController extends Controller {

    /**
     * Main landing page for the Events section.
     *
     * Retrieves a list of all the events and loads the index view with the proper data.
     */
    public function index() {
        $event = $this->model('Event'); // get a reference to the Event object model
        $events = $event->getAllEvents(); // call the method to get all the events from the DB
        $this->view('Event/Index', $events); // load the index view with the passed event data
    }

    /**
     * Adds an event to the system.
     */
    public function add() {
        if(isset($_POST['action'])) { // if the form has been posted
            $event = $this->model('Event'); // get a reference to the event object model

            // set the appropriate fields
            $event->name = $_POST['name'];
            $event->descr = $_POST['descr'];
            $date = date_create($_POST['date']);
            $event->date = date_format($date, "Y/m/d H:i:s");
            $event->creator_uid = $_SESSION['user_id'];

            $event->addEvent(); // call the method to add the event to the DB
            header("Location: /Event"); // redirect the user to the default Event page
        }
        $this->view('Event/AddEvent'); // load the addEvent form view
    }

    /**
     * Removes an event from the system.
     *
     * @param $eid int The event ID of the event to remove.
     */
    public function delete($eid) {
        $event = $this->model('Event'); // get a reference to the event Object model
        $event->id = $eid; // set the id field
        $event->creator_uid = $_SESSION['user_id']; // set the creator field
        $event->deleteEvent(); // call the method to delete the event from the DB
        $this->index(); // load the index view
    }

    /**
     * Checks whether or not the current user is subscribed to the event with the given ID.
     *
     * @param $eid int The event ID.
     *
     * @return bool True if the current user is subscribed to the event, false otherwise.
     */
    public function amSubscribed($eid) {
        $event = $this->model('Event'); // get a reference to the event object model
        $event->id = $eid; // set the event ID field
        /* call the method to check if the subscription record exists in the DB
         the output of the method call is passed to a boolean expression method to confirm that at least one record
         was returned. */
        return is_array($event->isSubscribed());
    }

    /**
     * Checks whether or not the current user is the creator of the event with the given ID.
     *
     * @param $eid int The ID of the event to verify.
     *
     * @return bool True if the current user is the creator of the event, false otherwise.
     */
    public function amCreator($eid) {
        $event = $this->model('Event'); // get a reference to the Event object model
        $event->id = $eid; // set the event ID field.
        $event->creator_uid = $_SESSION['user_id']; // set the creator field.
        /* Call the method to check if the event creator is listed as the current user in the DB record.
         The output of the method call is passed to a boolean expression method to confirm that at least one record
         was returned. */
        return is_array($event->isCreator());
    }

    /**
     * Allows the current user to join an event with the given event ID.
     *
     * @param $eid int The event ID to join.
     */
    public function join($eid) {
        $event = $this->model('Event'); // get a reference to the event object model
        $event->id = $eid; // set the event ID field
        $event->joinEvent(); // call the method to create the record in the DB
        $this->index(); // load the event index view
    }

    /**
     * Allows the current user to leave an event with the given ID.
     *
     * @param $eid int The ID of the event to leave.
     */
    public function leave($eid) {
        $event = $this->model('Event'); // get a reference to the Event object model
        $event->id = $eid; // set the event ID field
        $event->leaveEvent(); // call the method to destroy the record in the DB
        $this->index(); // load the index view
    }
}

?>
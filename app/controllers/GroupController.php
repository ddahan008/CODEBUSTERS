<?php

class GroupController extends Controller {

    /**
     * Main landing page for the Group section of the system.
     *
     * Retrieves all the groups and loads them into the Index view.
     */
    public function index() {
        $group = $this->model('Group'); // get a reference to the group object model
        $groups = $group->getAllGroups(); // call the method to retrieve all the groups from the DB
        $this->view('Group/Index', $groups); // load the group index view with the passed data
    }

    /**
     * Allows users to add groups to the system through the AddGroup form view.
     *
     * Manages the form actions.
     */
    public function add() {
        if(isset($_POST['action'])) { // if the form was posted
            $group = $this->model('Group'); // get a reference to the Group object model
            // set the appropriate fields
            $group->name = $_POST['name'];
            $group->descr = $_POST['descr'];
            $group->creator_uid = $_SESSION['user_id'];

            $group->addGroup(); // call the method to create the group record in the DB
            header("Location: /Group"); // redirect the user to the Group Index page
        }
        $this->view('Group/AddGroup'); // load the AddGroup form view
    }

    /**
     * Enables the functionality to delete a group from the system based on the passed ID.
     *
     * @param $gid int The ID of the group to delete.
     */
    public function delete($gid) {
        $group = $this->model('Group'); // get a reference to the group object model
        $group->id = $gid; // set the gid field
        $group->creator_uid = $_SESSION['user_id']; // set the creator field
        $group->deleteGroup(); // call the method to delete the group record from the DB
        $this->index(); // load the index view
    }

    /**
     * Checks whether or not the current user is subscribed to the group with given ID.
     *
     * @param $gid int The ID of the group to verify membership.
     *
     * @return bool True if the current user is subscribed to the group, false otherwise.
     */
    public function amSubscribed($gid) {
        $group = $this->model('Group'); // get  a reference to the group object model
        $group->id = $gid; // set the group id field
        /* call the method to check if the subscription record exists in the DB
         the output of the method call is passed to a boolean expression method to confirm that at least one record
         was returned. */
        return is_array($group->isSubscribed());
    }

    /**
     * Checks whether or not the current user is the creator of the group with the given ID
     *
     * @param $gid int The ID of the group to verify creator status.
     *
     * @return bool True if the current user created the group, false otherwise.
     */
    public function amCreator($gid) {
        $group = $this->model('Group'); // get a reference to the Group object model
        $group->id = $gid; // set the group ID field
        $group->creator_uid = $_SESSION['user_id']; // set the creator field
        /* call the method to check if the DB record states that the current user is the creator.
         The output of the method call is passed to a boolean expression method to confirm that at least one record
         was returned. */
        return is_array($group->isCreator());
    }

    /**
     * Enables the current to join a group with the given ID.
     *
     * @param $gid int The ID of the group to join.
     */
    public function join($gid) {
        $group = $this->model('Group'); // get a reference to the group object model
        $group->id = $gid; // set the group id field
        $group->joinGroup(); // call the method to join the user to the group in the DB
        $this->index(); // load the index view
    }

    /**
     * Enables the current user to leave the group with the given ID.
     *
     * @param $gid int The ID of the group to leave.
     */
    public function leave($gid) {
        $group = $this->model('Group'); // get a reference to the group object model
        $group->id = $gid; // set the group ID field
        $group->leaveGroup(); // call the method to destroy the record in the DB
        $this->index(); // load the index view
    }
}

?>
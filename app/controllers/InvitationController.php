<?php

class InvitationController extends Controller {

    public function index() {
        header("Location: /");
    }

    public function create($sid) {
        $invitation = $this->model('Invitation'); // get a reference to the Connection object model
        $invitation->slave = $sid; // set the slave field to the id of the user to connect
        $invitation->create(); // call the method to create the connection in the DB
        $this->index(); // load the index view
    }

    public function accept($sid) {
        $this->destroy($sid);
        header("Location: /Connection/Create/$sid");
    }

    public function reject($sid) {
        $this->destroy($sid);
        header("Location: /Connection");
    }

    private function destroy($sid) {
        $invitation = $this->model('Invitation');
        $invitation->master = $sid;
        $invitation->destroy();
    }

}

?>
<?php

class NotificationController extends Controller {

    /**
     * Main landing page for the Notifications section of the system.
     *
     * Loads the notification view.
     */
    public function index() {
        if(isset($_SESSION['user_id'])) { // if the user is signed in
            $this->view('Notification/index'); // load the notifications view
        } else { // otherwise
            $this->view('Home/index'); // load the homepage view
        }
    }
}

?>

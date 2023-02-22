<?php

class NetworkController extends Controller {

    /**
     * Main landing page for the Network section of the system.
     *
     * Loads all of the profiles in the system, checks if they are connected to the current user, then prepares the
     * data element. The element is then passed to the Network index view.
     */
    public function index() {
        // user signed in
        if (isset($_SESSION['user_id'])) {
            $connection = $this->model('Connection'); // get a reference to the Connection object model
            /* call the method to load all the profiles in the system, including their connection status to the
               current user */
            $data = $connection->getAllProfilesWithConnectionStatus();
            // load the index view with the correct data
            $this->view('Network/index', $data);
        } else {
            $this->view('Home/Index');
        }
    }
}

?>

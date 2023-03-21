<?php

class ExploreController extends Controller {

    /**
     * Main landing page for the Network section of the system.
     *
     * Loads all of the profiles in the system, checks if they are connected to the current user.
     */
    public function index() {
        // user signed in
        if (isset($_SESSION['user_id'])) {
            // load the index view with the correct data
            $this->view('Explore/index');
        } else {
            $this->view('Home/Index');
        }
    }
}

?>

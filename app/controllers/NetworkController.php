<?php

class NetworkController extends Controller {

    public function index() {

        if (isset($_SESSION['user_id'])) {
            // user signed in
            $this->view('Network/index');
        } else {
            $this->view('Home/Index');
        }
    }
}

?>
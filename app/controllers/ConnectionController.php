<?php

class ConnectionController extends Controller {
    public function index() {

        if (isset($_SESSION['user_id'])) {
            // user signed in
            $this->view('Connection/index');
        } else {
            $this->view('Home/Index');
        }
    }
}

?>
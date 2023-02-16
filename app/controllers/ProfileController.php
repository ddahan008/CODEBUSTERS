<?php

class ProfileController extends Controller {

    public function index() {

        if (isset($_SESSION['user_id'])) {
            // user signed in
            $this->view('Profile/index');
        } else {
            $this->view('Home/Index');
        }
    }

    public function edit() {
        $this->view('Profile/Edit');
    }
}

?>

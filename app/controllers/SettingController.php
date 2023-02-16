<?php

class SettingController extends Controller {

    public function index() {

        if (isset($_SESSION['user_id'])) {
            // user signed in
            $this->view('Setting/index');
        } else {
            $this->view('Home/Index');
        }
    }
}

?>

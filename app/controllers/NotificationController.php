<?php

class NotificationController extends Controller {

    public function index() {
        if(isset($_SESSION['user_id'])) {
            $this->view('Notification/index');
        }else {
            $this->view('Home/index');
        }
    }
}

?>

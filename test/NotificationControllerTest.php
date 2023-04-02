<?php

use PHPUnit\Framework\TestCase;

include_once "app/core/Model.php";
include_once "app/core/Controller.php";
include_once "app/controllers/NotificationController.php";

/* ********************* SETUP ********************* */
$_SESSION['user_id'] = 1;
/* ********************* SETUP ********************* */

class NotificationControllerTest extends TestCase {

    public function testIndex() {

        $_SESSION['user_id'] = 1;
        $test = new NotificationController();
        $test->index();

        unset($_SESSION['user_id']);

        $test->index();

        $_SESSION['user_id'] = 1;

        $this->assertTrue(true);
    }

    public function testClearAllChatMessages() {
        $test = new NotificationController();
        $test->clearAllChatMessages();

        $this->assertTrue(true);
    }

    public function testClearAllJobMessages() {
        $test = new NotificationController();
        $test->clearAllJobMessages();

        $this->assertTrue(true);
    }

}

?>
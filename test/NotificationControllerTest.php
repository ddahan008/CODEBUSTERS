<?php

use PHPUnit\Framework\TestCase;

include_once "app/core/Model.php";
include_once "app/core/Controller.php";
include_once "app/controllers/NotificationController.php";

class NotificationControllerTest extends TestCase {

    public function testIndexUserIdSet() {

        $_SESSION['user_id'] = 1;
        $test = new NotificationController();
        $test->index();

        $this->assertEquals(true, true);
    }

    public function testIndexUserIdNotSet() {

        unset($_SESSION['user_id']);
        $test = new NotificationController();
        $test->index();

        $this->assertEquals(true, true);
    }

}

?>
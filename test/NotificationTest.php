<?php

use PHPUnit\Framework\TestCase;

include_once "app/core/Model.php";
include_once "app/models/Notification.php";

/* ********************* SETUP ********************* */
$_SESSION["user_id"] = 1;
CONST _ZERO = 0;
/* ********************* SETUP ********************* */

class NotificationTest extends TestCase {

    public function testGetAllNotificationsForUserID() {
        $test = new Notification();
        $result = $test->getAllNotificationsForUserID();

        $this->assertEquals(true, is_array($result));
    }

    public function testDestroyAllNotificationsForUserID() {
        $test = new Notification();
        $result = $test->destroyAllNotificationsForUserID();

        $this->assertTrue(true);
    }

    public function testDestroy() {
        $test = new Notification();
        $test->id = _ZERO;
        $test->destroy();

        $this->assertTrue(true);
    }
}

?>
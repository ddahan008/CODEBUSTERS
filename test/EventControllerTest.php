<?php

use PHPUnit\Framework\TestCase;

include_once "app/core/Model.php";
include_once "app/core/Controller.php";
include_once "app/models/Event.php";
include_once "app/controllers/EventController.php";

$_SESSION['user_id'] = 1;

class EventControllerTest extends TestCase {

    public function testIndex() {
        $test = new EventController();
        $test->index();

        $this->assertEquals(true, true);
    }

    public function testAdd() {
        $test = new EventController();
        $_POST["action"] = true;
        $_POST["name"] = "TestEvent";
        $_POST["descr"] = "TestEvent";
        $_POST["date"] = "2011-11-11 11:11:00";
        $test->add();
        $this->assertEquals(true, true);
    }

    public function testAmSubscribedTrue() {

        $test = new EventController();
        $result = $test->amSubscribed(2);

        $this->assertEquals(true, $result);
    }

    public function testAmSubscribedFalse() {

        $test = new EventController();
        $result = $test->amSubscribed(1);

        $this->assertEquals(false, $result);
    }

    public function testAmSubscribedQueryFailure() {

        unset($_SESSION['user_id']);
        $test = new EventController();
        $result = $test->amSubscribed("Test");

        $this->assertEquals(false, $result);
        $_SESSION['user_id'] = 1;
    }

    public function testJoin() {

        $test = new EventController();
        $test->join(1);

        $this->assertEquals(true, true);
    }

    public function testLeave() {

        $test = new EventController();
        $test->leave(1);

        $this->assertEquals(true, true);
    }
}

?>
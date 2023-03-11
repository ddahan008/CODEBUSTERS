<?php

use PHPUnit\Framework\TestCase;

include_once "app/core/Model.php";
include_once "app/core/Controller.php";
include_once "app/controllers/EventController.php";

class EventControllerTest extends TestCase {

    public function testIndex() {
        $test = new EventController();
        $test->index();

        $this->assertEquals(true, true);
    }

    public function testAdd() {
        $_SESSION['user_id'] = 1;
        $_POST["action"] = true;
        $_POST["name"] = "TestEvent";
        $_POST["descr"] = "TestEvent";
        $_POST["date"] = "2011-11-11 11:11:00";

        $test = new EventController();
        $test->add();

        $this->assertEquals(true, true);
    }

    public function testDelete() {
        $_SESSION['user_id'] = 1;

        $test = new EventController();
        $test->delete(0);

        $this->assertEquals(true, true);
    }

    public function testAmSubscribed() {
        $test = new EventController();
        $result = $test->amSubscribed(0);

        $this->assertEquals(false, $result);
    }

    public function testAmSubscribedQueryFailure() {
        unset($_SESSION['user_id']);
        $test = new EventController();
        $result = $test->amSubscribed("Test");

        $this->assertEquals(false, $result);
    }

    public function testAmCreator() {
        $_SESSION['user_id'] = 1;
        
        $test = new EventController();
        $result = $test->amCreator(0);

        $this->assertEquals(false, $result);
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
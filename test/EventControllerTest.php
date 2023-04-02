<?php

use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertTrue;

include_once "app/core/Model.php";
include_once "app/core/Controller.php";
include_once "app/controllers/EventController.php";

/* ********************* SETUP ********************* */
$_SESSION['user_id'] = 1;
$_POST["action"] = true;
$_POST["name"] = "Test Event";
$_POST["descr"] = "Test Event Description";
$_POST["date"] = "2011-11-11 11:11:00";
CONST _ZERO = 0;
/* ********************* SETUP ********************* */

class EventControllerTest extends TestCase {

    public function testIndex() {
        $test = new EventController();
        $test->index();

        $this->assertTrue(true);
    }

    public function testAdd() {
        $test = new EventController();
        $test->add();

        $this->assertTrue(true);
    }

    public function testDelete() {
        $test = new EventController();
        $test->delete(_ZERO);

        $this->assertTrue(true);
    }

    public function testAmSubscribed() {
        $test = new EventController();
        $result = $test->amSubscribed(_ZERO);

        $this->assertEquals(false, $result);

        unset($_SESSION['user_id']);

        $result = $test->amSubscribed("Test");

        $_SESSION['user_id'] = 1;

        $this->assertEquals(false, $result);
    }

    public function testAmCreator() {
        $test = new EventController();
        $result = $test->amCreator(_ZERO);

        $this->assertEquals(false, $result);
    }

    public function testJoin() {

        $test = new EventController();
        $test->join(1);

        $this->assertTrue(true);
    }

    public function testLeave() {

        $test = new EventController();
        $test->leave(1);

        $this->assertTrue(true);
    }
}

?>
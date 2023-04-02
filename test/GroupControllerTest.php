<?php

use PHPUnit\Framework\TestCase;

include_once "app/core/Model.php";
include_once "app/core/Controller.php";
include_once "app/controllers/GroupController.php";

/* ********************* SETUP ********************* */
$_POST["action"] = true;
$_POST["name"] = "Test Group";
$_POST["descr"] = "Test Group Description";
CONST _ZERO = 0;
/* ********************* SETUP ********************* */

class GroupControllerTest extends TestCase {

    public function testIndex() {
        $_SESSION["user_id"] = 1;
        $test = new GroupController();
        $test->index();

        $this->assertTrue(true);
    }

    public function testAdd() {
        $test = new GroupController();
        $test->add();

        $this->assertTrue(true);
    }

    public function testDelete() {
        $test = new GroupController();
        $test->delete(_ZERO);

        $this->assertTrue(true);
    }

    public function testAmSubscribed() {
        $test = new GroupController();
        $result = $test->amSubscribed(_ZERO);

        $this->assertEquals(false, $result);

        unset($_SESSION['user_id']);

        $test = new GroupController();
        $result = $test->amSubscribed(_ZERO);

        $_SESSION['user_id'] = 1;

        $this->assertEquals(false, $result);
    }

    public function testAmCreator() {
        $test = new GroupController();
        $result = $test->amCreator(_ZERO);

        $this->assertEquals(false, $result);
    }

    public function testJoin() {
        $test = new GroupController();
        $test->join(1);

        $this->assertTrue(true);
    }

    public function testLeave() {
        $_SESSION['user_id'] = 1;

        $test = new GroupController();
        $test->leave(1);

        $this->assertTrue(true);
    }
}

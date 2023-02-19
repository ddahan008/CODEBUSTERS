<?php

use PHPUnit\Framework\TestCase;

include_once "app/core/Model.php";
include_once "app/core/Controller.php";
include_once "app/models/Group.php";
include_once "app/controllers/GroupController.php";

$_SESSION['user_id'] = 1;

class GroupControllerTest extends TestCase {

    public function testIndex() {
        $test = new GroupController();
        $test->index();

        $this->assertEquals(true, true);
    }

    public function testAdd() {
        $test = new GroupController();
        $_POST["action"] = true;
        $_POST["name"] = "TestGroup";
        $_POST["descr"] = "TestGroup";
        $test->add();
        $this->assertEquals(true, true);
    }

    public function testAmSubscribedTrue() {

        $test = new GroupController();
        $result = $test->amSubscribed(2);

        $this->assertEquals(true, $result);
    }

    public function testAmSubscribedFalse() {

        $test = new GroupController();
        $result = $test->amSubscribed(1);

        $this->assertEquals(false, $result);
    }

    public function testAmSubscribedQueryFailure() {

        unset($_SESSION['user_id']);
        $test = new GroupController();
        $result = $test->amSubscribed(1);

        $this->assertEquals(false, $result);
        $_SESSION['user_id'] = 1;
    }

    public function testJoin() {

        $test = new GroupController();
        $test->join(1);

        $this->assertEquals(true, true);
    }

    public function testLeave() {

        $test = new GroupController();
        $test->leave(1);

        $this->assertEquals(true, true);
    }
}

?>
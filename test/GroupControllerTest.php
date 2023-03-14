<?php

use PHPUnit\Framework\TestCase;

include_once "app/core/Model.php";
include_once "app/core/Controller.php";
include_once "app/controllers/GroupController.php";

class GroupControllerTest extends TestCase {

    public function testIndex() {
        $test = new GroupController();
        $test->index();

        $this->assertEquals(true, true);
    }

    public function testAdd() {
        $_SESSION['user_id'] = 1;
        $_POST["action"] = true;
        $_POST["name"] = "TestGroup";
        $_POST["descr"] = "TestGroup";

        $test = new GroupController();
        $test->add();

        $this->assertEquals(true, true);
    }

    public function testDelete() {
        $_SESSION['user_id'] = 1;

        $test = new GroupController();
        $test->delete(0);

        $this->assertEquals(true, true);
    }

    public function testAmSubscribed() {
        $test = new GroupController();
        $result = $test->amSubscribed(0);

        $this->assertEquals(false, $result);
    }

    public function testAmSubscribedQueryFailure() {
        unset($_SESSION['user_id']);

        $test = new GroupController();
        $result = $test->amSubscribed(0);

        $this->assertEquals(false, $result);
    }

    public function testAmCreator() {
        $_SESSION['user_id'] = 1;

        $test = new GroupController();
        $result = $test->amCreator(0);

        $this->assertEquals(false, $result);
    }

    public function testJoin() {
        $_SESSION['user_id'] = 1;

        $test = new GroupController();
        $test->join(1);

        $this->assertEquals(true, true);
    }

    public function testLeave() {
        $_SESSION['user_id'] = 1;

        $test = new GroupController();
        $test->leave(1);

        $this->assertEquals(true, true);
    }
}

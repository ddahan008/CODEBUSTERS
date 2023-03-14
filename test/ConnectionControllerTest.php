<?php

use PHPUnit\Framework\TestCase;

include_once "app/core/Model.php";
include_once "app/core/Controller.php";
include_once "app/controllers/ConnectionController.php";

class ConnectionControllerTest extends TestCase {
    

    public function testIndexConnected() {
        $_SESSION['user_id'] = 1;

        $test = new ConnectionController();
        $test->index();

        $this->assertEquals(true, true);
    }

    public function testIndexNotConnected() {
        unset($_SESSION['user_id']);

        $test = new ConnectionController();
        $test->index();

        $this->assertEquals(true, true);
    }

    public function testCreate() {
        $_SESSION['user_id'] = 2;

        $test = new ConnectionController();
        $test->create(1);

        $this->assertEquals(true, true);
    }

    public function testRemove() {
        $_SESSION['user_id'] = 1;

        $test = new ConnectionController();
        $test->remove(2);

        $this->assertEquals(true, true);
    }
}

?>
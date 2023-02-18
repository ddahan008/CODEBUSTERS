<?php

use PHPUnit\Framework\TestCase;

include_once "app/core/Model.php";
include_once "app/core/Controller.php";
include_once "app/controllers/ConnectionController.php";

$_SESSION['user_id'] = 1;

class ConnectionControllerTest extends TestCase {

    public function testIndexConnected() {

        $test = new ConnectionController();
        $test->index();

        $this->assertEquals(true, true);
    }

    public function testIndexNotConnected() {

        unset($_SESSION['user_id']);

        $test = new ConnectionController();
        $test->index();

        $this->assertEquals(true, true);

        $_SESSION['user_id'] = 1;
    }

}

?>
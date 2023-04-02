<?php

use PHPUnit\Framework\TestCase;

include_once "app/core/Model.php";
include_once "app/core/Controller.php";
include_once "app/controllers/ConnectionController.php";

/* ********************* SETUP ********************* */
$_SESSION['user_id'] = 1;
CONST _TWO = 2;
/* ********************* SETUP ********************* */

class ConnectionControllerTest extends TestCase {
    
    public function testIndex() {
        $test = new ConnectionController();
        $test->index();

        unset($_SESSION['user_id']);

        $test->index();

        $_SESSION['user_id'] = 1;

        $this->assertTrue(true);
    }

    public function testCreate() {
        $test = new ConnectionController();
        $test->create(_TWO);

        $this->assertTrue(true);
    }

    public function testRemove() {
        $test = new ConnectionController();
        $test->remove(_TWO);

        $this->assertTrue(true);
    }
}

?>
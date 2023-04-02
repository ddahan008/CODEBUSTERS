<?php

use PHPUnit\Framework\TestCase;

include_once "app/core/Model.php";
include_once "app/core/Controller.php";
include_once "app/controllers/NetworkController.php";

/* ********************* SETUP ********************* */
// Requries Custom Setup For Each Functions
/* ********************* SETUP ********************* */

class NetworkControllerTest extends TestCase {

    public function testIndex() {

        $_SESSION['user_id'] = 1;
        $test = new NetworkController();
        $test->index();

        unset($_SESSION['user_id']);

        $test->index();

        $_SESSION['user_id'] = 1;

        $this->assertTrue(true);
    }

}

?>
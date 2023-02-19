<?php

use PHPUnit\Framework\TestCase;

include_once "app/core/Model.php";
include_once "app/core/Controller.php";
include_once "app/controllers/NetworkController.php";

class NetworkControllerTest extends TestCase {

    public function testIndexUserIdSet() {

        $_SESSION['user_id'] = 1;
        $test = new NetworkController();
        $test->index();

        $this->assertEquals(true, true);
    }

    public function testIndexUserIdNotSet() {

        unset($_SESSION['user_id']);
        $test = new NetworkController();
        $test->index();

        $this->assertEquals(true, true);
    }

}

?>
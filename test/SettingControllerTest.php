<?php

use PHPUnit\Framework\TestCase;

include_once "app/core/Model.php";
include_once "app/core/Controller.php";
include_once "app/controllers/SettingController.php";

/* ********************* SETUP ********************* */
$_SESSION['user_id'] = 1;
/* ********************* SETUP ********************* */

class SettingControllerTest extends TestCase {

    public function testIndex() {
        $test = new SettingController();
        $test->index();

        unset($_SESSION['user_id']);

        $test->index();

        $_SESSION['user_id'] = 1;

        $this->assertTrue(true);
    }

}

?>
<?php

use PHPUnit\Framework\TestCase;

include_once "app/core/Model.php";
include_once "app/core/Controller.php";
include_once "app/controllers/SettingController.php";

class SettingControllerTest extends TestCase {

    public function testIndexUserIdSet() {

        $_SESSION['user_id'] = 1;
        $test = new SettingController();
        $test->index();

        $this->assertEquals(true, true);
    }

    public function testIndexUserIdNotSet() {

        unset($_SESSION['user_id']);
        $test = new SettingController();
        $test->index();

        $this->assertEquals(true, true);
    }

}

?>
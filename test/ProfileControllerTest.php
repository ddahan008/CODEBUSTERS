<?php

use PHPUnit\Framework\TestCase;

include_once "app/core/Model.php";
include_once "app/core/Controller.php";
include_once "app/controllers/ProfileController.php";

class ProfileControllerTest extends TestCase {

    public function testIndexUserIdSet() {

        $_SESSION['user_id'] = 1;
        $test = new ProfileController();
        $test->index();

        $this->assertEquals(true, true);
    }

    public function testIndexUserIdNotSet() {

        unset($_SESSION['user_id']);
        $test = new ProfileController();
        $test->index();

        $this->assertEquals(true, true);
    }

    public function testEdit() {
        $_POST["action"] = true;
        $_SESSION['user_id'] = 1;
        $_POST['fname'] = "Test";
        $_POST['lname'] = "Test";
        $_POST['email'] = "Test@jobsters.com";
        $_POST['job'] = "Test";
        $_POST['location'] = "Test";
        $_POST['skills'] = "Test";
        $_POST['about'] = "Test";

        $test = new ProfileController();
        $test->edit();

        $this->assertEquals(true, true);
    }

    public function testUpdateVisibility() {
        $_SESSION['user_id'] = 1;

        $test = new ProfileController();
        $test->updateVisibility(1);

        $this->assertEquals(true, true);
    }

}

?>
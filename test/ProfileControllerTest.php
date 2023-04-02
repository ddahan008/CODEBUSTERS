<?php

use PHPUnit\Framework\TestCase;

include_once "app/core/Model.php";
include_once "app/core/Controller.php";
include_once "app/controllers/ProfileController.php";

/* ********************* SETUP ********************* */
$_SESSION['user_id'] = 1;
$_POST["action"] = true;
$_SESSION['user_id'] = 1;
$_POST['fname'] = "Test";
$_POST['lname'] = "Test";
$_POST['email'] = "Test@jobsters.com";
$_POST['job'] = "Test";
$_POST['location'] = "Test";
$_POST['skills'] = "Test";
$_POST['about'] = "Test";
CONST _ONE = 1;
/* ********************* SETUP ********************* */

class ProfileControllerTest extends TestCase {

    public function testIndex() {
        $test = new ProfileController();
        $test->index();

        unset($_SESSION['user_id']);

        $test->index();

        $_SESSION['user_id'] = 1;

        $this->assertTrue(true);
    }

    public function testEdit() {
        $test = new ProfileController();
        $test->edit();

        $this->assertTrue(true);
    }

    public function testUpdateVisibility() {
        $test = new ProfileController();
        $test->updateVisibility(_ONE);

        $this->assertTrue(true);
    }

}

?>
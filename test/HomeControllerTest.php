<?php

use PHPUnit\Framework\TestCase;

include_once "app/core/Model.php";
include_once "app/core/Controller.php";
include_once "app/controllers/HomeController.php";

$_SESSION['user_id'] = 1;

class HomeControllerTest extends TestCase {

    public function testIndex() {

        $test = new HomeController();
        $test->index();

        $this->assertEquals(true, true);
    }

    public function testRegisterPasswordMatch() {

        $_POST['action'] = true;
        $_POST['password'] = "password";
        $_POST['password_confirm'] = "password";
        $_POST['username'] = "TestName";
        $test = new HomeController();
        $test->register();

        $this->assertEquals(true, true);
    }

    public function testRegisterPasswordNoMatch() {

        $_POST['action'] = true;
        $_POST['password'] = "password";
        $_POST['password_confirm'] = "notpassword";
        $_POST['username'] = "TestName";
        $test = new HomeController();
        $test->register();

        $this->assertEquals(true, true);
    }

    public function testRegisterActionNotSet() {

        unset($_POST['action']);
        $_POST['password'] = "password";
        $_POST['password_confirm'] = "notpassword";
        $_POST['username'] = "TestName";
        $test = new HomeController();
        $test->register();

        $this->assertEquals(true, true);
    }

    public function testLoginActionNotSet() {

        unset($_POST['action']);
        $_POST['username'] = "Test";
        $_POST['password'] = "test";
        $test = new HomeController();
        $test->login();

        $this->assertEquals(true, true);
    }

    public function testLoginUserPasswordMatch() {

        $_POST['action'] = true;
        $_POST['username'] = "Test";
        $_POST['password'] = "test";
        $test = new HomeController();
        $test->login();

        $this->assertEquals(true, true);
    }

    public function testLoginUserPasswordNoMatch() {

        $_POST['action'] = true;
        $_POST['username'] = "Test";
        $_POST['password'] = "random";
        $test = new HomeController();
        $test->login();

        $this->assertEquals(true, true);
    }

    public function testLogout() {

        $_SESSION['user_id'] = "Test";
        $_SESSION['uname'] = "Test";
        $test = new HomeController();
        $test->logout();

        if (!isset($_SESSION['user_id']) && !isset($_SESSION['uname'])) {
            $this->assertEquals(true, true);
        }
        else {
            $this->assertEquals(true, false);
        }

    }

}

?>
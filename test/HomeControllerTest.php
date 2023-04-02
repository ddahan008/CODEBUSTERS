<?php

use PHPUnit\Framework\TestCase;

include_once "app/core/Model.php";
include_once "app/core/Controller.php";
include_once "app/controllers/HomeController.php";

/* ********************* SETUP ********************* */
// Requries Custom Setup For Each Functions
/* ********************* SETUP ********************* */

class HomeControllerTest extends TestCase {

    public function testIndex() {
        $test = new HomeController();
        $test->index();

        $this->assertTrue(true);
    }

    public function testRegisterPasswordMatch() {
        $_POST['action'] = true;
        $_POST['password'] = "password";
        $_POST['password_confirm'] = "password";
        $_POST['username'] = "TestName";
        $_POST['u_type'] = 1;
        $test = new HomeController();
        $test->register();

        $this->assertTrue(true);
    }

    public function testRegisterPasswordNoMatch() {
        $_POST['action'] = true;
        $_POST['password'] = "password";
        $_POST['password_confirm'] = "notpassword";
        $_POST['username'] = "TestName";
        $_POST['u_type'] = 1;
        $test = new HomeController();
        $test->register();

        $this->assertTrue(true);
    }

    public function testRegisterActionNotSet() {
        unset($_POST['action']);
        $_POST['password'] = "password";
        $_POST['password_confirm'] = "notpassword";
        $_POST['username'] = "TestName";
        $_POST['u_type'] = 1;
        $test = new HomeController();
        $test->register();

        $this->assertTrue(true);
    }

    public function testLoginActionNotSet() {
        unset($_POST['action']);
        $_POST['username'] = "TestName";
        $_POST['password'] = "password";
        $test = new HomeController();
        $test->login();

        $this->assertTrue(true);
    }

    public function testLoginUserPasswordMatch() {
        $_POST['action'] = true;
        $_POST['username'] = "TestName";
        $_POST['password'] = "password";
        $test = new HomeController();
        $test->login();

        $this->assertTrue(true);
    }

    public function testLoginUserPasswordNoMatch() {
        $_POST['action'] = true;
        $_POST['username'] = "TestName";
        $_POST['password'] = "random";
        $test = new HomeController();
        $test->login();

        $this->assertTrue(true);
    }

    public function testLogout() {
        $_SESSION['user_id'] = "Test";
        $_SESSION['uname'] = "Test";
        $test = new HomeController();
        $test->logout();

        if (!isset($_SESSION['user_id']) && !isset($_SESSION['uname'])) {
            $this->assertTrue(true);
        }
        else {
            $this->assertEquals(true, false);
        }
    }

    public function testDeleteUserByUname() {
        $test = new HomeController();
        $result = $test->deleteUserByUname("TestName");

        $this->assertEquals(true, $result);
    }

}

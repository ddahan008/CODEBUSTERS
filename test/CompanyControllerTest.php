<?php

use PHPUnit\Framework\TestCase;

include_once "app/core/Model.php";
include_once "app/core/Controller.php";
include_once "app/controllers/CompanyController.php";

/* ********************* SETUP ********************* */
$_SESSION['user_id'] = 1;
$_SESSION['u_type'] = 1;
$_POST["action"] = true;
$_POST['name'] = "Test Company";
$_POST['descr'] = "Test Company Description";
CONST _ZERO = 0;
CONST _ONE = 1;
/* ********************* SETUP ********************* */

class CompanyControllerTest extends TestCase {

    public function testIndex() {
        $test = new CompanyController();
        $test->index();

        unset($_SESSION['user_id']);

        $test->index();

        $_SESSION['user_id'] = 1;

        $this->assertTrue(true);
    }

    public function testAdd() {
        $test = new CompanyController();
        $test->add();

        $this->assertTrue(true);
    }

    public function testDelete() {
        $test = new CompanyController();
        $test->delete(_ZERO);

        $this->assertTrue(true);
    }

    public function testAmFollowing() {
        $test = new CompanyController();
        $result = $test->amFollowing(_ZERO);

        $this->assertEquals(false, $result);
    }

    public function testAmCreator() {
        $test = new CompanyController();
        $result = $test->amCreator(_ZERO);

        $this->assertEquals(false, $result);
    }

    public function testFollow() {
        $test = new CompanyController();
        $test->follow(_ONE);

        $this->assertTrue(true);
    }

    public function testUnFollow() {
        $test = new CompanyController();
        $test->Unfollow(_ONE);

        $this->assertTrue(true);
    }

}

?>
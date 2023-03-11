<?php

use PHPUnit\Framework\TestCase;

include_once "app/core/Model.php";
include_once "app/core/Controller.php";
include_once "app/controllers/CompanyController.php";

class CompanyControllerTest extends TestCase {

    public function testIndexConnected() {
        $_SESSION['user_id'] = 1;

        $test = new CompanyController();
        $test->index();

        $this->assertEquals(true, true);
    }

    public function testAdd() {
        $_POST["action"] = true;
        $_POST['name'] = "Test";
        $_POST['descr'] = "Test";
        $_SESSION['user_id'] = 1;

        $test = new CompanyController();
        $test->add();

        $this->assertEquals(true, true);
    }

    public function testDelete() {
        $_SESSION['user_id'] = 1;

        $test = new CompanyController();
        $test->delete(0);

        $this->assertEquals(true, true);
    }

    public function testAmFollowing() {
        $test = new CompanyController();
        $result = $test->amFollowing(0);

        $this->assertEquals(false, $result);
    }

    public function testAmCreator() {
        $_SESSION['user_id'] = 1;

        $test = new CompanyController();
        $result = $test->amCreator(0);

        $this->assertEquals(false, $result);
    }

    public function testFollow() {
        $test = new CompanyController();
        $test->follow(1);

        $this->assertEquals(true, true);
    }

    public function testUnFollow() {
        $test = new CompanyController();
        $test->Unfollow(1);

        $this->assertEquals(true, true);
    }

}

?>
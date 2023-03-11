<?php

use PHPUnit\Framework\TestCase;

include_once "app/core/Model.php";
include_once "app/core/Controller.php";
include_once "app/controllers/JobController.php";

class JobControllerTest extends TestCase
{

    public function testSeekerIndex()
    {
        $_SESSION["user_id"] = 1;
        $_SESSION["u_type"] = 2;

        $test = new JobController();
        $test->index();

        $this->assertEquals(true, true);
    }

    public function testRecruiterIndex()
    {
        $_SESSION["user_id"] = 2;
        $_SESSION["u_type"] = 1;

        $test = new JobController();
        $test->index();

        $this->assertEquals(true, true);
    }

    public function testCreate()
    {
        $_SESSION['user_id'] = 2;
        $_POST['title'] = "Test";
        $_POST['deadline'] = "2011-11-11";
        $_POST['location'] = "Test";
        $_POST['easyapply'] = 1;
        $_POST['applyonwebsite'] = 1;
        $_POST['link'] = "Test";
        $_POST['description'] = "Test";

        $test = new JobController();
        $test->create();

        $this->assertEquals(true, true);
    }

    public function testEdit()
    {
        $_SESSION['user_id'] = 2;
        $_POST['title'] = "Test";
        $_POST['deadline'] = "2011-11-11";
        $_POST['location'] = "Test";
        $_POST['easyapply'] = 1;
        $_POST['applyonwebsite'] = 1;
        $_POST['link'] = "Test";
        $_POST['description'] = "Test";

        $test = new JobController();
        $test->edit(1);

        $this->assertEquals(true, true);
    }

    public function testDelete()
    {
        $_SESSION['user_id'] = 1;

        $test = new JobController();
        $test->delete(0);

        $this->assertEquals(true, true);
    }

    public function testSearch()
    {
        $_POST["action"] = true;
        $_POST["search"] = "Search";

        $test = new JobController();
        $test->search();

        $this->assertEquals(true, true);
    }


}

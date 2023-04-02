<?php

use PHPUnit\Framework\TestCase;

include_once "app/core/Model.php";
include_once "app/core/Controller.php";
include_once "app/controllers/JobController.php";

/* ********************* SETUP ********************* */
CONST _SEEKERID = 1;
CONST _SEEKERTYPE = 2;
CONST _RECRUITERID = 2;
CONST _RECRUITERYPE = 1;
CONST _ZERO = 0;
CONST _ONE = 1;
$_POST['title'] = "Test";
$_POST['deadline'] = "2011-11-11";
$_POST['location'] = "Test";
$_POST['easy_apply'] = 1;
$_POST['apply_on_web'] = 1;
$_POST['link'] = "Test";
$_POST['description'] = "Test";
$_POST["action"] = true;
$_POST["search"] = "Search";
/* ********************* SETUP ********************* */

class JobControllerTest extends TestCase
{

    public function testSeekerIndex()
    {
        $_SESSION["user_id"] = _SEEKERID;
        $_SESSION["u_type"] = _SEEKERTYPE;

        $test = new JobController();
        $test->index();

        $this->assertTrue(true);
    }

    public function testRecruiterIndex()
    {
        $_SESSION["user_id"] = _RECRUITERID;
        $_SESSION["u_type"] = _RECRUITERYPE;

        $test = new JobController();
        $test->index();

        $this->assertTrue(true);
    }

    public function testCreate()
    {
        $_SESSION['user_id'] = _RECRUITERID;

        $test = new JobController();
        $test->create();

        $this->assertTrue(true);
    }

    public function testEdit()
    {
        $_SESSION['user_id'] = _RECRUITERID;

        $test = new JobController();
        $test->edit(_ONE);

        $this->assertTrue(true);
    }

    public function testDelete()
    {
        $_SESSION['user_id'] = _RECRUITERID;

        $test = new JobController();
        $test->delete(_ZERO);

        $this->assertTrue(true);
    }

    public function testSearch()
    {
        $test = new JobController();
        $test->search();

        $this->assertTrue(true);
    }

}

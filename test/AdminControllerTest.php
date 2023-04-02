<?php

use PHPUnit\Framework\TestCase;

include_once "app/core/Model.php";
include_once "app/core/Controller.php";
include_once "app/controllers/AdminController.php";

/* ********************* SETUP ********************* */
CONST _SID = 1;
$_SESSION['u_type'] = 3;
/* ********************* SETUP ********************* */

class AdminControllerTest extends TestCase {

    public function testIndex() {

        $test = new AdminController;
        $test->index();

        $this->assertTrue(true);
    }

    public function testHistory() {
        $test = new AdminController;
        $test->history(_SID);

        $this->assertTrue(true);
    }

}

?>
<?php

use PHPUnit\Framework\TestCase;

include_once "app/core/Model.php";
include_once "app/core/Controller.php";
include_once "app/controllers/InvitationController.php";
include_once "app/controllers/ConnectionController.php";

/* ********************* SETUP ********************* */
CONST _TWO = 2;
CONST _THREE = 3;
/* ********************* SETUP ********************* */

class InvitationControllerTest extends TestCase {

    public function testIndex() {
        $test = new InvitationController;
        $test->index();
        
        $this->assertTrue(true);
    }

    public function testCreate() {
        $_SESSION["user_id"] = 1;
        $test = new InvitationController;
        $test->create(_TWO);
        $test->create(_THREE);

        $this->assertTrue(true);
    }

    public function testAccept() {
        $test = new InvitationController;
        $test->accept(_TWO);

        $temp = new ConnectionController;
        $temp->remove(_TWO);

        $this->assertTrue(true);
    }
    
    public function testReject() {
        $test = new InvitationController;
        $test->reject(_THREE);
        
        $this->assertTrue(true);
    }

}

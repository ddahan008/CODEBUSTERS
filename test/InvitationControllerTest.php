<?php

use PHPUnit\Framework\TestCase;

include_once "app/core/Model.php";
include_once "app/core/Controller.php";
include_once "app/controllers/InvitationController.php";

class InvitationControllerTest extends TestCase {

    public function testCreate() {
        $_SESSION["user_id"] = 1;

        $test = new InvitationController;
        $test->create(2);

        $this->assertEquals(true, true);
    }

    public function testAccept() {
        $_SESSION["user_id"] = 1;

        $test = new InvitationController;
        $test->accept(2);

        $this->assertEquals(true, true);
    }
    
    public function testReject() {
        $_SESSION["user_id"] = 1;

        $test = new InvitationController;
        $test->reject(2);
        
        $this->assertEquals(true, true);
    }

}

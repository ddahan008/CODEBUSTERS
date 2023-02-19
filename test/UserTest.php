<?php

use PHPUnit\Framework\TestCase;

include_once "app/core/Model.php";
include_once "app/models/User.php";

class UserTest extends TestCase {

    public function testGetUsersByUname() {

        $test = new User();
        $result = $test->getUsersByUname("Test");

        $this->assertEquals(false, is_object($result));
    }

    public function testGetUserById() {

        $test = new User();
        $result = $test->getUserById(1);

        $this->assertEquals(true, is_object($result));
    }

    public function testGetUsernameById() {

        $test = new User();
        $result = $test->getUsernameById(1);

        $this->assertEquals("Test", $result);
    }

}

?>
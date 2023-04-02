<?php

use PHPUnit\Framework\TestCase;

include_once "app/core/Model.php";
include_once "app/models/User.php";

/* ********************* SETUP ********************* */
CONST _SEEKERID = 1;
/* ********************* SETUP ********************* */

class UserTest extends TestCase {

    public function testGetUsersByUname() {

        $test = new User();
        $result = $test->getUsersByUname("Seeker");

        $this->assertEquals(false, is_object($result));
    }

    public function testGetUserById() {

        $test = new User();
        $result = $test->getUserById(_SEEKERID);

        $this->assertEquals(true, is_object($result));
    }

    public function testGetUsernameById() {

        $test = new User();
        $result = $test->getUsernameById(_SEEKERID);

        $this->assertEquals("Seeker", $result);
    }

    public function testGetAllSeekers() {
        $test = new User();
        $result = $test->getAllSeekers();

        $this->assertEquals(true, is_array($result));
    }

}

?>
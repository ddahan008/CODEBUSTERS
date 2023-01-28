<?php

use PHPUnit\Framework\TestCase;

include_once "../CODEBUSTERS/Classes/dbh-classes.php";
include_once "../CODEBUSTERS/Classes/signup-classes.php";

class signupTest extends TestCase {

    public function testEmptyInputTrue() {
        
        $signup = new Signup("test", "test");
        $reflector = new ReflectionClass('Signup');
        $method = $reflector->getMethod('emptyInput');
        $method->setAccessible(true);

        $result = $method->invokeArgs($signup, array());

        $this->assertEquals(true, $result);
    }

    public function testEmptyInputFalse() {
        
        $signup = new Signup("", "");
        $reflector = new ReflectionClass('Signup');
        $method = $reflector->getMethod('emptyInput');
        $method->setAccessible(true);

        $result = $method->invokeArgs($signup, array());

        $this->assertEquals(false, $result);
    }

    public function testValidateEmailTrue() {

        $signup = new Signup("test@jobsters.com", "test");
        $reflector = new ReflectionClass('Signup');
        $method = $reflector->getMethod('validateEmail');
        $method->setAccessible(true);

        $result = $method->invokeArgs($signup, array());

        $this->assertEquals(true, $result);
    }

    public function testValidateEmailFalse() {

        $signup = new Signup("test", "test");
        $reflector = new ReflectionClass('Signup');
        $method = $reflector->getMethod('validateEmail');
        $method->setAccessible(true);

        $result = $method->invokeArgs($signup, array());

        $this->assertEquals(false, $result);

    }

    public function testSignupUserWithEmptyInput() {
        $signup = new Signup("", "");
        $signup->signupUser();

        $this->assertEquals(false, false);
    }

    public function testSignupUserWithUserExistence() {
        $signup = new Signup("test@jobsters.com", "test");
        $signup->signupUser();

        $this->assertEquals(false, false);
    }

    public function testSignupUserWithInvalidEmail() {
        $signup = new Signup("test", "test");
        $signup->signupUser();

        $this->assertEquals(false, false);
    }

    public function testSignupUserWithValidEmail() {
        $signup = new Signup("run@jobsters.com", "test");
        $signup->signupUser();

        $this->assertEquals(false, false);
    }

    public function testUserExistence() {
        $signup = new Signup("test@jobsters.com", "test");
        $reflector = new ReflectionClass('Signup');
        $method = $reflector->getMethod('userExistance');
        $method->setAccessible(true);

        $result = $method->invokeArgs($signup, array("test@jobsters.com", "test"));

        $this->assertEquals(false, false);
    }

    public function testSetUser() {
        $signup = new Signup("admin@jobsters.com", "admin");
        $reflector = new ReflectionClass('Signup');
        $method = $reflector->getMethod('setUser');
        $method->setAccessible(true);

        $result = $method->invokeArgs($signup, array("admin@jobsters.com", "admin"));

        $this->assertEquals(false, false);
    }
}

?>
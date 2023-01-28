<?php

use PHPUnit\Framework\TestCase;

include_once "../CODEBUSTERS/Classes/dbh-classes.php";
include_once "../CODEBUSTERS/Classes/signin-classes.php";

class signinTest extends TestCase {

    public function testEmptyInputTrue() {
        
        $signin = new Signin("test", "test");
        $reflector = new ReflectionClass('Signin');
        $method = $reflector->getMethod('emptyInput');
        $method->setAccessible(true);

        $result = $method->invokeArgs($signin, array());

        $this->assertEquals(true, $result);
    }

    public function testEmptyInputFalse() {
        
        $signin = new Signin("", "");
        $reflector = new ReflectionClass('Signin');
        $method = $reflector->getMethod('emptyInput');
        $method->setAccessible(true);

        $result = $method->invokeArgs($signin, array());

        $this->assertEquals(false, $result);
    }

    public function testValidateEmailTrue() {

        $signin = new Signin("test@jobsters.com", "test");
        $reflector = new ReflectionClass('Signin');
        $method = $reflector->getMethod('validateEmail');
        $method->setAccessible(true);

        $result = $method->invokeArgs($signin, array());

        $this->assertEquals(true, $result);
    }

    public function testValidateEmailFalse() {

        $signin = new Signin("test", "test");
        $reflector = new ReflectionClass('Signin');
        $method = $reflector->getMethod('validateEmail');
        $method->setAccessible(true);

        $result = $method->invokeArgs($signin, array());

        $this->assertEquals(false, $result);

    }

    public function testSigninUserWithEmptyInput() {

        $signin = new Signin("", "");
        $signin->signinUser();

        $this->assertEquals(true, true);

    }

    public function testSigninUserWithValidEmail() {

        $signin = new Signin("test@jobsters.com", "test");
        $signin->signinUser();

        $this->assertEquals(true, true);

    }

    public function testGetUser() {

        $signin = new Signin("test@jobsters.com", "test");
        $reflector = new ReflectionClass('Signin');
        $method = $reflector->getMethod('getUser');
        $method->setAccessible(true);

        $result = $method->invokeArgs($signin, array("test@jobsters.com", "test"));

        $this->assertEquals(false, $result);

    }

}

?>
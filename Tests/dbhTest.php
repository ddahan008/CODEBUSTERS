<?php

use PHPUnit\Framework\TestCase;

include_once "../CODEBUSTERS/Classes/dbh-classes.php";
include_once "../CODEBUSTERS/Classes/signin-classes.php";

class dbhTest extends TestCase {

    public function testDbhTrue() {

        $dbh = new Dbh();

        $reflector = new ReflectionClass('Dbh');
        $method = $reflector->getMethod('Connect');
        $method->setAccessible(true);

        $connect = $method->invokeArgs($dbh, array());
        $stmt = $connect->prepare('SELECT * FROM users WHERE uid = "0"');

        $result = $stmt->execute(array());

        $this->assertEquals(true, $result);

    }

}

?>
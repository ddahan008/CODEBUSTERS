<?php

use PHPUnit\Framework\TestCase;

include_once "app/core/Model.php";
include_once "app/core/Controller.php";
include_once "app/controllers/ExploreController.php";

/* ********************* SETUP ********************* */
$_SESSION['user_id'] = 1;
/* ********************* SETUP ********************* */

class ExploreControllerTest extends TestCase {

    public function testIndex() {
        $test = new ExploreController;
        $test->index();

        unset($_SESSION['user_id']);

        $test->index();
        
        $this->assertTrue(true);
    }

}

?>
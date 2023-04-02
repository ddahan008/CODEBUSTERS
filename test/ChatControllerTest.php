<?php

use PHPUnit\Framework\TestCase;

include_once "app/core/Model.php";
include_once "app/core/Controller.php";
include_once "app/controllers/ChatController.php";

/* ********************* SETUP ********************* */
$_SESSION['user_id'] = 1;
$_GET['receiverID'] = 2;
$_GET['url'] = "Test URL";
$_POST['receiverID'] = 2;
$_POST['clientmsg'] = "Test shit message";
/* ********************* SETUP ********************* */

class ChatControllerTest extends TestCase {

    function testIndex() {
        $test = new ChatController;
        $test->index();

        $this->assertTrue(true);
    }

    function testSend() {
        $test = new ChatController;
        $test->send();

        $this->assertTrue(true);
    }

    function testGet() {
        $test = new ChatController;
        $test->get();

        $this->assertTrue(true);
    }

}

?>
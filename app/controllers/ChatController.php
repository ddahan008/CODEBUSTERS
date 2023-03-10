<?php

class ChatController extends Controller {

    /**
     * Main landing page for the Chat section.
     *
     * Retrieves a list of all the user's contacts and loads the index view with the proper data.
     */
    public function index() {
        $data = []; // declare the data array
        $connection = $this->model('Connection'); // get a reference to the Connection object model
        $contacts = $connection->getConnectedProfiles(); // get all the connected profiles
        $data['contacts'] = $contacts; // add the connected profiles to the data array as a 'contacts' property

        $this->view('Chat/index', $data); // load the view, passing in the fully constructed data element
    }

    /**
     * Retrieves the messages between two users, prepares, formats and sends the data back to the AJAX query.
     */
    public function get() {
        $chat = $this->model('Chat'); // get a reference to the chat object model
        $chat->rid = $_GET['receiverID']; // set the receiver property
        $chat->sid = $_SESSION['user_id']; // set the sender property

        $chats = $chat->getConversation(); // call the method to load the messages

        $profile = $this->model('Profile'); // get a reference to the profile object model
        $html = ""; // declare the empty html string

        // loop through each message in the chat array
        foreach ($chats as $c) {
            // format the current chat object for HTML and append it to the $html string
            $html .= "<p><strong>" . $profile->getFnameForUser($c->sid) . ": </strong>" . $c->content . "</p>\n";
        }

        echo $html; // return the formatted $html conversation to AJAX
    }

    /**
     * Enables the sending message functionality
     */
    public function send() {
        if (isset($_POST['text'])) { // if a message was sent
            $chat = $this->model('Chat'); // get a reference to the chat object model
            $chat->sid = $_SESSION['user_id']; // set the sender property
            $chat->rid = $_POST['receiverID']; // set the receiver property
            $chat->type = Chat::_TYPES['TEXT']; // set the message type
            $chat->content = $_POST['text']; // set the message text content

            $chat->insert(); // call the method to store the message
        }
    }


}

?>

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
            if($c->type == Chat::_TYPES['TEXT']) {
                // format the current text chat object for HTML and append it to the $html string
                $html .= "<p><strong>" . $profile->getFnameForUser($c->sid) . ": </strong>" . $c->content . "</p>\n";
            }
            else if ($c->type == Chat::_TYPES['MEDIA']) {
                // format the current media chat object for HTML and append it to the $html string
                $html .= "<p><strong>" . $profile->getFnameForUser($c->sid)
                         . ": </strong><a href='" . $c->content . "' download='". $c->content ."'>$c->content</a></p>\n";
            }
        }

        echo $html; // return the formatted $html conversation to AJAX
    }

    /**
     * Enables the sending message functionality
     */
    public function send() {
        if (is_array($_FILES) && sizeof($_FILES) > 0) { // if a file was sent
            $allowedExts = array('txt'); // declare the allowable file extensions
            $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION); // pull the file's extension

            if (($_FILES['file']['size'] < 52428800) // verify the file does not exceed max size
                && in_array($extension, $allowedExts)) // verify the file has a permitted extension
            {
                if ($_FILES['file']['error'] > 0) // if there is a file error
                    echo 'Return Code: ' . $_FILES['file']['error'] . '<br />';
                else { // valid file
                    $filename = 'file-' . uniqid(true) . '.' .$extension; // rename the file uniquely
                    $file_path = 'upload/' . $filename; // set the file path
                    // move the uploaded file to the persistence location
                    move_uploaded_file($_FILES['file']['tmp_name'], 'upload/' . $filename);

                    $chat = $this->model('Chat'); // get a reference to the Chat object model
                    $chat->sid = $_SESSION['user_id']; // set the sender property
                    $chat->rid = $_POST['receiverID']; // set the receiver property
                    $chat->type = Chat::_TYPES['MEDIA']; // set the message type
                    $chat->content = $file_path; // set the message text content

                    $chat->insert(); // call the method to store the message
                }
            }
        }
        else if (isset($_POST['clientmsg'])) { // if a message was sent
            $chat = $this->model('Chat'); // get a reference to the chat object model
            $chat->sid = $_SESSION['user_id']; // set the sender property
            $chat->rid = $_POST['receiverID']; // set the receiver property
            $chat->type = Chat::_TYPES['TEXT']; // set the message type
            $chat->content = $_POST['clientmsg']; // set the message text content

            $chat->insert(); // call the method to store the message
        }
    }

    /**
     * Enables file attachment downloads
     */
    public function upload() {
        // Parse the file path from the URL, dropping the method call
        $file_path = str_replace("Chat/", "", $_GET['url']);

        if(file_exists($file_path)) { // if the file exists
            // Define headers
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header("Cache-Control: no-cache, must-revalidate");
            header("Expires: 0");
            header('Content-Disposition: attachment; filename="' . basename($file_path) . '"');
            header('Content-Length: ' . filesize($file_path));
            header('Pragma: public');

            flush(); // flush system output buffer

            readfile($file_path); // Send the file to the client
        } 
        else { // file does  not exist
            echo "File does not exist!";
        }
    }
}

?>

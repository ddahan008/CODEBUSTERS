<?php

class ChatController extends Controller {

    public function index() {
        $data = [];
        $connection = $this->model('Connection');
        $contacts = $connection->getConnectedProfiles();
        $data['contacts'] = $contacts;

        $this->view('Chat/index', $data);
    }

    public function get() {
        $chat = $this->model('Chat');
        $chat->rid = $_GET['receiverID'];
        $chat->sid = $_SESSION['user_id'];

        $chats = $chat->getConversation();

        $profile = $this->model('Profile');
        $html = "";

        foreach ($chats as $c) {
            $html .= "<p><strong>" . $profile->getFnameForUser($c->sid) . ": </strong>" . $c->content . "</p>\n";
        }

        echo $html;
    }

    public function send() {
        if (isset($_POST['text'])) {
            $chat = $this->model('Chat');
            $chat->sid = $_SESSION['user_id'];
            $chat->rid = $_POST['receiverID'];
            $chat->type = Chat::_TYPES['TEXT'];
            $chat->content = $_POST['text'];

            $chat->insert();
        }
    }


}

?>

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

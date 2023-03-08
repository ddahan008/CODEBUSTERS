<?php

class ChatController extends Controller {

    public function index() {
        $data = [];
        $connection = $this->model('Connection');
        $contacts = $connection->getConnectedProfiles();
        $data['contacts'] = $contacts;

        $this->view('Chat/index', $data);
    }


}

?>

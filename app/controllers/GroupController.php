<?php

class GroupController extends Controller {
    public function index() {
        $group = $this->model('Group');
        $groups = $group->getAllGroups();
        $this->view('Group/Index', $groups);
    }

    public function add() {
        if(isset($_POST['action'])) {
            $group = $this->model('Group');
            $group->name = $_POST['name'];
            $group->descr = $_POST['descr'];
            $group->addGroup();
            header("Location: /Group");
        }
        $this->view('Group/AddGroup');
    }
}

?>
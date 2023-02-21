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
            $group->creator_uid = $_SESSION['user_id'];
            $group->addGroup();
            header("Location: /Group");
        }
        $this->view('Group/AddGroup');
    }

    public function delete($gid) {
        $group = $this->model('Group');
        $group->id = $gid;
        $group->creator_uid = $_SESSION['user_id'];
        $group->deleteGroup();
        $this->index();
    }

    public function amSubscribed($gid) {
        $group = $this->model('Group');
        $group->id = $gid;
        return is_array($group->isSubscribed());
    }

    public function amCreator($gid) {
        $group = $this->model('Group');
        $group->id = $gid;
        $group->creator_uid = $_SESSION['user_id'];
        return is_array($group->isCreator());
    }

    public function join($gid) {
        $group = $this->model('Group');
        $group->id = $gid;
        $group->joinGroup();
        $this->index();
    }

    public function leave($gid) {
        $group = $this->model('Group');
        $group->id = $gid;
        $group->leaveGroup();
        $this->index();
    }
}

?>
<?php

class ProfileController extends Controller {

    public function index() {
        if (isset($_SESSION['user_id'])) {
            // user signed in
            $profile = $this->model('Profile');
            $profile->id = $_SESSION['user_id'];
            $data = $profile->getProfile();
            if ($data == false)
                header("Location: /Profile/Create/");
            else
                $this->view('Profile/index', $data);
        } else {
            $this->view('Home/Index');
        }
    }

    public function edit() {
        if(isset($_POST['action'])) {
            $profile = $this->model('Profile');
            $profile->id = $_SESSION['user_id'];
            $profile->fname = $_POST['fname'];
            $profile->lname = $_POST['lname'];
            $profile->email = $_POST['email'];
            $profile->job_title = $_POST['job'];
            $profile->location = $_POST['location'];
            $profile->skills = $_POST['skills'];
            $profile->about = $_POST['about'];
            $profile->edit();
            header("Location: /Profile");
        }
        $this->view('Profile/Edit');
    }

    public function create() {
        if(isset($_POST['action'])) {
            $profile = $this->model('Profile');
            $profile->id = $_SESSION['user_id'];
            $profile->fname = $_POST['fname'];
            $profile->lname = $_POST['lname'];
            $profile->email = $_POST['email'];
            $profile->job_title = $_POST['job'];
            $profile->location = $_POST['location'];
            $profile->skills = $_POST['skills'];
            $profile->about = $_POST['about'];
            $profile->create();
            header("Location: /Profile");
        }
        $this->view('Profile/Edit');
    }

    public function updateVisibility($val) {
        if ($val == 0 || $val == 1) {
            $profile = $this->model('Profile');
            $profile->id = $_SESSION['user_id'];
            $profile->public = $val;
            $profile->updateVisibility();
        }
        header("Location: /Profile");
    }
}

?>

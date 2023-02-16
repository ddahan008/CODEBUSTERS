<?php

class HomeController extends Controller {
    public function index() {

        if (isset($_SESSION['user_id'])) {
            // user signed in
            $datum = "";
        }

        //$this->view('Home/Index', $datum);
        //header("Location: /Home/Login");
        $this->view('Home/Login');
    }

    public function register() {
        if (isset($_POST['action'])) {
            if ($_POST['password'] == $_POST['password_confirm']) {
                $user = $this->model('User');
                $user->uname = $_POST['username'];
                $user->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                if ($user->insert()) {
                    header("Location: /Home/Login");
                }
                else { //TODO add error message
                    header("Location: /Home/Register");
                }
            }
        }
        else {
            $this->view('Home/Register');
        }
    }

    public function login() {
        if (isset($_POST['action'])) {
            $user = $this->model('User');
            $theUser = $user->getUserByUname($_POST['username']);

            if (password_verify($_POST['password'], $theUser->password_hash)) {
                $_SESSION['user_id'] = $theUser->id;
                $_SESSION['uname'] = $theUser->uname;
                header("Location: /Profile/Index");
            }
            else { //TODO add error message
                header("Location: /Home/Login");
            }
        }
        else {
            $this->view('Home/Login');
        }
    }

    public function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['uname']);
        header("Location: /");
    }
}

?>
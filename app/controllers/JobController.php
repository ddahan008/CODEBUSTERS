<?php

class JobController extends Controller {

    /**
     * Main landing page for the Jobs section.
     *
     * Retrieves a list of all the jobs and loads the appropraite view with the proper data.
     */
    public function index() {
        if ($_SESSION["u_type"] == 1) {
            $job = $this->model('Job');
            $job->creator_uid = $_SESSION["user_id"];
            $jobs = $job->getAllJobsForCreator();
    
            $this->view('Job/JobManage', $jobs);
        }
        else if ($_SESSION["u_type"] == 2) {
            $job = $this->model('Job');
            $jobs = $job->getAllJobs();
    
            $this->view('Job/JobSearch', $jobs);
        }
    }

    /**
     * Create a new job
     */
    public function create() {
        if(isset($_POST['action'])) { // if the form has been posted
            $job = $this->model('Job');

            $job->title = $_POST['title'];
            $date = date_create($_POST['deadline']);
            $job->deadline = date_format($date, "Y/m/d");
            $job->location = $_POST['location'];

            if (isset($_POST['easyapply'])) {
                $job->easy_apply = 1;
            }
            else {
                $job->easy_apply = 0;
            }

            if (isset($_POST['applyonwebsite'])) {
                $job->apply_on_web = 1;
            }
            else {
                $job->apply_on_web = 0;
            }

            $job->web_link = $_POST['link'];
            $job->descr = $_POST['description'];
            $job->creator_uid = $_SESSION['user_id'];

            $job->createJob();
            header("Location: /Job/JobManage");
        }
        $job = $this->model('Job');
        $job->creator_uid = $_SESSION["user_id"];
        $jobs = $job->getAllJobsForCreator();

        $this->view('Job/JobCreate', $jobs); // if the form has not been posted, load the JobCreate form view
    }

    /**
     * Edit an existing job
     */
    public function edit($jid) {
        if(isset($_POST['action'])) { // if the form has been posted
            $job = $this->model('Job');

            $job->id = $_POST['action'];
            $job->title = $_POST['title'];
            $date = date_create($_POST['deadline']);
            $job->deadline = date_format($date, "Y/m/d");
            $job->location = $_POST['location'];

            if (isset($_POST['easyapply'])) {
                $job->easy_apply = 1;
            }
            else {
                $job->easy_apply = 0;
            }

            if (isset($_POST['applyonwebsite'])) {
                $job->apply_on_web = 1;
            }
            else {
                $job->apply_on_web = 0;
            }

            $job->web_link = $_POST['link'];
            $job->descr = $_POST['description'];
            $job->creator_uid = $_SESSION['user_id'];

            $job->editJob();
            header("Location: /Job/JobManage");
        }

        $job = $this->model('Job');
        $job->id = $jid;
        $job->creator_uid = $_SESSION["user_id"];
        $data = $job->getJobByJobId();

        $this->view('Job/JobEdit', $data); // load the JobEdit form view
    }

    /**
     * Delete a job from the database
     */
    public function delete($jid) {
        $job = $this->model('Job');
        $job->id = $jid;
        $job->creator_uid = $_SESSION["user_id"];
        $job->deleteJob();

        header("Location: /Job/JobManage");
    }

    /**
     * Search a job from the database
     */
    public function search() {
        if (isset($_POST["action"]) && $_POST["search"] != "") {
            $tag = $_POST["search"];

            $job = $this->model('Job');
            $jobs = $job->searchJobWithTag($tag);

            $this->view('Job/JobSearch', $jobs);
        }

        header("Location: /Job/JobSearch");
    }
}

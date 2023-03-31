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

            (isset($_POST['easy_apply'])) ? $job->easy_apply = 1 : $job->easy_apply = 0;
            (isset($_POST['apply_on_web'])) ? $job->apply_on_web = 1 : $job->apply_on_web = 0;

            $job->web_link = $_POST['link'];
            $job->descr = $_POST['description'];
            $job->creator_uid = $_SESSION['user_id'];
            
            $created_job_id = $job->createJob();

            //Sets the job application requirements
            $application = $this->model('Application');
            $application->jid = $created_job_id;

            (isset($_POST['prefix_mandatory'])) ? $application->prefix_mandatory = 1 : $application->prefix_mandatory = 0;
            (isset($_POST['fname_mandatory'])) ? $application->fname_mandatory = 1 : $application->fname_mandatory = 0;
            (isset($_POST['lname_mandatory'])) ? $application->lname_mandatory = 1 : $application->lname_mandatory = 0;
            (isset($_POST['pronouns_mandatory'])) ? $application->pronouns_mandatory = 1 : $application->pronouns_mandatory = 0;
            (isset($_POST['email_mandatory'])) ? $application->email_mandatory = 1 : $application->email_mandatory = 0;
            (isset($_POST['work_phone_mandatory'])) ? $application->work_phone_mandatory = 1 : $application->work_phone_mandatory = 0;
            (isset($_POST['cell_phone_mandatory'])) ? $application->cell_phone_mandatory = 1 : $application->cell_phone_mandatory = 0;
            (isset($_POST['upload_cv_mandatory'])) ? $application->upload_cv_mandatory = 1 : $application->upload_cv_mandatory = 0;
            (isset($_POST['custom_question_1'])) ? $application->custom_question_1 = $_POST['custom_question_1'] : $application->custom_question_1 = 0;
            (isset($_POST['custom_question_1_mandatory'])) ? $application->custom_question_1_mandatory = 1 : $application->custom_question_1_mandatory = 0;
            (isset($_POST['custom_question_2'])) ? $application->custom_question_2 = $_POST['custom_question_2'] : $application->custom_question_2 = 0;
            (isset($_POST['custom_question_2_mandatory'])) ? $application->custom_question_2_mandatory = 1 : $application->custom_question_2_mandatory = 0;
            (isset($_POST['custom_question_3'])) ? $application->custom_question_3 = $_POST['custom_question_3'] : $application->custom_question_3 = 0;
            (isset($_POST['custom_question_3_mandatory'])) ? $application->custom_question_3_mandatory = 1 : $application->custom_question_3_mandatory = 0;
            (isset($_POST['custom_question_4'])) ? $application->custom_question_4 = $_POST['custom_question_4'] : $application->custom_question_4 = 0;
            (isset($_POST['custom_question_4_mandatory'])) ? $application->custom_question_4_mandatory = 1 : $application->custom_question_4_mandatory = 0;
            (isset($_POST['custom_question_5'])) ? $application->custom_question_5 = $_POST['custom_question_5'] : $application->custom_question_5 = 0;
            (isset($_POST['custom_question_5_mandatory'])) ? $application->custom_question_5_mandatory = 1 : $application->custom_question_5_mandatory = 0;

            $application->createApplicationRules();

            $this->notifyAllSeekers('JOB', "New " . $_POST['title'] . " job!");
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

            (isset($_POST['easy_apply'])) ? $job->easy_apply = 1 : $job->easy_apply = 0;
            (isset($_POST['apply_on_web'])) ? $job->apply_on_web = 1 : $job->apply_on_web = 0;

            $job->web_link = $_POST['link'];
            $job->descr = $_POST['description'];
            $job->creator_uid = $_SESSION['user_id'];

            $job->editJob();

            $application = $this->model('Application');
            $application->jid = $jid;

            (isset($_POST['prefix_mandatory'])) ? $application->prefix_mandatory = 1 : $application->prefix_mandatory = 0;
            (isset($_POST['fname_mandatory'])) ? $application->fname_mandatory = 1 : $application->fname_mandatory = 0;
            (isset($_POST['lname_mandatory'])) ? $application->lname_mandatory = 1 : $application->lname_mandatory = 0;
            (isset($_POST['pronouns_mandatory'])) ? $application->pronouns_mandatory = 1 : $application->pronouns_mandatory = 0;
            (isset($_POST['email_mandatory'])) ? $application->email_mandatory = 1 : $application->email_mandatory = 0;
            (isset($_POST['work_phone_mandatory'])) ? $application->work_phone_mandatory = 1 : $application->work_phone_mandatory = 0;
            (isset($_POST['cell_phone_mandatory'])) ? $application->cell_phone_mandatory = 1 : $application->cell_phone_mandatory = 0;
            (isset($_POST['upload_cv_mandatory'])) ? $application->upload_cv_mandatory = 1 : $application->upload_cv_mandatory = 0;
            (isset($_POST['custom_question_1'])) ? $application->custom_question_1 = $_POST['custom_question_1'] : null;
            (isset($_POST['custom_question_1_mandatory'])) ? $application->custom_question_1_mandatory = 1 : $application->custom_question_1_mandatory = 0;
            (isset($_POST['custom_question_2'])) ? $application->custom_question_2 = $_POST['custom_question_2'] : null;
            (isset($_POST['custom_question_2_mandatory'])) ? $application->custom_question_2_mandatory = 1 : $application->custom_question_2_mandatory = 0;
            (isset($_POST['custom_question_3'])) ? $application->custom_question_3 = $_POST['custom_question_3'] : null;
            (isset($_POST['custom_question_3_mandatory'])) ? $application->custom_question_3_mandatory = 1 : $application->custom_question_3_mandatory = 0;
            (isset($_POST['custom_question_4'])) ? $application->custom_question_4 = $_POST['custom_question_4'] : null;
            (isset($_POST['custom_question_4_mandatory'])) ? $application->custom_question_4_mandatory = 1 : $application->custom_question_4_mandatory = 0;
            (isset($_POST['custom_question_5'])) ? $application->custom_question_5 = $_POST['custom_question_5'] : null;
            (isset($_POST['custom_question_5_mandatory'])) ? $application->custom_question_5_mandatory = 1 : $application->custom_question_5_mandatory = 0;
            
            $application->editApplicationRules();

            header("Location: /Job/JobManage");
        }

        $job = $this->model('Job');
        $job->id = $jid;
        $job->creator_uid = $_SESSION["user_id"];
        $data = $job->getJobByJobId();

        $application = $this->model('Application');
        $application->jid = $jid;
        $data[0]->application_rule = $application->getRulesByJobId();

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
        else {
            header("Location: /Job/JobSearch");
        }
    }
}

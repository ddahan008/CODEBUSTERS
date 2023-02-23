<?php

class CompanyController extends Controller {

    /**
     * Main landing page for the Company section of the system.
     *
     * Retrieves all the companies and loads them into the Index view.
     */
    public function index() {
        $company = $this->model('Company'); // get a reference to the Company object model
        $companies = $company->getAllCompanies(); // call the method to retrieve all the companies from the DB
        $this->view('Company/Index', $companies); // load the company index view with the passed data
    }

    /**
     * Allows users to add companies to the system through the AddCompany form view.
     *
     * Manages the form actions.
     */
    public function add() {
        if(isset($_POST['action'])) { // if the form was posted
            $company = $this->model('Company'); // get a reference to the Company object model
            // set the appropriate fields
            $company->name = $_POST['name'];
            $company->descr = $_POST['descr'];
            $company->creator_uid = $_SESSION['user_id'];

            $company->addCompany(); // call the method to create the company record in the DB
            header("Location: /Company"); // redirect the user to the Company Index page
        }
        $this->view('Company/AddCompany'); // load the AddCompany form view
    }

    /**
     * Enables the functionality to delete a company from the system based on the passed ID.
     *
     * @param $gid int The ID of the company to delete.
     */
    public function delete($cid) {
        $company = $this->model('Company'); // get a reference to the Company object model
        $company->id = $cid; // set the gid field
        $company->creator_uid = $_SESSION['user_id']; // set the creator field
        $company->deleteCompany(); // call the method to delete the company record from the DB
        $this->index(); // load the index view
    }

    /**
     * Checks whether or not the current user is following the company with given ID.
     *
     * @param $cid int The ID of the company to verify membership.
     *
     * @return bool True if the current user is following the company, false otherwise.
     */
    public function amFollowing($cid) {
        $company = $this->model('Company'); // get  a reference to the company object model
        $company->id = $cid; // set the company id field
        /* call the method to check if the subscription record exists in the DB
         the output of the method call is passed to a boolean expression method to confirm that at least one record
         was returned. */
        return is_array($company->isFollowing());
    }

    /**
     * Checks whether or not the current user is the creator of the company with the given ID
     *
     * @param $gid int The ID of the company to verify creator status.
     *
     * @return bool True if the current user created the company, false otherwise.
     */
    public function amCreator($cid) {
        $company = $this->model('Company'); // get a reference to the Company object model
        $company->id = $cid; // set the company ID field
        $company->creator_uid = $_SESSION['user_id']; // set the creator field
        /* call the method to check if the DB record states that the current user is the creator.
         The output of the method call is passed to a boolean expression method to confirm that at least one record
         was returned. */
        return is_array($company->isCreator());
    }

    /**
     * Enables the current to follow a company with the given ID.
     *
     * @param $gid int The ID of the company to join.
     */
    public function follow($cid) {
        $company = $this->model('Company'); // get a reference to the Company object model
        $company->id = $cid; // set the company id field
        $company->followCompany(); // call the method to join the user to the company in the DB
        $this->index(); // load the index view
    }

    /**
     * Enables the current user to leave the company with the given ID.
     *
     * @param $gid int The ID of the company to leave.
     */
    public function unfollow($cid) {
        $company = $this->model('Company'); // get a reference to the Company object model
        $company->id = $cid; // set the company ID field
        $company->unfollowCompany(); // call the method to destroy the record in the DB
        $this->index(); // load the index view
    }
}

?>
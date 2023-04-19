<?php

class ApplicationRule extends Model
{
    public $jid;
    public $prefix_mandatory;
    public $fname_mandatory;
    public $lname_mandatory;
    public $pronouns_mandatory;
    public $email_mandatory;
    public $work_phone_mandatory;
    public $cell_phone_mandatory;
    public $upload_cv_mandatory;
    public $custom_question_1;
    public $custom_question_1_mandatory;
    public $custom_question_2;
    public $custom_question_2_mandatory;
    public $custom_question_3;
    public $custom_question_3_mandatory;
    public $custom_question_4;
    public $custom_question_4_mandatory;
    public $custom_question_5;
    public $custom_question_5_mandatory;

    /**
     * Sets the application requirements of a job.
     *
     * @return int returns the number of rows created in the DB. Expected to be 1.
     */
    public function createApplicationRules()
    {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "INSERT INTO application_rule (jid, prefix_mandatory, fname_mandatory, lname_mandatory, pronouns_mandatory, email_mandatory, work_phone_mandatory, 
            cell_phone_mandatory, upload_cv_mandatory, custom_question_1, custom_question_1_mandatory, custom_question_2, custom_question_2_mandatory, custom_question_3, 
            custom_question_3_mandatory, custom_question_4, custom_question_4_mandatory, custom_question_5, custom_question_5_mandatory) 
                  VALUES (:jid, :prefix_mandatory, :fname_mandatory, :lname_mandatory, :pronouns_mandatory, :email_mandatory, :work_phone_mandatory, :cell_phone_mandatory, 
                  :upload_cv_mandatory, :custom_question_1, :custom_question_1_mandatory, :custom_question_2, :custom_question_2_mandatory, :custom_question_3, 
                  :custom_question_3_mandatory, :custom_question_4, :custom_question_4_mandatory, :custom_question_5, :custom_question_5_mandatory);"
        );

        // supply the replacement parameters to the query
        $stmt->execute([
            'jid' => $this->jid, 'prefix_mandatory' => $this->prefix_mandatory, 'fname_mandatory' => $this->fname_mandatory, 'lname_mandatory' => $this->lname_mandatory,
            'pronouns_mandatory' => $this->pronouns_mandatory, 'email_mandatory' => $this->email_mandatory, 'work_phone_mandatory' => $this->work_phone_mandatory,
            'cell_phone_mandatory' => $this->cell_phone_mandatory, 'upload_cv_mandatory' => $this->upload_cv_mandatory, 'custom_question_1' => $this->custom_question_1,
            'custom_question_1_mandatory' => $this->custom_question_1_mandatory, 'custom_question_2' => $this->custom_question_2, 'custom_question_2_mandatory' => $this->custom_question_2_mandatory,
            'custom_question_3' => $this->custom_question_3, 'custom_question_3_mandatory' => $this->custom_question_3_mandatory, 'custom_question_4' => $this->custom_question_4,
            'custom_question_4_mandatory' => $this->custom_question_4_mandatory, 'custom_question_5' => $this->custom_question_5, 'custom_question_5_mandatory' => $this->custom_question_5_mandatory
        ]);

        return $stmt->rowCount();
    }

    /**
     * Retrieves the Job application rules element from the Database that belongs to a specific job.
     *
     * @return array If given job id matches, return the record. Otherwise return false.
     */
    public function getRulesByJobId()
    {
        $stmt = $this->_connection->prepare("SELECT * FROM application_rule WHERE jid = :jid;");
        $stmt->execute(['jid' => $this->jid]);

        $stmt->setFetchMode(PDO::FETCH_CLASS, "Application");
        return $stmt->fetchAll();
    }

    /**
     * Edits the application requirements of a job.
     *
     * @return int returns the number of rows created in the DB. Expected to be 1.
     */
    public function editApplicationRules()
    {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "UPDATE application_rule SET jid = :jid, prefix_mandatory = :prefix_mandatory, fname_mandatory = :fname_mandatory, lname_mandatory = :lname_mandatory, 
            pronouns_mandatory = :pronouns_mandatory, email_mandatory = :email_mandatory, work_phone_mandatory = :work_phone_mandatory, cell_phone_mandatory = :cell_phone_mandatory, 
                  upload_cv_mandatory = :upload_cv_mandatory, custom_question_1 = :custom_question_1, custom_question_1_mandatory = :custom_question_1_mandatory, 
                  custom_question_2 = :custom_question_2, custom_question_2_mandatory = :custom_question_2_mandatory, custom_question_3 = :custom_question_3, 
                  custom_question_3_mandatory = :custom_question_3_mandatory, custom_question_4 = :custom_question_4, custom_question_4_mandatory = :custom_question_4_mandatory, 
                  custom_question_5 = :custom_question_5, custom_question_5_mandatory = :custom_question_5_mandatory
            WHERE jid = :jid;"
        );

        // supply the replacement parameters to the query
        $stmt->execute([
            'jid' => $this->jid, 'prefix_mandatory' => $this->prefix_mandatory, 'fname_mandatory' => $this->fname_mandatory, 'lname_mandatory' => $this->lname_mandatory,
            'pronouns_mandatory' => $this->pronouns_mandatory, 'email_mandatory' => $this->email_mandatory, 'work_phone_mandatory' => $this->work_phone_mandatory,
            'cell_phone_mandatory' => $this->cell_phone_mandatory, 'upload_cv_mandatory' => $this->upload_cv_mandatory, 'custom_question_1' => $this->custom_question_1,
            'custom_question_1_mandatory' => $this->custom_question_1_mandatory, 'custom_question_2' => $this->custom_question_2, 'custom_question_2_mandatory' => $this->custom_question_2_mandatory,
            'custom_question_3' => $this->custom_question_3, 'custom_question_3_mandatory' => $this->custom_question_3_mandatory, 'custom_question_4' => $this->custom_question_4,
            'custom_question_4_mandatory' => $this->custom_question_4_mandatory, 'custom_question_5' => $this->custom_question_5, 'custom_question_5_mandatory' => $this->custom_question_5_mandatory
        ]);

        return $stmt->rowCount();
    }
}

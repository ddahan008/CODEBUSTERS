<?php

class Job extends Model
{
    public $id;
    public $title;
    public $deadline;
    public $location;
    public $easy_apply;
    public $apply_on_web;
    public $web_link;
    public $descr;
    public $creator_uid;

    /**
     * Retrieves all Job elements from the Database that belongs to a specific creator.
     *
     * @return array If the user is the creator of the of the job, return the record. Otherwise return false.
     */
    public function getAllJobsForCreator()
    {
        $stmt = $this->_connection->prepare("SELECT * FROM jobs WHERE creator_uid = :creator_uid");
        $stmt->execute(['creator_uid' => $this->creator_uid]);

        $stmt->setFetchMode(PDO::FETCH_CLASS, "Job");
        return $stmt->fetchAll();
    }

    /**
     * Retrieves all Job elements from the Database.
     *
     * @return array Return all job records. Otherwise return false.
     */
    public function getAllJobs()
    {
        $stmt = $this->_connection->prepare("SELECT * FROM jobs");
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_CLASS, "Job");
        return $stmt->fetchAll();
    }

    /**
     * Retrieves the Job element from the Database that belongs to a specific creator and matches with the given id.
     *
     * @return array If both matches, return the record. Otherwise return false.
     */
    public function getJobByJobId()
    {
        $stmt = $this->_connection->prepare("SELECT * FROM jobs WHERE id = :id AND creator_uid = :creator_uid");
        $stmt->execute(['id' => $this->id, 'creator_uid' => $this->creator_uid]);

        $stmt->setFetchMode(PDO::FETCH_CLASS, "Job");
        return $stmt->fetchAll();
    }

    /**
     * Adds a job to the DB based on the current object status.
     *
     * @return int Number of affected rows. Expected to be 1.
     */
    public function createJob()
    {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "INSERT INTO jobs(title, deadline, location, easy_apply, apply_on_web, web_link, descr, creator_uid) 
                  VALUES (:title, :deadline, :location, :easy_apply, :apply_on_web, :web_link, :descr, :creator_uid)"
        );

        // supply the replacement parameters to the query
        $stmt->execute([
            'title' => $this->title, 'deadline' => $this->deadline, 'location' => $this->location, 'easy_apply' => $this->easy_apply,
            'apply_on_web' => $this->apply_on_web, 'web_link' => $this->web_link, 'descr' => $this->descr, 'creator_uid' => $this->creator_uid
        ]);
        return $stmt->rowCount();
    }

    /**
     * Edit a job in the DB based on the current object status.
     *
     * @return int Number of affected rows. Expected to be 1.
     */
    public function editJob()
    {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "UPDATE jobs SET title = :title, deadline = :deadline, location = :location, easy_apply = :easy_apply, apply_on_web = :apply_on_web, web_link = :web_link, descr = :descr, creator_uid = :creator_uid 
            WHERE id = :id AND creator_uid = :creator_uid"
        );

        // supply the replacement parameters to the query
        $stmt->execute([
            'title' => $this->title, 'deadline' => $this->deadline, 'location' => $this->location, 'easy_apply' => $this->easy_apply,
            'apply_on_web' => $this->apply_on_web, 'web_link' => $this->web_link, 'descr' => $this->descr, 'id' => $this->id, 'creator_uid' => $this->creator_uid
        ]);

        return $stmt->rowCount();
    }

    /**
     * Delete a job in the DB based on the current object status.
     *
     * @return int Number of affected rows. Shoud be 1.
     */
    public function deleteJob()
    {
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "DELETE FROM jobs WHERE id = :id AND creator_uid = :creator_uid"
        );

        // supply the replacement parameters to the query
        $stmt->execute(['id' => $this->id, 'creator_uid' => $this->creator_uid]);
        return $stmt->rowCount(); // return the number of affected rows (should be 1)
    }

    /**
     * Search for a job in the DB based on the provided tag.
     *
     * @return array If DB rows matches with tag, the rows are returned. Otherwise return false.
     */
    public function searchJobWithTag($tag)
    {
        $temp = '%' . $tag . '%';
        // prepare the SQL DML Statements
        $stmt = $this->_connection->prepare(
            "SELECT * FROM jobs WHERE title LIKE ? OR location LIKE ?  OR descr LIKE ?"
        );
        // supply the replacement parameters to the query
        $stmt->execute([$temp, $temp, $temp]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "Job");

        return $stmt->fetchAll();
    }
}

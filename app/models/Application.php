<?php

class Application extends Model
{
    public $id;
    public $jid;
    public $applier_id;
    public $resume_id;
    public $cletter_id;

    /**
     * Create a new applciation for a specific user applying to a specific job.
     *
     * @return int returns the number of rows affected.
     */
    public function create()
    {
        $stmt = $this->_connection->prepare("INSERT INTO application (jid, applier_id, resume_id, cletter_id) VALUES (:jid, :applier_id, :resume_id, :cletter_id);");
        $stmt->execute(['jid' => $this->jid, 'applier_id' => $this->applier_id, 'resume_id' => $this->resume_id, 'cletter_id' => $this->cletter_id]);

        return $stmt->rowCount();
    }

    /**
     * Gets the job ids of all the jobs that the user applied to.
     *
     * @return array all jids.
     */
    public function getJobIdsUserAppliedTo()
    {
        $stmt = $this->_connection->prepare("SELECT jid FROM application WHERE applier_id = :applier_id;");
        $stmt->execute(['applier_id' => $this->applier_id]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

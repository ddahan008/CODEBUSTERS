<?php

class Profile extends Model {
    public $id;
    public $fname, $lname;
    public $email;
    public $job_title;
    public $location;
    public $img_src = "";
    public $skills;
    public $about;
    public $public = 1;


    public function create() {
        $stmt = $this->_connection->prepare(
            "INSERT INTO profile(id, fname, lname, email, job_title,
                    location, img_src, skills, about) 
                  VALUES (:id, :fname, :lname, :email, :job_title,
                    :location, :img_src, :skills, :about)"
        );

        $stmt->execute(['id'=>$this->id, 'fname'=>$this->fname, 'lname'=>$this->lname,
                        'email'=>$this->email, 'job_title'=>$this->job_title, 'location'=>$this->location,
                        'img_src'=>$this->img_src, 'skills'=>$this->skills, 'about'=>$this->about]);
        return $stmt->rowCount();
    }

    public function edit() {
        $stmt = $this->_connection->prepare(
            "UPDATE profile
             SET fname=:fname, lname=:lname, email=:email, job_title=:job_title, 
                  location=:location, img_src=:img_src, skills=:skills, about=:about
             WHERE id=:id"
        );

        $stmt->execute(['id'=>$this->id, 'fname'=>$this->fname, 'lname'=>$this->lname, 'email'=>$this->email,
                        'job_title'=>$this->job_title, 'location'=>$this->location, 'img_src'=>$this->img_src,
                        'skills'=>$this->skills, 'about'=>$this->about]);
        return $stmt->rowCount();
    }

    public function getProfile() {
        $stmt = $this->_connection->prepare(
            "SELECT *
             FROM profile
             WHERE id=:id"
        );

        $stmt->execute(['id'=>$this->id]);
        $stmt->setFetchMode(PDO::FETCH_CLASS, "Profile");
        return $stmt->fetch();
    }

    public function updateVisibility(){
        $stmt = $this->_connection->prepare(
            "UPDATE profile
             SET public=:public
             WHERE id=:id"
        );

        $stmt->execute(['id'=>$this->id, 'public'=>$this->public]);
        return $stmt->rowCount();
    }
}

?>
<?php include 'app/views/Common/header.php' ?>

<link href="../../../css/editProfile.css" rel="stylesheet" type="text/css"/>

<div class="content">
    <div class="container">
      <h1>Update User Profile</h1>
      <form method="post">
        <div class="form-group">
          <label for="fname">First Name:</label>
          <input type="text" id="fname" name="fname" required />
        </div>
        <div class="form-group">
          <label for="lname">Last Name:</label>
          <input type="text" id="lname" name="lname" required />
        </div>
        <div class="form-group">
          <label for="email">Email Address:</label>
          <input type="email" id="email" name="email" required />
        </div>
        <div class="form-group">
          <label for="job">Job title:</label>
          <input type="text" id="job" name="job" required />
        </div>
        <div class="form-group">
          <label for="skills">Skills:</label>
          <input type="text" id="skills" name="skills" required />
        </div>
        <div class="form-group">
          <label for="about">About Me</label>
          <input type="text" id="about" name="about" required />
        </div>
        <div class="form-group">
          <label for="location">Location</label>
          <input type="text" id="location" name="location" required />
        </div>
        <div class="form-group">
          <label for="educ">Education</label>
          <input type="text" id="educ" name="educ" required />
        </div>
        <div class="form-group">
          <label for="exp">Experience</label>
          <input type="text" id="exp" name="exp" required />
        </div>
        <div class="form-group">
          <label for="vol">Volunteer</label>
          <input type="text" id="vol" name="vol" required />
        </div>
        <!--div class="form-group">
          <label for="profilePicture">Profile Picture:</label>
          <input type="file" id="profilePicture" name="profilePicture" accept="image/*">
          <img id="preview" src="#" alt="Profile Picture Preview">
        </div-->
        <input type="submit" name="action" value="Confirm" />
      </form>
    </div>
</div>

<?php include 'app/views/Common/footer.php' ?>

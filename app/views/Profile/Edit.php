<?php include 'app/views/Common/header.php' ?>

<link href="../../../css/editProfile.css" rel="stylesheet" type="text/css"/>

<div class="content">
    <div class="container">
      <h1>Update User Profile</h1>
      <form>
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
          <label for="firstName">First Name:</label>
          <input type="text" id="firstName" name="firstName" required>
        </div>
        <div class="form-group">
          <label for="lastName">Last Name:</label>
          <input type="text" id="lastName" name="lastName" required>
        </div>
        <div class="form-group">
          <label for="email">Email Address:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="skills">Skills:</label>
          <input type="text" id="skills" name="skills" required>
        </div>
        <div class="form-group">
          <label for="aboutme">About Me</label>
          <input type="text" id="info" name="aboutme" required>
        </div>
        <div class="form-group">
          <label for="Education">Education</label>
          <input type="text" id="Education" name="Education" required>
        </div>
        <div class="form-group">
          <label for="Experience">Experience</label>
          <input type="text" id="Experience" name="Experience" required>
        </div>
        <div class="form-group">
          <label for="Volunteer">Volunteer</label>
          <input type="text" id="Volunteer" name="Volunteer" required>
        </div>
        <div class="form-group">
          <label for="profilePicture">Profile Picture:</label>
          <input type="file" id="profilePicture" name="profilePicture" accept="image/*">
          <img id="preview" src="#" alt="Profile Picture Preview">
        </div>
        <button type="submit">Update Profile</button>
      </form>
    </div>
</div>

<?php include 'app/views/Common/footer.php' ?>

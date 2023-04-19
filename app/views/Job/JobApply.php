<?php include 'app/views/Common/header.php' ?>

<!--CONTENT START-->

<link href="../../../css/JobApply.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<div class="content">
    <h3 class="content-header">Job Application</h3>
    <div class="container" style="display: flex; align-items: center; justify-content: center;">
        <div>
            <div class="Job-mother-box">


            <form method="post" enctype="multipart/form-data">
            <div class="Job-application-form">
                    <div class="Job-resume-box">
                        <div>
                            <div class="row apply-row">
                                <input class="Job-misc-check col-sm-9" type="checkbox" id="prevresume" onclick="uncheck('newresume')" name="prevresume" required>
                                <label for="prevresume" class="col">Use previous resume</label>
                                <select class="col drop-down" name="prevresumeid">
                                    <?php
                                    
                                        foreach ($data['resume'] as $resume) {
                                            echo '<option value="'. $resume->id .'">'. $resume->file_name .'</option>';
                                        }

                                    ?>
                                </select>
                            </div>
                            <div class="row apply-row">
                                <input class="Job-misc-check col-sm-9" type="checkbox" id="newresume" onclick="uncheck('prevresume')" name="newresume" required>
                                <label for="newresume" class="col">Upload new resume</label>
                                <input class="col file-picker" type="file" id="resume" name="resume" accept=".pdf">
                            </div>
                        </div>
                    </div>
                    <button class="Job-submit-btn" type="submit" name="apply">Submit Application</button>
                </div>
                <div class="Job-application-form">
                    <div class="Job-coverletter-box">
                        <div>
                            <div class="row apply-row">
                                <input class="Job-misc-check col-sm-9" type="checkbox" id="prevCL" onclick="uncheck('newCL')" name="prevCL" required>
                                <label for="prevCL" class="col">Use previous Cover Letter</label>
                                <select class="col drop-down" name="prevCLid">
                                    <?php
                                        
                                        foreach ($data['cletter'] as $cletter) {
                                            echo '<option value="'. $cletter->id .'">'. $cletter->file_name .'</option>';
                                        }

                                    ?>
                                </select>
                            </div>
                            <div class="row apply-row">
                                <input class="Job-misc-check col-sm-9" type="checkbox" id="newCL" onclick="uncheck('prevCL')" name="newCL" required>
                                <label for="newCL" class="col">Upload new Cover Letter</label>
                                <input class="col file-picker" type="file" id="cletter" name="cletter" accept=".pdf">
                            </div>
                        </div>
                    </div>
                    <div style="width: 19.5%"></div>
                </div>
            </form>


            </div>
        </div>
    </div>
    <section>
        <div class="row">
            <div class="col-sm-3">

                <div class="profile">
                    <img src="../../../assets/Connections/user-01.jpg" alt="Profile Picture">

                </div>
            </div>
            <div class="col-sm-9 profile-details">
                <h1>Jane Doe</h2>
                    <h3 class="subject">Software Engineer</h3>
                    <p>San Francisco, CA</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 skills">
                <h2>Skills</h2>
                <ul>
                    <li>Java</li>
                    <li>Python</li>
                    <li>JavaScript</li>
                    <li>React</li>
                    <li>Node.js</li>
                    <li>SQL</li>
                    <li>NoSQL</li>
                </ul>
            </div>
        </div>
        <h2>About Me</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <h2>Education</h2>
        <ul>
            <li>
                <h3 class="subject">Senior Software Engineer, ABC Company</h3>
                <p>June 2015 - Present</p>
                <p>Responsible for designing, developing and testing complex web applications using Java, Spring, and Hibernate frameworks. Worked with teams to implement new features and improve application performance. Managed a team of junior developers and provided guidance and mentorship as needed.</p>
            </li>
            <li>
                <h3 class="subject">Senior Software Engineer, ABC Company</h3>
                <p>June 2015 - Present</p>
                <p>Responsible for designing, developing and testing complex web applications using Java, Spring, and Hibernate frameworks. Worked with teams to implement new features and improve application performance. Managed a team of junior developers and provided guidance and mentorship as needed.</p>
            </li>
        </ul>

        <h2>Experience</h2>
        <ul>
            <li>
                <h3 class="subject">Senior Software Engineer, ABC Company</h3>
                <p>June 2015 - Present</p>
                <p>Responsible for designing, developing and testing complex web applications using Java, Spring, and Hibernate frameworks. Worked with teams to implement new features and improve application performance. Managed a team of junior developers and provided guidance and mentorship as needed.</p>
            </li>
            <li>
                <h3 class="subject">Senior Software Engineer, ABC Company</h3>
                <p>June 2015 - Present</p>
                <p>Responsible for designing, developing and testing complex web applications using Java, Spring, and Hibernate frameworks. Worked with teams to implement new features and improve application performance. Managed a team of junior developers and provided guidance and mentorship as needed.</p>
            </li>
        </ul>
        <h2>Volunteer</h2>
        <ul>
            <li>
                <h3 class="subject">Senior Software Engineer, ABC Company</h3>
                <p>June 2015 - Present</p>
                <p>Responsible for designing, developing and testing complex web applications using Java, Spring, and Hibernate frameworks. Worked with teams to implement new features and improve application performance. Managed a team of junior developers and provided guidance and mentorship as needed.</p>
            </li>
            <li>
                <h3 class="subject">Senior Software Engineer, ABC Company</h3>
                <p>June 2015 - Present</p>
                <p>Responsible for designing, developing and testing complex web applications using Java, Spring, and Hibernate frameworks. Worked with teams to implement new features and improve application performance. Managed a team of junior developers and provided guidance and mentorship as needed.</p>
            </li>
        </ul>
    </section>
</div>

<script>

    function uncheck(id) {
        document.getElementById(id).checked = false;
        document.getElementById(id).required = false;
    }

</script>

<!-- CONTENT END-->

<?php include 'app/views/Common/footer.php' ?>
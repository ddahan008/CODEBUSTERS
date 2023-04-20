<?php include 'app/views/Common/header.php' ?>

    <link href="../../../css/MyProfile.css" rel="stylesheet" type="text/css"/>

    <div class="content">
        <!--CONTENT START-->

        <h3 class="content-header">My Profile</h3>
        <section>
            <div class="row">
                <div class="col-sm-3">

                    <div class="profile">
                        <img src="../../../assets/Connections/user-01.jpg" alt="Profile Picture">
                        <div class="buttons">
                        <a href="/Profile/Edit/"><button class="edit">Edit</button></a>
                        <?php if ($data->public == 0) { // my profile is private ?>
                            <a href="/Profile/UpdateVisibility/1"><button type="button" id="makePublic" class="btn btn-lg btn-success">Make Public</button></a>
                        <?php   } else { ?>
                            <a href="/Profile/UpdateVisibility/0"><button type="button" id="makePrivate" class="btn btn-lg btn-danger">Make Private</button></a>
                        <?php   } ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 profile-details">
                    <h1><?=$data->fname, ' ', $data->lname?></h1>
                        <h3 class="subject"><?=$data->job_title?></h3>
                        <p><?=$data->location?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 skills">
                    <h2>Skills</h2>
                    <ul>
                        <li><?=$data->skills?></li>
                        <!--li>Python</li>
                        <li>JavaScript</li>
                        <li>React</li>
                        <li>Node.js</li>
                        <li>SQL</li>
                        <li>NoSQL</li-->
                    </ul>
                </div>
            </div>
            <h2>About Me</h2>
            <p><?=$data->about?></p>

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
        <!-- CONTENT END-->

<?php include 'app/views/Common/footer.php' ?>
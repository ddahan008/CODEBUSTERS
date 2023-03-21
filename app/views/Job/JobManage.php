<?php include 'app/views/Common/header.php' ?>

<!--CONTENT START-->
<link href="../../../css/Jobs.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<div class="content">
    <h3 class="content-header">Manage Jobs</h3>

    <div class="container">
        <div class="Job-main-box">
            <div class="Job-list-box">
                <div class="Job-add-btn-box">
                <a href="/Job/Create/"><button type="button" class="Job-misc-btn">CREATE JOB</button></a>
                </div>

                <?php
                if (is_array($data)) {
                    foreach ($data as $job) {
                        echo '
                                <div class="Job-list-item" onclick="getDescription(this, \'' . $job->id . '\', \'' . $job->title . '\', \'' . $job->location . '\', \'' . $job->deadline . '\', \'' . $job->descr . '\');">
                                    <div class="Job-list-logo">
                                        <img src="../../../assets/Jobs/temp_company_logo.png" alt="temp_company_logo">
                                    </div>
                                    <div class="Job-list-content">
                                        <h5>' . $job->title . '</h5>
                                        <p>Location: ' . $job->location . '</p>
                                        <p>Deadline: ' . $job->deadline . '</p>
                                    </div>
                                    <button type="button" class="Job-list-delete-btn"><a href="/Job/Delete/' . $job->id . '">X</a></button>
                                </div>
                            ';
                    }
                }
                ?>

            </div>
            <div class="Job-misc-box" id="Job-overview-box">
                <div class="Job-misc-title-box">
                    <h3>Job Overview</h3>
                    <button type="button" class="Job-edit-btn "><a class="Job-overview-content" href="#">EDIT</a></button>
                </div>
                <div class="Job-misc-input-box">
                    <h5 class="Job-overview-content"></h5>
                    <div class="Job-overview-content"></div>
                    <div class="Job-overview-content"></div>
                    <div class="Job-overview-content" style="text-align: justify;"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function getDescription(thisLmnt, id, title, location, deadline, description) {
        var lmnts = document.getElementsByClassName("Job-list-item");

        for (idx = 0; idx < lmnts.length; idx++) {
            lmnts[idx].style.backgroundColor = "#ffffff";
        }

        thisLmnt.style.backgroundColor = "#C3E7FC";

        miscBox = document.getElementById("Job-overview-box");
        miscBox.style.visibility = "visible";

        var overviewContent = document.getElementsByClassName("Job-overview-content");

        overviewContent[0].href = "/Job/Edit/" + id;
        overviewContent[1].innerHTML = title;
        overviewContent[2].innerHTML = "Location: " + location;
        overviewContent[3].innerHTML = "Deadline: " + deadline;
        overviewContent[4].innerHTML = "Description: " + description;
    }
</script>

<!-- CONTENT END-->

<?php include 'app/views/Common/footer.php' ?>
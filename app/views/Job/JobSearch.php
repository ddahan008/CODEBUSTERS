<?php include 'app/views/Common/header.php' ?>

<!--CONTENT START-->
<link href="../../../css/Jobs.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<div class="content">
    <h3 class="content-header">Search Jobs</h3>

    <div class="container">
        <div class="Job-mother-box">
            <form method="post" action="/Job/Search" class="Job-search-form">
                <div class="Job-search-box">
                    <label for="search">Search Jobs:</label>
                    <div class="Job-search">
                        <input type="text" id="search" name="search">
                        <button class="Job-edit-btn" type="submit" name="action">Search</button>
                    </div>
                </div>
                <div class="Job-filter-box">
                    <div class="Job-filter-list">
                        <label for="parttime">Part Time:</label>
                        <input class="Job-misc-check" type="checkbox" id="parttime" name="parttime">
                        <label for="remote">Remote:</label>
                        <input class="Job-misc-check" type="checkbox" id="remote" name="remote">
                    </div>
                    <div class="Job-filter-list">
                        <label for="fulltime">Full Time:</label>
                        <input class="Job-misc-check" type="checkbox" id="fulltime" name="fulltime">
                        <label for="onsite">On Site:</label>
                        <input class="Job-misc-check" type="checkbox" id="onsite" name="onsite">
                    </div>
                </div>
            </form>
            <div class="Job-main-box">
                <div class="Job-list-box">
                    <?php
                    if (is_array($data['jobs'])) {
                        foreach ($data['jobs'] as $job) {
                            $title = $job->title;
                            $already_applied = false;

                            if (is_array($data['already_applied'])) {
                                for ($idx = 0; $idx < count($data['already_applied']); $idx++) {
                                    if ($data['already_applied'][$idx]['jid'] == $job->id) {
                                        $already_applied = true;
                                    }
                                }
                            }


                            if ($job->easy_apply == 1) {
                                $title .= ' <br><span class="Job-list-easy-apply">Easily Apply</span>';
                            }
                            if ($job->apply_on_web == 1) {
                                $title .= ' <br><span class="Job-list-apply-on-web">Apply On Company Website</span>';
                            }
                            echo '
                                <div class="Job-list-item" onclick="getDescription(this, \'' . $job->id . '\', \'' . $job->title . '\', \'' . $job->location . '\', \'' . $job->deadline . '\', \'' . $job->descr . '\', '. $already_applied .');">
                                    <div class="Job-list-logo">
                                        <img src="../../../assets/Jobs/temp_company_logo.png" alt="temp_company_logo">
                                    </div>
                                    <div class="Job-list-content">
                                        <h5>' . $title . '</h5>
                                        <p>Location: ' . $job->location . '</p>
                                        <p>Deadline: ' . $job->deadline . '</p>
                                    </div>
                                </div>
                            ';
                        }
                    }
                    ?>
                </div>
                <div class="Job-misc-box" id="Job-overview-box">
                    <div class="Job-misc-title-box">
                        <h3>Job Overview</h3>
                        <button type="button" class="Job-edit-btn " name="apply" id="apply"><a class="Job-overview-content" href="">APPLY</a></button>
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
</div>

<script>

    function getDescription(thisLmnt, id, title, location, deadline, description, already_applied) {
        var lmnts = document.getElementsByClassName("Job-list-item");

        for (idx = 0; idx < lmnts.length; idx++) {
            lmnts[idx].style.backgroundColor = "#ffffff";
        }

        thisLmnt.style.backgroundColor = "#C3E7FC";

        miscBox = document.getElementById("Job-overview-box");
        miscBox.style.visibility = "visible";
        
        var overviewContent = document.getElementsByClassName("Job-overview-content");

        if (already_applied) {
            overviewContent[0].innerHTML = "Applied";
            document.getElementById("apply").style.backgroundColor = "#e95656";
        }
        else {
            overviewContent[0].innerHTML = "Apply";
            document.getElementById("apply").style.backgroundColor = "#18A0FB";
            overviewContent[0].href = "/Job/Apply/" + id;
        }

        overviewContent[1].innerHTML = title;
        overviewContent[2].innerHTML = "Location: " + location;
        overviewContent[3].innerHTML = "Deadline: " + deadline;
        overviewContent[4].innerHTML = "Description: " + description;
    }

</script>

<!-- CONTENT END-->

<?php include 'app/views/Common/footer.php' ?>
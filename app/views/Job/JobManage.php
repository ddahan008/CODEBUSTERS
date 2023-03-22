<?php include 'app/views/Common/header.php' ?>

<!--CONTENT START-->
<link href="../../../css/Jobs.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<div class="content">
    <h3 class="content-header" style="font-weight:100;">Manage Jobs</h3>

    <div class="container">   
        <div class="Job-main-box">
            <div class="Job-list-box">
                <div class="Job-add-btn-box">
                <a href="/Job/Create/"><button type="button" class="Job-misc-btn">CREATE JOB</button></a>
                </div>

                <?php
                if (is_array($data)) {
                    foreach ($data as $job) {
                        $title = $job->title;
                        if ($job->easy_apply == 1) {
                            $title .= ' <br><span class="Job-list-easy-apply">Easily Apply</span>';
                        }
                        if ($job->apply_on_web == 1) {
                            $title .= ' <br><span class="Job-list-apply-on-web">Apply On Company Website</span>';
                        }
                        echo '
                            <div class="Job-list-item" onclick="getDescription(this, \'' . $job->id . '\', \'' . $job->title . '\', \'' . $job->location . '\', \'' . $job->deadline . '\', \'' . $job->descr . '\');">
                                <div class="Job-list-logo">
                                    <img src="../../../assets/Jobs/temp_company_logo.png" alt="temp_company_logo">
                                </div>
                                <div class="Job-list-content">
                                    <h5>' . $title . '</h5>
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
                          <!-- Add the share modal code here -->
                          <div id="Job-share-modal" class="modal">
                <div class="modal-content"> 
                <h3>Share this Job Posting on:</h3>
                    <div class="share-icons">
                        <a href="https://facebook.com">Facebook</a>
                        <a href="https://twitter.com/compose/tweet">Twitter</a>
                        <a href="https://www.linkedin.com/post/new/">LinkedIn</a>
                    </div>
                    <div class="cxx">
                    <button type="button" class="Job-cancel-share">CANCEL</button>
                </div>
                </div>
            </div>
             
            <div class="Job-misc-box" id="Job-overview-box">
                <div class="Job-misc-title-box">
                    <h3>Job Overview</h3>
                    <button type="button" class="Job-share">SHARE</button>
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

        // Get the share button element
  var shareBtn = document.querySelector('.Job-share');

// Add a click event listener to the share button
shareBtn.addEventListener('click', function() {
  // Get the modal element
  var modal = document.getElementById('Job-share-modal');

  // Set the modal to visible
  modal.style.display = 'block';
});
// Get the cancel button element
var cancelBtn = document.querySelector('.Job-cancel-share');

// Add a click event listener to the cancel button
cancelBtn.addEventListener('click', function() {
    // Get the modal element
    var modal = document.getElementById('Job-share-modal');

    // Hide the modal
    modal.style.display = 'none';
});
    }
</script>

<!-- CONTENT END-->

<?php include 'app/views/Common/footer.php' ?>
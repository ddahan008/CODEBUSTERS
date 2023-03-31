<?php include 'app/views/Common/header.php' ?>

<!--CONTENT START-->
<link href="../../../css/Jobs.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<div class="content">

    <h3 class="content-header">Create Job Posting</h3>

    <div class="container">
        <div class="Job-main-box">
            <div class="Job-list-box">

                <?php
                if (is_array($data)) {
                    foreach ($data as $job) {
                        echo '
                                <div class="Job-list-item">
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

            <div class="Job-misc-box">
                <form method="post">
                    <div class="Job-misc-title-box">
                        <h3>Create Job</h3>
                        <button class="Job-misc-btn" type="submit" name="action">CREATE</button>
                    </div>
                    <div class="Job-misc-input-box">

                        <div class="Job-misc-form-item">
                            <label class="Job-misc-form-label" for="title">Title:</label>
                            <input class="Job-misc-form-input" type="text" id="title" name="title" required>
                        </div>

                        <div class="Job-misc-form-item">
                            <label class="Job-misc-form-label" for="deadline">Deadline:</label>
                            <input class="Job-misc-form-input" type="date" id="deadline" name="deadline" required>
                        </div>

                        <div class="Job-misc-form-item">
                            <label class="Job-misc-form-label" for="location">Location:</label>
                            <input class="Job-misc-form-input" type="text" id="location" name="location" required>
                        </div>

                        <div class="Job-misc-check-box Job-misc-form-item">
                            <label class="" for="easyapply">Easily Apply:</label>
                            <input class="Job-misc-check" type="checkbox" id="easyapply" name="easy_apply">
                        </div>

                        <div class="Job-misc-check-box Job-misc-form-item">
                            <label class="" for="applyonwebsite">Apply On Company Website:</label>
                            <input class="Job-misc-check" type="checkbox" id="applyonwebsite" name="apply_on_web">
                        </div>

                        <div class="Job-misc-form-item">
                            <label class="Job-misc-form-label" for="link">Website Link:</label>
                            <input class="Job-misc-form-input" type="test" id="link" name="link">
                        </div>

                        <div class="Job-misc-form-label Job-misc-form-item">Description:</div>
                        <div class="Job-misc-form-item">
                            <textarea class="Job-misc-form-input" id="description" name="description" required></textarea>
                        </div>

                        <div class="Job-misc-form-item">
                            <label class="Job-misc-form-label" for="companylogo">Company Logo:</label>
                            <input class="Job-misc-form-input" type="file" id="companylogo" name="company_logo">
                        </div>

                        <!--CUSTOM APPLICATION-->

                        <div class="Job-misc-form-item">
                            <h6>Application Form:</h6>
                            <h6 class="Job-align-end">Mandatory</h6>
                        </div>
                        <div class="Job-misc-form-item">
                            <span>Prefix</span>
                            <input class="Job-misc-check" type="checkbox" id="prefix-mandatory" name="prefix_mandatory">
                        </div>
                        <div class="Job-misc-form-item">
                            <span>First Name</span>
                            <input class="Job-misc-check" type="checkbox" id="fname-mandatory" name="fname_mandatory">
                        </div>
                        <div class="Job-misc-form-item">
                            <span>Last Name</span>
                            <input class="Job-misc-check" type="checkbox" id="lname-mandatory" name="lname_mandatory">
                        </div>
                        <div class="Job-misc-form-item">
                            <span>Prefered Pronouns</span>
                            <input class="Job-misc-check" type="checkbox" id="pronouns-mandatory" name="pronouns_mandatory">
                        </div>
                        <div class="Job-misc-form-item">
                            <span>Email</span>
                            <input class="Job-misc-check" type="checkbox" id="email-mandatory" name="email_mandatory">
                        </div>
                        <div class="Job-misc-form-item">
                            <span>Work Phone</span>
                            <input class="Job-misc-check" type="checkbox" id="workphone-mandatory" name="work_phone_mandatory">
                        </div>
                        <div class="Job-misc-form-item">
                            <span>Cell Phone</span>
                            <input class="Job-misc-check" type="checkbox" id="cellphone-mandatory" name="cell_phone_mandatory">
                        </div>
                        <div class="Job-misc-form-item">
                            <span>Upload Custom CV</span>
                            <input class="Job-misc-check" type="checkbox" id="cv-upload-mandatory" name="upload_cv_mandatory">
                        </div>
                        <div class="Job-misc-form-item" id="Job-custom-form-1" style="display: none;">
                            <div class="Job-form-management-delete-btn" onclick="hideCustom(1);">X</div>
                            <input style="margin-left: 40px; height: 24px; width: 80%;" type="text" name="custom_question_1">
                            <input class="Job-misc-check" type="checkbox" id="Job-cust-mandatory-1" name="custom_question_1_mandatory" />
                        </div>
                        <div class="Job-misc-form-item" id="Job-custom-form-2" style="display: none;">
                            <div class="Job-form-management-delete-btn" onclick="hideCustom(2);">X</div>
                            <input style="margin-left: 40px; height: 24px; width: 80%;" type="text" name="custom_question_2">
                            <input class="Job-misc-check" type="checkbox" id="Job-cust-mandatory-2" name="custom_question_2_mandatory">
                        </div>
                        <div class="Job-misc-form-item" id="Job-custom-form-3" style="display: none;">
                            <div class="Job-form-management-delete-btn" onclick="hideCustom(3);">X</div>
                            <input style="margin-left: 40px; height: 24px; width: 80%;" type="text" name="custom_question_3">
                            <input class="Job-misc-check" type="checkbox" id="Job-cust-mandatory-3" name="custom_question_3_mandatory">
                        </div>
                        <div class="Job-misc-form-item" id="Job-custom-form-4" style="display: none;">
                            <div class="Job-form-management-delete-btn" onclick="hideCustom(4);">X</div>
                            <input style="margin-left: 40px; height: 24px; width: 80%;" type="text" name="custom_question_4">
                            <input class="Job-misc-check" type="checkbox" id="Job-cust-mandatory-4" name="custom_question_4_mandatory">
                        </div>
                        <div class="Job-misc-form-item" id="Job-custom-form-5" style="display: none;">
                            <div class="Job-form-management-delete-btn" onclick="hideCustom(5);">X</div>
                            <input style="margin-left: 40px; height: 24px; width: 80%;" type="text" name="custom_question_5">
                            <input class="Job-misc-check" type="checkbox" id="Job-cust-mandatory-5" name="custom_question_5_mandatory">
                        </div>
                        <div class="Job-add-form-field-btn" onclick="showCustom();">
                            Add Custom Form Field
                        </div>

                        <!--CUSTOM APPLICATION-->

                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<script>
    sessionStorage.setItem("idx", 1);

    function showCustom() {
        if (sessionStorage.getItem("idx") == 6) {
            idx = 1;
        } else {
            idx = sessionStorage.getItem("idx");
        }
        let id = "Job-custom-form-" + idx;
        let otherId = "Job-cust-mandatory-" + idx;
        document.getElementById(id).style.display = "flex";
        document.getElementById(id).style.justifyContent = "space-between";
        document.getElementById(id).style.alignItems = "center";
        document.getElementById(otherId).style.height = "24px";
        idx = Number(idx) + 1;
        sessionStorage.setItem("idx", idx);
    }

    function hideCustom(idx) {
        let id = "Job-custom-form-" + idx;
        document.getElementById(id).style.display = "none";
    }
</script>

<!-- CONTENT END-->

<?php include 'app/views/Common/footer.php' ?>
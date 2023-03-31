<?php include 'app/views/Common/header.php' ?>

<!--CONTENT START-->
<link href="../../../css/Jobs.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

<div class="content">

    <h3 class="content-header">Edit Job Posting</h3>

    <div class="container">
        <div class="Job-main-box">
            <div class="Job-list-box">
                <?php
                echo '
                            <div class="Job-list-item Job-item-active">
                                <div class="Job-list-logo">
                                    <img src="../../../assets/Jobs/temp_company_logo.png" alt="temp_company_logo">
                                </div>
                                <div class="Job-list-content">
                                    <h5>' . $data[0]->title . '</h5>
                                    <p>Location: ' . $data[0]->location . '</p>
                                    <p>Deadline: ' . $data[0]->deadline . '</p>
                                </div>
                            </div>
                        ';
                ?>
            </div>

            <div class="Job-misc-box">
                <form method="post">
                    <div class="Job-misc-title-box">
                        <h3>Editing Job</h3>
                        <button class="Job-save-btn" type="submit" name="action" value="<?= $data[0]->id ?>">SAVE</button>
                    </div>
                    <div class="Job-misc-input-box">

                        <div class="Job-misc-form-item">
                            <label class="Job-misc-form-label" for="title">Title:</label>
                            <input class="Job-misc-form-input" type="text" id="title" name="title" value="<?= $data[0]->title ?>">
                        </div>

                        <div class="Job-misc-form-item">
                            <label class="Job-misc-form-label" for="deadline">Deadline:</label>
                            <input class="Job-misc-form-input" type="date" id="deadline" name="deadline" value="<?= $data[0]->deadline ?>">
                        </div>

                        <div class="Job-misc-form-item">
                            <label class="Job-misc-form-label" for="location">Location:</label>
                            <input class="Job-misc-form-input" type="text" id="location" name="location" value="<?= $data[0]->location ?>">
                        </div>

                        <div class="Job-misc-check-box Job-misc-form-item">
                            <label class="" for="easyapply">Easily Apply:</label>
                            <input class="Job-misc-check" type="checkbox" id="easyapply" name="easy_apply" <?php if ($data[0]->easy_apply == 1) {
                                                                                                                echo 'checked';
                                                                                                            } ?>>
                        </div>

                        <div class="Job-misc-check-box Job-misc-form-item">
                            <label class="" for="applyonwebsite">Apply On Company Website:</label>
                            <input class="Job-misc-check" type="checkbox" id="applyonwebsite" name="apply_on_web" <?php if ($data[0]->apply_on_web == 1) {
                                                                                                                        echo 'checked';
                                                                                                                    } ?>>
                        </div>

                        <div class="Job-misc-form-item">
                            <label class="Job-misc-form-label" for="link">Website Link:</label>
                            <input class="Job-misc-form-input" type="test" id="link" name="link" value="<?= $data[0]->web_link ?>">
                        </div>

                        <div class="Job-misc-form-label Job-misc-form-item">Description:</div>
                        <div class="Job-misc-form-item">
                            <textarea class="Job-misc-form-input" id="description" name="description"><?= $data[0]->descr ?></textarea>
                        </div>

                        <div class="Job-misc-form-item">
                            <label class="Job-misc-form-label" for="companylogo">Company Logo:</label>
                            <input class="Job-misc-form-input" type="file" id="companylogo" name="companylogo">
                        </div>

                        <!--CUSTOM APPLICATION-->

                        <div class="Job-misc-form-item">
                            <h6>Application Form:</h6>
                            <h6 class="Job-align-end">Mandatory</h6>
                        </div>
                        <div class="Job-misc-form-item">
                            <span>Prefix</span>
                            <input class="Job-misc-check" type="checkbox" id="prefix-mandatory" name="prefix_mandatory" <?php if ($data[0]->application_rule[0]->prefix_mandatory == 1) {
                                                                                                                            echo 'checked';
                                                                                                                        } ?>>
                        </div>
                        <div class="Job-misc-form-item">
                            <span>First Name</span>
                            <input class="Job-misc-check" type="checkbox" id="fname-mandatory" name="fname_mandatory" <?php if ($data[0]->application_rule[0]->fname_mandatory == 1) {
                                                                                                                            echo 'checked';
                                                                                                                        } ?>>
                        </div>
                        <div class="Job-misc-form-item">
                            <span>Last Name</span>
                            <input class="Job-misc-check" type="checkbox" id="lname-mandatory" name="lname_mandatory" <?php if ($data[0]->application_rule[0]->lname_mandatory == 1) {
                                                                                                                            echo 'checked';
                                                                                                                        } ?>>
                        </div>
                        <div class="Job-misc-form-item">
                            <span>Prefered Pronouns</span>
                            <input class="Job-misc-check" type="checkbox" id="pronouns-mandatory" name="pronouns_mandatory" <?php if ($data[0]->application_rule[0]->pronouns_mandatory == 1) {
                                                                                                                                echo 'checked';
                                                                                                                            } ?>>
                        </div>
                        <div class="Job-misc-form-item">
                            <span>Email</span>
                            <input class="Job-misc-check" type="checkbox" id="email-mandatory" name="email_mandatory" <?php if ($data[0]->application_rule[0]->email_mandatory == 1) {
                                                                                                                            echo 'checked';
                                                                                                                        } ?>>
                        </div>
                        <div class="Job-misc-form-item">
                            <span>Work Phone</span>
                            <input class="Job-misc-check" type="checkbox" id="workphone-mandatory" name="work_phone_mandatory" <?php if ($data[0]->application_rule[0]->work_phone_mandatory == 1) {
                                                                                                                                    echo 'checked';
                                                                                                                                } ?>>
                        </div>
                        <div class="Job-misc-form-item">
                            <span>Cell Phone</span>
                            <input class="Job-misc-check" type="checkbox" id="cellphone-mandatory" name="cell_phone_mandatory" <?php if ($data[0]->application_rule[0]->cell_phone_mandatory == 1) {
                                                                                                                                    echo 'checked';
                                                                                                                                } ?>>
                        </div>
                        <div class="Job-misc-form-item">
                            <span>Upload Custom CV</span>
                            <input class="Job-misc-check" type="checkbox" id="cv-upload-mandatory" name="upload_cv_mandatory" <?php if ($data[0]->application_rule[0]->upload_cv_mandatory == 1) {
                                                                                                                                    echo 'checked';
                                                                                                                                } ?>>
                        </div>
                        <div class="Job-misc-form-item" id="Job-custom-form-1" style="display: <?php if ($data[0]->application_rule[0]->custom_question_1) {
                                                                                                    echo 'flex';
                                                                                                } else {
                                                                                                    echo 'none';
                                                                                                } ?>;">
                            <div class="Job-form-management-delete-btn" onclick="hideCustom(1);">X</div>
                            <input style="margin-left: 40px; height: 24px; width: 80%;" type="text" id="Job-cust-1" name="custom_question_1" value="<?= $data[0]->application_rule[0]->custom_question_1 ?>">
                            <input class="Job-misc-check" type="checkbox" id="Job-cust-mandatory-1" name="custom_question_1_mandatory" <?php if ($data[0]->application_rule[0]->custom_question_1_mandatory == 1) {
                                                                                                                                            echo 'checked';
                                                                                                                                        } ?>>
                        </div>
                        <div class="Job-misc-form-item" id="Job-custom-form-2" style="display: <?php if ($data[0]->application_rule[0]->custom_question_2) {
                                                                                                    echo 'flex';
                                                                                                } else {
                                                                                                    echo 'none';
                                                                                                } ?>;">
                            <div class="Job-form-management-delete-btn" onclick="hideCustom(2);">X</div>
                            <input style="margin-left: 40px; height: 24px; width: 80%;" type="text" id="Job-cust-2" name="custom_question_2" value="<?= $data[0]->application_rule[0]->custom_question_2 ?>">
                            <input class="Job-misc-check" type="checkbox" id="Job-cust-mandatory-2" name="custom_question_2_mandatory" <?php if ($data[0]->application_rule[0]->custom_question_2_mandatory == 1) {
                                                                                                                                            echo 'checked';
                                                                                                                                        } ?>>
                        </div>
                        <div class="Job-misc-form-item" id="Job-custom-form-3" style="display: <?php if ($data[0]->application_rule[0]->custom_question_3) {
                                                                                                    echo 'flex';
                                                                                                } else {
                                                                                                    echo 'none';
                                                                                                } ?>;">
                            <div class="Job-form-management-delete-btn" onclick="hideCustom(3);">X</div>
                            <input style="margin-left: 40px; height: 24px; width: 80%;" type="text" id="Job-cust-3" name="custom_question_3" value="<?= $data[0]->application_rule[0]->custom_question_3 ?>">
                            <input class="Job-misc-check" type="checkbox" id="Job-cust-mandatory-3" name="custom_question_3_mandatory" <?php if ($data[0]->application_rule[0]->custom_question_3_mandatory == 1) {
                                                                                                                                            echo 'checked';
                                                                                                                                        } ?>>
                        </div>
                        <div class="Job-misc-form-item" id="Job-custom-form-4" style="display: <?php if ($data[0]->application_rule[0]->custom_question_4) {
                                                                                                    echo 'flex';
                                                                                                } else {
                                                                                                    echo 'none';
                                                                                                } ?>;">
                            <div class="Job-form-management-delete-btn" onclick="hideCustom(4);">X</div>
                            <input style="margin-left: 40px; height: 24px; width: 80%;" type="text" id="Job-cust-4" name="custom_question_4" value="<?= $data[0]->application_rule[0]->custom_question_4 ?>">
                            <input class="Job-misc-check" type="checkbox" id="Job-cust-mandatory-4" name="custom_question_4_mandatory" <?php if ($data[0]->application_rule[0]->custom_question_4_mandatory == 1) {
                                                                                                                                            echo 'checked';
                                                                                                                                        } ?>>
                        </div>
                        <div class="Job-misc-form-item" id="Job-custom-form-5" style="display: <?php if ($data[0]->application_rule[0]->custom_question_5) {
                                                                                                    echo 'flex';
                                                                                                } else {
                                                                                                    echo 'none';
                                                                                                } ?>;">
                            <div class="Job-form-management-delete-btn" onclick="hideCustom(5);">X</div>
                            <input style="margin-left: 40px; height: 24px; width: 80%;" type="text" id="Job-cust-5" name="custom_question_5" value="<?= $data[0]->application_rule[0]->custom_question_5 ?>">
                            <input class="Job-misc-check" type="checkbox" id="Job-cust-mandatory-5" name="custom_question_5_mandatory" <?php if ($data[0]->application_rule[0]->custom_question_5_mandatory == 1) {
                                                                                                                                            echo 'checked';
                                                                                                                                        } ?>>
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
        document.getElementById("Job-cust-" + idx).value = "";
        document.getElementById("Job-cust-mandatory-" + idx).checked = false;
        document.getElementById("Job-custom-form-" + idx).style.display = "none";
    }
</script>

<!-- CONTENT END-->

<?php include 'app/views/Common/footer.php' ?>
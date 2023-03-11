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
                            <input class="Job-misc-form-input" type="text" id="deadline" name="deadline" value="<?= $data[0]->deadline ?>">
                        </div>

                        <div class="Job-misc-form-item">
                            <label class="Job-misc-form-label" for="location">Location:</label>
                            <input class="Job-misc-form-input" type="text" id="location" name="location" value="<?= $data[0]->location ?>">
                        </div>

                        <div class="Job-misc-check-box Job-misc-form-item">
                            <label class="" for="easyapply">Easily Apply:</label>
                            <input class="Job-misc-check" type="checkbox" id="easyapply" name="easyapply" <?php if($data[0]->easy_apply == 1) {echo 'checked';} ?>>
                        </div>

                        <div class="Job-misc-check-box Job-misc-form-item">
                            <label class="" for="applyonwebsite">Apply On Company Website:</label>
                            <input class="Job-misc-check" type="checkbox" id="applyonwebsite" name="applyonwebsite" <?php if($data[0]->apply_on_web == 1) {echo 'checked';} ?>>
                        </div>

                        <div class="Job-misc-form-item">
                            <label class="Job-misc-form-label" for="link">Website Link:</label>
                            <input class="Job-misc-form-input" type="test" id="link" name="link"  value="<?= $data[0]->web_link ?>">
                        </div>

                        <div class="Job-misc-form-label Job-misc-form-item">Description:</div>
                        <div class="Job-misc-form-item">
                            <textarea class="Job-misc-form-input" id="description" name="description"><?= $data[0]->descr ?></textarea>
                        </div>

                        <div class="Job-misc-form-item">
                            <label class="Job-misc-form-label" for="companylogo">Company Logo:</label>
                            <input class="Job-misc-form-input" type="file" id="companylogo" name="companylogo">
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<!-- CONTENT END-->

<?php include 'app/views/Common/footer.php' ?>
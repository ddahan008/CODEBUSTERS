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
                            <input class="Job-misc-check" type="checkbox" id="easyapply" name="easyapply">
                        </div>

                        <div class="Job-misc-check-box Job-misc-form-item">
                            <label class="" for="applyonwebsite">Apply On Company Website:</label>
                            <input class="Job-misc-check" type="checkbox" id="applyonwebsite" name="applyonwebsite">
                        </div>

                        <div class="Job-misc-form-item">
                            <label class="Job-misc-form-label" for="link">Website Link:</label>
                            <input class="Job-misc-form-input" type="test" id="link" name="link">
                        </div>

                        <div class="Job-misc-form-label Job-misc-form-item">Description:</div>
                        <div class="Job-misc-form-item">
                            <textarea class="Job-misc-form-input" type="checkbox" id="description" name="description" required></textarea>
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
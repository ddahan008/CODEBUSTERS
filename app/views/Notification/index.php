<?php include 'app/views/Common/header.php' ?>

    <div class="content">

        <!--CONTENT START-->
        <h3 class="content-header">Notifications</h3>
        <div class="container">
            <div class="notification success">
                <h2>Invitation Request</h2>
                <p>A user wants to join your network.</p>
                <button>Accept</button>
                <button>Decline</button>

                <?php if (is_array($data)) { ?>
                    <div class="grid-container">
                        <?php foreach ($data as $datum) { ?>
                            <div class="box"><a href="#"><h4 class="item"><?=$datum->fname, ' ', $datum->lname?></h4></a>
                                <p class="description-item"><?=$datum->job_title?></p>
                                <button type="button" id="accept" class="btn btn-lg btn-success"><a href="/Invitation/Accept/<?=$datum->id?>">Accept</a></button>
                                <button type="button" id="reject" class="btn btn-lg btn-success"><a href="/Invitation/Reject/<?=$datum->id?>">Reject</a></button>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
            <div class="notification info">
                <h2>Messages</h2>
                <p>You received a message from a user.</p>
                <button>Go to messages</button>
            </div>
            <div class="notification warning">
                <h2>New Job Posting</h2>
                <p>There is a new job posting that matches your interests.</p>
                <button>View Job Posting</button>
            </div>
            <div class="notification error">
                <h2>Updates</h2>
                <p>We will be releasing v2.2.</p>
                <button>More Information</button>
            </div>
        </div>
    </div>


    <!-- CONTENT END-->

<?php include 'app/views/Common/footer.php' ?>

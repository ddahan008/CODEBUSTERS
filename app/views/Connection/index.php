<?php include 'app/views/Common/header.php' ?>

    <link href="../../../css/Connections.css" rel="stylesheet" type="text/css"/>


    <div class="content">

        <!--CONTENT START-->
        <h3 class="content-header"> Connections </h3>

        <?php if (is_array($data)) { ?>
            <div class="grid-container">
                <?php foreach ($data as $datum) { ?>
                    <div class="box"><a href="#"><img src="../../../assets/Connections/user.jpg" alt="Connections"><h4 class="item"><?=$datum->fname, ' ', $datum->lname?></h4></a>
                        <p class="description-item"><?=$datum->job_title?></p>
                        <button class="message"><a href="/Chat/">Message</a></button>
                        <button type="button" id="disconnect" class="btn btn-lg btn-success"><a href="/Connection/Remove/<?=$datum->id?>">Disconnect</a></button>
                        <button class="report">Report</button>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
    <!-- CONTENT END-->

<?php include 'app/views/Common/footer.php' ?>

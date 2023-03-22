<?php include 'app/views/Common/header.php' ?>

<link href="../../../css/HomePage.css" rel="stylesheet" type="text/css" />
<link href="../../../css/Connections.css" rel="stylesheet" type="text/css" />

<div class="content">
    <!--CONTENT START-->
    <h3 class="content-header"> Company </h3>
    <div class="addPlacement">
    <button class="add-button"><a href="/Company/Add">ADD</a></button>
    </div>
    <div class="grid-container">

        <?php if (is_array($data)) {
            foreach ($data as $company) { ?>
                <div class="box"><a href="#"><img src="../../../assets/Connections/user.jpg" alt="<?= $company->name ?>">
                        <h4 class="item"><?= $company->name ?></h4>
                    </a>
                    <p class="description-item"><?= $company->descr ?></p>
                    <?php if (!$this->amFollowing($company->id)) { // if I am following the company ?>
                        <button type="button" id="followButton" class="btn btn-lg btn-danger"><a href="/Company/Follow/<?= $company->id ?>">Follow</a></button>
                    <?php   } else { ?>
                        <button type="button" id="followButton" class="btn btn-lg btn-success"><a href="/Company/Unfollow/<?= $company->id ?>">Unfollow</a></button>
                    <?php   } ?>

                    <?php if ($this->amCreator($company->id)) { // If I am creator of the company ?>
                        <button type="button" id="deleteButton" class="btn btn-lg btn-danger"><a href="/Company/Delete/<?= $company->id ?>">Delete</a></button>
                    <?php } ?>
                </div>
        <?php }
        } ?>
    </div>

</div>
<!-- CONTENT END-->


<?php include 'app/views/Common/footer.php' ?>

<?php include 'app/views/Common/header.php' ?>

<link href="../../../css/HomePage.css" rel="stylesheet" type="text/css" />
<link href="../../../css/Connections.css" rel="stylesheet" type="text/css" />

<div class="content">
    <!--CONTENT START-->
    <h3 class="content-header"> Groups </h3>
    <div class="addPlacement">
    <button class="add-button"><a href="/Group/Add">ADD</a></button>
    </div>
    <div class="grid-container">

        <?php if (is_array($data)) {
            foreach ($data as $group) { ?>
                <div class="box"><a href="#"><img src="../../../assets/Connections/user.jpg" alt="<?= $group->name ?>">
                        <h4 class="item"><?= $group->name ?></h4>
                    </a>
                    <p class="description-item"><?= $group->descr ?></p>
                    <?php if (!$this->amSubscribed($group->id)) { // if I am subscribed to the group ?>
                        <button type="button" id="subscribeButton" class="btn btn-lg btn-danger"><a href="/Group/Join/<?= $group->id ?>">Join</a></button>
                    <?php   } else { ?>
                        <button type="button" id="subscribeButton" class="btn btn-lg btn-success"><a href="/Group/Leave/<?= $group->id ?>">Leave</a></button>
                    <?php   } ?>

                    <?php if ($this->amCreator($group->id)) { // If I am creator of the group ?>
                        <button type="button" id="deleteButton" class="btn btn-lg btn-danger"><a href="/Group/Delete/<?= $group->id ?>">Delete</a></button>
                    <?php } ?>
                </div>
        <?php }
        } ?>
    </div>

</div>
<!-- CONTENT END-->


<?php include 'app/views/Common/footer.php' ?>
<?php include 'app/views/Common/header.php' ?>

    <link href="../../../css/HomePage.css" rel="stylesheet" type="text/css"/>
    <link href="../../../css/Connections.css" rel="stylesheet" type="text/css"/>

    <div class="content">
        <!--CONTENT START-->
        <h3 class="content-header"> Events </h3>
        <button><a href="/Event/Add">Add</a></button>

        <div class="grid-container">

            <?php if (is_array($data)) { foreach($data as $event) { ?>
                <div class="box"><a href="#"><img src="../../../assets/Connections/user.jpg" alt="<?=$event->name?>"><h4 class="item"><?=$event->name?></h4></a>
                    <p class="description-item"><?=$event->descr?></p>
                    <p class="description-item"><?=$event->date?></p>

                    <?php if (!$this->amSubscribed($event->id)) { // If I am subscribed to the event ?>
                        <button type="button" id="subscribeButton" class="btn btn-lg btn-danger"><a href="/Event/Join/<?= $event->id ?>">Join</a></button>
                    <?php } else { ?>
                        <button type="button" id="subscribeButton" class="btn btn-lg btn-success"><a href="/Event/Leave/<?= $event->id ?>">Leave</a></button>
                    <?php } ?>
                    
                    <?php if ($this->amCreator($event->id)) { // If I am creator of the event ?>
                        <button type="button" id="deleteButton" class="btn btn-lg btn-danger"><a href="/Event/Delete/<?= $event->id ?>">Delete</a></button>
                    <?php } ?>
                </div>
            <?php } } ?>
        </div>

    </div>
    <!-- CONTENT END-->

<?php include 'app/views/Common/footer.php' ?>
<?php include 'app/views/Common/header.php' ?>

    <link href="../../../css/HomePage.css" rel="stylesheet" type="text/css"/>
    <link href="../../../css/Connections.css" rel="stylesheet" type="text/css"/>

    <div class="content">
        <!--CONTENT START-->
        <h3 class="content-header"> Groups </h3>
        <button><a href="/Group/Add">Add</a></button>

        <?php if (is_array($data)) { foreach($data as $group) { ?>
            <div class="grid-container">
            <div class="box"><a href="#"><img src="../../../assets/Connections/user.jpg" alt="<?=$group->name?>"><h4 class="item"><?=$group->name?></h4></a>
                <p class="description-item"><?=$group->descr?></p>
                <button class="report">Join</button>
            </div>
        </div>
        <?php } } ?>

    </div>
    <!-- CONTENT END-->

<?php include 'app/views/Common/footer.php' ?>
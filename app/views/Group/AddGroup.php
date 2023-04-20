<?php include 'app/views/Common/header.php' ?>

    <link href="../../../css/MyProfile.css" rel="stylesheet" type="text/css"/>
    <link href="../../../css/edit.css" rel="stylesheet" type="text/css"/>

    <div class="content">
        <!--CONTENT START-->

        <h3 class="content-header">Create Group</h3>
        <div class="container">
        <form class="form-format" method="post">
        <div class="form-group">
          <label for="name">Group Name:</label>
          <br>
          <input type="text" name="name" class="form-control" id="name" placeholder="Group Name" required/>
        </div>
        <br>
        <div class="form-group">
          <label for="desc">Group Description:</label>
          <br>
          <input type="text" name="descr" class="form-control" id="descr" placeholder="Description" required/>
        </div>

        <button type="submit" name="action" class="create">Create Group</button>
        <button class="cancel" onclick="window.location.href='/Group'">Cancel</button>
    </form>
        </div>
        <!-- CONTENT END-->

<?php include 'app/views/Common/footer.php' ?>

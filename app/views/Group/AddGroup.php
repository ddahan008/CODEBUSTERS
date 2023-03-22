<?php include 'app/views/Common/header.php' ?>

    <div class="content">
    <form method="post">
        <h1>Create Group</h1>
        <br/>
        <h3 class="mb-4 font-weight-normal">Group Info</h3>

        <div class="form-label-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Group Name" required/>
            <label for="name">* Group Name</label>
        </div>

        <div class="form-label-group">
            <input type="text" name="descr" class="form-control" id="descr" placeholder="Description" required/>
            <label for="descr">* Group Description</label>
        </div>

        <input type="submit" name="action" value="Create Group" class="btn btn-lg btn-primary btn-block"/>
        <input type="submit" name="cancel" value="Cancel" class="btn btn-lg btn-primary btn-block"/>
    </form>
    </div>

<?php include 'app/views/Common/footer.php' ?>

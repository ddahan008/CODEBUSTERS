<?php include 'app/views/Common/header.php' ?>

    <div class="content">
    <form method="post">
        <h1>Create Company</h1>
        <br/>
        <h3 class="mb-4 font-weight-normal">Company info</h3>

        <div class="form-label-company">
            <input type="text" name="name" class="form-control" id="name" placeholder="Company Name" required/>
            <label for="name">* Company Name</label>
        </div>

        <div class="form-label-company">
            <input type="text" name="descr" class="form-control" id="descr" placeholder="Description" required/>
            <label for="descr">* Company Description</label>
        </div>

        <input type="submit" name="action" value="Create Company" class="btn btn-lg btn-primary btn-block"/>
        <input type="submit" name="cancel" value="Cancel" class="btn btn-lg btn-primary btn-block"/>
    </form>
    </div>

<?php include 'app/views/Common/footer.php' ?>
<?php include 'app/views/Common/header.php' ?>

    <div class="content">
    <form method="post">
        <h1>Create Event</h1>
        <br/>
        <h3 class="mb-4 font-weight-normal">Event Info</h3>

        <div class="form-label-event">
            <input type="text" name="name" class="form-control" id="name" placeholder="Event Name" required/>
            <label for="name">* Event Name</label>
        </div>

        <div class="form-label-event">
            <input type="text" name="descr" class="form-control" id="descr" placeholder="Description" required/>
            <label for="descr">* Event Description</label>
        </div>

        <div class="form-label-event">
            <input type="datetime-local" name="date" class="form-control" id="date" placeholder="Date and Time" required/>
            <label for="date">Event (date and time):</label>
        </div>

        <input type="submit" name="action" value="Create Event" class="btn btn-lg btn-primary btn-block"/>
        <input type="submit" name="cancel" value="Cancel" class="btn btn-lg btn-primary btn-block"/>
    </form>
    </div>

<?php include 'app/views/Common/footer.php' ?>

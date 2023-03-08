<?php include 'app/views/Common/header.php' ?>

    <link href="../../../css/MyProfile.css" rel="stylesheet" type="text/css"/>
    <link href="../../../css/Messaging.css" rel="stylesheet" type="text/css"/>
    <link href="../../../css/font-awesome.min.css" rel="stylesheet" type="text/css"/>


    <div class="content">
    <!--CONTENT START-->

        <h3 class="content-header">MESSAGING</h3>
        <div class="container">
            <div class="contact-list">
                <h1>Contact List</h1>
                <ul>
                    <?php if(is_array($data) && is_array($data['contacts'])) { ?>
                    <?php foreach ($data['contacts'] as $contact) { ?>
                    <li class='friend'>
                        <img src='https://i.imgur.com/nkN3Mv0.jpg' />
                        <div class='name'>
                            <?=$contact->fname, ' ', $contact->lname?>
                        </div>
                        <div class="status">
                            Online
                        </div>
                    </li>
                    <?php } } ?>
                </ul>
            </div>
            <div class="chat-container">
                <div class="chat-tile">
                    <h1>Chat with John Doe</h1>
                    <form>
                        <button type="button" class="startchat">Start Chat</button>
                    </form>
                </div>

                <div class="chat">
                    <p><strong>John:</strong> Hi there!</p>
                    <p><strong>You:</strong> Hey John, what's up?</p>
                    <p><strong>John:</strong> Not much, just hanging out. How about you?</p>
                    <p><strong>You:</strong> Same here. Have you seen any good movies lately?</p>
                    <p><strong>John:</strong> Hi there!</p>
                    <p><strong>You:</strong> Hey John, what's up?</p>
                    <p><strong>John:</strong> Not much, just hanging out. How about you?</p>
                    <p><strong>You:</strong> Same here. Have you seen any good movies lately?</p>
                    <form>
                        <input type="text" class="text_input" placeholder="Type your message here..." />
                        <input type="file" class="attachment_input" />
                        <button type="submit">Send</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTENT END-->

    <script type="text/javascript" src="../../../js/jquery-3.6.4.min.js"></script>

<?php include 'app/views/Common/footer.php' ?>

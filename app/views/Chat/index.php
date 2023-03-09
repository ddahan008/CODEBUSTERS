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
                    <span id="receiverID">1</span>
                    <h1>Chat with John Doe</h1>
                    <form>
                        <button type="button" class="startchat">Start Chat</button>
                    </form>
                </div>

                <div class="chat" id="chat">
                    <p><strong>John:</strong> Hi there!</p>
                    <p><strong>You:</strong> Hey John, what's up?</p>
                    <p><strong>John:</strong> Not much, just hanging out. How about you?</p>
                    <p><strong>You:</strong> Same here. Have you seen any good movies lately?</p>
                    <p><strong>John:</strong> Hi there!</p>
                    <p><strong>You:</strong> Hey John, what's up?</p>
                    <p><strong>John:</strong> Not much, just hanging out. How about you?</p>
                    <p><strong>You:</strong> Same here. Have you seen any good movies lately?</p>
                </div>
                <form>
                    <input type="text" name="message" id="message" class="text_input" placeholder="Type your message here..." />
                    <input type="file" class="attachment_input" />
                    <button type="submit" name="submit" id="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
    <!-- CONTENT END-->

    <script type="text/javascript" src="../../../js/jquery-3.6.4.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#submit").click(function () {
                var clientmsg = $("#message").val();
                var receiverID = $("#receiverID").html();
                $.post("Chat/Send", { text: clientmsg, receiverID: receiverID });
                $("#message").val("");
                return false;
            });

            function loadLog() {
                var prevHeight = $("#chat")[0].scrollHeight - 20; //Scroll height before the request
                $.ajax({
                    url: "Chat/Get",
                    cache: false,
                    success: function (html) {
                        $("#chat").html(html); //Insert chat log into the #chatbox div
                        //Auto-scroll
                        var newHeight = $("#chat")[0].scrollHeight - 20; //Scroll height after the request
                        if(newHeight > prevHeight){
                            $("#chat").animate({ scrollTop: newHeight }, 'normal'); //Autoscroll to bottom of div
                        }
                    }
                });
            }

            setInterval (loadLog, 60000);
        });
    </script>
<?php include 'app/views/Common/footer.php' ?>

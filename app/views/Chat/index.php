<?php include 'app/views/Common/header.php' ?>

    <link href="../../../css/MyProfile.css" rel="stylesheet" type="text/css"/>
    <link href="../../../css/Messaging.css" rel="stylesheet" type="text/css"/>
    <link href="../../../css/font-awesome.min.css" rel="stylesheet" type="text/css"/>


<div class="content">
    <!--CONTENT START-->

    <h3 class="content-header">MESSAGING</h3>
    <body>
        <div class="container">
            <div class="contact-list">
                <h1>Contact List</h1>
                <ul>
                    <li class='friend selected'>
                        <img src='https://i.imgur.com/nkN3Mv0.jpg' />
                        <div class='name'>
                            Andres Perez
                        </div>
                        <div class="status">
                            Online
                        </div>
                    </li>
                    <li class='friend'>
                        <img src='https://i.imgur.com/0I4lkh9.jpg' />
                        <div class='name'>
                            Leah Slaten
                        </div>
                        <div class="status">
                            Online
                        </div>
                    </li>
                    <li class='friend'>
                        <img src='https://i.imgur.com/s2WCwH2.jpg' />
                        <div class='name'>
                            Mario Martinez
                        </div>
                        <div class="status">
                            Offline
                        </div>
                    </li>
                    <li class='friend'>
                        <img src='https://i.imgur.com/rxBwsBB.jpg' />
                        <div class='name'>
                            Cynthia Lo
                        </div>
                        <div class="status">
                            Offline
                        </div>
                    </li>
                    <li class='friend'>
                        <img src='https://i.imgur.com/tovkOg2.jpg' />
                        <div class='name'>
                            Sally Lin
                        </div>
                        <div class="status">
                            Online
                        </div>
                    </li>
                    <li class='friend'>
                        <img src='https://i.imgur.com/A7lNstm.jpg' />
                        <div class='name'>
                            Danny Tang
                        </div>
                        <br>
                        <div class="status">
                            Online
                        </div>
                    </li>
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
        <!-- CONTENT END-->

<?php include 'app/views/Common/footer.php' ?>

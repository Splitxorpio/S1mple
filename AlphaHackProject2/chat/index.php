<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="icon" href="../logo.png">
</head>

<body>
    <div class="centralized">
        <div class="chathistory"></div>
        <div class="chatbox">
            <form action="" method="POST">
                <textarea class="txtarea" id="message" name="message" placeholder="No Profanity, No NSFW, Only ask questions and answer questions here."></textarea>
            </form>

        </div>
    </div>


    <script>
        const username = prompt('Enter your name for the chat');
        $(document).ready(function() {
            loadChat();
        });
        $('#message').keyup(function(e) {
            var message = $(this).val();
            if (e.which == 13) {
                $.post('handlers/ajax.php?action=SendMessage&message=' + message + '&username=' + username, function(response) {
                    loadChat();
                    $('#message').val('');
                });
            }
        });

        function loadChat() {
            $.post('handlers/ajax.php?action=getChat', function(response) {
                $('.chathistory').html(response);
            });
        }

        setInterval(function() {
            loadChat();
        }, 1000);
    </script>
</body>

</html>
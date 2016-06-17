<?PHP

// include "messagesystem.php";
require "messagesystem.php";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF=8">
</head>
<body>
    <form action="message.php" method="POST">
        <label for="userName"><p>Enter you name</p></label>
        <input type="text" name="userName" id="userName">
        <label for="userMessage"><p>Enter you massage</p></label>
        <textarea name="userMessage" id="userMessage" placeholder="...hear..." cols="35" rows="5"></textarea>
        <input type="submit" name="submit" value="submit">
    </form>


    <?PHP

    $messages=getMessages();
    $messages=addMessage($messages);
    showMessages($messages);

    ?>


</body>
</html>
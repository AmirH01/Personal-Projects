<?php
session_start();
if(!$_SESSION['permit']){
    header('Location:index.php');
}

?>

<html>

    <head>
        <link rel="stylesheet" href="./reset.css" type="text/css"/>
        <link rel="stylesheet" href="./postStyle.css" type="text/css"/>
        <script src="javaScript.js"></script>
    </head>

    <br><br>

    <div id="post">
        <form onsubmit = "checkEmpty(event)" action="addPost.php" method="POST">
            <fieldset>
                <label><h3>Your Post</h3></label><br>
                <input type="text" name="title" placeholder="Enter Title" id="userTitle"><br>
                <input type="text" name="post" placeholder="Type your post here" id="userInput"><br>
                <input type="submit" value="Add Post">
                <input onclick = "resetInput()" type="button" value="Clear Form">
            </fieldset>
        </form>
        <button><a href="logout.php">Logout</a></button>
    </div>


</html>
<?php

session_start();

$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("DATABASE_USER");
$dbpwd = getenv("DATABASE_PASSWORD");
$dbname = getenv("DATABASE_NAME");

// Creates connection
$conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);

// Checks connection
if ($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}
else{
    echo "\nconnection successful";
}


date_default_timezone_set('UTC');
$time = date("Y-m-d H:i:s", strtotime("+1 hours"));

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $title = $_POST['title'];
    $post = $_POST['post'];
    
    $sql = "INSERT INTO `entries`(`title`, `post`, `date`) VALUES ('$title','$post','$time')";

    if(mysqli_query($conn, $sql)){
        header('location:viewBlog.php');
    }
    else{
        echo "\nError: Post did not go through";
    }
}

$conn->close();

?>
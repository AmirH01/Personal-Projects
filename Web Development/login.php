<?php

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

$email = $_POST['email'];
$password = $_POST['password'];

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $query1="SELECT * from USERS where email='$email' and password='$password'";

    $res=mysqli_query($conn,$query1);

    if(mysqli_num_rows($res)>0){
        session_start();$_SESSION['permit']='true';
        header('location:addEntry.php');
    }
    else{
        echo "<br>THE EMAIL AND/OR PASSWORD YOU HAVE ENTERED IS INCORRECT";
        echo '<br><a href="index.php">Back to Homepage</a>';
    }

}


mysqli_close($conn);

?>
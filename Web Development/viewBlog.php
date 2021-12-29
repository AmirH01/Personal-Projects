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

$sql= "SELECT title, post, date FROM entries";
$result= mysqli_query($conn, $sql);

?>



<html>
    <head>
        <link rel="stylesheet" href="./reset.css" type="text/css"/>
        <link rel="stylesheet" href="./viewStyle.css" type="text/css"/>
    </head>

    <header>
        <h1>Welcome to my blog</h1><br>
        <h2>All posts are shown below</h2>
    </header>

    <aside>
        <p><a href="index.php">Return to the homepage</a></p>
    </aside>

    <body>
        <article>
            <p>Your most recent post:<br/><br/>-------------------------------------------------------------
            <?php 
            for ($i = mysqli_num_rows($result) - 1; $i >= 0; $i--) {
                mysqli_data_seek($result, $i);
                $row = mysqli_fetch_assoc($result);
                echo "<br/><br/>TITLE: ". $row['title'] . ' &nbsp &nbsp &nbsp &nbsp &nbsp -DATE: ' . $row['date'] . "<br/><br/>POST:<br/>";
                echo $row['post']. "<br/><br/>-------------------------------------------------------------<br/>";
            }
            
            $conn->close();
            ?>
            </p>
        </article>
    </body>
    
</html>


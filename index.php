<?php

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

if (isset($_POST['btntest'])) 
{
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "mydb";

    @$conn = mysqli_connect($host, $user, $password, $db);

    
    $insert = "INSERT INTO websiteinfo VALUES ('$name', '$email', '$message')";

    mysqli_query($conn, $insert);

    if ($conn) {
        echo("<h1 style='color:green'>Your Registration is Done!</h1>");
    } else {
        echo("<h1 style='color:red'>Your Registration is Failed!</h1>");
    }
}

?>






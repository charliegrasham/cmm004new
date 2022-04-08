<?php

/* Inspiration was take from Pure Coding */

include("connection.php");          //Establishing connection with our database

if(empty($_POST["username"]) || empty($_POST["password"]))
{
    echo "Both fields are required.";
}else
{
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="Select uid FROM user WHERE username='$username' and password='$password'";

    $result=mysqli_query($dbname,$sql);

    if(mysqli_num_rows($result) == 1)
    {
        header("location: index.php"); //Redirecting to another page
    }else
    {
        echo "Incorrect username or password.";
    }
}
?>
<?php

//This is the code which states the process of the registration process, notice the sql statement which inserts it to the table in the database.

include("connection.php");

$username = $_POST["username"];
$password = $_POST["password"];

//echo $username. ":".$password;

$sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";

if (mysqli_query($dbname, $sql)) {
    // echo"ok";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($dbname);
}

//echo"yes";

header("location:home.html");

?>
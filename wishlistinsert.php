<?php

include("connection.php");

$name = $_POST["name"];
$occasion = $_POST["occasion"];
$location = $_POST["location"];
$one = $_POST["one"];
$two = $_POST["two"];
$three = $_POST["three"];
$four = $_POST["four"];
$five = $_POST["five"];


//echo $name. ":".$occasion;

$sqlwishlist = "INSERT INTO wishlist (name, occasion, location, one, two, three, four, five) VALUES ('$name', '$occasion', '$location', '$one', '$two', '$three', '$four', '$five')";

if (mysqli_query($dbname, $sqlwishlist)) {
    // echo"ok";
} else {
    echo "Error: " . $sqlwishlist . "<br>" . mysqli_error($dbwishlist);
}

//echo"yes";

header("location:index.php");
?>
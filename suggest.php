<?php

include("connection.php");

$shop = $_POST["shop"];

//echo $name. ":".$occasion;

$sqlshop = "INSERT INTO shops (shop) VALUES ('$shop')";

if (mysqli_query($dbname, $sqlshop)) {
    // echo"ok";
} else {
    echo "Error: " . $sqlshop . "<br>" . mysqli_error($dbname);
}

//echo"yes";

header("location:index.php");
?>
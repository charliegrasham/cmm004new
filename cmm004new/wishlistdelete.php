<?php

include("connection.php");

$wishlistid = $_POST["wishlistid"];
$reason = $_POST["reason"];

//echo $wishlistid. ":".$reason;

$sqldelete = "INSERT INTO deletelist (wishlist_id, reason) VALUES ('$wishlistid', '$reason')";

if (mysqli_query($dbname, $sqldelete)) {
    // echo"ok";
} else {
    echo "Error: " . $sqldelete . "<br>" . mysqli_error($dbname);
}

//echo"yes";

header("location:index.php");
?>
<?php

include("connection.php");

if($_COOKIE['uid']){
	$user=$_COOKIE['uid']; 
}else{
	header("location:home.html");
}

$name = $_POST["name"];
$occasion = $_POST["occasion"];
$location = $_POST["location"];
$one = $_POST["one"];
$two = $_POST["two"];
$three = $_POST["three"];
$four = $_POST["four"];
$five = $_POST["five"];
$wishlist_id = mt_rand(1000, 9999);
$upload="";
	
// Loop through every file
for( $i=0 ; $i < count($_FILES['upload']['name']) ; $i++ ) {
   //The temp file path is obtained
   $temp_name = $_FILES['upload']['tmp_name'][$i];
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES['upload']['name'][$i]);
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 // Allowed extensions
 $extensions_arr = array("jpg","jpeg","png","gif");

 // Check extension
 if( in_array($imageFileType,$extensions_arr) ){
 
 $temp = explode(".", $_FILES['upload']['name'][$i]);
$newfilename = round(microtime(true)) .mt_rand(1, 999).'.' . end($temp);
  
  // Upload file
  move_uploaded_file($temp_name, $target_dir.$newfilename);
$upload .=$newfilename.",";
	}
}
//echo $name. ":".$occasion;

$sqlwishlist = "INSERT INTO wishlist (user, name, occasion, location, item1, item2, item3, item4, item5, wishlist_id, upload) VALUES ('$user','$name', '$occasion', '$location', '$one', '$two', '$three', '$four', '$five', '$wishlist_id', '$upload')";

if (mysqli_query($dbname, $sqlwishlist)) {
    // echo"ok";
} else {
    echo "Error: " . $sqlwishlist . "<br>" . mysqli_error($dbwishlist);
}

//echo"yes";

header("location:index.php");
?>
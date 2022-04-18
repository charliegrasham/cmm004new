<?php

include("connection.php");

if($_COOKIE['uid']){
	$user=$_COOKIE['uid']; 
}else{
	header("location:home.html");
}

$shop = $_POST["shop"];
$shop_link = $_POST["shop_link"];
$upload ="";

// upload logo
if(isset($_FILES['upload']['tmp_name']) ) {
   //The temp file path is obtained
   $temp_name = $_FILES['upload']['tmp_name'];
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES['upload']['name']);
 $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

 // Allowed extensions
 $extensions_arr = array("jpg","jpeg","png","gif");

 // Check extension
 if( in_array($imageFileType,$extensions_arr) ){
 
 $temp = explode(".", $_FILES['upload']['name']);
$newfilename = round(microtime(true)) .mt_rand(1, 999).'.' . end($temp);
  
  // Upload file
  move_uploaded_file($temp_name, $target_dir.$newfilename);
$upload =$newfilename;
	}
}
//echo $name. ":".$occasion;

$sqlshop = "INSERT INTO shops (shop, user, shop_link, image) VALUES ('$shop', '$user', '$shop_link', '$upload')";

if (mysqli_query($dbname, $sqlshop)) {
    // echo"ok";
} else {
    echo "Error: " . $sqlshop . "<br>" . mysqli_error($dbname);
}

//echo"yes";

header("location:shops.php");
?>
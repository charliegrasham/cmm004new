<?php
if($_COOKIE['admin']){
	$admin=$_COOKIE['admin']; 
}else{
	header("location:adminlogin.html");
}
//This is the function which tells the form what to do.
//Inspiration was taken from The Net Ninja
include ("connection.php");
if(isset($_POST['delete'])) {
    $id_to_delete = mysqli_real_escape_string($dbname, $_POST['id_to_delete']);

    $sqldelete = "DELETE FROM wishlist WHERE wishlist_id = '$id_to_delete'";
    if(mysqli_query($dbname, $sqldelete)){
        // success
    header('location: adminhome.html');
   } else{
//failure
    echo 'query error: ' . mysqli_error($dbname);
    }

}
?>



<!DOCTYPE html>
<html land="en">
    <head>
        <meta charset="UTF-8">
        <title>ADMIN</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
        <link rel="stylesheet" href="assets/CSS/styleindex.css">

</head>
<body>
    
    <header>
    <img id="wishlistlogo" src="assets/images/wishlistlogo.png"/></br>
    <h1>myWishlist Delete</h1>

    <nav>
        <ul>
            <li><a href="adminhome.html">Home</a></li>
            <li><a href="admindelete.php">Delete wishlist</a></li>
            <form method="get" action="logout.php">
                <button type="submit">Logout</button>
            </form>
        </ul>
        </nav>
    </header>


<main>    
<section>
    <h4>Remove wishlist section:</h4>
             <!-- The form allows the admin to type the id which they want to delete-->
    <form action="admindelete.php" method="POST">
        <p>Type the wishlist to be deleted. This is found in the phpmyadmin database along with the reason</p>
    <input type="text" name="id_to_delete" value=""></br>
    <input type="submit" name="delete" value="delete" text="delete wishlist">
    </form>
</section>

</main>

    <!--Footer Starts-->
    <footer class="footer">
        <div class="col-container">
            <div class="col">
                <h2>Contact Us</h2>
                <p>Ishbel Gordon Building</p>
                <p>Robert Gordon University, Gartide</p>
                <p>AB25 6TB</p>
                <p>Scotland</p>
            </div>

            <div class="col">
                <h2>Login</h2>
                <a href="registration.php">Register Here</a>
                <br>
                <br>
                <a href="login.php">Login Here</a>
            </div>

            <div class="col">
            <h2>Follow Us on</h2>
                <ul class="socials">
                    <a href="http://www.facebook.com"><img src="assets/images/facebookicon.png" alt="facebook"></a></li>
                    <a href="http//www.twitter.com"><img src="assets/images/twittericon.png" alt="twitter"></a></li>
                    <a href="http//www.instagram.com"><img src="assets/images/instagramicon.png" alt="instagram"></a></li>
                    <a href="http//www.youtube.com"><img src="assets/images/youtubeicon.png" alt="youtube"></a></li>
                </ul>
            </div>
        </div>
            <a href="mailto:scottish.stories.uk.com">mywishlist.uk.com</a></p>
            <p>&copy; 2022 Group J</p>
    </footer>
    <!--Footer Ends-->
</body>
</html>
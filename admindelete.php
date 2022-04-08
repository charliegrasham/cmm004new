<?php
//This is the function which tells the form what to do.
//Inspiration was taken from The Net Ninja
include ("connection.php");
if(isset($_POST['delete'])) {
    $id_to_delete = mysqli_real_escape_string($dbname, $_POST['id_to_delete']);

    $sqldelete = "DELETE FROM wishlist WHERE wishlistid = $id_to_delete";
    if(mysqli_query($dbname, $sqldelete)){
        // success
    header('location: adminhome.html');
   } {
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

<footer>
    <div>
    <h2>Connect via Social Media</h2>
    <ul>
        <li><a href="http://www.facebook.com"><img src="assets/images/facebooklogo.png" alt="facebook" id="facebooklogo"></a></li>
        <li><a href="http://www.twitter.com"><img src="assets/images/twitterlogo.jpg" alt="twitter" id="twitterlogo"></a></li>
        <li><a href="http://www.instagram.com"><img src="assets/images/instagramlogo.webp" alt="instagram" id="instagramlogo"></a></li></br>
    </ul>
    <p>(c) 2022 - Group J</p>
    </div>
</footer>
</body>
</html>
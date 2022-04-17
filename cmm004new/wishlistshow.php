 <?php
        include ("connection.php");

if($_COOKIE['uid']){
	$user=$_COOKIE['uid']; 
}else{
	header("location:home.html");
}
        $sql_querywishlist = "SELECT * FROM wishlist";
        $result = $dbname->query($sql_querywishlist);
            while($row = $result->fetch_array()){
                $wishlistid[]=$row['wishlist_id'];
                $name[]=$row['name'];
                $occasion[]=$row['occasion'];
                $location[]=$row['location'];
                $one[]=$row['item1'];
                $two[]=$row['item2'];
                $three[]=$row['item3'];
                $four[]=$row['item4'];
                $five[]=$row['item5'];
                $img[]=$row['upload'];
                   
    }
    ?>
<!DOCTYPE html>
<html land="en">
    <head>
        <meta charset="UTF-8">
        <title>myWishlist</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
        <link rel="stylesheet" href="assets/CSS/styleindex.css">
     
    </head>
<body>
<header>
<img id="wishlistlogo" src="assets/images/wishlistlogo.png"/></br>
    <h1>Display Wishlists</h1>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="wishlistinsert.html">Create a Wishlist</a></li>
            <li><a href="wishlistshow.php">Display Wishlists</a></li>
            <li><a href="suggest.html">Suggest Shop</a></li>
            <li><a href="shops.php">Our Shops</a></li>
            <li><a href="wishlistdelete.html">Delete Wishlists</a></li>
            <li><a href="aboutmain.php">About Us</a></li>
            <form method="get" action="logout.php">
                <button type="submit">Logout</button>
            </form>
        </ul>
        </nav>
    </header>

<main class="grid-container">

<section class="grid-100"><br>
<table>
	<thead>
	<th>Wishlist Id</th>
	<th>Name</th>
	<th>Occasion</th>
	<th>Location</th>
	<th>Items</th>
	<th>Images</th>
	</thead>
	<tbody>
    <?php
       for($i=count($wishlistid)-1; $i>=0; $i--){
                    echo "<tr><td>".$wishlistid[$i]. "</td><td>". $name[$i]."</td><td>".$occasion[$i]."</td><td>".$location[$i]."</td><td>". $one[$i].", ".$two[$i].", ".$three[$i].", ".$four[$i]." and ".$five[$i]."</td><td>";
		   $images = explode(",", $img[$i]);
		   $total =count($images)-1;
		   unset($images[$total]);
		   foreach($images as $im){
			   echo "<img src='uploads/".$im."' width='50px' height='50px' />";
		   }
		   echo "</td></tr>";
    }
    ?>
	</tbody>
	</table>
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
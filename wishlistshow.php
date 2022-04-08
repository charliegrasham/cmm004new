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
            <li><a href="shops.html">Our Shops</a></li>
            <li><a href="wishlistdelete.html">Delete Wishlists</a></li>
            <li><a href="aboutmain.php">About Us</a></li>
            <form method="get" action="logout.php">
                <button type="submit">Logout</button>
            </form>
        </ul>
        </nav>
    </header>

<main class="grid-container">

<section class="grid-100"></br>

    <?php
        include ("connection.php");
        $sql_querywishlist = "SELECT * FROM wishlist";
        $result = $dbname->query($sql_querywishlist);
            while($row = $result->fetch_array()){
                $wishlistid=$row['wishlistid'];
                $name=$row['name'];
                $occasion=$row['occasion'];
                $location=$row['location'];
                $one=$row['one'];
                $two=$row['two'];
                $three=$row['three'];
                $four=$row['four'];
                $five=$row['five'];
                    echo "<article>
                    <p>The wishlistid is: {$wishlistid}. My name is: $name. The occasion is: {$occasion}. The the location is: {$location}. The items I would like are: $one, $two, $three, $four and $five</p>
                </article>";
    }
    ?>
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
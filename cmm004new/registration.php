<?php
include "connection.php";

if(isset($_POST['email'])){
	
	$email =$_POST['email']; 
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		
		$query = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
		$result = mysqli_query($dbname,$query);
		
		$result = "Registration Successful! <a href='login.php'>Click here to login</a>";
	
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
        <main>
        <div class="box">
            <h3>Create an account for myWishlist </h3>
            <br><br>
            <form method="post"  class="add-input">
<?php 
						if(isset($result)){
							echo "<div>".$result."</div>";
						}
						?>
                <div class="input-group">
                <label>Email:</label><input type="email" name="email" placeholder=""/>
                </div><br>
                
                <div class="input-group">
                <label>Password:</label><input type="password" name="password" placeholder=""/>
                </div><br>

                <br><br>
                <div class="input-group">
                <input type="submit" name="submit" value="Register"/></div>
    
              </form>
            <div class="error">
                <?php //echo $error;?>
                <?php //echo $username; echo$password;?>
            </div>
            <div>
                <p>Oops, I already have an account <a href="login.html">Go to login.</a></p></br>
                <p><a href="home.html">Back</a></p>
            </div>
            </div>
        </main>
    </body>
</html>
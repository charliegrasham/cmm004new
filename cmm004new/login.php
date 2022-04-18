<?php
include "connection.php";
if(isset($_POST['email'])){
	
	$email =$_POST['email']; 
	$password = $_POST['password'];
		
		$query = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($dbname,$query);
		while($row = mysqli_fetch_assoc($result)){
		$hashed_pass[] = $row['password'];
			 $id[]= $row["id"]; 
         }
	if(password_verify($password, @$hashed_pass[0])){ 
    
		setcookie("uid", $id[0], time() + 86400, "/");
        
      header("location:index.php"); 
    }else{
			
$result = "Email or Password not correct";
		}
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
        <h3>Login to myWishlist</h3>
        <br><br>
    <!-- This allows the user to login, it uses the function outlined in login.php-->
    <!-- Inspiration was take from Pure Coding -->
        <form method="post" class="add-input">

			<?php 
						if(isset($result)){
							echo "<div>".$result."</div>";
						}
						?>
            <div class="input-group">
            <label>Email:</label><br>
            <input type="email" name="email" placeholder="" required/></div><br><br>

            <div class="input-group">
            <label>Password:</label><br>
            <input type="password" name="password" placeholder="" required/></div><br><br>
            
            <div class="input-group">
            <input type="submit" name="submit" value="Login"/></div>
            <div>
                <p>Oops, I don't have an account. <a href="registration.php">Go to registration.</a></p><br>
                <p><a href="home.html">Back</a></p>
            </div>
          
        </form>
<div class="error"><?php//echo server;?><?php//echo $username; echo $password;?></div>
</div>
</main>
</body>
<footer>
        
</footer>
</html>
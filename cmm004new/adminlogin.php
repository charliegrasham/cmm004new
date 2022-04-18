<?php
include("connection.php");          //Establishing connection with our database

if(empty($_POST["username"]) || empty($_POST["password"]))
{
    echo "Both fields are required.";
}else
{
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="Select * FROM admin WHERE username='$username'";

    $result=$dbname->query($sql);
	while($row = $result->fetch_array()){
                $hashed_pass[]=$row['password'];
                $user[]=$row['username'];
	}

    if(password_verify($password, @$hashed_pass[0])){ 
    
		setcookie("admin", $user[0], time() + 86400, "/");
        
      header("location:adminhome.html"); 
    }else
    {
        echo "Incorrect username or password.";
    }
}
?>
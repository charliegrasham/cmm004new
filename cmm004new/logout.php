<?php
    session_start();                    //retrieve session
    session_destroy();                  //then destroy it lol.
setcookie("uid", "", time() - 86400, "/");
    header("Location: home.html");      //redirect to login page
?>
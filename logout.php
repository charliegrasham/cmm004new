<?php
    session_start();                    //retrieve session
    session_destroy();                  //then destroy it lol.
    header("Location: home.html");      //redirect to login page
?>
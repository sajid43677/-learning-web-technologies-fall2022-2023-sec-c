<?php
session_start();
    if(strlen($_POST["Id"]) < 2 || !ctype_alnum($_POST["Id"])){
        $_SESSION["validate"] = "INVALID USERNAME or PASSWORD!";
        header("location:login.php");
    }
    else{
        $_SESSION["validate"] = "Login sucsess";
        header("location:login.php");
    }
?>
<?php
    session_start();
    $spchar = 0;
    if(isset($_POST["Id"])){
        $Password = $_POST["Password"];
        $sz = strlen($Password);
        for($i = 0; $i < $sz;$i++){
            if($Password[$i] == '@'|| $Password[$i] == '$' || $Password[$i] == '%' || $Password[$i] == '#'){
                $spchar++;
            }
        }
    }
    if(strlen($_POST["Id"]) < 2 || !ctype_alnum($_POST["Id"]) || strlen($_POST["Password"]) < 8 || $spchar < 1){
        $_SESSION["validate"] = "INVALID USERNAME or PASSWORD!";
        header("location:login.php");
    }
    else{
        $_SESSION["validate"] = "Login sucsess";
        header("location:login.php");
    }
?>
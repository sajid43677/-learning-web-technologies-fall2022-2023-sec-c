<?php
    require_once('db.php');
    $username = $_POST['Name'];
    $Id = $_POST['Id'];
    $password = $_POST['Password'];
    $conpassword = $_POST['ConPassword'];
    $email = $_POST['Email'];
    $roles = $_POST['roles'];

    if( $Id == ""||$username == "" || $password == "" || $email == "" || strlen($password) < 4 || $password != $conpassword){
        //echo "null username/password/email";
        header('location: registration.php?err=null');

    }else {
        /* $user = ['username'=> $username, "password"=> $password, "email"=> $email];
        $_SESSION['user'] = $user; */
        $user = ['Id'=>$Id, 'Name'=>$username, 'Password'=> $password, 'Email'=> $email, 'Type'=> $roles];
        $status = insertUser($user);
        if($status){
            header('location: registration.php?succ=done');
        }else{
            echo "DB insert error!";
        }
        
    }
?>
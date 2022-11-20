<?php 
    require_once('db.php');

    function insertUser($user){
        $con = getConnection();
        $sql = "insert into employeeinfo values('', '{$user['username']}', '{$user['password']}', '{$user['email']}', '{$user['roles']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function deleteUser($user){
        $con = getConnection();
        
    }

    function editUser($id){
        $con = getConnection();
        
    }

    function searchUserById($id){
        $con = getConnection();
        
    }

    function allUser(){
        $con = getConnection();
        $sql = "select * from employeeinfo";
        $result = mysqli_query($con, $sql);
        $users = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($users,$row);
        }
        return $users;
    }

    function login($user){
        $con = getConnection();
        $sql = "select * from employeeinfo where username='{$user['username']}' and password='{$user['password']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if($user != null){
            return true;
        }else{
            return false;
        }
    }
?>
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
        $sql = "DELETE FROM employeeinfo WHERE empid = {$user['id']};";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function editUser($user){
        $con = getConnection();
        $sql = "UPDATE employeeinfo
                SET  username = '{$user['username']}', email = '{$user['email']}', role = '{$user['role']}'
                WHERE empid = '{$user['id']}';";
        $status = mysqli_query($con, $sql);
        return $status;
        
    }

    function searchUserById($user){
        $con = getConnection();
        $sql = "select * from employeeinfo where empid='{$user['id']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        return $user;
        
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
        
        return $user;
    }
?>
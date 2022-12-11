<?php 
    require_once('db.php');

    function insertreq($req){
        $con = getConnection();
        $sql = "insert into taskinfo (taskid, task) values('', '{$req}')";
        $status = mysqli_query($con, $sql);

        echo 'data inserted!';
        return $status;
    }

    function insertprior($count, $taskid){
        $con = getConnection();
        $sql = "update taskinfo set prior = '{$count}' where taskid = '{$taskid}'";
        $status = mysqli_query($con, $sql);
        
        echo 'data inserted!';
        return $status;
    }

    function priorreq($count){
        $con = getConnection();
        $sql = "insert into taskinfo (prior) values('{$count}')";
        $status = mysqli_query($con, $sql);

        echo 'data inserted!';
        return $status;
    }

    function allreq(){
        $con = getConnection();
        $sql = "select taskid, task, prior from taskinfo";
        $status = mysqli_query($con, $sql);
        $tasks = [];
        while($row = mysqli_fetch_assoc($status)){
            array_push($tasks,$row);
        }
        return $tasks;
    }

    // to check if the req already exits or not!

    function searchreqfirst($req){

        $con = getConnection();
        $sql = "select task from taskinfo where task like '{$req}'";
        $status = mysqli_query($con, $sql); 
        if($status){
            echo 'You already gave this requirement';
        }else{
            insertreq($req);
            
        }
        
     }
     function searchreqdev($user){
        $con = getConnection();
        $sql = "select * from taskinfo where developer = '{$user['username']}'";
        $status = mysqli_query($con, $sql);
        $tasks = [];
        while($row = mysqli_fetch_assoc($status)){
            array_push($tasks,$row);
        }
        return $tasks;
     }

     function devtestupdate($task){
        $con = getConnection();
        $sql = "update taskinfo set devprog = 'tested' where taskid = '{$task['id']}'";
        $status = mysqli_query($con, $sql);
        
        echo 'data inserted!';
        return $status;
     }

     function devworkupdate($task){
        $con = getConnection();
        $sql = "update taskinfo set devprog = 'worked' where taskid = '{$task['id']}'";
        $status = mysqli_query($con, $sql);
        
        echo 'data inserted!';
        return $status;
     }
     function searchprojectnamedev($user){
        $con = getConnection();
        $sql = "select * from taskinfo where developer = '{$user['username']}'";
        $status = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($status);
        return $row;
     }


    
?>
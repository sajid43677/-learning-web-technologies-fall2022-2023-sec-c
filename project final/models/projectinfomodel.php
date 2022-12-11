<?php 
    require_once('db.php');

    function inserttitle($title){

        $con = getConnection();
        $sql = "insert into projectinfo (projectid, projectname) values('', '{$title}')";
        $status = mysqli_query($con, $sql);

        echo 'data inserted!';
        return $status;
    }

    function insertdevno($devno){

        $con = getConnection();
        $sql = "insert into projectinfo (reqnoofdev) values('{$devno}')";
        $status = mysqli_query($con, $sql);

        echo 'data inserted!';
        return $status;
    }

    function insertprototype($target_dir){

        $con = getConnection();
        $sql = "insert into projectinfo (projectprototype) values('{$target_dir}')";
        $status = mysqli_query($con, $sql);

        echo 'data inserted!';
        return $status;
    }

    function analyzerprog($anaprog){

        $con = getConnection();
        $sql = "insert into projectinfo (anaprog) values('{$anaprog}')";
        $status = mysqli_query($con, $sql);

        echo 'data inserted!';
        return $status;

    }

    function twritterprg($twprog){

        $con = getConnection();
        $sql = "insert into projectinfo (twprog) values('{$twprog}')";
        $status = mysqli_query($con, $sql);

        echo 'data inserted!';
        return $status;

    }

    function searchbyprojectname($task){
        $con = getConnection();
        $sql = "select * from projectinfo where projectname = '{$task['projectname']}'";
        $status = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($status);
        return $row;
    }

    function allproject(){
        $con = getConnection();
        $sql = "select * from projectinfo";
        $result = mysqli_query($con, $sql);
        $projects = [];
        while($row = mysqli_fetch_assoc($result)){
            array_push($projects,$row);
        }
        return $projects;
    }

    function assignmanager($project){
        $con = getConnection();
        $sql = "UPDATE projectinfo
                SET  manager = '{$project['manager']}'
                WHERE projectname = '{$project['projectname']}';";
        $status = mysqli_query($con, $sql);

        return $status;
    }

    function assignanalyzer($project){
        $con = getConnection();
        $sql = "UPDATE projectinfo
                SET  analyzer = '{$project['analyzer']}'
                WHERE projectname = '{$project['projectname']}';";
        $status = mysqli_query($con, $sql);

        return $status;
    }





?>
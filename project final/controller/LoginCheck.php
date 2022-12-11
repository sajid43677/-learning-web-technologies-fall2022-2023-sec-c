<?php
    session_start();
    require_once('../models/EmployeeInfo.php');
    $user['username'] = $_POST['username'];
    $user['password'] = $_POST['password'];
    $user=login($user);
    print_r($user);
    if($user == null){
        header('location: ../views/login.php?err=invalid');
    }
    $role = $user['role'];
    $_SESSION['empid'] = $user['empid'];
    if($role == 'Analyzer'){
        header('location: ../../views/ProjectAnalyzer.php');
    }
    if($role == 'Manager'){
        header('location: ../views/ProjectManager.php');
    }
    if($role =='Developer'){
        header('location: ../views/developer/ProjectDeveloper.php');
    }
    if($role == 'Tester'){
        header('location: ../views/ProjectTester.php');
    }
    if($role == 'Technical_Writer'){
        header('location: ../views/ProjectTechnicalWriter.php');
    }
    if($role == 'Client'){
        header('location: ../views/Client.php');
    }
    if($role == 'Admin'){
        header('location: ../views/admin/Admin.php');
    }
?>
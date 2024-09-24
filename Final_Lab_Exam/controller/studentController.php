<?php
    require_once('../model/dbFunction.php');
    session_start();

    if(isset($_POST['logout'])){
        session_destroy();
        $_SESSION['loginText'] = "Successfully logged out!";
        header('location:../view/login.php');
    }

    if(isset($_POST['seeMark'])){
        header('location:../view/studentMark.php');
    }

    if(isset($_POST['back'])){
        header('location:../view/student.php');
    }
?>
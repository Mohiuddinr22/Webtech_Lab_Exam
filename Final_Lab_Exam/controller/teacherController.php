<?php
    require_once('../model/dbFunction.php');
    require_once('../model/allDB.php');
    session_start();

    if(isset($_POST['logout'])){
        session_destroy();
        $_SESSION['loginText'] = "Successfully logged out!";
        header('location:../view/login.php');
    }

    if(isset($_POST['entry'])){
        header('location:../view/teacherMarkEntry.php');
    }

    if(isset($_POST['back'])){
        header('location:../view/teacher.php');
    }

    if(isset($_POST['update'])){
        $conn = getConnection();
        foreach ($_POST['students'] as $student) {
            $id = $student['ID'];
            $bangla = $student['Bangla'];
            $english = $student['English'];
            $math = $student['Math'];
    
            $query = "UPDATE student SET Bangla = ?, English = ?, Math = ? WHERE ID = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("iiis", $bangla, $english, $math, $id);
            $stmt->execute();
        }
        header('location:../view/teacherMarkEntry.php');
    }
?>
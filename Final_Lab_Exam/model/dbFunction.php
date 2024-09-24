<?php
    require_once('../model/allDB.php');

    function findStudentName($id){
        $conn = getConnection();
        $sql = "select * from student where ID = '$id'";
        $res = mysqli_query($conn, $sql);
        return $res;
    }

    function findTeacherName($id){
        $conn = getConnection();
        $sql = "select * from teacher where ID = '$id'";
        $res = mysqli_query($conn, $sql);
        return $res;
    }

    function loginStudent($id, $pass){
        $conn = getConnection();
        $sql = "select * from student where ID = '$id' and Password = '$pass'";
        $res = mysqli_query($conn, $sql);
        $numRow = mysqli_num_rows($res);
        return $numRow;
    }

    function loginTeacher($id, $pass){
        $conn = getConnection();
        $sql = "select * from teacher where ID = '$id' and Password = '$pass'";
        $res = mysqli_query($conn, $sql);
        $numRow = mysqli_num_rows($res);
        return $numRow;
    }
    
    function loadStudentMarks($id){
        $conn = getConnection();
        $sql = "select * from student where ID = '$id'";
        $res = mysqli_query($conn, $sql);
        return $res;
    }

    function loadAllMarks(){
        $conn = getConnection();
        $sql = "select * from student";
        $res = mysqli_query($conn, $sql);
        return $res;
    }

    function enterMark($id, $bangla, $english, $math){
        $conn = getConnection();
        $sql = "insert into student(Bangla, English, Math) values('$bangla','$english','$math') where ID = '$id'";
        $res = mysqli_query($conn, $sql);
        return $res;
    }
?>
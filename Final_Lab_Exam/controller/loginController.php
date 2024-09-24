<?php
    require_once('../model/dbFunction.php');
    session_start();

    if(isset($_POST['login'])){
        $id = $_POST['id'];
        $pass = $_POST['pass'];

        if(empty($id)||empty($pass)){
            $_SESSION['loginText'] = "Can't leave any of the inputs empty. Fillup properly!";
            header('location:../view/login.php');
        }
        else{
            if(strpos($id, 'T') === 0){
                $numRow = loginTeacher($id, $pass);
                if($numRow == 1){
                    $r = findTeacherName($id);
                    $res = $r->fetch_assoc();
                    $_SESSION['name'] = $res['Name'];
                    $_SESSION['id'] = $id;
                    header('location:../view/teacher.php');
                }
                else{
                    $_SESSION['loginText'] = "ID or password is incorrect. Try again!";
                    header('location:../view/login.php');
                }
            }
            else if(strpos($id, 'S') === 0){
                $numRow = loginStudent($id, $pass);
                if($numRow == 1){
                    $r = findStudentName($id);
                    $res = $r->fetch_assoc();
                    $_SESSION['name'] = $res['Name'];
                    $_SESSION['id'] = $id;
                    header('location:../view/student.php');
                }
                else{
                    $_SESSION['loginText'] = "ID or password is incorrect. Try again!";
                    header('location:../view/login.php');
                }
            }
            else{
                $_SESSION['loginText'] = "ID or password is incorrect. Try again!";
                header('location:../view/login.php');
            }
        }
    }
?>
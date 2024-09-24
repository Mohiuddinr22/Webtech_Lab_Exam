<?php
    require_once('../model/dbFunction.php');
    session_start();

    $id = $_SESSION['id'];
    $r = loadStudentMarks($id);
    $res = $r->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
</head>
<body>
    <form method="post" action="../controller/studentController.php">
        <h1>Your Marks</h1><br>
        <table border='1'>
            <thead>
                <tr>
                    <th>Bangla</th>
                    <th>English</th>
                    <th>Math</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $res['Bangla'];?></td>
                    <td><?php echo $res['English'];?></td>
                    <td><?php echo $res['Math'];?></td>
                </tr>
            </tbody>
        </table><br>
        <button name="back">Back</button>
    </form>
</body>
</html>
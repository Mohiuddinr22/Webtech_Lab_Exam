<?php
    require_once('../model/dbFunction.php');
    session_start();

    $r = loadAllMarks();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Portal</title>
</head>
<body>
    <form method="post" action="../controller/teacherController.php">
        <h1>Enter Marks</h1>
        <table border='1'>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>ID</th>
                    <th>Bangla</th>
                    <th>English</th>
                    <th>Math</th>
                </tr>
            </thead>
            <tbody>
            <?php while($res = $r->fetch_assoc()){?>
                <tr>
                    <td><?php echo $res['Name'];?></td>
                    <td><?php echo $res['ID'];?></td>
                    <td><input type="number" name="students[<?php echo $res['ID']; ?>][Bangla]" value="<?php echo $res['Bangla'];?>"></td>
                    <td><input type="number" name="students[<?php echo $res['ID']; ?>][English]" value="<?php echo $res['English'];?>"></td>
                    <td><input type="number" name="students[<?php echo $res['ID']; ?>][Math]" value="<?php echo $res['Math'];?>"></td>
                    <input type="hidden" name="students[<?php echo $res['ID']; ?>][ID]" value="<?php echo $res['ID']; ?>">
                </tr>
                <?php }?>
            </tbody>
        </table>
        <button name="update">Update</button>
        <button name="back">Back</button>
    </form>
</body>
</html>
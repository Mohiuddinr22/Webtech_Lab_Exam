<?php
    session_start();
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
        <h1>Welcome to teacher portal, <?php echo $_SESSION['name'];?>.<br>
            Your id is : <?php echo $_SESSION['id'];?></h1><br>
        <button name="entry">Enter Marks</button>
        <button name="logout">Logout</button>
    </form>
</body>
</html>
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="post" action="../controller/loginController.php">
        <h1>Welcome to School</h1><br>
        ID : <input type="text" name="id"><br>
        Password <input type="password" name="pass"><br>
        <?php if(isset($_SESSION['loginText'])){
                echo $_SESSION['loginText'];
                unset($_SESSION['loginText']);
        }?><br>
        <button name="login">Login</button><br>
    </form>
</body>
</html>
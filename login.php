<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>LOGIN PAGE</title>
</head>
<body>

    <?php include "layout/header.html" ?>
    <h2>Login</h2>
    <form action="login.php" method="post">
        <input type="text" name="username" placeholder="username"> <br> <br>
        <input type="password" name="password" placeholder="password"> <br> <br>
        <button type ="submit" name="masuk">Masuk</button>
    </form>
</body>
</html>

<?php 

    include "service/user.php";

    if (isset($_POST['masuk'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $result = $db->query($sql);

        if($result->num_rows > 0 ){
            $data = $result->fetch_assoc();

            header("Location: dashboard.php");
        }else echo "akun tidak ditemukan";
    }

?>
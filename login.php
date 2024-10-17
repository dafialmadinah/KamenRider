<?php 
<<<<<<< HEAD
session_start();
=======

>>>>>>> 4d8f13bdd400ad969bd79d1fd627fa7167a35dcd
include "service/user.php";

if (isset($_POST['masuk'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username = '$username'";
    $result = $db->query($sql);

    if($result->num_rows > 0 ){
        $data = $result->fetch_assoc();

        if (password_verify($password, $data['password'])) {
<<<<<<< HEAD
            $_SESSION['username'] = $username;
=======
>>>>>>> 4d8f13bdd400ad969bd79d1fd627fa7167a35dcd
            header("Location: dashboard.php");
            exit;
        } else {
            echo "Password salah!";
        }
    } else {
        echo "Username tidak ditemukan!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" href="edit_css/login.css">
</head>
<body>

    <div class="wrapper">
    <?php include "layout/header.html" ?>
    <h2>Login</h2>
    <form action="login.php" method="post">
        <input type="text" name="username" placeholder="username" required> <br> <br>
        <input type="password" name="password" placeholder="password" required> <br> <br>
        <button type ="submit" name="masuk">Masuk</button>
    </form>
<<<<<<< HEAD
    </div>

</body>
</html>
=======

</body>
</html>
>>>>>>> 4d8f13bdd400ad969bd79d1fd627fa7167a35dcd

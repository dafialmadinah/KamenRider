<?php 
include "service/user.php";

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user (username, password) 
            VALUES ('$username', '$password')";

    if ($db->query($sql)) {
        echo "Data Berhasil Masuk";
    } else {
        echo "Data Tidak Masuk";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER PAGE</title>
</head>
<body>

<?php include "layout/header.html" ?>
    <h2>Buat Akun</h2>
    <form action="register.php" method="POST">
        <input type="text" name="username" placeholder="username" required> <br> <br>
        <input type="password" name="password" placeholder="password" required> <br> <br>
        <button type="submit" name="register">Daftar Akun</button>
    </form>
</body>
</html>

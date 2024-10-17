<?php
include 'service/user.php';

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $image = $_FILES['image']['name'];

    $target_dir = "uploads/"; //
    $target_file = $target_dir . basename($_FILES["image"]["name"]);


    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
      
        $sql = "SELECT MAX(id) AS max_id FROM kamen_rider";
        $result = $db->query($sql);
        $row = $result->fetch_assoc();
        $next_id = $row['max_id'] + 1; 
       
        $sql = "INSERT INTO kamen_rider (id, nama, deskripsi, image) VALUES (?, ?, ?, ?)";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("isss", $next_id, $nama, $deskripsi, $image);

        if ($stmt->execute()) {
            echo "Data Kamen Rider berhasil ditambahkan!";
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        echo "Gagal meng-upload gambar.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kamen Rider</title>
    <link rel="stylesheet" href="edit_css/style.css">
</head>
<body>

<h1>Tambah Kamen Rider</h1>

<form method="post" enctype="multipart/form-data">
    <label for="nama">Nama Kamen Rider:</label><br>
    <input type="text" name="nama" required><br>

    <label for="deskripsi">Deskripsi:</label><br>
    <textarea name="deskripsi" required></textarea><br>

    <label for="image">Gambar:</label><br>
    <input type="file" name="image" accept="image/*" required><br><br>

    <button type="submit">Tambah Kamen Rider</button>
</form>

<a href="dashboard.php">Kembali ke dashboard</a>

</body>
</html>

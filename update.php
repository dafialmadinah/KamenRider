<?php
include 'service/user.php';

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM kamen_rider WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    $rider = $result->fetch_assoc();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nama = $_POST['nama'];
        $deskripsi = $_POST['deskripsi'];
        $image = $rider['image'];

      
        if (!empty($_FILES['image']['name'])) {
           
            $image = $_FILES['image']['name'];
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($image);
           
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                echo "Gambar berhasil di-upload.<br>";
            } else {
                echo "Gagal meng-upload gambar.<br>";
            }
        }

        $sql = "UPDATE kamen_rider SET nama = ?, deskripsi = ?, image = ? WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->bind_param("sssi", $nama, $deskripsi, $image, $id);

        if ($stmt->execute()) {
            echo "Data Kamen Rider berhasil diperbarui!";
        } else {
            echo "Error: " . $stmt->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Kamen Rider</title>
    <link rel="stylesheet" href="edit_css/style.css">
</head>
<body>

<h1>Update Kamen Rider</h1>

<form method="post" enctype="multipart/form-data">
    <label for="nama">Nama Kamen Rider:</label><br>
    <input type="text" name="nama" value="<?= htmlspecialchars($rider['nama']) ?>" required><br>

    <label for="deskripsi">Deskripsi:</label><br>
    <textarea name="deskripsi" required><?= htmlspecialchars($rider['deskripsi']) ?></textarea><br>

    <label for="image">Gambar:</label><br>
    <input type="file" name="image" accept="image/*"><br><br>

    <button type="submit">Update Kamen Rider</button>
</form>

<a href="dashboard.php">Kembali ke dashboard</a>

</body>
</html>

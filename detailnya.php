<?php
include 'service/user.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kamen Rider</title>
    <link rel="stylesheet" href="edit_css/detail.css">
</head>
<body>

<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

if (isset($_GET['id'])) {
    $riderID = $_GET['id'];

    $sql = "SELECT * FROM kamen_rider WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("i", $riderID);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
    
        while($row = $result->fetch_assoc()) {
            echo "<h1>Detail Kamen Rider " . htmlspecialchars($row["nama"]) . "</h1>";
            echo "<p>" . htmlspecialchars($row["deskripsi"]) . "</p>";
            echo "<img src='uploads/" . htmlspecialchars($row["image"]) . "' alt='" . htmlspecialchars($row["nama"]) . "' style='max-width:300px;'>";
        }
    } else {
        echo "Kamen Rider tidak ditemukan.";
    }
} else {
    echo "Parameter 'id' tidak ditemukan di URL.";
}
?>
<br>
<a href="dashboard.php">Kembali ke daftar</a>

</body>
</html>

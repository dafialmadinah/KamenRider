<?php
include 'service/user.php';

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// Isi halaman dashboard di sini
echo "Selamat datang, " . $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAMEN RIDER DASHBOARD</title>
    <link rel="stylesheet" href="edit_css/style.css">
</head>
<body>
    <h1>KAMEN RIDER DASHBOARD</h1>

    <a href="insert.php">Tambah Kamen Rider</a>
    
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Action</th>
        </tr>
        <?php

        $sql = "SELECT id, nama FROM kamen_rider";
        $result = $db->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>";
                echo '<a href="detailnya.php?id=' . $row["id"] . '">Detail</a> | ';
                echo '<a href="update.php?id=' . $row["id"] . '">Update</a> | ';
                echo '<a href="delete.php?id=' . $row["id"] . '" onclick="return confirm(\'Apakah Anda yakin?\')">Delete</a>';
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>Tidak ada data Kamen Rider.</td></tr>";
        }

        ?>
    </table>

    <form method="post" action="logout.php">
        <button type="submit">Logout</button>
    </form>

</body>
</html>

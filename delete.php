<?php
include 'service/user.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM kamen_rider WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Kamen Rider berhasil dihapus.";
    } else {
        echo "Error: " . $stmt->error;
    }
}

header("Location: dashboard.php");
exit;
?>

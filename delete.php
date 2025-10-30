<?php
include 'koneksi.php';
$id = $_GET['id'];
$stmt = $conn->prepare("DELETE FROM articles WHERE id = ?");
$stmt->bind_param("i", $id); 

if ($stmt->execute()) {
    header("Location: admin.php");
    exit;
} else {
    echo "Error menghapus data: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
<?php
include 'koneksi.php';

$id = '';
$title = '';
$content = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $stmt = $conn->prepare("UPDATE articles SET title = ?, content = ? WHERE id = ?");
    $stmt->bind_param("ssi", $title, $content, $id); 

    if ($stmt->execute()) {
        header("Location: admin.php");
        exit;
    } else {
        echo "Error mengupdate data: " . $stmt->error;
    }
    $stmt->close();
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT title, content FROM articles WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $title = $row['title'];
        $content = $row['content'];
    } else {
        echo "Data tidak ditemukan.";
        exit;
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Artikel</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { color: #333; }
        form { background: #f4f4f4; padding: 15px; border-radius: 5px; }
        input[type="text"], textarea { width: 100%; padding: 8px; margin-bottom: 10px; box-sizing: border-box; }
        input[type="submit"] { background: #28A745; color: white; padding: 10px; border: none; cursor: pointer; }
    </style>
</head>
<body>

    <h1>Edit Artikel</h1>

    <form action="edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        
        Judul: <br>
        <input type="text" name="title" value="<?php echo htmlspecialchars($title); ?>" required>
        <br>
        Isi Artikel: <br>
        <textarea name="content" rows="10" required><?php echo htmlspecialchars($content); ?></textarea>
        <br>
        <input type="submit" name="update" value="Update Artikel">
    </form>
    
    <br>
    <a href="admin.php">Batal & Kembali ke Admin</a>

</body>
</html>

<?php
$conn->close();
?>
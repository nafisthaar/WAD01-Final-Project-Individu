<?php
include 'koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['tambah'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $stmt = $conn->prepare("INSERT INTO articles (title, content) VALUES (?, ?)");
    $stmt->bind_param("ss", $title, $content); 

    
    if ($stmt->execute()) {
        header("Location: admin.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel - Blog Adviz</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1, h2 { color: #333; }
        form { background: #f4f4f4; padding: 15px; border-radius: 5px; }
        input[type="text"], textarea { width: 100%; padding: 8px; margin-bottom: 10px; box-sizing: border-box; }
        input[type="submit"] { background: #007BFF; color: white; padding: 10px; border: none; cursor: pointer; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background: #f2f2f2; }
        a { text-decoration: none; color: #007BFF; }
        .delete-link { color: #DC3545; }
    </style>
</head>
<body>

    <h1>Admin Panel - Blog Adviz</h1>

    <h2>Tambah Artikel Baru</h2>
    <form action="admin.php" method="POST">
        Judul: <br>
        <input type="text" name="title" required>
        <br>
        Isi Artikel: <br>
        <textarea name="content" rows="10" required></textarea>
        <br>
        <input type="submit" name="tambah" value="Terbitkan">
    </form>

    <hr>

    <h2>Daftar Artikel</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Aksi</th>
        </tr>
        
        <?php
        $sql = "SELECT id, title FROM articles ORDER BY id DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["title"] . "</td>";
                echo "<td>";
                echo "<a href='edit.php?id=" . $row["id"] . "'>Edit</a> | ";
                echo "<a href='delete.php?id=" . $row["id"] . "' class='delete-link' onclick=\"return confirm('Yakin mau hapus?');\">Delete</a>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>Belum ada artikel.</td></tr>";
        }
        ?>
    </table>

</body>
</html>

<?php
$conn->close();
?>
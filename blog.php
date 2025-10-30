<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Adviz</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-image: linear-gradient(to bottom right, rgb(3, 7, 18) 0%, rgb(31, 41, 55) 100%);
            background-attachment: fixed;
            background-size: cover; 
        }
        .navbar-custom {
            position: sticky;
            top: 0;
            z-index: 1030;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.03) !important; 
            backdrop-filter: blur(50px);
            -webkit-backdrop-filter: blur(10px);
        }
        .navbar-custom .nav-link {
            color: #fff;
            text-shadow: 0 0 5px rgba(255, 255, 255, 0.4); 
            transition: all 0.3s ease;
        }
        .navbar-custom .nav-link:hover,
        .navbar-custom .nav-link.active {
            color: rgb(251, 146, 60) !important; 
            text-shadow: 0 0 10px rgba(216, 135, 97, 0.7); 
        }
        .page-title-gradient {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(to right, #e2e8f0, #bfdbfe, #d8b4fe);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        font-size: 3.5rem;   
        line-height: 1.4;    
        font-weight: 800;    
        display: inline-block;
        }
        .footer-custom {
            background-color: transparent !important; 
            border-top: 1px transparent;
        }
        .article-content {
            color: #e9ecef;
            font-size: 1.1rem;
            line-height: 1.7;
        }
        .list-group {
            background-color: transparent !important;
        }
        .list-group-item {
            background-color: transparent !important;
            border: none !important; 
            border-bottom: 1px solid #333 !important; 
            transition: all 0.3s ease;
        }
        .list-group-item-action:hover {
            background-color: rgba(255, 165, 0, 0.1) !important; 
            color: rgb(251, 146, 60) !important; 
        }
        .list-group-item-action:hover h5 {
            color: rgb(251, 146, 60) !important;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://adviz.id/assets/logo-CiErAn8e.png" alt="Adviz Logo" style="height: 30px; filter: drop-shadow(0 0 5px rgba(216, 135, 97, 0.7));">
            </a>
            
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                    <li class="nav-item"><a class="nav-link active" href="blog.php">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5 mb-5" style="min-height: 70vh;">
    
    <h1 class="page-title-gradient">Blog & Articles</h1>
    <p class="text-white-50">The latest solutions and insights from Adviz.</p>
    <hr>

    <div class="list-group">
        <?php
        $sql = "SELECT id, title FROM articles ORDER BY id DESC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<a href='artikel.php?id=" . $row["id"] . "' class='list-group-item list-group-item-action'>";
                echo "<h5>" . htmlspecialchars($row["title"]) . "</h5>";
                echo "</a>";
            }
        } else {
            echo "<p class='text-white-50'>Belum ada artikel.</p>";
        }
        ?>
    </div>
    </div> <footer class="text-center text-white-50 pt-5 pb- footer-custom">
        <p class="mb-0">© 2025 Adviz. All Rights Reserved</p>
    </footer>

</body>
</html>

<?php $conn->close(); ?>
<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: white;
        }
        .navbar {
            margin-bottom: 30px;
        }
        .welcome-text {
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Halaman Utama</a>
        <div class="ml-auto">
            <a href="about.php" class="btn btn-info">About</a>
            <a href="video.php" class="btn btn-dark ml-2">Watch Video</a>
            <a href="logout.php" class="btn btn-danger ml-2">Logout</a>
        </div>
    </nav>

    <!-- Content -->
    <div class="container">
        <div class="welcome-text">
            <h3>Selamat Datang <?php echo $_SESSION['username']; ?>!</h3>
            <p>Ini Halaman Utama Dari Web Saya🏝️.</p>
        </div>
    </div>
</body>
</html>

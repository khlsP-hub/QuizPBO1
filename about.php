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
    <title>About</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php">About Me</a>
        <div class="ml-auto">
        <a href="javascript:history.back()" class="btn btn-secondary">Back</a>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
    </nav>

    <div class="container mt-5">
        <h3>About Me</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At similique porro asperiores, saepe quae molestias possimus cupiditate id magnam quo eius ducimus ab sequi facilis, dolorem praesentium minima iste aperiam..</p>
    </div>
</body>
</html>

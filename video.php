<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Path ke folder video
$videoDirectory = 'video/';
$videos = array_diff(scandir($videoDirectory), array('.', '..'));

if (empty($videos)) {
    $error = "No videos found in the folder.";
} else {
    $videoPath = $videoDirectory . reset($videos);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f8f9fa;
            position: relative;
        }
        .video-container {
            max-width: 400px;
            width: 100%;
            overflow: hidden;
        }
        video {
            width: 100%;
            height: auto;
        }
        .btn-group {
            position: absolute;
            top: 20px;
            right: 20px;
        }
    </style>
</head>
<body>
    <!-- Back and Logout Buttons -->
    <div class="btn-group">
        <a href="javascript:history.back()" class="btn btn-secondary">Back</a>
        <a href="logout.php" class="btn btn-danger ml-2">Logout</a>
    </div>

    <!-- Video Content -->
    <div class="video-container">
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php else: ?>
            <video controls autoplay>
                <source src="<?php echo $videoPath; ?>" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        <?php endif; ?>
    </div>
</body>
</html>

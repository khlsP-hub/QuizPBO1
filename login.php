<?php
session_start();

// Cek apakah form login sudah disubmit
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Misalnya, hardcoded username dan password untuk contoh (sebaiknya gunakan validasi dari database)
    $valid_username = 'khalis pancaroba';
    $valid_password = 'khalisaja123';

    if ($username == $valid_username && $password == $valid_password) {
        $_SESSION['username'] = $username;

        // Redirect ke halaman index setelah login berhasil
        header("Location: index.php");
        exit();
    } else {
        $error = "Username atau password salah.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="text-center mt-5">Login</h2>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <form method="post" action="">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
        </form>
    </div>
</body>
</html>

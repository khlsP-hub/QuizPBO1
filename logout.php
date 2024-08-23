<?php
session_start();
session_destroy();


// Redirect ke halaman login setelah logout
header("Location: login.php?logout=1");
exit();

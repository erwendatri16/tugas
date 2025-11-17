<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Selamat Datang, <?= $_SESSION['username']; ?></h2>

<p>Anda berhasil login ke sistem.</p>

<a href="logout.php">Logout</a>

</body>
</html>
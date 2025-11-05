<?php
session_start();
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Silakan login terlebih dahulu');</script>";
    echo "<meta http-equiv='refresh' content='0;url=login.php'>";
    exit();
}
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="header-left">Dashboard</div>
    <div class="header-right">
        Hi, <?php echo htmlspecialchars($username); ?>
        <?php
        if (isset($_COOKIE['user'])) {
            echo " (cookie aktif)";
        } else {
            echo " (cookie sudah habis)";
        }
        ?>
    </div>
</header>
<div class="container">
    <aside>
        <ul class="menu">
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="makanan.php">Makanan Khas</a></li>
            <li><a href="logout.php">Keluar</a></li>
        </ul>
    </aside>
    <section class="main">
        <h2>Dashboard</h2>
        <p>Anda telah berhasil login sebagai <b><?php echo htmlspecialchars($username); ?></b>.</p>
    </section>
</div>
<footer>FOOTER</footer>
</body>
</html>

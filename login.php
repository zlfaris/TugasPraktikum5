<?php
session_start();
if (isset($_SESSION['username'])) {
    header('Location: dashboard.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Website</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>HEADER</header>
<div class="container">
    <section class="login-box">
        <h2>Login</h2>
        <form method="post" action="ceklogin.php">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
        <?php
        if (isset($_SESSION['error'])) {
            echo "<p style='color:red; text-align:center;'>" . $_SESSION['error'] . "</p>";
            unset($_SESSION['error']);
        }
        ?>
    </section>
</div>
<footer>FOOTER</footer>
</body>
</html>

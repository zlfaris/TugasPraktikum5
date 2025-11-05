<?php
session_start();
$akun = [
    "Admin" => "pass@admiN1",
    "Anita" => "pass@anitA2",
    "Sapta" => "pass@saptA3",
    "ZulFaris" => "zul123"
];
$username = $_POST['username'];
$password = $_POST['password'];
if (isset($akun[$username])) {
    if ($akun[$username] === $password) {
        $_SESSION['username'] = $username;
        setcookie("user", $username, time() + 10);
        header('Location: dashboard.php');
        exit();
    } else {
        $_SESSION['error'] = "Password yang dimasukkan salah";
        header('Location: login.php');
        exit();
    }
} else {
    $_SESSION['error'] = "Username tidak terdaftar";
    header('Location: login.php');
    exit();
}
?>

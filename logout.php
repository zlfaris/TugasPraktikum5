<?php
session_start();
session_destroy();
setcookie("user", "", time() - 3600);
echo "<script>alert('Anda telah logout');</script>";
echo "<meta http-equiv='refresh' content='0;url=login.php'>";
?>

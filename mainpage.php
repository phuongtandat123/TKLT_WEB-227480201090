<?php
session_start();

// Kiểm tra nếu chưa đăng nhập thì quay về login.html
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang Chính</title>
</head>
<body>
    <h2>TRANG CHÍNH</h2>
    <p>Người đã đăng nhập với tên <b><?php echo $_SESSION['username']; ?></b> và Email là <b><?php echo $_SESSION['email']; ?></b></p>
    <a href="logout.php">Đăng xuất</a>
</body>
</html>
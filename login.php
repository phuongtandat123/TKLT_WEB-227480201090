<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();

// Danh sách tài khoản hợp lệ (giả lập)
$valid_users = [
    ['username' => 'admin', 'email' => 'admin@example.com', 'password' => '123456'],
    ['username' => 'user1', 'email' => 'user1@example.com', 'password' => 'password']
];

// Lấy dữ liệu từ form
$username = $_POST['username'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Kiểm tra thông tin đăng nhập
$valid = false;
foreach ($valid_users as $user) {
    if ($user['username'] === $username && $user['email'] === $email && $user['password'] === $password) {
        $valid = true;
        break;
    }
}

if ($valid) {
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    header("Location: mainpage.php");
    exit();
} else {
    echo "Sai thông tin đăng nhập! <a href='login.html'>Thử lại</a>";
}
?>
</body>
</html>
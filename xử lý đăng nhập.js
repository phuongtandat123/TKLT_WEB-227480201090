// JavaScript to handle login, create cookies, and auto-logout
document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault();
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // Thay thế bằng logic xác thực của bạn
    if (email && password) {
        // Tạo cookie với thời gian sống là 3 phút
        document.cookie = `user=${email}; max-age=180`;
        alert('Đăng Nhập Thành Công!');
        // Chuyển hướng đến trang khác nếu cần
    } else {
        alert('Vui lòng điền đầy đủ thông tin.');
    }
});
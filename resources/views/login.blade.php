<!DOCTYPE html>
<html>
<head>
    <title>Trang Đăng nhập - Booking.com</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <!-- Tiêu đề và logo -->
        <header>
        <img src="{{ asset('images/logo-booking-login.png') }}" alt="Booking.com Logo">
        </header>

        <!-- Form đăng nhập -->
        <form action="/login" method="post">
            @csrf
            <!-- Ô đăng nhập email/username -->
            <div class="form-group">
                <label for="email">Email/Username:</label>
                <input type="text" id="email" name="email" placeholder="Nhập email/username">
            </div>

            <!-- Ô đăng nhập mật khẩu -->
            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" placeholder="Nhập mật khẩu">
            </div>

            <!-- Nút Đăng nhập -->
            <button type="submit">Login</button>
        </form>

        <!-- Liên kết Quên mật khẩu
        <a href="/forgot-password">Quên mật khẩu?</a> -->

        <!-- Tùy chọn Đăng nhập nhanh -->
        <div class="quick-login">
            <!-- <h4>Đăng nhập nhanh qua:</h4> -->
            <a href="/login-with-google" class="button-google">Google</a>
            <a href="/login-with-facebook" class="button-facebook">Facebook</a>
        </div>

        <!-- Tùy chọn Đăng ký -->
        <a href="/register">Đăng ký tài khoản mới</a>

        <!-- Chân trang -->
        <footer>
            <a href="/contact">Liên hệ</a>
            <a href="/about-us">Về chúng tôi</a>
            <a href="/faq">Câu hỏi thường gặp</a>
        </footer>
    </div>
</body>
</html>

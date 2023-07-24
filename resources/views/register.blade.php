<!DOCTYPE html>
<html>
<head>
    <title>Trang Đăng ký - Booking.com</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <!-- Tiêu đề và logo -->
        <header>
        <img src="{{ asset('images/logo-booking-login.png') }}" alt="Booking.com Logo">
        </header>

        <!-- Form đăng ký -->
        <form action="/register" method="post">
            @csrf
            <!-- Ô nhập tên -->
            <div class="form-group">
                <label for="name">Họ và tên:</label>
                <input type="text" id="name" name="name" placeholder="Nhập họ và tên">
            </div>

            <!-- Ô nhập email -->
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Nhập email">
            </div>

            <!-- Ô nhập mật khẩu -->
            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" placeholder="Nhập mật khẩu">
            </div>

            <!-- Ô xác nhận mật khẩu -->
            <div class="form-group">
                <label for="password_confirmation">Xác nhận mật khẩu:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Xác nhận mật khẩu">
            </div>

            <!-- Nút Đăng ký -->
            <button type="submit">Đăng ký</button>
        </form>

        <!-- Tùy chọn Đăng nhập nhanh -->
        <div class="quick-login">
            <!-- <h4>Đăng ký nhanh qua:</h4> -->
            <a href="/login-with-google" class="button-google">Google</a>
            <a href="/login-with-facebook" class="button-facebook">Facebook</a>
        </div>

        <!-- Liên kết Đăng nhập -->
        <a href="/login">Đăng nhập nếu đã có tài khoản</a>

        <!-- Chân trang -->
        <footer>
            <a href="/contact">Liên hệ</a>
            <a href="/about-us">Về chúng tôi</a>
            <a href="/faq">Câu hỏi thường gặp</a>
        </footer>
    </div>
</body>
</html>

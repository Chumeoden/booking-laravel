<!DOCTYPE html>
<html>
<head>
    <title>Trang chủ</title>
    <link rel="stylesheet" href="{{ asset('css/style-home-page.css') }}">

</head>
<body>
    <!-- Hiển thị logo với kích thước 200px -->
    <img src="{{ asset('images/logo-booking-login.png') }}" alt="Booking.com Logo" class="logo">
    @if(session('success'))
    <div>
        <p style="color: green;">{{ session('success') }}</p>
    </div>
    @endif
    

    
    <!-- Hiển thị nút đăng nhập và đăng ký nếu người dùng chưa đăng nhập -->
    @guest
    <!-- Đảo ngược vị trí của các nút đăng nhập và đăng ký -->
    <div class="nav-links">
            <a href="/login" class="auth-button">Đăng nhập</a>
            <a href="/register" class="auth-button">Đăng ký</a>
        </div>
        @else
        <!-- Hiển thị avatar người dùng và thông tin người dùng -->
        <div class="user-info">
            <div class="user-avatar" id="userAvatar"></div>
            
            <!-- Hiển thị bảng nhỏ khi nhấp vào avatar -->
            <div class="user-menu" id="userMenu">
                <ul><span>{{ Auth::user()->name }}</span></ul>
                <ul><a href="/user-profile">Xem thông tin tài khoản</a></ul>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="auth-button">Đăng xuất</a>
                <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                    @csrf
                </form>
            </div>

            <!-- Script để xử lý sự kiện click vào avatar -->
            <script>
                var avatar = document.getElementById('userAvatar');
                var menu = document.getElementById('userMenu');
                
                avatar.addEventListener('click', function() {
                    if (menu.style.display === 'block') {
                        menu.style.display = 'none';
                    } else {
                        menu.style.display = 'block';
                    }
                });
                </script>
        </div>
        @endguest
<div id="menu">
    <ul>
    <li><a href="#">Trang chủ</a></li>
    <li><a href="#">Diễn đàn</a></li>
    <li><a href="#">Tin tức</a></li>
    <li><a href="#">Hỏi đáp</a></li>
    <li><a href="#">Liên hệ</a></li>
    </ul>
    </div>
        <div class="banner">
            <h1>Online Booking</h1>
        </div>
    </div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Trang chủ</title>
    <style>
        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #ccc;
            display: inline-block;
            cursor: pointer;
        }

        .user-menu {
            display: none;
            position: absolute;
            top: 60px; /* Để bảng nhỏ hiển thị bên dưới avatar */
            right: 0;
            background-color: #f9f9f9;
            padding: 8px;
            border: 1px solid #ccc;
        }

        /* Thêm CSS để đảo ngược vị trí của phần hiển thị khi đăng nhập */
        .user-info {
            float: right;
            margin-right: 20px;
        }

        .nav-links {
            float: right;
        }

        /* Đặt kích thước của logo thành 200px */
        .logo {
            width: 200px;
        }

        /* CSS cho các nút đăng nhập và đăng ký */
        .auth-button {
            padding: 10px 20px;
            background-color: #fff;
            color: #00f;
            border: 2px solid #00f;
            border-radius: 5px;
            text-decoration: none;
            margin-left: 10px;
        }

        /* CSS cho màu chữ màu xanh */
        .auth-button:hover {
            background-color: #00f;
            color: #fff;
        }
    </style>
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

</body>
</html>

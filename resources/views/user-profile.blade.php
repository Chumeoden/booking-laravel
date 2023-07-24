<!DOCTYPE html>
<html>
<head>
    <title>Thông tin tài khoản</title>
    <link rel="stylesheet" href="{{ asset('path/to/styles.css') }}">
</head>
<body>
    <div class="user-profile-container">
        <h1>Thông tin tài khoản của {{ Auth::user()->name }}</h1>
        <form class="user-profile-form" action="{{ route('user.profile.update') }}" method="POST">
            @csrf
            <label for="name">Tên người dùng:</label>
            <input type="text" id="name" name="name" value="{{ Auth::user()->name }}">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ Auth::user()->email }}">

            <label for="password">Mật khẩu mới:</label>
            <input type="password" id="password" name="password">

            <label for="password_confirmation">Xác nhận mật khẩu mới:</label>
            <input type="password" id="password_confirmation" name="password_confirmation">

            <button type="submit">Cập nhật</button>
        </form>
    </div>
</body>
</html>

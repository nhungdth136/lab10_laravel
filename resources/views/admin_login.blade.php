<!DOCTYPE html>

<head>
    <title>Trang quản lý Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <link href="{{ asset('backend/css/style-responsive.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('backend/css/SlideStyle.css') }}" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:wgth@500&display=swap">
    <script src="{{ asset('backend/js/jquery2.0.3.min.js') }}"></script>
</head>

<body>
<div class="forms-wrapper">
        <!-- Đăng ký -->
        <div class="form-container">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <label for="signup">Đăng Ký</label>
                @if (Session::has('register_message'))
                    <div class="alert-success">
                        {{ Session::get('register_message') }}
                    </div>
                @endif
                <input type="text" name="admin_name" placeholder="Tên đăng nhập" required>
                <input type="email" name="admin_email" placeholder="Email" required>
                <input type="tel" name="admin_phone" placeholder="Số điện thoại" required>
                <input type="password" name="admin_password" placeholder="Mật khẩu" required>
                <button type="submit">Đăng Ký</button>
            </form>
        </div>

        <!-- Đăng nhập -->
        <div class="form-container">
            <form action="{{ URL::to('/admin-dashboard') }}" method="POST">
                <label for="login">Đăng Nhập</label>
                @if (Session::has('login_message'))
                    <div class="text-alert">
                        {{ Session::get('login_message') }}
                    </div>
                @endif
                @csrf
                <input type="email" name="admin_email" placeholder="Email" required>
                <input type="password" name="admin_password" placeholder="Mật khẩu" required>
                <button type="submit">Đăng Nhập</button>
            </form>
        </div>
    </div>

        <script src="{{ asset('backend/js/bootstrap.js') }}"></script>
        <script src="{{ asset('backend/js/jquery.dcjqaccordion.2.7.js') }}"></script>
        <script src="{{ asset('backend/js/scripts.js') }}"></script>
        <script src="{{ asset('backend/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('backend/js/jquery.nicescroll.js') }}"></script>
        <!--[if lte IE asset8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
        <script src="{{ asset('backend/js/jquery.scrollTo.js') }}"></script>
</body>

</html>
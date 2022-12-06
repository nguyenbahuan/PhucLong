<!doctype html>
<html lang="en">

<head>
    <title>Đăng nhập</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- icon cạnh tiêu đề  -->
    <link rel="icon" href=" {{ asset('img/logo.png') }} ">
</head>

<body>
    <div class="login-page">
        <div class="form">
            <form action="" method="post" id="form-login">
                @csrf
                <div class="user-icon">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                </div>
                <h1 class="login">ĐĂNG NHẬP</h1>
                <div class="input-user">
                    <input id="username-login" type="text" name="email" placeholder="Enter username">
                </div>
                    {{-- @if ($errors->has('email'))
                    <span class="alter alert-danger">{{ $errors->first('email') }}</span>            
                    @endif --}}
                <div class="input-pw">
                    <input id="password-login" type="password" name="password" placeholder="Enter password">
                </div>
                {{-- @if ($errors->has('password'))
                <span class="alter alert-danger">{{ $errors->first('password') }}</span>            
                @endif --}}
                <input id="btn-login" type="submit"  value="ĐĂNG NHẬP">
                <div class="message">
                    <p href="#">Quên mật khẩu? <a href="/create-login">Đăng kí tài khoản mới </a></p>

                </div>
            </form>

        </div>
    </div>









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="./assets/js/js_admin.js"></script>
</body>

</html>
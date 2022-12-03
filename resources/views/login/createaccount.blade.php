<!doctype html>
<html lang="en">

<head>
    <title>Tạo Tài Khoản</title>
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
                <h1 class="login">ĐĂNG KÍ</h1>
                <div class="input-pw">
                    <input  type="text" name="name" placeholder="Enter Name">
                </div>
                <select id="" name='gt'>
                    <option value="Nữ">Nữ</option>
                    <option value="Nam">Nam</option>
                </select>
                <div class="input-user">
                    <input  type="text" name="email" placeholder="Enter username" value="">
                </div>
                <div class="input-pw">
                    <input  type="password" name="pass" placeholder="Enter password">
                </div>
                
                <div class="input-pw">
                    <input  type="date" name="date" >
                </div>
                

                <input  type="hidden" name="role" placeholder="role" value="none">
                <input id="btn-login" type="submit"  value="Xác nhận ">

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
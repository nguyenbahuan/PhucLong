<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body {
            object-fit: cover;
            /* background-position: center; */
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            /* width: 100%; */
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #0c713d;
            color: #fff;
            border-radius: 5px;
            /* max-width: 1024px; */
            margin: auto;
            /* height: 80px;
    line-height: 80px; */
        }

        .box-center {
            width: 70%;
            margin: 0 auto;
        }

        .from {
            /* background: #0c713d; */
            background: #f4f4f4f4;
            border-radius: 15px;
        }
    </style>
</head>

<body background="{{ asset('img/login.jpg') }}">
    <div class="box-center">
        <div class="p-3 mb header">
            <h1>Admin</h1><i id="logout" class="fas fa-sign-out-alt"></i>
        </div>
        <div class="container p-3 mt-5 from">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="input-sanpham" class="form-label">Tên Sản Phẩm</label>
                    <input type="text" class="form-control  @error('title') border-red-500 @enderror" name="sanpham"
                        id="input-sanpham">
                    @error('title')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="input-loai" class="form-label">Loại Sản Phẩm</label>
                    <input type="text" class="form-control" name="loai" id="input-loai">
                </div>
                <div class="mb-3">
                    <label for="input-kl" class="form-label">Khối Lượng</label>
                    <input type="text" class="form-control" name="kl" id="input-kl">
                </div>
                <div class="mb-3">
                    <label for="input-gia" class="form-label">Đơn Giá</label>
                    <input type="text" class="form-control" name="gia" id="input-gia">
                </div>
                <div class="mb-3">
                    <label for="input-anh" class="form-label">Ảnh</label>
                    <input type="text" class="form-control" name="anh" id="input-anh">
                </div>
                @csrf
                <button type="submit" class="btn btn-outline-success">Thêm</button>
            </form>
        </div>

    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

    <title>Admin</title>
    <!-- icon cạnh tiêu đề  -->
    <link rel="icon" href="./assets/img/logo.png">
</head>

<body>

    <div class="box-center">
        <div class="mb header">
            <h1>Admin</h1><i id="logout" class="fas fa-sign-out-alt"></i>
        </div>
        <div class="row-cols-1 menu">
            <nav class="nav-pc">
                <ul class="menu-list-pc">
                    <li class="active-style"><a href="#admin">Trang chủ</a></li>
                    <li><a href="#products">Sản phẩm</a></li>
                    <li><a href="/admin/lish-role?role=nv">Nhân viên</a></li>
                    <li><a href="/admin/lish-role?role=none">Khách Hàng</a></li>
                    <li><a href="#user">Khách hàng</a></li>
                    <li><a href="#coment">Bình luận</a></li>
                    <li><a href="#posts">Bài viết</a></li>
                </ul>
            </nav>
            <label class="btn-nav" for="nav-mobile-input">
                <a href="{{ Auth::logout() }}">
                    <i class="fas fa-bars nav-btn"></i>
                    </a>
            </label>
            <input type="checkbox" class="nav-input" name="" id="nav-mobile-input">
            <label for="nav-mobile-input" class="nav-overlay"></label>
            <nav class="nav-mobile">
                <label for="nav-mobile-input" class="nav-close btn-outline-danger"><i class="fas fa-times"></i></label>

                <ul class="menu-mobile-list text-center">
                    <li><a href="{{ url('/admin') }}">Trang chủ</a></li>
                    <li><a href="#products">Sản phẩm</a></li>
                    <li><a href="#user">Khách hàng</a></li>
                    <li><a href="#coment">Bình luận</a></li>
                    <li><a href="#posts">Bài viết</a></li>
                </ul>
            </nav>

        </div>
        <div class="menu-content">
            <div id="admin" class="row-cols-1 menu-item">
                <div class="container-fluid admin-wrapper">
                    <div class="row">
                        <div class="col-xl-3 col-sm-6">
                            <div class="card-box text-right">
                                <div class="media">
                                    <div class="avatar align-self-center rounded-circle ">
                                        <i class="fas fa-dollar-sign avatar-title font-30 text-white"></i>


                                    </div>
                                    <div class="box-content media-body  ">
                                        <p class="m-0 text-uppercase font-weight-normal text-truncate">Tổng doanh thu
                                        </p>
                                        <h3 class="font-weight-normal text-truncate text-truncate">
                                            <span>5.123.000đ</span>
                                        </h3>
                                        <p class="m-0">20-1-2022</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card-box text-right">
                                <div class="media">
                                    <div class="avatar align-self-center  rounded-circle bg-info">
                                        <i class="fas fa-user avatar-title font-30 text-white"></i>
                                    </div>
                                    <div class="box-content media-body  ">
                                        <p class="m-0 text-uppercase font-weight-normal text-truncate">Người truy cập
                                        </p>
                                        <h3 class="font-weight-normal text-truncate"> <span>26.521</span></h3>
                                        <p class="m-0">20-1-2022</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card-box text-right">
                                <div class="media">
                                    <div class="avatar align-self-center rounded-circle bg-warning">
                                        <i class="fas fa-crown avatar-title font-30 text-white"></i>


                                    </div>
                                    <div class="box-content media-body  ">
                                        <p class="m-0 text-uppercase font-weight-normal text-truncate">SỐ LƯỢNG GIAO
                                            DỊCH</p>
                                        <h3 class="font-weight-normal text-truncate"> <span>7.842</span></h3>
                                        <p class="m-0">20-1-2022</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card-box text-right">
                                <div class="media">
                                    <div class="avatar align-self-center rounded-circle bg-danger">
                                        <i class="fas fa-comment-dots avatar-title font-30 text-white"></i>


                                    </div>
                                    <div class="box-content media-body  ">
                                        <p class="m-0 text-uppercase font-weight-normal text-truncate">Lượt bình luận
                                        </p>
                                        <h3 class="font-weight-normal text-truncate "> <span>2.073</span></h3>
                                        <p class="m-0">20-1-2022</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-sm-6">
                            <div class="card-box card-user">
                                <img src="./assets/img/admin-avatar.png" class="img-fluid rounded-circle avatar-ad"
                                    alt="">
                                <div class="user-info">
                                    <h5 class="mt-3 mb-1">HuanBa</h5>
                                    <p class="text-muted m-0">Huan@gmail.com</p>
                                    <div class="user-position">
                                        <span class="text-warning ">
                                            <font style="vertical-align: inherit;">Quản trị viên</font>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card-box card-user">
                                <img src="./assets/img/admin-avatar.png" class="img-fluid rounded-circle avatar-ad"
                                    alt="">
                                <div class="user-info">
                                    <h5 class="mt-3 mb-1">HoangDo</h5>
                                    <p class="text-muted m-0">HoangDo@gmail.com</p>
                                    <div class="user-position">
                                        <span class="text-danger ">
                                            <font style="vertical-align: inherit;">Quản trị viên</font>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card-box card-user">
                                <img src="./assets/img/admin-avatar.png" class="img-fluid rounded-circle avatar-ad"
                                    alt="">
                                <div class="user-info">
                                    <h5 class="mt-3 mb-1">VietHoan</h5>
                                    <p class="text-muted m-0">VietHoan@gmail.com</p>
                                    <div class="user-position">
                                        <span class="text-info ">
                                            <font style="vertical-align: inherit;">Quản trị viên</font>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6">
                            <div class="card-box card-user">
                                <img src="./assets/img/admin-avatar.png" class="img-fluid rounded-circle avatar-ad"
                                    alt="">
                                <div class="user-info">
                                    <h5 class="mt-3 mb-1">DoHuy</h5>
                                    <p class="text-muted m-0">DoHuy@gmail.com</p>
                                    <div class="user-position">
                                        <span class="text-success ">
                                            <font style="vertical-align: inherit;">Quản trị viên</font>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">

                    </div>
                </div>
            </div>
            <div id="products" style="margin: 0;" class=" menu-item">
                <div class="col mb-2">
                    <a class="btn btn-info" href="admin/create-product">Thêm</a>
                </div>
                {{-- <div class="col col-md-4">
                    <div class="form-add">
                        <form action="#" method="post">
                            <div class="row-cols-1 mb-3">
                                <p>Mã sản phẩm</p>
                                <input type="text" name="ma_sp" id="ma_sp">
                            </div>
                            <div class="row-cols-1 mb-3">
                                <p>Tên sản phẩm</p>
                                <input type="text" name="ten_sp" id="ten_sp">
                            </div>
                            <div class="row-cols-1 mb-3">
                                <p>Giá</p>
                                <input type="text" name="gia" id="gia">
                            </div>
                            <div class="row-cols-1 mb-3">
                                <p>Tìm kiếm</p>
                                <input type="text" name="search" id="search"
                                    placeholder="Tìm kiếm theo mã sản phẩm..." />
                            </div>
                            <div class="row-cols-1">
                                <!-- <input type="button" value="Thêm mới"> -->

                                <button type="button" class="btn btn-primary"
                                    onclick="addHtmlTableRow();">Thêm</button>
                                <button type="button" class="btn btn-warning"
                                    onclick="editHtmlTbleSelectedRow();">Sửa</button>
                                <button type="button" class="btn btn-danger"
                                    onclick="removeSelectedRow();">Xoá</button>

                            </div>
                            <div class="row-col-1">
                                <input type="reset" value="Nhập lại" style="margin-top:10px ;">
                            </div>
                        </form>
                    </div>
                </div> --}}
                <div class="col col-md-16">
                    <div class="table-wrapper">
                        <table class="table table-hover products-list" id="table">
                            <thead>
                                <tr>
                                    <th scope="col">Mã sản phẩm</th>
                                    <th scope="col">Tên sản phẩm</th>
                                    <th scope="col">Loại</th>
                                    <th scope="col">Khối lượng</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Ảnh</th>
                                    <th scope="col">#</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_product as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->TenSanPham }}</td>
                                        <td>{{ $item->LoaiSanPham }}</td>
                                        <td>{{ $item->TenTiengAnh }}</td>
                                        <td>{{ $item->GiaTien }}</td>
                                        <td><img style="width: 100px;" src="{{ $item->imgSanPham }}" alt="">
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-info"
                                                href="admin/edit-product/{{ $item->id }}">Sửa</a>
                                            <a class="btn btn-outline-danger"
                                                href="admin/delete-product/{{ $item->id }}"
                                                onclick="return confirm('Ban muon xoa khong')">Xóa</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>


            </div>
            <div id="user" class="row-cols-1 menu-item">
                <div class="container-lg">
                    <table class="table table-striped" style="background-color: #fff;">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên</th>
                                <th scope="col">Địa chỉ</th>
                                <th scope="col">Số điện thoại</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">1</td>
                                <td>Huân</td>
                                <td>HN</td>
                                <td>0331234321</td>
                            </tr>
                            <tr>
                                <td scope="row">2</td>
                                <td>Huy</td>
                                <td>HD</td>
                                <td>0331231234</td>
                            </tr>
                            <tr>
                                <td scope="row">3</td>
                                <td>Hoàn</td>
                                <td>NB</td>
                                <td>0331235678</td>
                            </tr>
                            <tr>
                                <td scope="row">4</td>
                                <td>Hoàng</td>
                                <td>SN</td>
                                <td>0331239012</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="coment" class="row-cols-1 menu-item">
                <div class="container-fluid card-comment-wapper">
                    <div class="row">
                        <div class="col-lg-4 card-comment">
                            <div class="card-body">
                                <div class="card-top mb-3">
                                    <img src="./assets/img/avatar.png " class="img-fluid rounded-circle avatar-user"
                                        alt="">
                                    <div class="card-right">
                                        <h4 class="header-tile">Huan Ba</h4>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    </div>
                                </div>
                                <p class="sub-header">10 điểm</p>
                            </div>
                        </div>
                        <div class="col-lg-4 card-comment">
                            <div class="card-body">
                                <div class="card-top mb-3">
                                    <img src="./assets/img/avatar.png " class="img-fluid rounded-circle avatar-user"
                                        alt="">
                                    <div class="card-right">
                                        <h4 class="header-tile">Hoang Do</h4>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    </div>
                                </div>
                                <p class="sub-header">Đồ uống rất ngon</p>
                            </div>
                        </div>
                        <div class="col-lg-4 card-comment">
                            <div class="card-body">
                                <div class="card-top mb-3">
                                    <img src="./assets/img/avatar.png " class="img-fluid rounded-circle avatar-user"
                                        alt="">
                                    <div class="card-right">
                                        <h4 class="header-tile">Huan Ba</h4>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    </div>
                                </div>
                                <p class="sub-header">Đồ uống và đồ ăn rất ngon</p>
                            </div>
                        </div>
                        <div class="col-lg-4 card-comment">
                            <div class="card-body">
                                <div class="card-top mb-3">
                                    <img src="./assets/img/avatar.png " class="img-fluid rounded-circle avatar-user"
                                        alt="">
                                    <div class="card-right">
                                        <h4 class="header-tile">Huy Do</h4>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    </div>
                                </div>
                                <p class="sub-header">Đồ ăn ngon phục vụ tốt</p>
                            </div>
                        </div>
                        <div class="col-lg-4 card-comment">
                            <div class="card-body">
                                <div class="card-top mb-3">
                                    <img src="./assets/img/avatar.png " class="img-fluid rounded-circle avatar-user"
                                        alt="">
                                    <div class="card-right">
                                        <h4 class="header-tile">Huan Ba</h4>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    </div>
                                </div>
                                <p class="sub-header">Đồ uống và đồ ăn rất ngon</p>
                            </div>
                        </div>
                        <div class="col-lg-4 card-comment">
                            <div class="card-body">
                                <div class="card-top mb-3">
                                    <img src="./assets/img/avatar.png " class="img-fluid rounded-circle avatar-user"
                                        alt="">
                                    <div class="card-right">
                                        <h4 class="header-tile">Huan Ba</h4>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    </div>
                                </div>
                                <p class="sub-header">Đồ uống và đồ ăn rất ngon</p>
                            </div>
                        </div>
                        <div class="col-lg-4 card-comment">
                            <div class="card-body">
                                <div class="card-top mb-3">
                                    <img src="./assets/img/avatar.png " class="img-fluid rounded-circle avatar-user"
                                        alt="">
                                    <div class="card-right">
                                        <h4 class="header-tile">Huan Ba</h4>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    </div>
                                </div>
                                <p class="sub-header">Đồ uống và đồ ăn rất ngon</p>
                            </div>
                        </div>
                        <div class="col-lg-4 card-comment">
                            <div class="card-body">
                                <div class="card-top mb-3">
                                    <img src="./assets/img/avatar.png " class="img-fluid rounded-circle avatar-user"
                                        alt="">
                                    <div class="card-right">
                                        <h4 class="header-tile">Huan Ba</h4>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    </div>
                                </div>
                                <p class="sub-header">Đồ uống và đồ ăn rất ngon</p>
                            </div>
                        </div>
                        <div class="col-lg-4 card-comment">
                            <div class="card-body">
                                <div class="card-top mb-3">
                                    <img src="./assets/img/avatar.png " class="img-fluid rounded-circle avatar-user"
                                        alt="">
                                    <div class="card-right">
                                        <h4 class="header-tile">Huan Ba</h4>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    </div>
                                </div>
                                <p class="sub-header">Đồ uống và đồ ăn rất ngon</p>
                            </div>
                        </div>
                        <div class="col-lg-4 card-comment">
                            <div class="card-body">
                                <div class="card-top mb-3">
                                    <img src="./assets/img/avatar.png " class="img-fluid rounded-circle avatar-user"
                                        alt="">
                                    <div class="card-right">
                                        <h4 class="header-tile">Huan Ba</h4>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    </div>
                                </div>
                                <p class="sub-header">Đồ uống và đồ ăn rất ngon</p>
                            </div>
                        </div>
                        <div class="col-lg-4 card-comment">
                            <div class="card-body">
                                <div class="card-top mb-3">
                                    <img src="./assets/img/avatar.png " class="img-fluid rounded-circle avatar-user"
                                        alt="">
                                    <div class="card-right">
                                        <h4 class="header-tile">Huan Ba</h4>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    </div>
                                </div>
                                <p class="sub-header">Đồ uống và đồ ăn rất ngon</p>
                            </div>
                        </div>
                        <div class="col-lg-4 card-comment">
                            <div class="card-body">
                                <div class="card-top mb-3">
                                    <img src="./assets/img/avatar.png " class="img-fluid rounded-circle avatar-user"
                                        alt="">
                                    <div class="card-right">
                                        <h4 class="header-tile">Huan Ba</h4>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    </div>
                                </div>
                                <p class="sub-header">Đồ uống và đồ ăn rất ngon</p>
                            </div>
                        </div>
                        <div class="col-lg-4 card-comment">
                            <div class="card-body">
                                <div class="card-top mb-3">
                                    <img src="./assets/img/avatar.png " class="img-fluid rounded-circle avatar-user"
                                        alt="">
                                    <div class="card-right">
                                        <h4 class="header-tile">Huan Ba</h4>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    </div>
                                </div>
                                <p class="sub-header">Bình luận</p>
                            </div>
                        </div>
                        <div class="col-lg-4 card-comment">
                            <div class="card-body">
                                <div class="card-top mb-3">
                                    <img src="./assets/img/avatar.png " class="img-fluid rounded-circle avatar-user"
                                        alt="">
                                    <div class="card-right">
                                        <h4 class="header-tile">Huan Ba</h4>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    </div>
                                </div>
                                <p class="sub-header">Đồ ăn ngon phục vụ tốt</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="posts" class="row-cols-1 menu-item">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Tiêu đề</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Nội dung</th>
                        </tr>
                    </thead>
                    <tbody style="background-color: #fff;">
                        <tr>
                            <td>TỪ NHỮNG MẦM TRÀ, CHÚNG TÔI TẠO RA NIỀM ĐAM MÊ</td>
                            <td><img style="width: 100px;" src="./assets/img/content_1.jpg" alt=""></td>
                            <td>Trải qua hơn 50 năm chắt chiu tinh hoa từ những búp trà xanh và hạt cà phê
                                thượng hạng cùng mong muốn mang lại cho khách hàng những trải nghiệm giá trị
                                nhất khi thưởng thức, Phúc Long liên tục là thương hiệu tiên phong với nhiều ý
                                tưởng sáng tạo đi đầu trong ngành trà và cà phê.

                                Chúng tôi tin rằng từng sản phẩm trà và cà phê sẽ càng thêm hảo hạng khi được
                                tạo ra từ sự phấn đấu không ngừng cùng niềm đam mê. Và chính kết nối dựa trên
                                niềm tin, sự trung thực và tin yêu sẽ góp phần mang đến những nét đẹp trong văn hóa
                                thưởng trà và cà phê ngày càng bay cao, vươn xa.</td>
                        </tr>
                        <tr>
                            <td>ĐỘI NGŨ NHÂN VIÊN TRÀN ĐẦY NHIỆT HUYẾT</td>
                            <td><img width="100px" src="./assets/img/content_2.jpg" alt=""></td>
                            <td>Trong suốt quá trình hoạt động và phát triển, đội ngũ quản lý và nhân viên của
                                Phúc Long Coffee & Tea, qua bao thế hệ, đã cùng nhau xây dựng, nuôi dưỡng niềm đam
                                mê dành cho trà và cà phê với mong muốn được thử thách bản thân trong ngành dịch
                                vụ năng động và sáng tạo.</td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
</script>
<!-- JS -->
<script src="./assets/js/js_admin.js"></script>
<script>
    $(document).ready(function() {

        $('.menu-item').hide();
        $('.menu-item:first-child').fadeIn();
        $('.menu li').click(function() {
            // active menu
            $('.menu-list-pc li').removeClass('active-style')
            $(this).addClass('active-style');

            // Show menu item
            let id_menu = $(this).children('a').attr('href');
            $('.menu-item').hide();
            $(id_menu).fadeIn();
            return;
        });
        // dang xuat
        $('#logout').on('click', function(event) {
            location.href = "login.html";
        });

        return;
    });
</script>

</html>

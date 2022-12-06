@extends('layout.layout')
@section('main')
    <!-- begin header -->




    <!-- begin img  -->
    <div class=" slider">
        <div class="header_img">
            <img class="img-fluid" src="https://phuclong.com.vn/uploads/category/3366d8e73e57be-banner_1920576.png"
                alt="">
        </div>

    </div>
    <!-- end img -->

    <!-- begin title -->

    <div class="container title">
        <ul class="title-menu">
            <li>
                <a href="" class="title-menu-a-1">
                    Trang chủ
                </a>
            </li>
            /
            <li>
                <a href="" class="title-menu-a-1-1 title-menu-a-1 active">
                    Thức uống
                </a>
            </li>
        </ul>
        <h1 class="col-md-12 col-xs-12 text-uppercase title-h1"> Thức uống</h1>
        <img src="https://phuclong.com.vn/images/icon_tealeaves.png" alt="">
        <ul class='title-menu title-menu-cr'>
            <li class="active title-menu-li-1" key=0>
                <a href="{{ url('/product?category=drink') }}" class="text-uppercase dish title-menu-a-2 "
                    id="title-menu-div-2-drink">thức uống</a>
            </li>
            <li class="title-menu-li-2" key=1>
                <a href="{{ url('/product?category=snacks') }}" class="text-uppercase dish title-menu-a-2 "
                    id="title-menu-div-2-snacks">snacks</a>
            </li>
            <li class="title-menu-li-3" key=2>
                <a href="{{ url('/product?category=bakery') }}" class="text-uppercase dish title-menu-a-2 "
                    id="title-menu-div-2-bakery">bakery</a>
            </li>
        </ul>
    </div>

    <!-- end title -->

    <div id="root" class="container"> 
    <div class="container-products">
        @foreach ($data as $item)
            <div class='item-drink col-md-3 col-sm-6'>
                <div class='item-drink-box'>
                    <img src={{ $item->imgSanPham }} alt="" class='item-drink-index'></img>
                    <div class="item-drink-info">
                        <div class="item-drink-name-Vn ">
                            <p>{{ $item->TenSanPham }}</p>
                        </div>
                        <div class="item-drink-name-En ">
                            <p>{{ $item->TenTiengAnh }}</p>
                        </div>
                        <div class="item-drink-cost ">
                            <p>{{ $item->GiaTien }} đ</p>
                        </div>
                        <button class="btn item-drink-btn text-uppercase " data-toggle="modal" data-target="#myModal"
                            onClick={onclick}>Đặt Hàng</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
    <!-- begin modal content -->
    <div class="modal" id="myModal">
        <div class="modal-dialog-centered">
            <div class="modal-content" style=" width: 850px; ">
                <!-- Modal Header -->
                <div class="row">
                    <div class="col-md-5">
                        <img src='' alt="" class="modal_img"></img>
                        <div class="gia_tien"></div>
                    </div>
                    <div class="col-md-7">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <div class="info_product">
                            <div class="info_product_name"> </div>
                            <div class="info_product_size">
                                <label for="">Kích cỡ</label>
                                <ul class="info_product_size_lish">
                                    <li class="sm active">Ice regular size</li>
                                    <li class="lg">Big size ice</li>
                                </ul>
                            </div>
                            <div class="add_item">
                                <label for="">
                                    Số lượng
                                </label>
                                <span class="index--">
                                    -
                                </span>
                                <span class="index">
                                    1
                                </span>
                                <span class="index__">
                                    +
                                </span>
                            </div>
                            <div>
                                <label id="modal_cost">Thành tiền</label>
                            </div>
                            <div>
                                <button class="btn-buy-products text-uppercase btn_pay " data-dismiss="modal">
                                    Thanh toán
                                </button>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>



    <!-- end modal content -->
@endsection

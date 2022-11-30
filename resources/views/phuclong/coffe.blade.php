@extends('layout.layout')
@section('main')
    <div class="container-fluid " id="slider">
        <div class="row mt-5">
            <img src="{{ asset('img/coffe_head.jpg') }}" alt="" class="img_coffe1">
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
        </div>
        <div class="title-coffe mt-5">
            <h1>HẠT CÀ PHÊ PHÚC LONG</h1>
            <img src="{{ asset('img/icon_tealeaves.png') }}" alt="" class="img_tealeaves">
        </div>
        <ul id="header_col">
            <li class="tab-item active">
                <a data-toggle="tab" href="#">ĐẬM VỊ HẠT CÀ PHÊ</a>
            </li>
            <li class="tab-item">
                <a data-toggle="tab" href="#">HƯƠNG VỊ MẠNH MẼ</a>
            </li>
            <li class="tab-item">
                <a data-toggle="tab" href="#">HƯƠNG VỊ TINH TẾ</a>
            </li>
            <li class="tab-item">
                <a data-toggle="tab" href="#">CÀ PHÊ MÙI</a>
            </li>
        </ul>
    </div>

    <!-- tab content 1 -->
    <div class="container tab-content active-content">
        <div class="row mt-5 ">
            <div class="col-md-6 col-sm-12">
                <p class="pag">Cà phê càng được rang sẫm màu hương vị càng trọn vẹn.
                    Rang cà phê là một quá trình đòi hỏi sự tinh tế từ đôi bàn tay
                    và sự am hiểu từng loại hạt cà phê của người nghệ nhân.
                    Rang lửa nhỏ khiến cà phê chưa chín tới và đắng hơn,
                    trong khi rang quá kỹ lại khiến cà phê cháy khét đánh mất những đặc tính thượng hạng vốn có.
                    Trong quá trình rang đủ thời gian, những dinh dưỡng như proteins,
                    enzymes mới sẽ tích tụ phía trong tạo nên phần chất của cà phê,
                    làm cho cà phê đậm hơn, sánh hơn.</p>
            </div>
            <div class="col-md-6 col-sm-12">
                <img src="{{ asset('img/coffe_content1.jpg') }}" class="img_content_head">
            </div>
        </div>
        <div class="row mt-5 ">
            <div class="col-md-6 col-sm-12">
                <img src="{{ asset('img/coffe_content2.jpg') }}" class="img_content_head">
            </div>
            <div class="col-md-6 col-sm-12">
                <p class="pag">Trên hành trình tìm kiếm những hạt cà phê ngon nhất,
                    Phúc Long luôn chú trọng bốn đặc tính từ trái cà phê nhằm tôn trọng nguyên bản cho tách cà phê đậm vị.
                    <br>
                    - Hương thơm là mùi hương của hạt cà phê - thơm bao nhiêu hứa hẹn cho nhiều vị bấy nhiêu.
                    <br>
                    - Thể chất là khái niệm để chỉ độ đậm đà trong nước chiết xuất cà phê.
                    Cảm nhận thông qua đánh giá của người thưởng thức.
                    <br>
                    - Acid là hợp chất tạo nên vị chua thanh của cà phê.
                    <br>
                    - Hậu vị là cảm nhận vị cà phê còn đọng lại sau khi thưởng thức.
                </p>
            </div>
        </div>
        <div class="row mt-5 ">
            <div class="col-md-6 col-sm-12">
                <p class="pag">Tách cà phê hoàn hảo được định nghĩa là tách cà phê có vị đắng đậm đà,
                    chua thanh thoát, lan toả hương thơm nồng nàn,
                    dễ dàng chinh phục vị giác của bất cứ ai. <br>
                    Tách cà phê đậm vị luôn luôn là thức uống giữ vị trí
                    nhất định trong lòng những tín đồ cà phê Việt, dù văn hoá thưởng thức
                    có nhiều thay đổi theo sự phát triển từng ngày của xã hội.</p>
            </div>
            <div class="col-md-6 col-sm-12">
                <img src="{{ asset('img/coffe_content3.jpg') }}" class="img_content_head">
            </div>
        </div>
    </div>
    <!-- tab content 2 -->
    <div class="container tab-content">
        <div class="row mt-5">
            <div class="col-md-6 col-sm-12">
                <h3>CÀ PHÊ ROYAL</h3>
                <p>Cà phê Royal là sự kết hợp hoàn hảo giữa ba loại <br>
                    hạt: Moka, Robusta và Culi theo tỉ lệ nhất định tạo <br>
                    nên sản phẩm hội tụ của sắc, hương và vị.
                </p>
                <a href="https://phuclong.com.vn/ca-phe/hat-ca-phe-phuc-long/ca-phe-royal" target="_blank"
                    class="btn btn-outline-success">Xem chi tiết</a>
            </div>
            <div class="col-md-6 col-sm-12 bg-img">
                <img src="{{ asset('img/coffe_content4.jpg') }}" class="img_content">
            </div>
        </div>
        <div class="row mt-5 ">
            <div class="col-md-6 col-sm-12 bg-img">
                <img src="{{ asset('img/coffe_content5.jpg') }}" class="img_content">
            </div>
            <div class="col-md-6 col-sm-12">
                <h3>CÀ PHÊ ROBUSTA</h3>
                <p>
                    Cà phê Robusta còn gọi là cà phê Vối, đây là giống <br>
                    cà phê được trồng phổ biến tại Việt Nam, đặc biệt là <br>
                    khu vực Tây Nguyên. Việt Nam hiện là nước sản <br>
                    xuất và xuất khẩu cà phê Robusta đứng đầu thế <br>
                    giới. Hạt cà phê Robusta tròn, sậm màu, hàm lượng <br>
                    caffein khoảng 2 – 2.5%.
                </p>
                <a href="https://phuclong.com.vn/ca-phe/hat-ca-phe-phuc-long/ca-phe-culi-robusta" target="_blank"
                    class="btn btn-outline-success">Xem chi tiết</a>
            </div>
        </div>
        <div class="row mt-5 ">
            <div class="col-md-6 col-sm-12">
                <h3>CÀ PHÊ CULI</h3>
                <p>
                    Cà phê Culi còn được gọi là Peaberry, có vị đắng
                    gắt, hương thơm say đắm. Cà phê Culi là những
                    trái cà phê đột biến có duy nhất một hạt từ các
                    chủng loại thông thường như Arabica hay Robusta,
                    chỉ chiếm khoảng 5% tổng số lượng cà phê trong
                    một đợt thu hoạch, luôn được chọn lọc và rang
                    riêng để đảm bảo chất lượng hoàn hảo.
                </p>
                <a href="https://phuclong.com.vn/ca-phe/hat-ca-phe-phuc-long/ca-phe-culi" target="_blank"
                    class="btn btn-outline-success">Xem chi tiết</a>
            </div>

            <div class="col-md-6 col-sm-12 bg-img">
                <img src="{{ asset('img/coffe_content6.jpg') }}" class="img_content">
            </div>
        </div>
        <div class="row mt-5 ">
            <div class="col-md-6 col-sm-12 bg-img">
                <img src="{{ asset('img/coffe_content7.jpg') }}" class="img_content">
            </div>
            <div class="col-md-6 col-sm-12">
                <h3>CÀ PHÊ KING</h3>
                <p>
                    Cà phê King là sự kết hợp hài hoà giữa ba loại hạt:
                    vị đắng đầm của hạt Moka, vị đắng đậm của hạt
                    Robusta, cùng với vị đắng gắt của hạt Culi, tạo nên
                    hương vị mạnh mẽ.
                </p>
                <a href="https://phuclong.com.vn/ca-phe/hat-ca-phe-phuc-long/ca-phe-king" target="_blank"
                    class="btn btn-outline-success">Xem chi tiết</a>
            </div>
        </div>
    </div>
    <!-- tab content 3 -->
    <div class="container tab-content">
        <div class="row mt-5 ">
            <div class="col-md-6 col-sm-12">
                <h3>CÀ PHÊ ARABICA - CULI</h3>
                <p>
                    Hương cà phê Arabica rất thơm, có vị chua, sau khi <br>
                    uống đọng lại cảm giác ngọt ở cổ họng. Arabica <br>
                    Cầu Đất có vị chua thanh xen lẫn với vị đắng nhẹ, <br>
                    nước pha màu nước nâu nhạt, trong trẻo của hổ <br>
                    phách. Mùi hương của Arabica rất thanh tao, quý phái, ...
                </p>
                <a href="https://phuclong.com.vn/ca-phe/hat-ca-phe-phuc-long/ca-phe-arabica-culi" target="_blank"
                    class="btn btn-outline-success">Xem chi tiết</a>
            </div>
            <div class="col-md-6 col-sm-12 bg-img">
                <img src="{{ asset('img/coffe_content8.jpg') }}" class="img_content">
            </div>
        </div>
        <div class="row mt-5 ">
            <div class="col-md-6 col-sm-12 bg-img">
                <img src="{{ asset('img/coffe_content9.jpg') }}" class="img_content">
            </div>
            <div class="col-md-6 col-sm-12">
                <h3>CÀ PHÊ CHERRY</h3>
                <p>
                    Cà phê Cherry còn được gọi là cà phê Mít. Hạt cà <br>
                    phê Cherry có màu vàng, sáng bóng rất đẹp. <br>
                    Hương vị tuy không đậm đà như Robusta, cũng <br>
                    không nồng nàn như Arabica, nhưng cà phê Cherry <br>
                    mang đặc trưng riêng: chua nhẹ, hơi chát, hàm <br>
                    lượng caffein thấp, cùng hương thơm thoang thoảng.
                </p>
                <a href="https://phuclong.com.vn/ca-phe/hat-ca-phe-phuc-long/ca-phe-cherry" target="_blank"
                    class="btn btn-outline-success">Xem chi tiết</a>
            </div>
        </div>
        <div class="row mt-5 ">
            <div class="col-md-6 col-sm-12">
                <h3>CÀ PHÊ MOKA</h3>
                <p>
                    Cà phê Moka là giống cà phê rất khó trồng, thuộc <br>
                    chi Arabica, được trồng phổ biến tại Đà Lạt, Lâm <br>
                    Đồng, đặc biệt là Moka Cầu Đất. Ở Việt Nam, cà <br>
                    phê Moka được xếp vào sản phẩm thực sự quý <br>
                    hiếm bởi chất lượng và hương vị tuyệt vời: thơm <br>
                    sang trọng, chua thanh thoát.
                </p>
                <a href="https://phuclong.com.vn/ca-phe/hat-ca-phe-phuc-long/ca-phe-moka" target="_blank"
                    class="btn btn-outline-success">Xem chi tiết</a>
            </div>
            <div class="col-md-6 col-sm-12 bg-img">
                <img src="{{ asset('img/coffe_content10.jpg') }}" class="img_content">
            </div>
        </div>
    </div>
    <!-- tab content 4 -->
    <div class="container tab-content">
        <div class="row mt-5">
            <div class="col-md-6 col-sm-12">
                <h3>CÀ PHÊ CHOCOLATE</h3>
                <p>Cà phê Chocolate là sự kết hợp giữa hai dòng <br>
                    Moka và Robusta cùng hương Chocolate tạo nên <br>
                    sản phẩm thơm ngon, vị dịu ngọt mang đến cảm <br>
                    giác khoan khoái cho người thưởng thức.
                </p>
                <a href="https://phuclong.com.vn/san-pham-details/ca-phe-chocolate-phuc-long-200g" target="_blank"
                    class="btn btn-outline-success">Xem chi tiết</a>
            </div>
            <div class="col-md-6 col-sm-12 bg-img">
                <img src="{{ asset('img/coffe_content11.png') }}" class="img_content">
            </div>
        </div>
        <div class="row mt-5 ">
            <div class="col-md-6 col-sm-12 bg-img">
                <img src="{{ asset('img/coffe_content12.png') }}" class="img_content">
            </div>
            <div class="col-md-6 col-sm-12">
                <h3>CÀ PHÊ VANILLA</h3>
                <p>
                    Cà phê Vanilla là sự kết hợp giữa cà phê Robusta <br>
                    và hương vani Pháp, mang lại cho người thưởng <br>
                    thức vị dịu nhẹ.
                </p>
                <a href="https://phuclong.com.vn/san-pham-details/ca-phe-vanilla-phuc-long-200g" target="_blank"
                    class="btn btn-outline-success">Xem chi tiết</a>
            </div>
        </div>
        <div class="row mt-5 ">
            <div class="col-md-6 col-sm-12">
                <h3>CÀ PHÊ HAZELNUT</h3>
                <p>
                    Cà phê Hazelnut là sự kết hợp hài hoà giữa cà phê <br>
                    Robusta và hương hạt Hazelnut - một lựa chọn <br>
                    hoàn hảo để khởi đầu một ngày mới.
                </p>
                <a href="https://phuclong.com.vn/san-pham-details/ca-phe-hazelnut-phuc-long-200g" target="_blank"
                    class="btn btn-outline-success">Xem chi tiết</a>
            </div>

            <div class="col-md-6 col-sm-12 bg-img">
                <img src="{{ asset('img/coffe_content13.png') }}" class="img_content">
            </div>
        </div>


        <div class="row mt-5">
            <div class="col-md-6 col-sm-12 bg-img">
                <img src="{{ asset('img/coffe_content14.jpg') }}" class="img_content">
            </div>
            <div class="col-md-6 col-sm-12">
                <h3>CÀ PHÊ CAPUCCINO</h3>
                <p>
                    Cà phê Cappuccino là sự kết hợp giữa hai dòng
                    Moka và Robusta cùng hương Cappuccino tạo nên
                    sản phẩm có hương thơm và vị béo đặc trưng.
                </p>
                <a href="https://phuclong.com.vn/san-pham-details/ca-phe-capuccino-phuc-long-200g" target="_blank"
                    class="btn btn-outline-success">Xem chi tiết</a>
            </div>
        </div>
        <div class="row mt-5 ">

            <div class="col-md-6 col-sm-12">
                <h3>CÀ PHÊ CARAMEL</h3>
                <p>
                    Cà phê Caramel là sự kết hợp giữa Robusta cùng
                    hương Caramel hoà quyện tạo nên vị thơm - ngọt – <br>
                    béo, mang lại cảm giác dễ chịu khi thưởng thức.
                </p>
                <a href="https://phuclong.com.vn/san-pham-details/ca-phe-caramel-phuc-long-200g" target="_blank"
                    class="btn btn-outline-success">Xem chi tiết</a>
            </div>
            <div class="col-md-6 col-sm-12 bg-img">
                <img src="{{ asset('img/coffe_content14.jpg') }}" class="img_content">
            </div>
        </div>
        <div class="row mt-5 ">
            <div class="col-md-6 col-sm-12 bg-img">
                <img src="{{ asset('img/coffe_content15.jpg') }}" class="img_content">
            </div>
            <div class="col-md-6 col-sm-12">
                <h3>CÀ PHÊ SMOOTH</h3>
                <p>
                    Cà phê Smooth là sự kết hợp giữa hai dòng Moka
                    và Culi cùng hương Hazelnut mang lại dư vị mới mẻ
                    đánh thức mọi giác quan
                </p>
                <a href="https://phuclong.com.vn/san-pham-details/ca-phe-smooth-phuc-long" target="_blank"
                    class="btn btn-outline-success">Xem chi tiết</a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6 col-sm-12">
                <h3>CÀ PHÊ RICH</h3>
                <p>
                    Cà phê Rich là sự kết hợp giữa Chocolate và
                    Espresso tạo nên hương vị thơm đậm ấn tượng khi
                    thưởng thức.
                </p>
                <a href="https://phuclong.com.vn/san-pham-details/ca-phe-rich-phuc-long" target="_blank"
                    class="btn btn-outline-success">Xem chi tiết</a>
            </div>
            <div class="col-md-6 col-sm-12 bg-img">
                <img src="{{ asset('img/coffe_content17.jpg') }}" class="img_content">
            </div>
        </div>
    </div>
@endsection

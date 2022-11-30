@extends('layout.layout')
@section('main')
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 animation_2">
                <img src="{{ asset('img/content_1.jpg') }}" class="img_content1">
            </div>
            <div class="col-md-6 col-sm-12 animation_3">
                <h3 class="title">TỪ NHỮNG MẦM TRÀ, CHÚNG TÔI TẠO RA NIỀM ĐAM MÊ</h3>
                <p>Trải qua hơn&nbsp;50 năm chắt chiu tinh hoa từ những búp trà xanh và hạt cà phê thượng hạng
                    cùng mong muốn mang lại cho khách hàng những trải nghiệm giá trị nhất khi thưởng thức,
                    Phúc Long liên tục là thương hiệu tiên phong với nhiều ý tưởng sáng tạo đi đầu trong ngành
                    trà và cà phê.&nbsp;<br>
                    <br>
                    Chúng tôi tin rằng từng sản phẩm trà và cà phê sẽ càng thêm hảo hạng khi được tạo ra từ
                    sự phấn đấu không ngừng cùng niềm đam mê. Và chính kết nối dựa trên niềm tin, sự trung thực và
                    tin yêu góp phần mang đến những nét đẹp trong văn hóa thưởng trà và cà phê ngày càng bay cao,
                    vươn xa tầm tay.
                </p>
                <a href="https://phuclong.com.vn/ve-chung-toi" class="btn btn-outline-success">Xem thêm</a>
            </div>

        </div>
        <div class="row content animation_1">
            <div class="col-md-6 col-sm-12">
                <h3 class="title">ĐỘI NGŨ NHÂN VIÊN TRÀN ĐẦY NHIỆT HUYẾT</h3>
                <p>Trong suốt quá trình hoạt động và phát triển, đội ngũ quản lý và nhân viên của Phúc Long
                    Coffee &amp; Tea, qua bao thế hệ, đã cùng nhau xây dựng, nuôi dưỡng niềm đam mê dành cho
                    trà
                    và&nbsp;cà phê với mong muốn được thử thách bản thân trong ngành dịch vụ năng động và
                    sáng
                    tạo.</p>
                <a href="https://phuclong.com.vn/ve-chung-toi" class="btn btn-outline-success">GIA NHẬP ĐỘI NGŨ PHÚC
                    LONG</a>
            </div>
            <div class="col-md-6 col-sm-12" id="content-2">
                <img src="{{ asset('img/content_2.jpg') }}" class="img_content2">
            </div>
        </div>
    </div>
@endsection

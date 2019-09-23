@extends('app')

@section('pageTitle', 'Liên hệ')

@section('content')
<div class="main-content-title">
    <h1>
        <span>Liên hệ</span>
    </h1>
</div>

<div class="contact-content">
    <div class="contact-info">
        <div>
            <h2><span style="font-size:18px"><strong>CÔNG TY TNHH QUỐC TẾ LACO</strong></span></h2>

            <p>Đại lý phân phối sản phẩm của Laco</p>

            <p><strong>Trụ sở:</strong>&nbsp;Số 44 Tổ 17 Khu GĐ Văn công Quân Đội, phố Mai Dịch, Phường Mai Dịch, Quận Cầu Giấy, Thành phố Hà Nội</p>

            <p><strong>Hotline:</strong>&nbsp;<a href="tel:0979 142 286"><span style="color:rgb(134, 183, 50)"><strong>0979 142 286 (Zalo,viber,...)</strong></span></a></p>

            <p><strong>Website:</strong>&nbsp;lacoviet.vn</p>

            <p><strong>Mã số thuế:</strong>&nbsp;0107758029</p>
        </div>
    </div>
    <div class="contact-form">
        <div>

            <form class="form_contact" action="/process/contact/" method="post">
                <p>Tên của bạn <span>(*)</span></p>
                <p><input type="text" name="hoten" value="" required="required"></p>
                <p>Điện thoại <span>(*)</span></p>
                <p><input type="text" name="dienthoai" value="" required="required"></p>
                <p>Địa chỉ email <span>(*)</span></p>
                <p><input type="text" name="email" value="" required="required"></p>

                <p>Nội dung <span>(*)</span></p>
                <p><textarea class="" name="noidung" maxlength="500"></textarea></p>
                <p><button name="submit-contact" class="submit-contact">Gửi liên hệ</button></p>
            </form>
        </div>
    </div>
</div>
@endsection

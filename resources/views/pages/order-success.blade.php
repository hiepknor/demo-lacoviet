@extends('app')

@section('pageTitle', 'Đặt hàng thành công')

@section('content')
<h2 class="order-success-title center">Bạn đã đặt hàng thành công</h2>
<p class="order-success-text">Cám ơn Quý khách đã đặt hàng từ Lacoviet.vn, chúng tôi sẽ liên lạc cho Quý khách sớm để xác nhận đơn hàng.</p>

<p class="order-success-text">Nếu quý khách có bất cứ khiếu nại hoặc thắc mắc, hãy <a href="{{ URL::to('lien-he') }}">liên hệ</a> với chúng tôi hoặc liên lạc trực tiếp qua số điện thoại <a href="tel:0979142286"><u>0979 142 286</u></a></p>

<p style="text-align:right;">Trân trọng,<br><b>Lacoviet.vn</b></p>

@endsection
@extends('app')

@section('pageTitle', 'Sản phẩm')

@section('content')
<div class="product-information">
	<div class="product-image">
		<div class="gallery-slider">
			<div class="slider-for">
				<div>
					<div class="item">
						<div class="img-fill"><img src="{{url('images/1556612015-son-sap-laco.jpg')}}" alt="Son sap 1"></div>
					</div>
					<div class="item">
						<div class="img-fill"><img src="{{url('images/1556612005-son-sap-laco.jpg')}}" alt="Son sap 2"></div>
					</div>
					<div class="item">
						<div class="img-fill"><img src="{{url('images/1556611992-son-sap-laco.jpg')}}" alt="Son sap 3"></div>
					</div>
					<div class="item">
						<div class="img-fill"><img src="{{url('images/1556611965-son-sap-laco.jpg')}}" alt="Son sap 4"></div>
					</div>
					<div class="item">
						<div class="img-fill"><img src="{{url('images/1556613254-son-sap-laco.jpg')}}" alt="Son sap 5"></div>
					</div>
					<div class="item">
						<div class="img-fill"><img src="{{url('images/1556611980-son-sap-laco.jpg')}}" alt="Son sap 6"></div>
					</div>
					<div class="item">
						<div class="img-fill"><img src="{{url('images/1556613268-son-sap-laco.jpg')}}" alt="Son sap 7"></div>
					</div>
				</div>
			</div>
			<div class="slider-nav">
				<div>
					<div class="item">
						<div class="img-fill"><img src="{{url('images/1556612015-son-sap-laco.jpg')}}" alt="Son sap 1"></div>
					</div>
					<div class="item">
						<div class="img-fill"><img src="{{url('images/1556612005-son-sap-laco.jpg')}}" alt="Son sap 2"></div>
					</div>
					<div class="item">
						<div class="img-fill"><img src="{{url('images/1556611992-son-sap-laco.jpg')}}" alt="Son sap 3"></div>
					</div>
					<div class="item">
						<div class="img-fill"><img src="{{url('images/1556611965-son-sap-laco.jpg')}}" alt="Son sap 4"></div>
					</div>
					<div class="item">
						<div class="img-fill"><img src="{{url('images/1556613254-son-sap-laco.jpg')}}" alt="Son sap 5"></div>
					</div>
					<div class="item">
						<div class="img-fill"><img src="{{url('images/1556611980-son-sap-laco.jpg')}}" alt="Son sap 6"></div>
					</div>
					<div class="item">
						<div class="img-fill"><img src="{{url('images/1556613268-son-sap-laco.jpg')}}" alt="Son sap 7"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="specific-info">
		<h4 class="info-name">Son sáp</h4>
		<div class="info-price">
			<span><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;Lượt xem: 123</span>
			<div>
				<span>Giá bán: </span>
				<span class="regular-price">75.000 đ</span><br>
				<span>Tiết kiệm: <span style="color:red;">21.1%</span> </span>
				<span class="old-price">95.000 đ</span>
			</div>
		</div>

		<div>
			<a href="#test-popup" class="open-popup-link button-buy" title="Mua ngay">
				<span><i class="fa fa-cart-plus" aria-hidden="true"></i> Mua ngay</span>
			</a>
		</div>

		<div class="addition-info">
			<p><img alt="icon dam bao" src="{{url('images/laco/icon_chatluong.png')}}">&nbsp;<span style="color:#000000">Cam kết hàng chính hãng</span></p>

			<p><a href="https://goo.gl/maps/E7bt5eQCye12"><img alt="icon dam bao" src="{{url('images/laco/icon_chatluong1.png')}}">&nbsp;<span style="color:#0280ff">Chỉ đường đến Lacoxanh.vn</span></a></p>

			<p><img alt="icon dam bao" src="{{url('images/laco/icon_vanchuyen.png')}}" style="height:16px; margin:0px; max-width:100%; padding:0px; width:16px">&nbsp;<span style="color:#000000">Giao hàng miễn phí từ&nbsp;2 sản phẩm trở lên</span></p>
		</div>
	</div>
</div>
<div class="product-description">
	<div class="original-label description-label">
		<span><h3>Thông tin sản phẩm</h3></span>
	</div>

	<div class="description-text">

		<p style="text-align:center"><img alt="" src="https://www.youtube.com/watch?v=yFQllxVqufc"><img alt="tại sao lại chọn hoa hồng ngoại" src="{{url('images/product/fcdd219b4ce29837fad727a20ca40a19_tn.jpg')}}" style="height:250px; width:250px"></p>

		<p style="text-align:center">&nbsp;</p>

		<p><strong>kể&nbsp;từ khi chính thức lên kệ, Son sáp LACO đã “vượt mặt” hầu hết các mẫu son truyền thống để trở thành thứ vũ khí quyền năng của rất nhiều các bà mẹ bỉm sữa.</strong></p>

		<p style="text-align:justify"><strong>Vậy điều gì khiến&nbsp;<a href="http://lacogarden.vn/son-sap-laco-quyen-nang-phai-dep/" style="margin: 0px; padding: 0px; list-style: none; outline: none; box-sizing: border-box; vertical-align: baseline; text-decoration: none; cursor: pointer; -webkit-font-smoothing: antialiased; color: rgb(172, 30, 35) !important; background: transparent;">Son sáp LACO</a>&nbsp;“hạ gục” các mẹ bỉm sữa?</strong></p>

		<p style="text-align:justify"><em>Chiết xuất từ thành phần thiên nhiên</em></p>

		<p style="text-align:justify"><strong>Cánh hoa hồng:</strong>&nbsp;Không phải ngẫu nhiên mà “vua của các loài hoa” lại được lựa chọn để làm ra những thỏi son môi. Theo nhiều nghiên cứu được công bố, trong cánh hoa hồng có chứa một lượng lớn các vitamin nhóm B, D, E, K cùng nước và khoáng chất. Đặc biệt, vitamin C có trong loại hoa này sẽ làm cho đôi môi căng mọng, mịn màng và không khô ráp.&nbsp;</p>

		<p style="text-align:justify">Ngoài yếu tố dưỡng chất, màu sắc của cánh hoa hồng cũng là lý do khiến nhiều người mê đắm. Thực tế, bạn có thể tìm thấy hầu hết các sắc thái của son môi mà bạn muốn ở trong các cánh hoa tự nhiên hoặc kết hợp. Bởi vậy nên dù cả ngày có bận bịu đến đâu, chỉ cần một lớp son nhẹ là đủ để mẹ bỉm sữa giữ vững sự tự tin.</p>

		<p style="text-align:center">&nbsp;</p>

		<div style="margin: 0px; padding: 0px; list-style: none; outline: 0px; line-height: 30px !important; box-sizing: border-box; border: 0px; font-size: 18px !important; vertical-align: baseline; font-family: 'Noto Serif', serif !important; color: rgb(34, 34, 34) !important; -webkit-font-smoothing: antialiased; text-align: center; background: transparent;">
			<div class="share_image" style="margin: 0px; padding: 0px; list-style: none; outline: 0px; box-sizing: border-box; border: 0px; vertical-align: baseline; position: relative; display: inline-block; -webkit-font-smoothing: antialiased; background: transparent;">
				<div class="item_gallery" style="margin: 0px; padding: 0px; list-style: none; outline: 0px; box-sizing: border-box; border: 0px; vertical-align: baseline; -webkit-font-smoothing: antialiased; background: transparent;">
					<div class="thumb_detail" style="margin: 0px; padding: 0px; list-style: none; outline: 0px; box-sizing: border-box; border: 0px; vertical-align: baseline; position: relative; cursor: pointer; -webkit-font-smoothing: antialiased; background: transparent;"><img class="img-responsive" src="http://xmedia.antt.vn/js/tiny_mce/plugins/imagemanager/files/anhsonaba.jpg" style="-webkit-font-smoothing:antialiased; background:transparent; border:0px none; box-sizing:border-box; height:auto !important; list-style:none; margin:0px auto; outline:0px; padding:0px; vertical-align:bottom; width:500px !important"></div>
				</div>
			</div>
		</div>

		<p>&nbsp;</p>

		<p style="text-align:center"><em>Đôi môi mềm, mịn hơn với chiết xuất cánh hồng &nbsp;trong son sáp LACO</em><strong>&nbsp;</strong></p>

		<p style="text-align:justify"><strong>Tinh dầu tự nhiên:</strong>&nbsp;Bên cạnh cánh hoa hồng, Son sáp LACO còn chứa hàm lượng tinh dầu quý từ thiên nhiên như olive, hạnh nhân, bơ hạt mỡ, sáp ong… Đây là những thành phần không thể thiếu để mang đến độ ẩm, dưỡng chất cần thiết. Ngoài ra, lượng tinh dầu này cũng sẽ giúp môi tươi tắn hơn, có sức sống hơn, đẩy lùi tình trạng thâm xỉn hay bong da.</p>

		<p style="text-align:justify"><strong>Hương thơm trái cây:</strong>&nbsp;Màu sắc và dưỡng chất là hai yếu tố quan trọng của bất kỳ một mẫu son nào. Thế nhưng nếu không có được mùi đặc trưng thì chắc chắn, thỏi son của bạn sẽ không thể hoàn thành nhiệm vụ.</p>

		<p style="text-align:justify">Hiểu rõ điều này, các mẫu&nbsp;<a href="http://lacogarden.vn/son-sap-laco-quyen-nang-phai-dep/" style="margin: 0px; padding: 0px; list-style: none; outline: none; box-sizing: border-box; vertical-align: baseline; text-decoration: none; cursor: pointer; -webkit-font-smoothing: antialiased; line-height: 30px !important; font-size: 18px !important; color: rgb(172, 30, 35) !important; background: transparent;"><strong>son sáp LACO</strong></a>&nbsp;đều hết sức chú trọng tới mùi hương của son môi. Trong suốt quá trình sản xuất sản phẩm, hương tự nhiên của trái cam đã được các chuyên nghiên cứu, chiết tách để đưa vào. Nhờ vậy, người dùng sẽ luôn có cảm giác dễ chịu, thoải mái khi kết thân cùng son sáp LACO.</p>

		<p style="text-align:center">&nbsp;</p>

		<div style="margin: 0px; padding: 0px; list-style: none; outline: 0px; line-height: 30px !important; box-sizing: border-box; border: 0px; font-size: 18px !important; vertical-align: baseline; font-family: 'Noto Serif', serif !important; color: rgb(34, 34, 34) !important; -webkit-font-smoothing: antialiased; text-align: center; background: transparent;">
			<div class="share_image" style="margin: 0px; padding: 0px; list-style: none; outline: 0px; box-sizing: border-box; border: 0px; vertical-align: baseline; position: relative; display: inline-block; -webkit-font-smoothing: antialiased; background: transparent;">
				<div class="item_gallery" style="margin: 0px; padding: 0px; list-style: none; outline: 0px; box-sizing: border-box; border: 0px; vertical-align: baseline; -webkit-font-smoothing: antialiased; background: transparent;">
					<div class="thumb_detail" style="margin: 0px; padding: 0px; list-style: none; outline: 0px; box-sizing: border-box; border: 0px; vertical-align: baseline; position: relative; cursor: pointer; -webkit-font-smoothing: antialiased; background: transparent;"><img class="img-responsive" src="http://xmedia.antt.vn/js/tiny_mce/plugins/imagemanager/files/anhsonbaon.jpg" style="-webkit-font-smoothing:antialiased; background:transparent; border:0px none; box-sizing:border-box; height:auto !important; list-style:none; margin:0px auto; outline:0px; padding:0px; vertical-align:bottom; width:500px !important"></div>
				</div>
			</div>
		</div>

		<p>&nbsp;</p>

		<p style="text-align:center"><em>Hương cam ngọt nhẹ là điều dễ cảm nhận nhất khi mở nắp hộp son sáp LACO</em></p>

		<p style="text-align:justify"><em>An toàn cho cả mẹ và bé</em></p>

		<p style="text-align:justify">Khi đã trở thành mẹ bỉm sữa, mọi đồ ăn thức uống hay mỹ phẩm mẹ sử dụng đều ít nhiều tác động đến bé yêu. Do vậy, yếu tố an toàn chắc hẳn là điều luôn được đặt lên hàng đầu. Nếu không an toàn thì dù có đẹp đến đâu, chị em cũng sẽ “không động đến”.</p>

		<p style="text-align:justify">Với chiết xuất từ tinh chất tự nhiên,&nbsp;<a href="http://lacogarden.vn/son-sap-laco-quyen-nang-phai-dep/" style="margin: 0px; padding: 0px; list-style: none; outline: none; box-sizing: border-box; vertical-align: baseline; text-decoration: none; cursor: pointer; -webkit-font-smoothing: antialiased; line-height: 30px !important; font-size: 18px !important; color: rgb(172, 30, 35) !important; background: transparent;"><strong>Son sáp LACO</strong></a>&nbsp;hoàn toàn không gây hại cho da khi mẹ tiếp xúc, hôn bé. Bởi thế, bạn sẽ không cần phải lo sợ vùng da bé sẽ bị kích ứng khi đôi môi chạm vào. Bên cạnh đó, bé cũng sẽ không có cảm giác khó chịu, cáu gắt khi môi mẹ hôn bởi lúc này, môi mẹ không hề có hiện tượng khô sần. Đây cũng chính là lý do giải thích tại sao mà &nbsp;son sáp LACO đã “đốn ngã” trái tim của rất nhiều bà mẹ và bé yêu.</p>

		<p style="text-align:justify">Để sở hữu những hộp Son sáp LACO quyền năng, vui lòng liên hệ theo địa chỉ.</p>

		<p style="text-align:justify"><strong>Công ty TNHH Quốc Tế Laco</strong></p>
	</div>

	<div class="like-share" style="margin:15px 0px;text-align: right;">
		<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.lacoxanh.vn%2FSon-sap%2FSon-sap.html&width=112&layout=button&action=like&size=small&show_faces=true&share=true&height=65&appId" width="112" height="65" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
	</div>

	<div class="comment_face" style="margin:15px 0px;">
		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v4.0"></script>
		<div class="fb-comments" data-href="https://www.lacoxanh.vn/Son-sap/Son-sap.html" data-width="100%" data-numposts="1"></div>
	</div>

	<div class="original-label related-product-label">
		<span><h3>Sản phẩm liên quan</h3></span>
	</div>
</div>
@endsection

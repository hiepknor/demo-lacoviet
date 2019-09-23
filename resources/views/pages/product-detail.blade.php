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
		<h4 class="info-name">{{ $product->name }}</h4>
		<div class="info-price">
			<span><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;Lượt xem: 123</span>
			<div>
				<span>Giá bán: </span>
				<span class="regular-price">{{ number_format($productPrice->price, 0, "", ".") }} đ</span><br>
				<span>Tiết kiệm: <span style="color:red;">{{ number_format(($productPrice->old_price - $productPrice->price) / $productPrice->old_price * 100, 1, ".", "") }}%</span> </span>
				<span class="old-price">{{ number_format($productPrice->old_price, 0, "", ".") }}đ</span>
			</div>
		</div>

		<div>
			<a class="add-to-cart center" href="{{ URL::to('them-gio-hang/' . $product->id) }}">
				<span><i class="fa fa-cart-plus" aria-hidden="true"></i>Đặt mua ngay</span>
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
		<span>
			<h3>Thông tin sản phẩm</h3>
		</span>
	</div>

	<div class="description-text">
		{{ $product->description }}
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
		<span>
			<h3>Sản phẩm liên quan</h3>
		</span>
	</div>
</div>
@endsection
@extends('app')

@section('pageTitle', 'Thanh toán | Lacoviet')

@section('content')
<div class="main-content-title">
    <h1>
        <span>Thanh toán</span>
    </h1>
</div>

<div class="main-content-text">
    <form name="checkout-form" method="post" class="checkout checkout-form" action="{{ url('luu-don-hang') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="customer-details" id="customer-details">
            <div class="billing-fields">

                <h2>Thông tin thanh toán</h2>

                <p class="validate-required" id="billing_last_name_field">
                    <label for="billing_last_name" >Họ và tên <abbr class="required" title="bắt buộc">*</abbr></label><input type="text" class="input-text " name="name" id="name" placeholder="Nhập đầy đủ họ và tên" value="">
                </p>

                <p class=" validate-required validate-phone" id="billing_phone_field">
                    <label for="billing_phone" >Số điện thoại <abbr class="required" title="bắt buộc">*</abbr></label><input type="tel" class="input-text " name="phone" id="phone" placeholder="" autocomplete="tel" value="">
                </p>

                <p class="validate-required" id="billing_city_field" >
                    <label for="billing_city" >Tỉnh/Thành phố <abbr class="required" title="bắt buộc">*</abbr></label>

                    <select name="city" id="city" class="input-text" data-placeholder="Chọn tỉnh/thành phố" tabindex="-1" title="Tỉnh/Thành phố *">
                        <option value="">--</option>
                        <option value="Hà Nội">Hà Nội</option>
                        <option value="Hà Giang">Hà Giang</option>
                        <option value="Cao Bằng">Cao Bằng</option>
                        <option value="Bắc Kạn">Bắc Kạn</option>
                        <option value="Tuyên Quang">Tuyên Quang</option>
                        <option value="Lào Cai">Lào Cai</option>
                        <option value="Điện Biên">Điện Biên</option>
                        <option value="Lai Châu">Lai Châu</option>
                        <option value="Sơn La">Sơn La</option>
                        <option value="Yên Bái">Yên Bái</option>
                        <option value="Hoà Bình">Hoà Bình</option>
                        <option value="Thái Nguyên">Thái Nguyên</option>
                        <option value="Lạng Sơn">Lạng Sơn</option>
                        <option value="Quảng Ninh">Quảng Ninh</option>
                        <option value="Bắc Giang">Bắc Giang</option>
                        <option value="Phú Thọ">Phú Thọ</option>
                        <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                        <option value="Bắc Ninh">Bắc Ninh</option>
                        <option value="Hải Dương">Hải Dương</option>
                        <option value="Hải Phòng">Hải Phòng</option>
                        <option value="Hưng Yên">Hưng Yên</option>
                        <option value="Thái Bình">Thái Bình</option>
                        <option value="Hà Nam">Hà Nam</option>
                        <option value="Nam Định">Nam Định</option>
                        <option value="Ninh Bình">Ninh Bình</option>
                        <option value="Thanh Hóa">Thanh Hóa</option>
                        <option value="Nghệ An">Nghệ An</option>
                        <option value="Hà Tĩnh">Hà Tĩnh</option>
                        <option value="Quảng Bình">Quảng Bình</option>
                        <option value="Quảng Trị">Quảng Trị</option>
                        <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                        <option value="Đà Nẵng">Đà Nẵng</option>
                        <option value="Quảng Nam">Quảng Nam</option>
                        <option value="Quảng Ngãi">Quảng Ngãi</option>
                        <option value="Bình Định">Bình Định</option>
                        <option value="Phú Yên">Phú Yên</option>
                        <option value="Khánh Hòa">Khánh Hòa</option>
                        <option value="Ninh Thuận">Ninh Thuận</option>
                        <option value="Bình Thuận">Bình Thuận</option>
                        <option value="Kon Tum">Kon Tum</option>
                        <option value="Gia Lai">Gia Lai</option>
                        <option value="Đắk Lắk">Đắk Lắk</option>
                        <option value="Đắk Nông">Đắk Nông</option>
                        <option value="Lâm Đồng">Lâm Đồng</option>
                        <option value="Bình Phước">Bình Phước</option>
                        <option value="Tây Ninh">Tây Ninh</option>
                        <option value="Bình Dương">Bình Dương</option>
                        <option value="Đồng Nai">Đồng Nai</option>
                        <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                        <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                        <option value="Long An">Long An</option>
                        <option value="Tiền Giang">Tiền Giang</option>
                        <option value="Bến Tre">Bến Tre</option>
                        <option value="Trà Vinh">Trà Vinh</option>
                        <option value="Vĩnh Lon">Vĩnh Long</option>
                        <option value="Đồng Tháp">Đồng Tháp</option>
                        <option value="An Giang">An Giang</option>
                        <option value="Kiên Giang">Kiên Giang</option>
                        <option value="Cần Thơ">Cần Thơ</option>
                        <option value="Hậu Giang">Hậu Giang</option>
                        <option value="Sóc Trăng">Sóc Trăng</option>
                        <option value="Bạc Liêu">Bạc Liêu</option>
                        <option value="Cà Mau">Cà Mau</option>
                    </select>
                </p>

                <p class="validate-required" id="billing_city_field">
                    <label for="billing_city" class="">Quận/Huyện<abbr class="required" title="bắt buộc">*</abbr></label>

                    <input type="text" class="input-text" name="district" id="street" placeholder="" autocomplete="tel" value="">
                </p>

                <p class="validate-required" id="billing_city_field">
                    <label for="billing_city" class="">Xã/Phường/thị trấn <abbr class="required" title="bắt buộc">*</abbr></label>

                    <input type="text" class="input-text" name="ward" id="street" placeholder="" autocomplete="tel" value="">
                </p>

                <p class="validate-required" id="billing_address_2_field">
                    <label for="billing_address_2" class="">Địa chỉ <abbr class="required" title="bắt buộc">*</abbr></label>
                    <input type="text" class="input-text " name="street" id="billing_last_name" placeholder="VD: 20 Cầu Giấy, ..." value="">
                </p>

            </div>

            <div class="billing-addition">
                <h2>Thông tin thêm</h2>
                <p class="notes" id="order_comments_field">
                    <label for="order_comments" class="">Ghi chú đơn hàng</label>
                    <textarea name="property" class="input-text " id="order_comments" placeholder="Ghi chú về đơn hàng, ví dụ: lưu ý khi giao hàng." rows="2" cols="5"></textarea>
                </p>
            </div>

            <div class="billing-payment">
                <h2>Phương thức thanh toán</h2>
                <div id="payment" class="checkout-payment">
                    <ul class="payment-methods methods">
                        @foreach($paymentMethod as $method)
                            <li>
                                <input id="payment-method-code" type="radio" class="payment-method-input" name="payment_method" value="{{ $method->id }}" @if($method->code == 'cod') checked @endif>

                                <label for="payment-method-name">{{ $method->name }}</label><br>
                                <div class="payment-method-desc" id="payment-method-text">
                                    <p>{{ $method->description }}</p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            @if(session('cart'))
            <div id="order-review" class="order-review">
                <h3>Đơn hàng của bạn</h3>
                <table>
                    <thead>
                        <tr>
                            <th class="product-name center">Sản phẩm</th>
                            <th class="product-total center">Tổng cộng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $total = 0 ?>
                            @foreach(session('cart') as $key => $value)
                                <?php $total += $value['price'] * $value['quantity'] ?>
                                <tr class="cart-item">
                                    <td class="product-name">
                                        {{ $value['name'] }}&nbsp; <strong class="product-quantity">× {{ $value['quantity'] }}</strong>
                                    </td>
                                    <td class="product-total center">
                                        <span>{{ formatPrice($value['price'] * $value['quantity']) }}&nbsp;₫</span>
                                    </td>
                                </tr>
                            @endforeach
                    </tbody>
                    <tfoot>
                        <tr class="order-total">
                            <th>Tổng cộng</th>
                            <td class="center"><strong><span>{{ formatPrice($total) }}<span>&nbsp;₫</span></span></strong> </td>
                            <td><input type="hidden" name="total_price" value="{{ $total }}"></td>
                        </tr>
                    </tfoot>
                </table>

                <div class="form-row place-order">
                    <input type="submit" class="add-to-cart" name="add-to-cart" id="place_order" value="Đặt hàng" data-value="Đặt hàng">
                </div>
            @else
                <p class="center">Giỏ hàng hiện đang trống </p>
            @endif
        </div>
    </form>
</div>
@endsection

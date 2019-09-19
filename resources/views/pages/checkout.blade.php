@extends('app')

@section('pageTitle', 'Thanh toán | Lacoviet')

@section('content')
<div class="main-content-title">
    <h1>
        <span>Thanh toán</span>
    </h1>
</div>

<div class="main-content-text">
    <form name="checkout-form" method="post" class="checkout checkout-form" action="https://hoabanfood.com/checkout" enctype="multipart/form-data">
        <div class="customer-details" id="customer-details">
            <div class="billing-fields">

                <h2>Thông tin thanh toán</h2>

                <p class="validate-required" id="billing_last_name_field">
                    <label for="billing_last_name" class="">Họ và tên <abbr class="required" title="bắt buộc">*</abbr></label><input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder="Nhập đầy đủ họ và tên" value="">
                </p>

                <p class=" validate-required validate-phone" id="billing_phone_field">
                    <label for="billing_phone" class="">Số điện thoại <abbr class="required" title="bắt buộc">*</abbr></label><input type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder="" autocomplete="tel" value="">
                </p>

                <p class="validate-required" id="billing_state_field">
                    <label for="billing_state" class="">Tỉnh/Thành phố <abbr class="required" title="bắt buộc">*</abbr></label>

                    <select name="billing_state" id="billing_state" class="select " data-placeholder="Chọn tỉnh/thành phố" tabindex="-1" title="Tỉnh/Thành phố *">
                        <option value="">--</option>
                        <option value="01">Hà Nội</option>
                        <option value="02">Hà Giang</option>
                        <option value="04">Cao Bằng</option>
                        <option value="06">Bắc Kạn</option>
                        <option value="08">Tuyên Quang</option>
                        <option value="10">Lào Cai</option>
                        <option value="11">Điện Biên</option>
                        <option value="12">Lai Châu</option>
                        <option value="14">Sơn La</option>
                        <option value="15">Yên Bái</option>
                        <option value="17">Hoà Bình</option>
                        <option value="19">Thái Nguyên</option>
                        <option value="20">Lạng Sơn</option>
                        <option value="22">Quảng Ninh</option>
                        <option value="24">Bắc Giang</option>
                        <option value="25">Phú Thọ</option>
                        <option value="26">Vĩnh Phúc</option>
                        <option value="27">Bắc Ninh</option>
                        <option value="30">Hải Dương</option>
                        <option value="31">Hải Phòng</option>
                        <option value="33">Hưng Yên</option>
                        <option value="34">Thái Bình</option>
                        <option value="35">Hà Nam</option>
                        <option value="36">Nam Định</option>
                        <option value="37">Ninh Bình</option>
                        <option value="38">Thanh Hóa</option>
                        <option value="40">Nghệ An</option>
                        <option value="42">Hà Tĩnh</option>
                        <option value="44">Quảng Bình</option>
                        <option value="45">Quảng Trị</option>
                        <option value="46">Thừa Thiên Huế</option>
                        <option value="48">Đà Nẵng</option>
                        <option value="49">Quảng Nam</option>
                        <option value="51">Quảng Ngãi</option>
                        <option value="52">Bình Định</option>
                        <option value="54">Phú Yên</option>
                        <option value="56">Khánh Hòa</option>
                        <option value="58">Ninh Thuận</option>
                        <option value="60">Bình Thuận</option>
                        <option value="62">Kon Tum</option>
                        <option value="64">Gia Lai</option>
                        <option value="66">Đắk Lắk</option>
                        <option value="67">Đắk Nông</option>
                        <option value="68">Lâm Đồng</option>
                        <option value="70">Bình Phước</option>
                        <option value="72">Tây Ninh</option>
                        <option value="74">Bình Dương</option>
                        <option value="75">Đồng Nai</option>
                        <option value="77">Bà Rịa - Vũng Tàu</option>
                        <option value="79">Hồ Chí Minh</option>
                        <option value="80">Long An</option>
                        <option value="82">Tiền Giang</option>
                        <option value="83">Bến Tre</option>
                        <option value="84">Trà Vinh</option>
                        <option value="86">Vĩnh Long</option>
                        <option value="87">Đồng Tháp</option>
                        <option value="89">An Giang</option>
                        <option value="91">Kiên Giang</option>
                        <option value="92">Cần Thơ</option>
                        <option value="93">Hậu Giang</option>
                        <option value="94">Sóc Trăng</option>
                        <option value="95">Bạc Liêu</option>
                        <option value="96">Cà Mau</option>
                    </select>
                </p>

                <p class="validate-required" id="billing_city_field">
                    <label for="billing_city" class="">Quận/Huyện <abbr class="required" title="bắt buộc">*</abbr></label>

                    <select name="billing_city" id="billing_city" class="select " data-allow_clear="true" data-placeholder="Chọn quận huyện" title="Quận/Huyện *" tabindex="-1">
                        <option value="">--</option>
                        <option value="001">Quận Ba Đình</option>
                        <option value="002">Quận Hoàn Kiếm</option>
                        <option value="003">Quận Tây Hồ</option>
                        <option value="004">Quận Long Biên</option>
                        <option value="005">Quận Cầu Giấy</option>
                        <option value="006">Quận Đống Đa</option>
                        <option value="007">Quận Hai Bà Trưng</option>
                        <option value="008">Quận Hoàng Mai</option>
                        <option value="009">Quận Thanh Xuân</option>
                        <option value="016">Huyện Sóc Sơn</option>
                        <option value="017">Huyện Đông Anh</option>
                        <option value="018">Huyện Gia Lâm</option>
                        <option value="019">Quận Nam Từ Liêm</option>
                        <option value="020">Huyện Thanh Trì</option>
                        <option value="021">Quận Bắc Từ Liêm</option>
                        <option value="250">Huyện Mê Linh</option>
                        <option value="268">Quận Hà Đông</option>
                        <option value="269">Thị xã Sơn Tây</option>
                        <option value="271">Huyện Ba Vì</option>
                        <option value="272">Huyện Phúc Thọ</option>
                        <option value="273">Huyện Đan Phượng</option>
                        <option value="274">Huyện Hoài Đức</option>
                        <option value="275">Huyện Quốc Oai</option>
                        <option value="276">Huyện Thạch Thất</option>
                        <option value="277">Huyện Chương Mỹ</option>
                        <option value="278">Huyện Thanh Oai</option>
                        <option value="279">Huyện Thường Tín</option>
                        <option value="280">Huyện Phú Xuyên</option>
                        <option value="281">Huyện Ứng Hòa</option>
                        <option value="282">Huyện Mỹ Đức</option>
                    </select>
                </p>

                <p class="validate-required" id="billing_address_2_field">
                    <label for="billing_address_2" class="">Xã/Phường/thị trấn <abbr class="required" title="bắt buộc">*</abbr></label>
                    <input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder="Ví dụ: Phường Thịnh Quang, ..." value="">
                </p>

                <p class="validate-required" id="billing_address_1_field"><label for="billing_address_1" class="">Địa chỉ <abbr class="required" title="bắt buộc">*</abbr></label><input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="Ví dụ: Số 20, ngõ 90" autocomplete="address-line1" value=""></p>

            </div>

            <div class="billing-addition">
                <h2>Thông tin thêm</h2>
                <p class="notes" id="order_comments_field">
                    <label for="order_comments" class="">Ghi chú đơn hàng</label>
                    <textarea name="order_comments" class="input-text " id="order_comments" placeholder="Ghi chú về đơn hàng, ví dụ: lưu ý khi giao hàng." rows="2" cols="5"></textarea>
                </p>
            </div>
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
                                <span>{{ $value['price'] * $value['quantity'] }}<span>₫</span></span> 
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>

                    <tr class="cart-subtotal">
                        <th>Tổng phụ</th>
                        <td class="center"><span>{{ $total }}<span>₫</span></span></td>
                    </tr>

                    <tr class="order-total">
                        <th>Tổng cộng</th>
                        <td class="center"><strong><span>{{ $total }}<span>₫</span></span></strong> </td>
                    </tr>


                </tfoot>
            </table>


            <div id="payment" class="checkout-payment">
                <ul class="payment-methods methods">
                    @foreach($paymentMethod as $type)
                        <li class="payment-method-cod">
                            <input id="payment-method-cod" type="radio" class="" name="{{ $type->code }}" value="{{ $type->code }}" @if($type->code == 'cod') checked @endif>

                            <label for="payment-method-name">{{ $type->name }}</label>
                            <div class="payment-method-desc" id="payment-method-cod-text">
                                <p>{{ $type->description }}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <div class="form-row place-order">
                    <noscript>
                        Trình duyệt của bạn không hỗ trợ JavaScript, hoặc nó bị vô hiệu hóa, hãy đảm bảo bạn nhấp vào <em> Cập nhật giỏ hàng </ em> trước khi bạn thanh toán. Bạn có thể phải trả nhiều hơn số tiền đã nói ở trên, nếu bạn không làm như vậy. <br /><input type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Cập nhật tổng" />
                    </noscript>

                    <input type="submit" class="add-to-cart" name="add-to-cart" id="place_order" value="Đặt hàng" data-value="Đặt hàng">

                    <input type="hidden" id="_wpnonce" name="_wpnonce" value="46937eba2f"><input type="hidden" name="_wp_http_referer" value="/checkout?wc-ajax=update_order_review"> </div>
            </div>
        </div>
    </form>
</div>

@endsection

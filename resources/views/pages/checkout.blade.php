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
                        <option value=""></option>
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
                    <tr class="cart-item">
                        <td class="product-name">
                            NỤ TAM THẤT | 250gram&nbsp; <strong class="product-quantity">× 2</strong> </td>
                        <td class="product-total center">
                            <span>740,000<span>₫</span></span> </td>
                    </tr>
                </tbody>
                <tfoot>

                    <tr class="cart-subtotal">
                        <th>Tổng phụ</th>
                        <td class="center"><span>740,000<span>₫</span></span></td>
                    </tr>

                    <tr class="order-total">
                        <th>Tổng cộng</th>
                        <td class="center"><strong><span>740,000<span>₫</span></span></strong> </td>
                    </tr>


                </tfoot>
            </table>


            <div id="payment" class="checkout-payment">
                <ul class="payment-methods methods">
                    <li class="payment-method-cod">
                        <input id="payment-method-cod" type="radio" class="input-radio" name="payment-method" value="cod" checked="checked">

                        <label for="payment-method-cod">
                            Ship &amp; Trả tiền mặt khi nhận hàng 
                        </label>
                        <div class="payment-method-cod-text" id="payment-method-cod-text">
                            <p>Cám ơn Quý khách đã đặt hàng từ HOA BAN FOOD™, chúng tôi sẽ gọi điện cho Quý khách để xác nhận đơn hàng (theo khung giờ: 8h00 – 17h00). Để được hỗ trợ thêm thông tin, kiểm tra trạng thái đơn hàng, quý khách vui lòng gọi điện tới hotline: 0914.268.535 hoặc 0961.214.914. Kính chúc Quý khách 1 ngày tốt lành!</p>
                        </div>
                    </li>
                    <li class="payment-method-trans">
                        <input id="payment-method-trans" type="radio" class="input-radio" name="payment-method" value="bacs">

                        <label for="payment-method-trans">
                            Chuyển khoản ngân hàng </label>
                        <div class="payment-method-trans-text" id="payment-method-trans-text" style="display:none;">
                            <p>Khi thực hiện thanh toán qua Ngân Hàng, quý anh chị vui lòng ghi rõ MÃ SỐ ĐƠN HÀNG (vui lòng xem email), hoặc số điện thoại liên lạc vào phần THÔNG TIN CHUYỂN KHOẢN để chúng tôi thuận tiện kiểm soát đơn hàng hơn. Xin chân thành cảm ơn!</p>
                            <p>►TÀI KHOẢN<br>
                                – Ngân hàng Vietcombank: 0011001948278 – Phạm Ngọc Tân – Chi nhánh Hà Nội<br>
                                – Ngân hàng Agribank: 1508205263434 – Phạm Ngọc Tân – Chi nhánh Tam Trinh</p>
                            <p>► HÀ NỘI: Giao hàng ngay trong nội thành, phí ship từ 20.000đ đến 30.000đ/đơn hàng!<br>
                                ► CÁC TỈNH THÀNH KHÁC: Giao hàng từ 3 =&gt; 6 ngày, nhận hàng và thanh toán cho nhân viên giao hàng Viettel, Nhất Tín Express hoặc giaohangnhanh.vn…</p>
                            <p> ● Cước ship đối với các sản phẩm Trâu, Bò, Cá Gác bếp = 70.000đ/kg (đường hàng không)<br>
                                ● Đối với tất cả các sản phẩm còn lại: 50.000đ/đơn hàng, bất kể số lượng.<br>
                            </p>
                        </div>
                    </li>
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
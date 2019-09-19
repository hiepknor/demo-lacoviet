@extends('app')

@section('pageTitle', 'Giỏ hàng | Lacoviet')

@section('content')
<div class="main-content-title">
    <h1>
        <span>Giỏ hàng</span>
    </h1>
</div>

<div class="main-content-text">
    <p>Cám ơn Quý Khách đã tin dùng & ủng hộ các sản phẩm do anh chị em chúng tôi khai thác & chế biến. Xin vui lòng điền các thông tin cần thiết ở bước kế tiếp để đặt hàng.</p>

    <?php $total = 0 ?>
    @if(session('cart'))
    <div class="add-to-cart-message"><span>Sản phẩm đã được thêm vào giỏ hàng.</span><a href="https://lacoviet.vn/" class="continue-shopping">Tiếp tục mua hàng</a> </div>



        <table class="cart-table-info" cellspacing="0">
            <thead>
                <tr>
                    <th class="product-remove">&nbsp;</th>
                    <th class="product-thumbnail">&nbsp;</th>
                    <th class="product-name">Sản phẩm</th>
                    <th class="product-price">Giá</th>
                    <th class="product-quantity">Số lượng</th>
                    <th class="product-subtotal">Tổng cộng</th>
                    <th class="actions">&nbsp;</th>
                </tr>
            </thead>
            <tbody>
            @foreach(session('cart') as $key => $value)

            <?php $total += $value['price'] * $value['quantity'] ?>

                <tr class="cart_item">
                    <td class="product-remove center">
                        <button data-id="{{ $key }}" class="remove-cart" title="Xóa sản phẩm này">×</button> 
                    </td>

                    <td class="product-thumbnail center">
                        <a href="https://hoabanfood.com/sp/nu-tam-that"><img width="250" height="140" src="{{url('lacoviet/images/1556612015-son-sap-laco.jpg')}}"></a> 
                    </td>

                    <td class="product-name" data-title="Sản phẩm">
                        <a href="https://hoabanfood.com/sp/nu-tam-that">{{ $value['name'] }}</a> 
                    </td>

                    <td class="product-price" data-title="Giá">
                        <span class=" amount">{{ $value['price'] }}<span>₫</span></span> 
                    </td>

                    <td class="product-quantity" data-title="Số lượng">
                        <div>
                            <input type="number" min="0" max="" value="{{$value['quantity']}}" class="input-text center quantity" size="4" pattern="[0-9]*" inputmode="numeric">
                        </div>
                    </td>

                    <td class="product-subtotal center" data-title="Tổng cộng">
                        <span class=" amount">{{ $value['price'] * $value['quantity'] }}<span>₫</span></span> 
                    </td>

                    <td class="actions">
                        <button data-id="{{ $key }}" class="update-cart" name="update-cart" title="Cập nhật khi thay đổi số lượng">Cập nhật</button>
                     </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    <div class="cart-calculate">


        <div class="cross-sells">

            <h2>Bạn có thể thích…</h2>

            <ul class="products">
                <li>
                    <a href="https://hoabanfood.com/sp/nu-tam-that-500g">
                        <img src="{{url('lacoviet/images/1556612015-son-sap-laco.jpg')}}" class="cross-sells-img" alt="Nu-tam-that-500gram-saving" title="Nu-tam-that-500gram-saving">
                        <h3>NỤ TAM THẤT | 500gram</h3>

                        <span class="price"><del><span class="woocommerce-Price-amount amount">740,000<span class="woocommerce-Price-currencySymbol">₫</span></span></del> <ins><span class="price-number">690,000<span class="woocommerce-Price-currencySymbol">₫</span></span></ins></span>
                    </a><a href="/cart?add-to-cart=14391" rel="nofollow" data-product_id="14391" data-product_sku="" class="add-to-cart center"><i class="fa fa-shopping-cart cart-icon"></i> ĐẶT MUA NGAY</a></li>
            </ul>

        </div>

        <div class="cart-totals">


            <h2>Tổng giỏ hàng</h2>

            <table cellspacing="0" class="cart-table-price">

                <tbody>
                    <tr class="cart-subtotal">
                        <th>Tổng phụ</th>
                        <td data-title="Tổng phụ" class="center"><span class="amount">{{ $total }}<span class="woocommerce-Price-currencySymbol">₫</span></span></td>
                    </tr>


                    <tr class="order-total">
                        <th>Tổng cộng</th>
                        <td data-title="Tổng cộng" class="center"><strong><span class="amount">{{ $total }}<span class="woocommerce-Price-currencySymbol">₫</span></span></strong> </td>
                    </tr>
                </tbody>
            </table>

            <div class="proceed-to-checkout">

                <a href="https://hoabanfood.com/checkout" class="proceed-checkout center add-to-cart">
                    Thanh toán</a>
            </div>
        </div>
    </div>
    @else
    <div class="message">
        <p class="cart-empty" style="color:red;">Chưa có sản phẩm nào trong giỏ hàng.</p>
        <p class="return-to-shop">
		    <a class="button-back" href="/">Quay lại cửa hàng</a>
	    </p>
    </div>
    @endif
</div>
@endsection

@section('scripts')
    <script type="text/javascript">
 
        jQuery(".update-cart").click(function (e) {
           e.preventDefault();
 
           var ele = $(this);
           console.log(ele.parents("tr").val());
 
            $.ajax({
               url: '{{ url('cap-nhat-gio-hang') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });
 
        jQuery(".remove-cart").click(function (e) {
            e.preventDefault();
 
            var ele = $(this);
 
            if(confirm("Bạn có muốn xóa sản phẩm này không")) {
                $.ajax({
                    url: '{{ url('xoa-gio-hang') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
 
    </script>
 
@endsection
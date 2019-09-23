@extends('app')

@section('pageTitle', 'Giỏ hàng | Lacoviet')

@section('content')
<div class="main-content-title">
    <h1>
        <span>Giỏ hàng</span>
    </h1>
</div>

<div class="main-content-text">
    <p>Cám ơn Quý Khách đã tin dùng & ủng hộ các sản phẩm của chúng tôi. Xin vui lòng điền các thông tin cần thiết ở bước kế tiếp để đặt hàng.</p>

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
                    <th class="product-subtotal">&nbsp;</th>
                    <th class="actions">Tổng cộng</th>
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
                        <a href="">{{ $value['name'] }}</a> 
                    </td>

                    <td class="product-price" data-title="Giá">
                        <span class=" amount">{{ number_format($value['price'], 0, "", ".") }}<span>&nbsp;₫</span></span> 
                    </td>

                    <td class="product-quantity" data-title="Số lượng">
                        <div>
                            <input type="number" min="0" max="" value="{{$value['quantity']}}" class="input-text center quantity" size="4" pattern="[0-9]*" inputmode="numeric">
                        </div>
                    </td>

                    <td class="actions">
                        <button data-id="{{ $key }}" class="update-cart" name="update-cart" title="Cập nhật khi thay đổi số lượng">Cập nhật</button>
                     </td>

                    <td class="product-subtotal" data-title="Tổng cộng" style="text-align:right;">
                        <span class=" amount">{{ number_format($value['price'] * $value['quantity'], 0, "", ".") }}<span>&nbsp;₫</span></span> 
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>

    <div class="cart-calculate">


        <div class="cross-sells">

            

        </div>

        <div class="cart-totals">


            <h2>Tổng giỏ hàng</h2>

            <table cellspacing="0" class="cart-table-price">

                <tbody>
                    <tr class="order-total">
                        <th>Tổng cộng</th>
                        <td data-title="Tổng cộng" style="text-align:right;"><strong><span class="amount">{{ number_format($total, 0, "", ".") }}<span>&nbsp;₫</span></span></strong> </td>
                    </tr>
                </tbody>
            </table>

            <div class="proceed-to-checkout">

                <a href="{{ route('thanh-toan') }}" class="proceed-checkout center add-to-cart">
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
               url: '{{ route("cap-nhat-gio-hang") }}',
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
                    url: '{{ route("xoa-gio-hang") }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

    function increment_quantity(cart_id) {
        var inputQuantityElement = $("#input-quantity-"+cart_id);
        var newQuantity = parseInt($(inputQuantityElement).val())+1;console.log(newQuantity);
        //save_to_db(cart_id, newQuantity);
    }

    function decrement_quantity(cart_id) {
        var inputQuantityElement = $("#input-quantity-"+cart_id);
        if($(inputQuantityElement).val() > 1) 
        {
            var newQuantity = parseInt($(inputQuantityElement).val()) - 1;
            //save_to_db(cart_id, newQuantity);
        }
    }

    function save_to_db(cart_id, new_quantity) {
        var inputQuantityElement = $("#input-quantity-"+cart_id);
        $.ajax({
            url : "update_cart_quantity.php",
            data : "cart_id="+cart_id+"&new_quantity="+new_quantity,
            type : 'post',
            success : function(response) {
                $(inputQuantityElement).val(new_quantity);
            }
        });
    }
 
    </script>
 
@endsection
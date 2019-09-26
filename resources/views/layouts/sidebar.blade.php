<div class="side-bar">
    <p class="side-title"><a href="#">Giỏ hàng</a></p>

    <?php $total = 0 ?>
    @if(session('cart'))
    <div class="cart-list-items">
        <ul>
            @foreach(session('cart') as $key => $value)
            <?php $total += $value['price'] * $value['quantity'] ?>
                <li>
                    <div class="group-item">
                        <button data-id="{{ $key }}" class="remove-cart" title="Xóa sản phẩm này">×</button>
                        <a href="{{ URL::to('san-pham/' . $value['category_slug'] . '/' . $value['product_slug']) }}" title="{{ $value['name'] }}" style="display: inline-block">
                            <img width="250" height="140" src="{{ asset('storage/uploads/public/'.$value['photo']) }}"
                                 class="attachment-shop_thumbnail size-shop_thumbnail"
                                 alt="{{ $value['name'] }}"></a>
                    </div>

                    <span class="quantity">{{ $value['quantity'] }} × <span class="woocommerce-Price-amount amount">{{ shopperMoney($value['price'], setting('site_currency')) }}<span></span></span></span>
                </li>
            @endforeach
        </ul>

        <p class="total center"><strong>Tổng cộng:</strong> <span class="woocommerce-Price-amount amount">{{ shopperMoney($total, setting('site_currency')) }}<span></span></span></p>

        <p class="buttons">
            <a href="{{ route('gio-hang') }}" class="view-cart center">Xem giỏ hàng</a>
            <a href="{{ route('thanh-toan') }}" class="view-checkout center">Thanh toán</a>
        </p>

    </div>
    @else
    <ul class="cart-list">
        <li class="empty center">Chưa có sản phẩm trong giỏ hàng.</li>
    </ul>
    @endif

    <p class="side-title"><a href="#">Tin tức mới</a></p>
    <ul class="side-list-news">
</ul>
</div>

@section('scripts')
    <script type="text/javascript">

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

    </script>

@endsection

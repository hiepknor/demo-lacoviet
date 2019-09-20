<div class="side-bar">
    <p class="side-title"><a href="/gio-hang">Giỏ hàng</a></p>

    <?php $total = 0 ?>
    @if(session('cart'))
    <div class="cart-list-items">
        <ul>
            @foreach(session('cart') as $key => $value)
            <?php $total += $value['price'] * $value['quantity'] ?>
                <li>
                <button data-id="{{ $key }}" class="remove-cart" title="Xóa sản phẩm này">×</button>
                    <a href="https://hoabanfood.com/sp/thit-bo-gac-bep">
                        <img width="250" height="140" src="//hoabanfood.com/wp-content/uploads/thit-bo-gac-bep-hoabanfood-1-250x140.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="Thịt Bò Gác Bếp | HOABANFOOD.com">{{ $value['name'] }}&nbsp;
                    </a>

                    <span class="quantity">{{ $value['quantity'] }} × <span class="woocommerce-Price-amount amount">{{ $value['price'] }}<span class="woocommerce-Price-currencySymbol">₫</span></span></span>
                </li>
            @endforeach
        </ul>

        <p class="total"><strong>Tổng phụ:</strong> <span class="woocommerce-Price-amount amount">{{ $total }}<span class="woocommerce-Price-currencySymbol">₫</span></span></p>

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

    <p class="side-title"><a href="/tin-tuc">Tin tức mới</a></p>
    <ul class="side-list-news">
        {{-- @foreach($sidebar_data as $item)--}}
        {{-- <li>--}}
        {{-- <div class="side-news-thumb"><a href="/{{ $item->slug }}"><img src="{{ $item->image }}" alt="{{ $item->title }}"></a>
</div>--}}
{{-- <div class="side-news-title"><a href="/{{ $item->slug }}">{{ $item->title }}</a></div>--}}
{{-- <div class="side-news-view"><i class="fa fa-eye" aria-hidden="true"></i> Lượt xem: 596</div>--}}
{{-- </li>--}}
{{-- @endforeach--}}
</ul>
</div>

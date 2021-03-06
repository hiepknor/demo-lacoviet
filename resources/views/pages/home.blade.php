@extends('app')

@section('pageTitle', 'Trang chủ')

@section('content')
    @foreach($all_categories as $caterory)
        <div class="original-label lastest-products-label">
            <span><h3>{{ $caterory->name }}</h3></span>
        </div>
        <div class="home-grid owl-carousel owl-theme">
            @foreach($product->where('category_id', $caterory->id) as $item)
                <div class="grid-item">
                    <a class="item-link" href="{{ URL::to('san-pham/' . $caterory->slug . '/' . $item->slug) }}" title="{{ $item->name }}">
                        <div class="item-thumb">
                            <img src="{{ asset('storage/uploads/public/'.$item->previewImage->disk_name) }}">
                        </div>
                        <div class="item-name center">{{ $item->name }}</div>
                        <div class="item-price">
                            @if($offer->where('product_id', $item->id)->value('old_price') == 0)
                                <span class="unit-price center"></span>
                            @else
                                <span class="unit-price center">{{ shopperMoney($offer->where('product_id', $item->id)->value('old_price'), setting('site_currency')) }}</span>
                            @endif
                            <span class="promotion-price center">{{ shopperMoney($offer->where('product_id', $item->id)->value('price'), setting('site_currency')) }}</span>
                        </div>
                    </a>
                    <a class="add-to-cart center" href="{{ URL::to('them-gio-hang/' . $item->id) }}">
                        <span><i class="fa fa-cart-plus" aria-hidden="true"></i>Đặt mua ngay</span>
                    </a>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection

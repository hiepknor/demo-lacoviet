@extends('app')

@section('pageTitle', 'Trang chủ')

@section('content')
{{--    {{ Breadcrumbs::render('pages.home', $home) }}--}}
    @foreach($allCategories as $caterory)
        <div class="original-label lastest-products-label">
            <span><h3>{{ $caterory->name }}</h3></span>
        </div>
        <div class="home-grid owl-carousel owl-theme">
            @foreach($product->where('category_id', $caterory->id) as $item)
                <div class="grid-item">
                    <a class="item-link" href="" title="{{ $item->name }}">
                        <div class="item-thumb">
                            <img src="{{ asset('storage/uploads/public/'.$item->previewImage->disk_name) }}">
                            <div class="sale-sticker"><img src="{{ asset('lacoviet/images/icon_giamgia.png') }}" alt="icon giảm giá"><span class="sale-percent">11%</span></div>
                        </div>
                        <div class="item-name center">{{ $item->name }}</div>
                        <div class="item-price">
                            <span class="unit-price center"></span>
                            <span class="promotion-price center">{{ round($offer->where('product_id', $item->id)->value('price'), 0) }} ₫</span>
                        </div>
                    </a>
                    <a class="add-to-cart center" href="{{ URL::to('them-gio-hang/' . $item->id) }}">Đặt mua ngay</a>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection

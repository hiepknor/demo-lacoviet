@extends('app')

@section('pageTitle', 'Sản phẩm')

@section('content')
    <div class="main-content-title">
        <h1>
            <span>Tất cả sản phẩm</span>
        </h1>
    </div>
    <div class="grid-products all-products">
        @foreach($product as $item)
            <div class="grid-item">
                <a class="item-link" href="" title="{{ $item->name }}">
                    <div class="item-thumb">
                        <img src="{{ asset('storage/uploads/public/'.$item->previewImage->disk_name) }}">
                        @if($offer->where('product_id', $item->id)->value('old_price') != 0)
                                <div class="sale-sticker"><img src="{{ asset('lacoviet/images/icon_giamgia.png') }}" alt="icon giảm giá"><span class="sale-percent">{{ round(($offer->where('product_id', $item->id)->value('old_price') - $offer->where('product_id', $item->id)->value('price')) / $offer->where('product_id', $item->id)->value('old_price') * 100, 0) }}&nbsp;%</span></div>
                        @endif
                    </div>
                    <div class="item-name center">{{ $item->name }}</div>
                    <div class="item-price">
                        @if($offer->where('product_id', $item->id)->value('old_price') == 0)
                            <span class="unit-price center"></span>
                        @else
                            <span class="unit-price center">{{ round($offer->where('product_id', $item->id)->value('old_price'), 0) }} ₫</span>
                        @endif
                        <span class="promotion-price center">{{ round($offer->where('product_id', $item->id)->value('price'), 0) }} ₫</span>
                    </div>
                </a>
                <a class="add-to-cart center" href="{{ URL::to('them-gio-hang/' . $item->id) }}">
                        <span><i class="fa fa-cart-plus" aria-hidden="true"></i>Đặt mua ngay</span>
                </a>
            </div>
        @endforeach
    </div>
<!-- {{--    {!! $products->links() !!}--}} -->
@endsection

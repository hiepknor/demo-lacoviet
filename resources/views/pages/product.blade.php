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
                    </div>
                    <div class="item-name center">{{ $item->name }}</div>
                    <div class="item-price">
                        @if($offer->where('product_id', $item->id)->value('old_price') == 0)
                            <span class="unit-price center"></span>
                        @else
                            <span class="unit-price center">{{ formatPrice(($offer->where('product_id', $item->id)->value('old_price'))) }} ₫</span>
                        @endif
                        <span class="promotion-price center">{{ formatPrice(($offer->where('product_id', $item->id)->value('price'))) }} ₫</span>
                    </div>
                </a>
                <a class="add-to-cart center" href="{{ URL::to('them-gio-hang/' . $item->id) }}">Đặt mua ngay</a>
            </div>
        @endforeach
    </div>
<!-- {{--    {!! $products->links() !!}--}} -->
@endsection

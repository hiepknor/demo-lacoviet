@extends('app')

@section('pageTitle', 'Danh mục')

@section('content')
    <div class="main-content-title">
        <h1>
            <span>{{ $category_by_slug->name }}</span>
        </h1>
    </div>
    <div class="grid-products category-types">
        @foreach($product as $item)
            <div class="grid-item">
                <a class="item-link" href="{{ URL::to('san-pham/' . $category_by_slug->slug . '/' . $item->slug) }}" title="{{ $item->name }}">
                    <div class="item-thumb">
                        <img src="{{ asset('storage/uploads/public/'.$item->previewImage->disk_name) }}">
                    </div>
                    <div class="item-name center">{{ $item->name }}</div>
                    <div class="item-price">
                        @if($offer->where('product_id', $item->id)->value('old_price') == 0)
                            <span class="unit-price center"></span>
                        @else
                            <span class="unit-price center">{{ formatPrice($offer->where('product_id', $item->id)->value('old_price')) }}&nbsp;₫</span>
                        @endif
                        <span class="promotion-price center">{{ formatPrice($offer->where('product_id', $item->id)->value('price')) }}&nbsp;₫</span>
                    </div>
                </a>
                <a class="add-to-cart center" href="{{ URL::to('them-gio-hang/' . $item->id) }}">
                    <span><i class="fa fa-cart-plus" aria-hidden="true"></i>Đặt mua ngay</span>
                </a>
            </div>
        @endforeach
    </div>
{{--    {!! $product->links() !!}--}}
@endsection

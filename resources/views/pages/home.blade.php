@extends('app')

@section('pageTitle', 'Trang chủ')

@section('content')
    <div class="home-grid">
{{--        @foreach($categories as $category)--}}
{{--            <div class="original-label lastest-products-label">--}}
{{--                <span><h3>{{ $category->name }}</h3></span>--}}
{{--            </div>--}}
{{--            <div class="grid-products">--}}
{{--                @foreach($products->where('category_id', $category->id) as $product)--}}
{{--                    {{ print_r($product->specificPrice()->getOldPrice()) }}--}}
{{--                {{ print_r($product->categories()->value('id')) }}--}}
{{--                    <div class="grid-item">--}}
{{--                        <a class="item-link" href="/{{ $product->categories()->value('id') .'/'. $product->id}}" title="{{ $product->name }}"--}}
{{--                           title="{{ $product->name }}">--}}
{{--                            <div class="item-thumb">--}}
{{--                                <img src="" alt="{{ $product->name }}"--}}
{{--                                     alt="{{ $product->name }}">--}}
{{--                                <div class="sale-sticker"><img src="images/icon_giamgia.png" alt="icon giảm giá"><span--}}
{{--                                            class="sale-percent">11%</span></div>--}}
{{--                            </div>--}}
{{--                            <div class="item-name center">{{ $product->name }}</div>--}}
{{--                            <div class="item-price">--}}
{{--                                <span class="unit-price center">440000</span>--}}
{{--                                <span class="promotion-price center">{{ $product->price }}</span>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <button class="add-to-cart center">Đặt mua ngay</button>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        @endforeach--}}
    </div>
@endsection

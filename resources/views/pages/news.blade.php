@extends('app')

@section('pageTitle', 'Tin tức')

@section('content')
    <div class="main-content-title">
        <h1>
            <span>Tin tức</span>
        </h1>
    </div>

    <div class="grid-news">
{{--        @foreach($articles as $item)--}}
{{--            <div class="grid-item">--}}
{{--                <a href="/{{ $item->slug }}" title="{{ $item->title }}">--}}
{{--                    <div class="item-thumb">--}}
{{--                        <img src="{{ $item->image }}">--}}
{{--                    </div>--}}
{{--                    <div class="news-item-name center">{{ $item->title }}</div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        @endforeach--}}
    </div>
{{--    {!! $articles->links() !!}--}}
@endsection

@extends('home.page')
@section('content')
    <section class="hero-slider-area hero-slider-area-style-two">
        <div class="hero-slider-two owl-carousel owl-theme">
            <div class="slider-item bg-4">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="hero-slider-content">
                                <span>{{trans('index.title')}}</span>
                                <h1>{{trans('index.title01')}}</h1>
                                <p>{{trans('index.title02')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item bg-5">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="hero-slider-content">
                                <h1>{{trans('index.title01')}}</h1>
                                <p>{{trans('index.title03')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="popular-categories-area pt-54 pb-30">
        <div class="container">
            <div class="section-title">
                <h2>{{trans('index.title04')}}</h2>
            </div>
            <div class="row justify-content-center">
                @foreach($tagList as $item)
                    <div class="col-lg-2 col-sm-6 col-md-4">
                        <div class="single-popular-categories">
                            <a href="/">
                                <img width="100" src="{{asset('assets/images/icon/icon.jpg')}}" alt="Image">
                                <span>{{$item['name']}}</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="best-seller-area pb-30">
        <div class="container">
            <div class="section-title">
                <h2>{{trans('index.title05')}}</h2>
            </div>
            <div class="best-product-slider owl-carousel owl-theme">
                @foreach($newProduct as $item_new)
                <div class="single-products">
                    <div class="product-img">
                        <a href="{{route('detail', ['id' => $item_new['id']])}}">
                            <img src="{{$item_new['pic']}}" alt="Image">
                        </a>
                        <span class="hot">new</span>
                    </div>
                    <div class="product-content">
                        <a href="{{route('detail', ['id' => $item_new['id']])}}" class="title">
                            {{$item_new['title']}}
                        </a>
                        <ul class="products-rating">
                            <li>
                                <i class="ri-star-fill"></i>
                            </li>
                            <li>
                                <i class="ri-star-fill"></i>
                            </li>
                            <li>
                                <i class="ri-star-fill"></i>
                            </li>
                            <li>
                                <i class="ri-star-fill"></i>
                            </li>
                            <li>
                                <i class="ri-star-fill"></i>
                            </li>
                            <li>
                                <a href="{{route('detail', ['id' => $item_new['id']])}}">
                                    ({{$item_new['view_num']}} views)
                                </a>
                            </li>
                        </ul>
                        <ul class="products-price">
                            <li>
                                {{trans('index.price_2')}}:{{$item_new['price']}}{{trans('index.price_logo')}}
                                <Del>{{trans('index.price')}}：{{$item_new['origin_price']}}{{trans('index.price_logo')}}</Del>
                            </li>
                        </ul>
                        <ul class="products-cart-wish-view">
                            <li>
                                <a href="{{route('want', ['product_id' => $item_new['id']])}}" class="wish-btn">
                                    <i class="ri-heart-line"></i>
                                </a>
                            </li>
                            <li>
                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="ri-eye-line"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="featured-products-area rs-used pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="section-title pt-0 ">
                        <h2>{{isset($list[0])?$list[0]['name']: ''}}</h2>
                    </div>
                    <div class="featured-product-wrap">
                        <div class="featured-product-slider owl-carousel owl-theme">
                            @isset($list[0])@foreach($list[0]['data'] as $item_0)
                            <div class="single-products">
                                <div class="product-img">
                                    <a href="{{route('detail', ['id' => $item_0['id']])}}">
                                        <img src="{{$item_0['pic']}}" alt="Image">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <a href="product-details.html" class="title">
                                        {{$item_0['title']}}
                                    </a>
                                    <ul class="products-rating">
                                        <li>
                                            <i class="ri-star-fill"></i>
                                        </li>
                                        <li>
                                            <i class="ri-star-fill"></i>
                                        </li>
                                        <li>
                                            <i class="ri-star-fill"></i>
                                        </li>
                                        <li>
                                            <i class="ri-star-fill"></i>
                                        </li>
                                        <li>
                                            <i class="ri-star-fill"></i>
                                        </li>
                                        <li>
                                            <a href="{{route('detail', ['id' => $item_0['id']])}}">
                                                ({{$item_0['view_num']}} views)
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="products-price">
                                        <li>
                                            {{trans('index.price_2')}}:{{$item_0['price']}}{{trans('index.price_logo')}}
                                            <Del>{{trans('index.price')}}：{{$item_0['origin_price']}}{{trans('index.price_logo')}}</Del>
                                        </li>
                                    </ul>
                                    <ul class="products-cart-wish-view">
                                        <li>
                                            <a href="{{route('want', ['product_id' => $item_0['id']])}}" class="wish-btn">
                                                <i class="ri-heart-line"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class="ri-eye-line"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @endforeach
                            @endisset
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="featured-product-img bg-3">
                        <div class="featured-product-content">
                            <span class="best">{{trans('index.title')}}</span>
                            <h3>{{trans('index.title01')}}</h3>
                            <span class="offer">{{trans('index.title02')}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="sale-discount-area pb-54">
        <div class="container">
            <div class="sale-discount-bg">
                <div class="discount-content">
                    <h5></h5>
                    <h3>{{trans('index.title06')}}</h3>
                </div>
            </div>
        </div>
    </section>

    <section class="new-arrivals-area pb-30">
        <div class="container">
            <div class="section-title">
                <h2>{{isset($list[1])?$list[1]['name']: ''}}</h2>
            </div>
            <div class="row">
                @isset($list[1])@foreach($list[1]['data'] as $item_2)
                <div class="col-xl-3 col-sm-6">
                    <div class="single-products new-arrivals">
                        <div class="product-img">
                            <a href="{{route('detail', ['id' => $item_2['id']])}}">
                                <img src="{{$item_2['pic']}}" alt="Image">
                            </a>
                        </div>
                        <div class="product-content">
                            <a href="{{route('detail', ['id' => $item_2['id']])}}" class="title">
                                {{$item_2['title']}}
                            </a>
                            <ul class="products-rating">
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <a href="product-details.html">
                                        ({{$item_2['view_num']}} view)
                                    </a>
                                </li>
                            </ul>
                            <ul class="products-price">
                                <li>
                                    {{trans('index.price_2')}}:{{$item_2['price']}}{{trans('index.price_logo')}}
                                    <Del>{{trans('index.price')}}：{{$item_2['origin_price']}}{{trans('index.price_logo')}}</Del>
                                </li>
                            </ul>
                            <ul class="products-cart-wish-view">
                                <li>

                                </li>
                                <li>
                                    <a href="{{route('want', ['product_id' => $item_2['id']])}}" class="wish-btn">
                                        <i class="ri-heart-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="ri-eye-line"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
                @endisset
            </div>
        </div>
    </section>


@endsection

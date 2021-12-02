@extends('home.page')
@section('content')
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">

            </div>
        </div>
    </div>


    <section class="featured-products-area ptb-54">
        <div class="container">
            <div class="section-title text-center">
                <h2>{{$name}}</h2>
            </div>
            <div class="row justify-content-center">
                @foreach($list as $item)
                <div class="col-xl-3 col-sm-6">
                    <div class="single-products">
                        <div class="product-img">
                            <a href="{{route('detail', ['id' => $item['id']])}}">
                                <img src="{{$item['pic']}}" alt="Image">
                            </a>
                        </div>
                        <div class="product-content">
                            <a href="{{route('detail', ['id' => $item['id']])}}" class="title">
                                {{$item['title']}}
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
                                        ({{$item['view_num']}} 방문)
                                    </a>
                                </li>
                            </ul>
                            <ul class="products-price">
                                <li>
                                    {{trans('index.price_2')}}：{{$item['price']}}{{trans('index.price_logo')}}
                                    <Del>{{$item['origin_price']}}{{trans('index.price_logo')}}</Del></li>
                            </ul>
                            <ul class="products-cart-wish-view">
                                <li>
                                    <a href="{{route('want', ['product_id' => $item['id']])}}" class="wish-btn">
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
            </div>
        </div>
    </section>

@endsection
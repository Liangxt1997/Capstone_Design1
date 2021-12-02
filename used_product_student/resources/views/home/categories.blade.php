@extends('home.page')
@section('content')
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li class="active">{{trans('index.all')}}</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="categories-area pt-54">
        <div class="container">
            <div class="categories-wrap tab products-details-tab">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="section-title">
                            <h2>{{trans('index.all')}}</h2>
                        </div>
                        <ul class="tabs">
                            @foreach($cateList['cate'] as $item)
                            <li>
                                {{$item}}
                            </li>
                             @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab_content">
                            @foreach($cateList['data'] as $data)
                            <div class="tabs_item">
                                <div class="categories-slider owl-carousel owl-theme">
                                    @foreach($data as $value)
                                    <div class="single-products new-arrivals">
                                        <div class="product-img">
                                            <a href="{{route('detail', ['id' => $value['id']])}}">
                                                <img src="{{$value['pic']}}" alt="Image">
                                            </a>
                                        </div>
                                        <div class="product-content">
                                            <a href="{{route('detail', ['id' => $value['id']])}}" class="title">
                                                {{$value['title']}}
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
                                                    <a href="{{route('detail', ['id' => $value['id']])}}">
                                                        ({{$value['view_num']}} view)
                                                    </a>
                                                </li>
                                            </ul>
                                            <ul class="products-price">
                                                <li>
                                                    {{trans('index.price_2')}}：{{$value['price']}}{{trans('index.price_logo')}}
                                                    <Del>{{$value['origin_price']}}{{trans('index.price_logo')}}</Del>
                                                </li>
                                            </ul>
                                            <ul class="products-cart-wish-view">
                                                <li>
                                                    <a href="{{route('want', ['product_id' => $value['id']])}}" class="wish-btn">
                                                        <i class="ri-heart-line"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <button class="eye-btn" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                     @endforeach
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="popular-categories-area ptb-54">
        <div class="container">
            <div class="section-title">
                <h2>{{trans('index.title05')}}</h2>
            </div>
            <div class="row justify-content-center">
                @foreach($newList as $item_n)
                <div class="col-lg-4 col-sm-6">
                    <div class="single-categories">
                        <a href="{{route('detail', ['id' => $item_n['id']])}}">
                            <img src="{{$item_n['pic']}}" alt="Image">
                        </a>
                        <h3>
                            <a href="{{route('detail', ['id' => $item_n['id']])}}">
                                {{$item_n['title']}}
                            </a>
                        </h3>
                        <span>{{trans('index.price_2')}} {{$item_n['price']}}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


@endsection
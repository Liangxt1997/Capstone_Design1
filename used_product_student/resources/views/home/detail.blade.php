@extends('home.page')
@section('content')

    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <ul>
                </ul>
            </div>
        </div>
    </div>


    <section class="product-details-area ptb-54">
        <div class="container">
            <div class="row align-items-center">
                <div class="product-view-one">
                    <div class="modal-content p-0">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="product-view-one-image">
                                    <div id="big" class="owl-carousel owl-theme">
                                        @foreach($picArr as $item)
                                        <div class="item">
                                            <img src="{{$item}}" alt="Image">
                                        </div>
                                        @endforeach
                                    </div>
                                    <div id="thumbs" class="owl-carousel owl-theme">
                                        @foreach($picArr as $item)
                                            <div class="item">
                                                <img src="{{$item}}" alt="Image">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="product-content ml-15">
                                    <h3>
                                        {{$title}}
                                    </h3>
                                    <div class="product-review">
                                        <div class="rating">
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                            <i class="ri-star-fill"></i>
                                        </div>
                                        <a href="#reviews" class="rating-count">{{$view_num}} views</a>
                                    </div>
                                    <div class="price">
                                        <span class="new-price">{{trans('index.price_2')}}：{{$price}}{{trans('index.price_logo')}} <del>{{trans('index.price')}}：{{$origin_price}}{{trans('index.price_logo')}}</del></span>
                                    </div>
                                    <ul class="product-info">
                                        <li>
                                            <p>{!!$description!!}</p>
                                        </li>
                                        <li>
                                            <span>{{trans('index.label')}}:</span>
                                            {{$tag_name}}
                                        </li>
                                        <li>
                                            <span>{{trans('index.cate_name')}}:</span>
                                            <a href="{{route('category', ['category' => $categories_id])}}">{{$category}}</a>
                                        </li>
                                    </ul>
                                    <div class="wishlist-btn">
                                        <a href="{{route('want', ['product_id' => $id])}}" class="default-btn">
                                            <i class="ri-heart-line"></i>
                                            {{trans('index.want')}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div id="reviews" class="tab products-details-tab">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <ul class="tabs">
                                    <li>
                                        {{trans('index.miaoshu')}}
                                    </li>
                                    <li>
                                        {{trans('index.comment_title')}}
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="tab_content">
                                    <div class="tabs_item">
                                        <div class="products-details-tab-content">
                                            <h3>{{trans('index.product_miaoshu')}}</h3>
                                            <p>{!!$description!!}</p>
                                        </div>
                                    </div>
                                    <div class="tabs_item">
                                        <div class="products-details-tab-content">
                                            <div class="product-review-form">
                                                <h3>{{trans('index.maijia_comment')}}</h3>
                                                <div class="review-title">
                                                    <div class="rating">
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                        <i class="ri-star-fill"></i>
                                                    </div>
                                                    <p>{{trans('index.zongji')}}{{$comment_count}} {{trans('index.comment_num')}}</p>
                                                    <a href="#" class="btn default-btn">{{trans('index.write_comment')}}</a>
                                                </div>
                                                <div class="review-comments">
                                                    @foreach($comments as $comment)
                                                    <div class="review-item">
                                                        <div class="rating">
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                            <i class="ri-star-fill"></i>
                                                        </div>
                                                        <h3>{{$comment['title']}}</h3>
                                                        <span><strong>{{$comment['username']}}</strong> | <strong>{{$comment['created_at']}} </strong></span>
                                                        <p>{{$comment['description']}}</p>
                                                        @if($comment['reply'])
                                                        <p>{{trans('index.reply')}}：{{$comment['reply']}}</p>
                                                            @endif
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <div class="review-form">
                                                    <h3>{{trans('index.write_comment')}}</h3>
                                                    <form id="commentSub">
                                                        <input type="hidden" name="product_id" id="product_id" value="{{$id}}">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>{{trans('index.comment_title')}}</label>
                                                                    <input type="text" id="title" name="title"
                                                                           placeholder="{{trans('index.comment_title')}}" required
                                                                           data-error="{{trans('index.comment_title')}}"
                                                                           class="form-control">
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label>{{trans('index.comment_content')}}</label>
                                                                    <textarea name="description" id="description" cols="30"
                                                                              rows="8"
                                                                              placeholder="{{trans('index.comment_content')}}"
                                                                              required
                                                                              data-error="{{trans('index.comment_content')}}"
                                                                              class="form-control"></textarea>
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12">
                                                                <button type="submit" class="btn default-btn">{{trans('index.submit')}}
                                                                </button>
                                                                <div id="commentmsgSubmit" class="h3 text-center hidden"></div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="best-seller-area pb-30">
        <div class="container">
            <div class="section-title">
                <h2>관련 상품 추천</h2>
            </div>
            <div class="best-product-slider owl-carousel owl-theme">
                @foreach($relateProduct as $r_item)
                <div class="single-products">
                    <div class="product-img">
                        <a href="{{route('detail', ['id' => $r_item['id']])}}">
                            <img src="{{$r_item['pic']}}" alt="Image">
                        </a>
                    </div>
                    <div class="product-content">
                        <a href="{{route('detail', ['id' => $r_item['id']])}}" class="title">
                            {{$r_item['title']}}
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
                                <a href="{{route('detail', ['id' => $r_item['id']])}}">
                                    ({{$r_item['view_num']}} 방문)
                                </a>
                            </li>
                        </ul>
                        <ul class="products-price">
                            <li>
                                중고 가격:  {{$r_item['price']}}  원
                                <Del>원가:  {{$r_item['origin_price']}}</Del> 원
                            </li>
                        </ul>
                        <ul class="products-cart-wish-view">
                            <li>
                                <a href="{{route('want', ['product_id' => $r_item['id']])}}" class="wish-btn">
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


@endsection

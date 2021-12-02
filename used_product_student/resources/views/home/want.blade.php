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


    <section class="contact-area ptb-54">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-info-europe">
                        <h3>{{trans('index.m_p')}}</h3>
                        <ul>
                            <li class="p-0">
                                <h4>{{trans('index.product')}}</h4>
                            </li>
                            <li>
                                <i class="ri-map-pin-line"></i>
                                {{trans('index.product')}}{{trans('index.name')}}: {{$product['title']}}
                            </li>

                            <li>
                                <i class="ri-time-line"></i>
                                {{trans('index.price_2')}}：{{$product['price']}}{{trans('index.price_logo')}}
                            </li>
                        </ul>
                        <ul>
                            <li class="p-0">
                                <h4>{{trans('index.m_m')}}</h4>
                            </li>
                            <li>
                                <i class="ri-map-pin-line"></i>
                                {{trans('index.m_n')}}: {{$shop['name']}}
                            </li>
                            <li>
                                <i class="ri-map-pin-line"></i>
                                {{trans('index.m_s')}}: {{$shop['phone']}}
                            </li>
                            <li>
                                <i class="ri-time-line"></i>
                                {{trans('index.m_j')}}: {{$shop['description']}}
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="map">

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact-area pb-54">
        <div class="container">
            <div class="contact-form">
                <h2>{{trans('index.lianxi')}}</h2>
                <form id="contactForm">
                    <input type="hidden" id="product_id" name="product_id" value="{{$product['id']}}">
                    <input type="hidden" name="product_name" value="{{$product['title']}}">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>{{trans('index.name')}}</label>
                                <input type="text" name="username" id="username" class="form-control" required
                                       data-error="{{trans('index.name')}}">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>{{trans('index.email')}}</label>
                                <input type="email" name="email" id="email" class="form-control" required
                                       data-error="{{trans('index.email')}}">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>{{trans('index.phone')}}</label>
                                <input type="text" name="phone_number" id="phone_number" required
                                       data-error="{{trans('index.phone')}}" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>{{trans('index.liyou')}}</label>
                                <textarea name="content" class="form-control" id="content" cols="30" rows="6" required
                                          data-error="{{trans('index.liyou')}}"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        @error('name')
                        <div style="color: red; margin-left: 20px;" class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn">
                                <span>{{trans('index.submit')}}</span>
                            </button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection

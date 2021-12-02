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


    <section class="contact-area page-title-area">
        <div class="container">
            <div class="contact-form">
                <h2>{{trans('index.liuyan')}}</h2>
                <form id="feedbackForm">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>{{trans('index.real_name')}}</label>
                                <input type="text" name="real_name" id="real_name" class="form-control" required
                                       data-error="{{trans('index.real_name')}}">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>{{trans('index.email')}}</label>
                                <input type="email" name="email" id="email" required
                                       data-error="{{trans('index.email')}}" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>{{trans('index.liuyan')}}</label>
                                <textarea name="content" class="form-control" id="content" cols="30" rows="6" required
                                          data-error="{{trans('index.liuyan')}}"></textarea>
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
                            <div id="feedbackSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection

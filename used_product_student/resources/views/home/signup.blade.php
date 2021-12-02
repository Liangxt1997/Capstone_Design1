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


    <section class="user-area ptb-54">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="user-form-content ml-15">
                        <h3>{{trans('index.regi')}}</h3>
                        <form class="user-form" method="post" action="{{route('signup.post')}}">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>{{trans('index.account')}}</label>
                                        <input type="text" id="name" name="name" required="" lay-verify="username" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>{{trans('index.email')}}</label>
                                        <input type="text" id="email" name="email" required="" lay-verify="email" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>{{trans('index.pwd')}}</label>
                                        <input type="password" id="pass" name="password" required="" lay-verify="pass" class="form-control">
                                    </div>
                                </div>
                                @error('name')
                                <div style="color: red; margin-left: 20px;" class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="col-12">
                                    <button class="default-btn register" type="submit">
                                        {{trans('index.regi')}}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

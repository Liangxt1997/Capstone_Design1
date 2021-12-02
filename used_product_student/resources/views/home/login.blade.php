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
                <div class="col-lg-6">
                    <div class="user-form-content log-in-50 mr-15">
                        <h3>{{trans('index.login')}}</h3>
                        <form method="POST" class="user-form" action="{{route('home_login.post')}}">
                            <div class="row">
                                <div class="col-24">
                                    <div class="form-group">
                                        <label>{{trans('index.account')}}</label>
                                        <input type="text" id="name" name="name" required="" lay-verify="username"  class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>{{trans('index.pwd')}}</label>
                                        <input type="password" id="pass" name="password" required="" lay-verify="pass" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="login-action">
                                        <span class="forgot-login">
                                            <a href="{{route('signup')}}">{{trans('index.register')}}</a>
                                        </span>
                                    </div>
                                </div>
                                @error('name')
                                <div style="color: red; margin-left: 20px;" class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="col-12">
                                    <button class="default-btn" type="submit">
                                        {{trans('index.login')}}
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

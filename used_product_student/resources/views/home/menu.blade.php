<header class="header-area">

    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <ul class="header-left-content">
                        <li>
                            <a href="{{route('about_us')}}">
                                {{trans('index.about')}}
                            </a>
                        </li>
                        <li>
                            {{trans('index.boda')}}:
                            <a href="tel:+1-(514)-321-4567">
                                <span>xxxxxxxxx</span>
                            </a>
                        </li>
                        @if(!$userdata['name'])
                        <li>
                            <a href="{{route('home_login')}}">
                                <span class="wish-icon">
                                <i class="ri-login-box-fill"></i>
                                <span class="count">{{trans('index.login')}}</span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('signup')}}">
                                <span class="wish-icon">
                                <i class="ri-registered-fill"></i>
                                <span class="count">{{trans('index.regi')}}</span>
                                </span>
                            </a>
                        </li>
                            @endif
                        <li>
                            <a href="/admin/">
                                <span class="wish-icon">
                                <i class="ri-building-2-fill"></i>
                                <span class="count">{{trans('index.business')}}</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <div class="header-right-content">
                        <ul>
                            @if($userdata['name'])
                            <li>
                                <a href="my-account.html">{{$userdata['name']}}</a>
                            </li>
                            <li class="add-listing green-bg">
                                <a href="{{route('logout')}}">
                                    <i class="ti-user mr-1"></i> {{trans('index.exit')}}
                                </a>
                            </li>
                            @endif
                            <li>
                                <div class="navbar-option-item navbar-option-language dropdown language-option">
                                    <button class="dropdown-toggle" type="button" id="language2"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="lang-name"></span>
                                    </button>
                                    <div class="dropdown-menu language-dropdown-menu" aria-labelledby="language2">
                                        @foreach($language as $key => $item)
                                        <a class="dropdown-item" href="{{route('language.get', ['language' => $key])}}">
                                            <img src="{{$key == 'hw'? asset('assets/images/language/hw.png'): asset('assets/images/language/china.png')}}" alt="Image">
                                            {{$item}}
                                        </a>
                                            @endforeach
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="middle-header middle-header-style-two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="/" style="font-size: 25px;color:#ff6a00">
                            {{trans('index.logo_name')}}
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <form class="search-box" method="get" action="{{route('/')}}">
                        <input type="text" name="keyword" value="{{isset($keyword)? $keyword: ''}}" placeholder="search" class="form-control">
                        <button type="submit" class="search-btn">
                            <i class="ri-search-line"></i>
                            search
                        </button>
                    </form>
                </div>
                <div class="col-lg-4">
                    <ul class="wish-cart">
                        <li>
                            <a href="{{route('collection')}}">
                                <span class="wish-icon">
                                <i class="ri-heart-line"></i>
                                <span class="count"></span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('home.comment')}}">
                                <span class="wish-icon">
                                    <i class="ri-message-2-line"></i>
                                    <span class="count"></span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="navbar-area navbar-area-style-two">
        <div class="desktop-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="navbar-category">
                        <button type="button" id="categoryButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                            <i class="ri-menu-line"></i>
                            {{trans('index.product_2')}}
                            <i class="arrow-down ri-arrow-down-s-line"></i>
                        </button>
                        <div class="navbar-category-dropdown dropdown-menu" aria-labelledby="categoryButton">
                            <ul>
                                <li>
                                    <a href="{{route('home_categories')}}">{{trans('index.all')}}</a>
                                </li>
                                @foreach($categories as $item)
                                    <li><a href="{{route('category', ['category' =>$item['id']])}}" class="active">{{$item['name']}}</a></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item float-end">
                                <a href="#" class="nav-link active">
                                    {{trans('index.news')}}
                                    <i class="ri-arrow-down-s-line"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{route('new')}}" class="nav-link">{{trans('index.zixun')}}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('about_us')}}" class="nav-link active">{{trans('index.about')}}</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('faceback')}}" class="nav-link">{{trans('index.online_liuyan')}}</a>
                            </li>
                        </ul>

                    </div>
                </nav>
            </div>
        </div>
    </div>

</header>


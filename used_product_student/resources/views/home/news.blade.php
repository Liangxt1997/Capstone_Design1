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


    <section class="ptb-54">
        <div class="container">
            <div class="main-content-text">
                @foreach($list as $key => $item)
                <h3>{{$key}}. {{$item['title']}}</h3>
                <p>{!! $item['content'] !!}</p>
                <div class="gap-20"></div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

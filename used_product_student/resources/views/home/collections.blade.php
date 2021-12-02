@extends('home.user')
@section('user_content')
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <ul>

                </ul>
            </div>
        </div>
    </div>


    <div class="cart-area ptb-54">
        <div class="container">
            <form class="cart-controller mb-0">
                <div class="cart-table table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            {!! trans('index.table') !!}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($list as $item)
                        <tr>
                            <td class="product-thumbnail">
                                <a href="{{route('detail', ['id' => $item['product_id']])}}">
                                    <img src="{{$item['product']['pic']}}" alt="Image">
                                </a>
                            </td>
                            <td class="product-name">
                                <a href="{{route('detail', ['id' => $item['product_id']])}}">{{$item['product']['title']}}</a>
                            </td>
                            <td class="product-price">
                                <span class="unit-amount">${{$item['product']['price']}}</span>
                            </td>
                            <td class="product-subtotal">
                                <span class="subtotal-amount">${{$item['product']['origin_price']}}</span>
                            </td>

                            <td class="trash">
                                <a href="#" class="removeWant" data-id="{{$item['id']}}">
                                    <i class="ri-close-fill"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </form>
        </div>
    </div>



@endsection
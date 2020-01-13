<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Card</title>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
    <body>
    @foreach($item as $value)
        <div class="container">
            <div class="item-block">
                <img src="{{ url('image\img_1.png') }}" alt="item">
                <div>  <h2>{{$value->name}}</h2>
                    <p>{{$value->description}}</p>
                </div>
            </div>
            <div class="qty-block">

                <div class="qty-trash"><a href="#"><img src="{{ url('image\img_4.png') }}" alt="item"></a></div>

                <div class="qty-block-one">
                    <div class="qty"><a href="#"><img src="{{ url('image\img_2.png') }}" alt="item"></a></div>
                    <span>{{$value->qty}}</span>
                    <div class="qty"><a href="#"><img src="{{ url('image\img_3.png') }}" alt="item"></a></div>
                    <h2>{{$value->price}}</h2>&nbsp<h2>&#8364;</h2>
                </div>

            </div>
        </div>
        @endforeach
        {{--<div class="container">--}}
            {{--<div class="item-block">--}}
                {{--<img src="{{ url('image\img_1.png') }}" alt="item">--}}
                {{--<div>  <h2>Item 1</h2>--}}
                {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.--}}
                    {{--Ab hic illo laboriosam maxime nobis repudiandae sit soluta!--}}
                    {{--</p></div>--}}
            {{--</div>--}}
            {{--<div class="qty-block">--}}

                {{--<div class="qty-trash"><a href="#"><img src="{{ url('image\img_4.png') }}" alt="item"></a></div>--}}

                {{--<div class="qty-block-one">--}}
                    {{--<div class="qty"><a href="#"><img src="{{ url('image\img_2.png') }}" alt="item"></a></div>--}}
                    {{--<span>5</span>--}}
                    {{--<div class="qty"><a href="#"><img src="{{ url('image\img_3.png') }}" alt="item"></a></div>--}}
                    {{--<h2>75.00</h2>&nbsp<h2>&#8364;</h2>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}

        <div class="container_buy">
            <span>225.00</span>&nbsp<span>&#8364;</span>
        </div>
        <div class="container_buy">
            {{--<span>225.00</span>&nbsp<span>&#8364;</span>--}}
            <a href="#"><button>Buy</button></a>
        </div>
    </body>
</html>

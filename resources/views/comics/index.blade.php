@php
$links = [
    [ 'title' => 'digital comics',
    'img' => '/images/buy-comics-digital-comics.png'
    ],
    [
        'title' => 'dc merchandise',
        'img' => '/images/buy-comics-merchandise.png'
    ],
    [
        'title' => 'subscription',
        'img' => '/images/buy-comics-subscriptions.png'
    ],
    [
        'title' => 'comic shop locator',
        'img' => '/images/buy-comics-shop-locator.png'
    ],
    [
        'title' => 'dc power visa',
        'img' => '/images/buy-dc-power-visa.svg'
    ]
]
@endphp

@extends('layouts.app')

@section('content')
    <div class="jumbo">
        <button class="text-uppercase border-0 cSeries">current series</button>
    </div>
    <div class="bg-dark">
        <div class="contentContainer container ">
            <div class="row row-cols-1 row-cols-sm-3 row-cols-md-6">
                @foreach ($comics as $comic)
                <div class="col pt-5 pb-5 position-relative">
                    <div class="text-center">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                    </div>
                    <h5 class="text-white text-center text-uppercase mt-2"><a href="{{ route('comics.show', $comic->id)}}">{{ $comic['title'] }}</a></h5>
                    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary position-absolute bottom-0">Modifica</a>
                </div>
                @endforeach

                <div class="w-100 d-flex justify-content-center">
                    <button class="text-uppercase border-0">load more</button>
                </div>
            </div>

        </div>
    </div>
    <div class="d-flex align-items-center" id="banner">
        <div class="container ps-5 pe-5">
            <ul class="d-flex justify-content-between text-uppercase mb-0">
                @foreach ($links as $link)
                <li class="d-flex align-items-center">
                    <a href="">
                        <img src="{{$link['img']}}" alt="">
                        <span>{{ $link['title'] }}</span>
                    </a>

                </li>
                @endforeach

            </ul>
        </div>
    </div>
@endsection

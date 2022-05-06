@extends('layouts/base')
@section('title', 'Comic Book')

@section('main-content')
<div class="bg-blue">
    <div class="comic-img-wrapper">
        <a href="{{route('comics')}} ">
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
        </a>
    </div>
</div>
<div class="bg-white">
    <div class="container">
        <div id="comic-wrapper">
            <h1>
                {{$comic['title']}}
            </h1>
            <div>
                {{$comic['price']}}
            </div>
            <p>
                {{$comic['description']}}
            </p>
            <div class="my-flex">
                <div>
                    <div class="my-flex">
                        <h6>
                            Art by:
                        </h6>
                        <p>
                            @foreach ($comic['artists'] as $artist )
                                <a href="#">
                                    {{$artist}}
                                </a>
                            @endforeach
                        </p>
                    </div>
                    <div class="my-flex">
                        <h6>
                            Written by:
                        </h6>
                        <p>
                            @foreach ($comic['writers'] as $writer )
                                <a href="#">
                                    {{$writer}}
                                </a>
                            @endforeach
                        </p>
                    </div>
                </div>
                <div>
                    <h3>
                        advertistement
                    </h3>
                    <img src="{{asset('images/adv.jpg')}}" alt="Advert">
                </div>
                <div>
                    <div class="my-flex">
                        <h6>
                            series:
                        </h6>
                        <p>
                            {{$comic['series']}}
                        </p>
                    </div>
                    <div class="my-flex">
                        <h6>
                            U.S. Price:
                        </h6>
                        <p>
                            {{$comic['price']}}
                        </p>
                    </div>
                    <div class="my-flex">
                        <h6>
                            On sale Date::
                        </h6>
                        <p>
                            {{$comic['sale_date']}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

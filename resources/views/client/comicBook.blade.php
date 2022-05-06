@extends('layouts/base')
@section('title', 'Comic Book')

@section('main-content')
<div class="bg-blue">
    <div class="comic-img-wrapper">
        <a href="{{route('comics')}} ">
            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
        </a>
        <div class="previous-button">
            <p>
                view gallery
            </p>
        </div>
        <div class="comic-type">
            <p>
                comic book
            </p>
        </div>
    </div>
</div>
<div class="bg-white">
    <div class="container">
        <div id="comic-wrapper">
            <div class="my-flex top-description">
                <div class="comic-description">
                    <h1>
                        {{$comic['title']}}
                    </h1>
                    <div class="price-tag my-flex">
                        <div class="price my-flex">
                            <span>
                                US. Price: {{$comic['price']}}
                            </span>
                            <span>
                                available
                            </span>
                        </div>
                        <div class="availble">
                            <span>
                                Cheack Availability
                            </span>
                        </div>
                    </div>
                    <p>
                        {{$comic['description']}}
                    </p>
                </div>
                <div class="ad-wrapper">
                    <h3>
                        advertistement
                    </h3>
                    <img src="{{asset('images/adv.jpg')}}" alt="Advert">
                </div>
            </div>
            <div class="comic-details my-flex">
                <div class="talent-col">
                        <h4>
                            Talent
                        </h4>
                        <span>
                            Art by:
                        </span>
                        <span>
                            @foreach ($comic['artists'] as $artist )
                                <a href="#">
                                    {{$artist}}
                                </a>
                            @endforeach
                            </span>

                        <div>
                            <span>
                                Written by:
                            </span>
                            <span>
                                @foreach ($comic['writers'] as $writer )
                                    <a href="#">
                                        {{$writer}}
                                    </a>
                                @endforeach
                            </span>
                        </div>
                </div>

                <div class="specs.col">
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

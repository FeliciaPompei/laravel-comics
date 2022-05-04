@extends('layouts.base')

@section('main-content')

<div class=" my-flex">
    @foreach ($comics as $comic )
        <div class="my-card">
            <div class="my-card-img">
                <img src="{{$comic['thumb']}} " alt="{{$comic['title']}} ">
            </div>
            <div>
                <h4> {{$comic['series']}} </h4>
                <p> {{$comic['price']}} </p>
            </div>
        </div>
    @endforeach

</div>

@endsection

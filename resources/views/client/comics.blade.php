@extends('layouts.base')

@section('main-content')

<div class="bg-gray">

    <div class="main-content my-flex my-container">
        <a class="btn btn-position" href="#">current series</a>
        <div class="card-container my-flex">
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
        <a class="btn">Load More</a>
    </div>
</div>
<div class="bg-blue">

</div>

@endsection





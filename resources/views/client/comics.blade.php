@extends('layouts.base')
@section('title', 'Comic Books')

@section('main-content')
<div class="container">
    <div class="main-content my-flex my-container">
        <a class="btn btn-position" href="#">current series</a>
        <div class="card-container my-flex">
            @foreach ($comics as $index => $comic )
                <div class="my-card">
                    <div class="my-card-img">
                        <a href="{{route("comicBook", ['id' => $index])}} ">
                            <img src="{{$comic['thumb']}} " alt="{{$comic['title']}} ">
                        </a>
                    </div>
                    <div>
                        <h4> {{$comic['series']}} </h4>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="btn">Load More</a>
    </div>
</div>
@include('partials.shop')
@endsection





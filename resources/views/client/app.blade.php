@extends('layouts.base')

@section('title', 'HomePage')

@section('main-content')
<div class="home-content">
    <h1 class="text-white">
        This is the home page!
    </h1>
</div>
@include('partials.shop')
@endsection

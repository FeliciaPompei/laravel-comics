@extends('layouts/base')

@section('main-content')
<div class="comic-img-wrapper">

</div>
<div id="comic-wrapper">
    @dump($comic)
    <h1>
        {{$comic['title']}}
    </h1>
    <div>
        {{$comic['price']}}
    </div>
    <p>
        {{$comic['description']}}
    </p>
    <div class="d-flex">
        <div >
            <div class="d-flex">
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
            <div class="d-flex">
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
            <div class="d-flex">
                <h6>
                    series:
                </h6>
                <p>
                    {{$comic['series']}}
                </p>
            </div>
            <div class="d-flex">
                <h6>
                    U.S. Price:
                </h6>
                <p>
                    {{$comic['price']}}
                </p>
            </div>
            <div class="d-flex">
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
@endsection

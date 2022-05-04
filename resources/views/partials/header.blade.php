<header>
    <div id="main-header">
        <div id="header-wrapper" class="my-flex my-container">
            <img class="my-height-100" src="{{asset("images/dc-logo.png")}} " alt="DC logo">
            <ul class="my-flex my-height-100">
                {{-- @dump($headerLinks) --}}
                {{-- @foreach ($headerLinks as $headerLink )
                    <li>
                        <a href="{{$headerLink['link']}} ">
                            {{$headerLink['text']}}
                        </a>
                    </li>
                @endforeach --}}
            </ul>
        </div>
    </div>
</header>

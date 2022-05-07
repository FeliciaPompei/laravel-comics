<header>
    <div id="main-header">
        <div id="header-wrapper" class="my-flex my-container">
            <a href="{{ url('/') }}">
                <img class="my-height-100" src="{{asset("images/dc-logo.png")}} " alt="DC logo">
            </a>
            <ul class="my-flex my-height-100">
                @foreach($navLinks as $navLink)
						<li class="{{ Route::currentRouteName() == $navLink['link'] ? 'active' : '' }}">
							<a href="{{ (!$navLink['link'] == '') ? route($navLink['link']) : url('#') }}">
								{{ $navLink['text'] }}
							</a>
						</li>
				@endforeach
            </ul>
        </div>
    </div>
</header>

<header>
    <div id="main-header">
        <div id="header-wrapper" class="my-flex my-container">
            <img class="my-height-100" src="{{asset("images/dc-logo.png")}} " alt="DC logo">
            <ul class="my-flex my-height-100">
                @foreach($navLinks as $navLink)
						<li class="{{ ($navLink['active']) ? 'active' : '' }}">
							<a href="{{ url($navLink['link']) }}">
								{{ $navLink['text'] }}
							</a>
						</li>
				@endforeach
            </ul>
        </div>
    </div>
</header>

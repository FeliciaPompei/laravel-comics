<footer>
    <div id="main-footer">
        <div id="top-footer">
            <div class="top-footer-wrapper">
            <div class="footer-nav-bar">
            <ul>
                <li>
                    <h4>
                        dc comics
                    </h4>
                </li>
                @foreach($footerLinks['dcComicsLinks'] as $footerLink)
                    <li>
                        <a href="{{ $footerLink['link'] }}">
                            {{ $footerLink['text'] }}
                        </a>
                    </li>
				@endforeach
            </ul>
            <ul>
                <li>
                    <h4>
                        dc
                    </h4>
                </li>
                @foreach($footerLinks['dcLinks'] as $footerLink)
                    <li>
                        <a href="{{ $footerLink['link'] }}">
                            {{ $footerLink['text'] }}
                        </a>
                    </li>
				@endforeach
            </ul>
            <ul>
                <li>
                    <h4>
                        sites
                    </h4>
                </li>
                @foreach($footerLinks['dcSiteLinks'] as $footerLink)
                    <li>
                        <a href="{{ $footerLink['link'] }}">
                            {{ $footerLink['text'] }}
                        </a>
                    </li>
				@endforeach
            </ul>
            <ul>
                <li>
                    <h4>
                        shop
                    </h4>
                </li>
                @foreach($footerLinks['dcShopLinks'] as $footerLink)
                    <li>
                        <a href="{{ $footerLink['link'] }}">
                            {{ $footerLink['text'] }}
                        </a>
                    </li>
				@endforeach
            </ul>
            </div>
            <img src="{{asset('images/dc-logo-bg.png')}} " alt="DC Logo">
            </div>
        </div>
        <div class="bottom-footer">
            <div class="bottom-footer-wrapper">
                <div class="btn">
                    <a href="#">sign-up Now!</a>
                </div>
                <div class="social-media">
                    <h4>follow us</h4>
                    @foreach($footerLinks['socialMediaLinks'] as $footerLink)
                    <a href="{{$footerLink['link']}} ">
                        <img src="{{asset($footerLink['image'])}}" alt="link.text">
                    </a>
				@endforeach
                </div>
            </div>
        </div>
    </div>
</footer>

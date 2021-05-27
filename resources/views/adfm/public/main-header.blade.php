<header class="header header_main">
    <div class="container header__line">
        <div class="logo logo__bg">
            <img src="../../images/geo_logo1 1.svg">
        </div>
        <div class="logo header__logo">
            <a href="{{url('/')}}">
                <div class="logo__img">
                    <img src="/images/logo-alsa.svg">
                </div>
                <div class="logo__text">
                    <h1 class="h1-logo">АЛСА</h1>
                </div>
            </a>
        </div>
        <div class="header__burger-button header__burger-button_main">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </div>
        <div class="menu header__menu header__menu_main">
            <ul class="horizontal-list menu__list">
                @php($links = \App\Models\Adfm\Menu::getData('main'))
                @foreach($links[0] as $el)
                <li class="list__item">
                    <a href="{{$el->link}}">{{$el->title}}</a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="menu menu-mobile menu-mobile_main">
            <div class="container">
                <ul class="vertical-list menu__list">
                    @foreach($links[0] as $el)
                    <li class="list__item">
                        <a href="{{$el->link}}">{{$el->title}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="container header__banner">
        <div class="header__content">
            <div class="header__header">
                <h1 class="h1-main">Геофизические Исследования скважин</h1>
            </div>
            <div class="header__button">
                <div class="button">Написать сообщение</div>
            </div>
        </div>
    </div>
</header>
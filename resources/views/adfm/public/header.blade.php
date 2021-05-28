<header class="header">
    <div class="container header__line">
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
        <div class="header__burger-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </div>
        <div class="menu header__menu">
            <nav class="main-menu">
                <ul class="horizontal-list menu__list">
                    @php($links = \App\Models\Adfm\Menu::getData('main'))
                    @foreach($links[0] as $el)
                    <li class="list__item">
                        <a href="{{$el->link}}">{{$el->title}}</a>
                    </li>
                    @endforeach
                </ul>
            </nav>
        </div>        
    </div>
</header>
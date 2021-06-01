<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@section('meta-title')@show</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <x-adfm::feedback id="modal"/>

@yield('content')

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <div class="footer__content footer__descripition">
                    <div class="logo footer__logo">
                        <a href="/">
                            <div class="logo__img">
                                <img src="/images/logo-alsa.png">
                            </div>
                            <div class="logo__text">
                                <h1 class="h1-logo">АЛСА</h1>
                            </div>
                        </a>
                    </div>
                    <div class="footer__descripition-text">
                        <p class="text">
                            ООО «АЛСА» (ранее ООО «ГИС») на рынке геофизических услуг с 1997 г. Основной вид деятельности - выполнение геофизических исследований в скважинах. Квалификационный состав - инженеры-геофизики с многолетним опытом работы на золоторудных, хромитовых, свинцово- цинковых, баритовых, угольных и пр. месторождениях Красноярского края. Забайкальского края, республик Хакасия, Тыва и др.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-md-6 col-lg-2 col-xl-4">
                <div class="menu footer__content footer__menu">
                    <ul class="vertical-list footer__list">
                        @php($links = \App\Models\Adfm\Menu::getData('footer-menu'))
                        @foreach($links[0] as $el)
                        <li class="list__item">
                            <a href="{{$el->link}}">{{$el->title}}</a>
                        </li>
                        @endforeach                        
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-4">
                <div class="footer__content footer__contacts">
                    <div class="footer__contacts-text">
                        <p class="text">АДРЕС: 655017, Россия, Республика Хакасия, г. Абакан, ул. Кирова 217</p>
                        <p class="text">Телефоны: +7-923-333-7000</p>
                        <p class="text">Email:  nfo@test.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>

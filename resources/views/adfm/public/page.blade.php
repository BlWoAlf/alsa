@extends('adfm::public.layout')
@section('meta-title', $page->title)
@section('content')
@include('adfm.public.header')
    <section class="section"> 
        <div class="container container_short">
            <div class="route">
                <span><a href="{{route('adfm.show.main-page')}}">Главная</a> > {{$page->title}}</span>
            </div>
            <div class="section__header">
                <h1 class="h1-header">{{$page->title}}</h1>
            </div>
            <div class="section__content">
                {{-- <p class="text">
                    ООО «АЛСА» на рынке геофизических услуг с 2008г. Основной вид деятельности - выполнение геофизических исследований в скважинах. Квалификационный состав – инженеры-геофизики с многолетним опытом работы на золоторудных, хромитовых, свинцово-цинковых, баритовых, угольных и пр. месторождениях Красноярского края, Забайкальского края, республик Хакасия, Тыва и др. 
                </p>
                <h2 class="h2-header">
                    Реквизиты
                </h2> --}}
                {!! $page->content !!}
                @if(count($page->files) > 0)
                <div class="row">
                    @foreach($page->files as $file)
                    <div class="col-6 col-sm-3">
                        <div class="about-company__img">                           
                            {!! ImageCache::get($file, ['w' => 260, 'h' => 370, 'fit' => 'crop'])->alt($file->original_name) !!}
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    
                    <!-- Background of PhotoSwipe. 
                         It's a separate element as animating opacity is faster than rgba(). -->
                    <div class="pswp__bg"></div>
                
                    <!-- Slides wrapper with overflow:hidden. -->
                    <div class="pswp__scroll-wrap">
                
                        <!-- Container that holds slides. 
                            PhotoSwipe keeps only 3 of them in the DOM to save memory.
                            Don't modify these 3 pswp__item elements, data is added later on. -->
                        <div class="pswp__container">
                            <div class="pswp__item"></div>
                            <div class="pswp__item"></div>
                            <div class="pswp__item"></div>
                        </div>
                
                        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                        <div class="pswp__ui pswp__ui--hidden">
                
                            <div class="pswp__top-bar">
                
                                <!--  Controls are self-explanatory. Order can be changed. -->
                
                                <div class="pswp__counter"></div>
                
                                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                
                                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                
                                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                
                                <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                                <!-- element will get class pswp__preloader--active when preloader is running -->
                                <div class="pswp__preloader">
                                    <div class="pswp__preloader__icn">
                                      <div class="pswp__preloader__cut">
                                        <div class="pswp__preloader__donut"></div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                
                            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                                <div class="pswp__share-tooltip"></div> 
                            </div>
                
                            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                            </button>
                
                            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                            </button>
                
                            <div class="pswp__caption">
                                <div class="pswp__caption__center"></div>
                            </div>
                
                        </div>
                
                    </div>
                
                </div>
                @endif
            </div>
        </div>
    </section>
@endsection

require('./bootstrap');

import tippy, {followCursor} from 'tippy.js';
import 'tippy.js/dist/tippy.css';

$(function(){
    window.onload=function() {
        tippy('path[fill="#FF7E30"]', {
            plugins: [followCursor],
            content: 'My tooltip!',
            followCursor: 'initial',
        });
    }

    var openPhotoSwipe = function(index){
        var pswpElement = document.querySelectorAll('.pswp')[0];

        var items = [];

        $('.about-company__img').each(function(i, elem){
            var src = elem.children[0].src.split('/');
            src.splice(src.indexOf('image_cache'),1);
            src.pop();
            var img = src.join('/');
            items[i] = {
                src: img,
                w: 683,
                h: 1024
            }
        });

        var options = {
            // history & focus options are disabled on CodePen        
             history: false,
             focus: false,
     
             showAnimationDuration: 0,
             hideAnimationDuration: 0
             
        };

        var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
        gallery.init();
        gallery.goTo(index);
    }

    $('.about-company__img').click(function(){
        var index = $(this).parent().index();
        openPhotoSwipe(index);
    });

    // $('.header__burger-button').click(function(){
    //     $('.menu-mobile').toggleClass('menu-mobile_active');
    // });

    // $(document).mouseup(function (e){
	// 	if (!$('.header__burger-button').is(e.target) && $('.header__burger-button').has(e.target).length === 0 && !$('.menu-mobile').is(e.target) && $('.menu-mobile').has(e.target).length === 0 && $('.menu-mobile').hasClass('menu-mobile_active')) {
    //         $('.menu-mobile').removeClass('menu-mobile_active');
    //     }
	// });
    
    const menu = new MmenuLight(
        document.querySelector( ".main-menu" ),
        "(max-width: 767px)"
    );

    const navigator = menu.navigation();
    const drawer = menu.offcanvas();

    $('.header__burger-button').click(function(){        
        drawer.open();
    });
});

require('./bootstrap');

import tippy, {followCursor} from 'tippy.js';
import 'tippy.js/dist/tippy.css';

$(function(){
    window.onload=function() {
        tippy('path[fill="#FF7E30"]', {
            plugins: [followCursor],
            content(reference) {
                let str = reference.getAttribute('data-content');
                if(str){
                    let values = str.split(',,');
                    if(values.length > 1){
                        values.forEach(function(item, i, arr) {
                            values[i] = (i+1)+'. '+item;
                        });
                    }
                    str = values.join('<br>');
                    return str;
                }
                else{
                    return 'В данном регионе не выполнялось геофизических работ';
                }
            },
            allowHTML: true,
            followCursor: 'initial',
            delay: 100,
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
                h: 1024,
            }
        });

        $('.photo__img').each(function(i, elem){
            var src = elem.children[0].src.split('/');
            src.splice(src.indexOf('image_cache'),1);
            src.pop();
            var img = src.join('/');
            items[i] = {
                src: img,
                w: 1024,
                h: 576,
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
        initPhotoSwipe($(this));
    });

    $('.photo__img').click(function(){
        initPhotoSwipe($(this));
    });

    function initPhotoSwipe(photo) {
        var index = photo.parent().index();
        openPhotoSwipe(index);
    }

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

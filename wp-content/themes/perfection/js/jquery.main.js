$(function(){$.each($(".developer"),function(){new Developer($(this))}),$.each($(".pricing"),function(){new TM($(this))}),$.each($("#mc-embedded-subscribe-form"),function(){new MC($(this))}),$(document).on("invalid.wpcf7",function(){$(".contact-form").find("fieldset").removeClass("novalid"),$(".contact-form").find(".wpcf7-not-valid-tip").each(function(){$(this).parents("fieldset").addClass("novalid")})}),$.each($(".preloader"),function(){new Preloader($(this))}),$.each($(".anchor"),function(){new Anchor($(this))}),$.each($(".drop-menu"),function(){new Menu($(this))}),$.each($(".pixel-grid__slider"),function(){new SliderSingle($(this))}),$.each($(".we-impressed"),function(){new SliderSingle($(this))}),$.each($(".formats__slider"),function(){new SliderFormats($(this))}),$.each($(".message-field"),function(){new MessageHigh($(this))}),$.each($("#logov8"),function(){new TopGif($(window))})});var Developer=function(e){var n=e,i=n.find(".developer__btn"),t=n.find(".developer__container"),o=n.find(".developer__close"),a=$(document),s=function(){i.on({click:function(){t.hasClass("developer__container_open")?t.removeClass("developer__container_open"):t.addClass("developer__container_open")}}),o.on({click:function(){t.removeClass("developer__container_open")}}),a.on({click:function(e){0==$(e.target).closest(n).length&&t.removeClass("developer__container_open")}})},r=function(){s()};r()},TopGif=function(e){var n=!1,i=function(){$(document).bind("keypress",function(e){n=!0}),$("a").on("click",function(){n=!0}),$("form").on("submit",function(){n=!0}),$("input[type=submit]").on("click",function(){n=!0})},t=function(){if(void 0===$.cookie("animicon")){var e=new Date,n=60;e.setTime(e.getTime()+60*n*1e3),$.cookie("animicon",!0,{expires:e,path:"/"}),o()}else o()},o=function(){var e={wrapper:document.getElementById("logov8"),animType:"svg",loop:!1,prerender:!0,autoplay:!0,path:"https://res.cloudinary.com/rodetyo/raw/upload/v1459249719/logov8_b.json"};bodymovin.loadAnimation(e)},a=function(){t(),i()};a()},Anchor=function(e){var n=e,i=$(".site__header"),t=$("html, body"),o=function(){n.on({click:function(){return t.animate({scrollTop:$($.attr(this,"href")).offset().top},600),i.addClass("site__header_hidden"),!1}})},a=function(){o()};a()},MC=function(e){var n=e,i=e.data("thank"),t="",o=function(){n.on("submit",function(){return t=$("#mce-EMAIL").val(),t.length<4?s():($("#mce-EMAIL").removeClass("mce_inline_error"),r()),!1})},a=function(){var e=n.attr("action");return e=e.replace("/post?u=","/post-json?u="),e+="&c=?"},s=function(){$("#mce-EMAIL").addClass("mce_inline_error")},r=function(){$.ajax({url:a(),data:{EMAIL:t},type:"GET",dataType:"json",contentType:"application/json; charset=utf-8",success:function(e){"success"==e.result?(n[0].reset(),window.location.href=i):s()},error:function(){s()}})},c=function(){o()};c()},MessageHigh=function(e){var n=e,i=n.find(".contact-form__message"),t=n.find(".message-field__text"),o=n.find(".message-field__height"),a=function(){n.on({keydown:function(){t.html(i.val()+"___"),i.css("height",t.height()+25),o.css("height",t.height())}})},s=function(){a()};s()},Menu=function(e){var n,i=e,t=$(".drop-menu-btn"),o=$(".site__header"),a=i.find(".drop-menu__inner"),s=$(".pages__item"),r=i.find("#scroll-wrap"),c=i.find("#scroll-wrap > div"),l=!1,d=$(".site"),u=$(window),f=function(){t.on({click:function(){return o.hasClass("site__header_drop-menu")?(d.css("height","auto"),u.scrollTop(siteScrollTop),o.removeClass("site__header_drop-menu"),o.removeClass("header_top"),$(r).getNiceScroll().hide(),!1):(o.addClass("site__header_drop-menu"),o.hasClass("header-scroll")&&(console.log("dd"),o.addClass("header_top")),siteScrollTop=u.scrollTop(),setTimeout(function(){d.css("height","100%"),setTimeout(function(){$(r).getNiceScroll().show(),$(r).getNiceScroll().resize()},300)},300),!1)}}),u.on({scroll:function(){l=u.scrollTop()>=o.innerHeight(),h(),_()},resize:function(){r.css("height",c.height()),c.height()-8>a.height()&&o.hasClass("site__header_drop-menu")?(m(),$(r).getNiceScroll().show()):$(r).getNiceScroll().hide()},DOMMouseScroll:function(e){var n=e.originalEvent.detail;if(n){var i=n>0?1:-1;v(i)}},mousewheel:function(e){var n=e.originalEvent.wheelDelta;if(n){var i=n>0?-1:1;v(i)}},touchmove:function(e){var i=e.originalEvent.touches[0].clientY;i>n?v(-1):n>i&&v(1),n=i}})},h=function(){s.each(function(){var e=$(this).offset().top,n=$(this).height(),i=160;e<=u.scrollTop()&&(o.removeClass("white"),o.addClass($(this).data("header-color"))),e<=u.scrollTop()+n-i&&e+n+i>=u.scrollTop()&&$(this).addClass("active")})},p=function(){r.css("height",c.height()),c.height()-8>a.height()&&(m(),$(r).getNiceScroll().hide())},_=function(){u.scrollTop()>0?o.addClass("header-scroll"):o.removeClass("header-scroll")},v=function(e){e>0&&!o.hasClass("site__header_hidden")&&l&&o.addClass("site__header_hidden"),0>e&&o.hasClass("site__header_hidden")&&l&&o.removeClass("site__header_hidden")},m=function(){$(r).niceScroll({autohidemode:"false",cursorborder:"",cursorcolor:"#fff",cursorwidth:"6px",cursorborderradius:"0"})},g=function(){h(),p(),_(),f()};g()},Preloader=function(e){var n=($(window),e),i=function(){setTimeout(function(){n.addClass("preloader_hide"),$(".promo__parenthesis").addClass("visible")},100)},t=function(){i()};t()},SliderFormats=function(e){var n,i=this,t=e,o=t.find(">div"),a=o.find(".formats__slider-item"),s=a.find(".formats__slider-arrow"),r=o.find(".formats__slider-text"),c=r.find(">div"),l=0,d=$(window),u=function(){a.on({mouseenter:function(){d.width()>=992&&f($(this))}}),a.on({click:function(){return d.width()<992&&(f($(this)),clearInterval(n),p()),!1}}),t.on({mouseenter:function(){clearInterval(n)},mouseleave:function(){p()}}),d.on({resize:function(){h()}})},f=function(e){var i=e.index(),t=c.eq(i);a.removeClass("active"),e.addClass("active"),c.removeClass("visible"),t.addClass("visible"),clearInterval(n)},h=function(){l=d.width()<550?20:d.width()>=550&&d.width()<1200?70:54;var e=(o.width()+l)/2+"px",n=-90,i=a.length,t=360/i;a.each(function(i){var o=$(this),a=t*i+n,s=-1*a;o.css({"-webkit-transform":"rotate("+a+"deg) translate("+e+") rotate("+s+"deg)",transform:"rotate("+a+"deg) translate("+e+") rotate("+s+"deg)"})}),s.each(function(e){var i=$(this),o=t*e+n,a=-1*o,s=t*e;i.css({"-webkit-transform":"rotate("+o+"deg) rotate("+(a+s)+"deg)",transform:"rotate("+o+"deg) rotate("+(a+s)+"deg)"})})},p=function(){n=setInterval(function(){var e=a.filter(".active"),n=e.next(),i=n.index(),t=c.eq(i);-1==n.index()&&(n=a.eq(0),t=c.eq(0)),a.removeClass("active"),c.removeClass("visible"),n.addClass("active"),t.addClass("visible")},5e3)},_=function(){setTimeout(function(){var e=a.filter(".active"),n=e.index(),i=c.eq(n);i.addClass("visible"),r.addClass("visible-text"),p()},2e3)},v=function(){t[0].obj=i,h(),_(),u()};v()},SliderSingle=function(e){var n,i,t=e,o=t.find(".pixel-grid__swiper"),a=t.find(".we-impressed__swiper"),s=a.find(".swiper-slide"),r=function(){n=new Swiper(o,{pagination:$(".swiper-pagination"),paginationClickable:!0,loop:!0,autoplay:5e3}),i=new Swiper(a,{pagination:$(".we-impressed__swiper-pagination"),paginationClickable:!0,loop:!0,autoplay:5e3,effect:"fade",paginationBulletRender:function(e,n){var i=s.eq(e),t=i.data("photo");return _bg_company=i.data("company"),'<span class="'+n+'"><span class="we-impressed__ava" style="background-image: url('+t+')"></span><img class="we-impressed__company" src="'+_bg_company+'"/></span>'}})},c=function(){r()};c()},TM=function(e){var n=function(){$(".paddle_button > span ").on("click",function(){var e=$(this).data("product"),n=$(this).data("product_name");dataLayer.push({event:"track-purchase-click",productid:e,productname:n})}),$(".pricing__license a").on("click",function(){dataLayer.push({event:"track-purchase-customize"})})},i=function(){window.dataLayer=window.dataLayer||[],n()};i()};
$(function(){

    $.each( $('.site__header-btn'), function(){
        new HeaderMenu ( $(this) )
    } );

    if ( $('.gallery').length ){
        $('.gallery__item').on({
            click: function(){
                if ( $(window).width()<1024 ){
                    return false;
                }
            }
        })
    }

} );

var HeaderMenu = function (obj) {
    this.obj = obj;
    this.snap = this.obj.find('button');
    this.menuHead = $('.site__header-slide');
    this.largeSize = false;

    this.init();
};
HeaderMenu.prototype = {
    init: function () {
        var self = this;

        self.core = self.core();
        self.core.build();
    },
    core: function () {
        var self = this;

        return {
            addEvents: function () {
                self.snap.on({
                    click: function(){
                        if ( self.menuHead.css('display') == 'none' ){
                            self.menuHead.slideDown(300);
                            self.snap.addClass('active')
                        } else {
                            self.menuHead.slideUp(300);
                            self.snap.removeClass('active')
                        }
                    }
                });

                $(window).on({
                    resize: function(){
                        if ( $(window).width()>1006 ){
                            self.menuHead.css({
                                "display": "inline-block"
                            });
                            self.largeSize = true;
                        } else if ( self.largeSize ){
                            self.menuHead.css({
                                "display": "none"
                            });
                            self.snap.removeClass('active');
                            self.largeSize = false;
                        }
                    }
                })

            },
            build: function () {
                self.core.addEvents();
            }
        };
    }
};
var PublicScene = (function(){
    function PublicScene()
    {
        var self = this;
        var _currentId = 0;
        var _len = $('#bannerMain > .banner').length;
        var _banner = $('#bannerMain > .banner');
        var _timers;
        self.init = function(){

            _currentId = 0;
            for(var i = 0 ; i < _len ; i++){
                if(i == _currentId){
                    _banner.eq(i).css({opacity:1});
                }else{
                    _banner.eq(i).css({opacity:0});
                }
            }
//            self.setTab();
            _timers = setInterval(self.onTimersEvent,3000);


            $('#navList > li').bind('mouseover',function(e){
                var index = $('#navList > li').index(this);

                $(this).find('.nav-sub-list').css({display:'block'});
                $(this).find('.hover_a').attr('id','nava'+(index+1));
//                console.log(index+1);
            });

            $('#navList > li').bind('mouseout',function(e){
                $(this).find('.nav-sub-list').css({display:'none'});
                $(this).find('.hover_a').attr('id','');
            });

            $('.login-btn').bind('click',function(e){

                self.setTabLogin(0);
                return false;
            });

            $('.register-btn').bind('click',function(e){

                self.setTabLogin(1);
                return false;
            });
            $('.forget-password-btn').bind('click', function (e) {

                self.setTabLogin(2);
                return false;
            });

            $('.quxiao-btn').bind('click',function(e){
                self.setNoneLogin();
                return false;
            });

            $(window).resize(self.onResize);
            $(window).scroll( self.onScroll );
            self.onResize();
        };

        self.onTimersEvent = function(){
            _currentId++;
            if(_currentId >= _len){
                _currentId = 0;
            }
            self.setTab();
        };

        self.setTab = function(){

            for(var i = 0 ; i < _len ; i++){
                if(i == _currentId){
                    _banner.eq(i).animate({opacity:1});
                }else{
                    _banner.eq(i).animate({opacity:0});
                }
            }
        };

        self.onResize = function(){
            self.onResizeView();

        };

        self.onScroll = function(){
            self.onResizeView();
        };

        self.onResizeView = function(){

            var width = document.documentElement.clientWidth;
            var height = document.documentElement.clientHeight;
            var top = $(document).scrollTop();
            $('#popupBg').css({
                width:width,
                height:height,
                top:top
            });
            $('#popupBody').css({
                top:top + (height-$('#popupBody').height() ) * 0.5,
                left:( width - $('#popupBody').width() ) * 0.5
            });


        };

        self.setTabLogin = function(type_){
            if(type_ == 0){

                $('#popLoginMain').css({display:'block'});
                $('#popRegisterMain').css({ display: 'none' });
                $('#popForgetMain').css({ display: 'none' });

            }else if(type_ == 1){
                $('#popLoginMain').css({display:'none'});
                $('#popRegisterMain').css({ display: 'block' });
                $('#popForgetMain').css({ display: 'none' });
            } else if (type_ == 2) {
                $('#popLoginMain').css({ display: 'none' });
                $('#popRegisterMain').css({ display: 'none' });
                $('#popForgetMain').css({ display: 'block' });
            }

            $('#popupBg').css({display:'block'});
            $('#popupBody').css({display:'block'});
        };

        self.setNoneLogin = function(){

            $('#popupBg').css({display:'none'});
            $('#popupBody').css({display:'none'});

        };


    };


    var _ins;
    var static = {
        getInstance:function(){
            if(_ins == null) _ins = new PublicScene();
            return _ins;
        }
    };
    return static;
})();

var ResourcesScene = (function(){
    function ResourcesScene()
    {
        var self = this;
        var mySwiper;
        self.init = function(){
            $('#resourcesList > li').bind('mouseover',function(e){
                $(this).find('.head').find('.img-main').stop().animate({top:0});
//                console.log(111);
            });
            $('#resourcesList > li').bind('mouseout',function(e){
                $(this).find('.head').find('.img-main').stop().animate({top:200});
//                console.log(222);
            });

            mySwiper = new Swiper('.swiper-container',{
                pagination: '.pagination',
                loop:true,
                grabCursor: true,
                paginationClickable: true,
                autoplay:3000
            });


        };


    };


    var _ins;
    var static = {
        getInstance:function(){
            if(_ins == null) _ins = new ResourcesScene();
            return _ins;
        }
    };
    return static;
})();

var MapStage = (function(){


    function MapStage()
    {
        var self = this;

        self.init = function(){

            $('.map-main').bind('mouseover',function(e){
                $(this).stop().animate({opacity:1});
            });
            $('.map-main').bind('mouseout',function(e){
                $(this).stop().animate({opacity:0});
            });

            $('.map-main').bind('mouseover',function(e){


                var ncname = $(this).attr('data-cnname');
                var nums = $(this).attr('data-nums');
                var link = $(this).attr('data-link');
                $('#mapDisBody').find('.h3').html(ncname);
                $('#mapDisBody').find('.con').html('<a>此地区包含 '+nums+' 个案例</a>');

                $('#mapDisBody').animate({opacity:1});

            });
            $('.map-main').bind('click', function (e) {

                var link = $(this).attr('data-link');
                window.open(link);

            });

            $('#closeBtn').bind('click',function(e){
                $('#mapDisBody').animate({opacity:0});
            });


        };

    };

    var _ins;
    var static = {
        getInstance:function(){
            if(_ins == null) _ins = new MapStage();
            return _ins;
        }
    };
    return static;
})();
var app = {
            currentId:0,
            total:3,
            totalWidth: 0,
            widArr:[],
            timer:null,
            init: function(){

                

                // console.log(this);
                $('.tab-body > span').bind('mouseover',{self:this},app.onTabBodyEvent);
                app.initView();
                

                

            },

            initView:function(){

                clearInterval(app.timer);
                app.widArr = [];
                app.totalWidth = 0;

                var $ctn = $('.ctn'+app.currentId);

                for(var i = 0; i < $ctn.children().length; i++){
                    
                    var _num = parseInt(Math.random()*10+1);
                    // $ctn.children().eq(i).html( i + '---id::' + app.currentId );

                    // if(_num < 4 && _num > 0){
                    //     $ctn.children().eq(i).addClass('ran1');
                    // }else if(_num >= 4 && _num < 8){
                    //     $ctn.children().eq(i).addClass('ran2');
                    // }else if(_num >=8 && _num <= 10){
                    //     $ctn.children().eq(i).addClass('ran3');
                    // }

                    app.widArr[i] = parseInt($ctn.children().eq(i).width()+20);

                    if(i == 0){
                        $ctn.children().eq(i).css({left: '0'});
                    }else{
                        var _left = null;

                        for(var j = 0; j < i; j++){
                            _left += app.widArr[j];
                        }

                        $ctn.children().eq(i).css({left: _left+'px'});

                    }
                }

                // console.log(app.widArr);


                app._width();
                app.amt();

            },

            amt:function(){

                var $ctn = $('.ctn'+app.currentId);
                app.timer = setInterval(function(){

                    for(var i = 0; i < $ctn.children().length; i++){

                        $ctn.children().eq(i).css({left : '-=2px'});
                        if(parseInt($ctn.children().eq(i).css('left')) < -1 * $ctn.children().eq(i).width())
                        {
                            $ctn.children().eq(i).css('left',app.totalWidth-app.widArr[i]+20+'px');
                        }

                    }

                },30);

            },

            _width: function(){

                for(var i = 0; i < app.widArr.length; i++){
                    app.totalWidth += app.widArr[i];
                }

            },

            onTabBodyEvent:function(e){

                var index = $('.tab-body > span').index(this);
                if(index == app.currentId) return;
                app.currentId = index;
                app.onTabMain();
                
                // console.log(this,$(this),e.data.self);
            },

            onTabMain:function(){

                app.initView();

                for(var i = 0 ; i < $('.tab-body > span').length ; i++){

                    if(app.currentId == i){

                        $('.tab-body > span').eq(i).attr('class','current');
                        $('.ctn').eq(i).css({display:'block'});

                    }else{

                        $('.tab-body > span').eq(i).attr('class','');
                        $('.ctn').eq(i).css({display:'none'});
                    }
                    

                }

            }

        };

$(function(){

    switch($('body').attr('class')){

        case 'body3':{

            if($('body').attr('id') == 'body3_1'){
                ResourcesScene.getInstance().init();
            }
            break;
        }
        case 'body4':{
            if($('body').attr('id') == 'body4_1'){
                MapStage.getInstance().init();
            }
            break;
        }
    }

    PublicScene.getInstance().init();
    app.init();
});
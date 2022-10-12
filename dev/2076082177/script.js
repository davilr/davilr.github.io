window.lavaAnimation=function(){"use strict";var t,i={screen:{elem:null,callback:null,ctx:null,width:0,height:0,left:0,top:0,init:function(t,i,s){return this.elem=document.getElementById(t),this.callback=i||null,"CANVAS"==this.elem.tagName&&(this.ctx=this.elem.getContext("2d")),window.addEventListener("resize",function(){this.resize()}.bind(this),!1),this.elem.onselectstart=function(){return!1},this.elem.ondrag=function(){return!1},s&&this.resize(),this},resize:function(){var t=this.elem;for(this.width=t.offsetWidth,this.height=t.offsetHeight,this.left=0,this.top=0;null!=t;t=t.offsetParent)this.left+=t.offsetLeft,this.top+=t.offsetTop;this.ctx&&(this.elem.width=this.width,this.elem.height=this.height),this.callback&&this.callback()}}},s=function(t,i){this.x=t,this.y=i,this.magnitude=t*t+i*i,this.computed=0,this.force=0};s.prototype.add=function(t){return new s(this.x+t.x,this.y+t.y)};var h=function(t){var i=.1,h=1.5;this.vel=new s((Math.random()>.5?1:-1)*(.2+.25*Math.random()),(Math.random()>.5?1:-1)*(.2+Math.random())),this.pos=new s(.2*t.width+Math.random()*t.width*.6,.2*t.height+Math.random()*t.height*.6),this.size=t.wh/15+(Math.random()*(h-i)+i)*(t.wh/15),this.width=t.width,this.height=t.height};h.prototype.move=function(){this.pos.x>=this.width-this.size?(this.vel.x>0&&(this.vel.x=-this.vel.x),this.pos.x=this.width-this.size):this.pos.x<=this.size&&(this.vel.x<0&&(this.vel.x=-this.vel.x),this.pos.x=this.size),this.pos.y>=this.height-this.size?(this.vel.y>0&&(this.vel.y=-this.vel.y),this.pos.y=this.height-this.size):this.pos.y<=this.size&&(this.vel.y<0&&(this.vel.y=-this.vel.y),this.pos.y=this.size),this.pos=this.pos.add(this.vel)};var e=function(t,i,e,n,a){this.step=5,this.width=t,this.height=i,this.wh=Math.min(t,i),this.sx=Math.floor(this.width/this.step),this.sy=Math.floor(this.height/this.step),this.paint=!1,this.metaFill=r(t,i,t,n,a),this.plx=[0,0,1,0,1,1,1,1,1,1,0,1,0,0,0,0],this.ply=[0,0,0,0,0,0,1,0,0,1,1,1,0,1,0,1],this.mscases=[0,3,0,3,1,3,0,3,2,2,0,2,1,1,0],this.ix=[1,0,-1,0,0,1,0,-1,-1,0,1,0,0,1,1,0,0,0,1,1],this.grid=[],this.balls=[],this.iter=0,this.sign=1;for(var o=0;o<(this.sx+2)*(this.sy+2);o++)this.grid[o]=new s(o%(this.sx+2)*this.step,Math.floor(o/(this.sx+2))*this.step);for(var l=0;e>l;l++)this.balls[l]=new h(this)};e.prototype.computeForce=function(t,i,s){var h,e=s||t+i*(this.sx+2);if(0===t||0===i||t===this.sx||i===this.sy)h=.6*this.sign;else{h=0;for(var r,n=this.grid[e],a=0;r=this.balls[a++];)h+=r.size*r.size/(-2*n.x*r.pos.x-2*n.y*r.pos.y+r.pos.magnitude+n.magnitude);h*=this.sign}return this.grid[e].force=h,h},e.prototype.marchingSquares=function(t){var i=t[0],s=t[1],h=t[2],e=i+s*(this.sx+2);if(this.grid[e].computed===this.iter)return!1;for(var r,n=0,a=0;4>a;a++){var l=i+this.ix[a+12]+(s+this.ix[a+16])*(this.sx+2),d=this.grid[l].force;(d>0&&this.sign<0||0>d&&this.sign>0||!d)&&(d=this.computeForce(i+this.ix[a+12],s+this.ix[a+16],l)),Math.abs(d)>1&&(n+=Math.pow(2,a))}if(15===n)return[i,s-1,!1];5===n?r=2===h?3:1:10===n?r=3===h?0:2:(r=this.mscases[n],this.grid[e].computed=this.iter);var p=this.step/(Math.abs(Math.abs(this.grid[i+this.plx[4*r+2]+(s+this.ply[4*r+2])*(this.sx+2)].force)-1)/Math.abs(Math.abs(this.grid[i+this.plx[4*r+3]+(s+this.ply[4*r+3])*(this.sx+2)].force)-1)+1);return o.lineTo(this.grid[i+this.plx[4*r]+(s+this.ply[4*r])*(this.sx+2)].x+this.ix[r]*p,this.grid[i+this.plx[4*r+1]+(s+this.ply[4*r+1])*(this.sx+2)].y+this.ix[r+4]*p),this.paint=!0,[i+this.ix[r+4],s+this.ix[r+8],r]},e.prototype.renderMetaballs=function(){for(var t,i=0;t=this.balls[i++];)t.move();for(this.iter++,this.sign=-this.sign,this.paint=!1,o.fillStyle=this.metaFill,o.beginPath(),i=0;t=this.balls[i++];){var s=[Math.round(t.pos.x/this.step),Math.round(t.pos.y/this.step),!1];do s=this.marchingSquares(s);while(s);this.paint&&(o.fill(),o.closePath(),o.beginPath(),this.paint=!1)}};var r=function(t,i,s,h,e){var r=o.createRadialGradient(t/1,i/1,0,t/1,i/1,s);return r.addColorStop(0,h),r.addColorStop(1,e),r};if(document.getElementById("lamp-anim")){var n=function(){requestAnimationFrame(n),o.clearRect(0,0,a.width,a.height),t.renderMetaballs()},a=i.screen.init("lamp-anim",null,!0),o=a.ctx;a.resize(),t=new e(a.width,a.height,6,"#FF9298","#FCB54D")}return{run:n}}();


window.App = {};

App.device = (function() {
  return {
    touch: Modernizr.touchevents,
    wide: matchMedia("(min-width: 768px)").matches
  }
})();

App.Popup = function(popup) {
  var $html = $('html'),
    $docum = $(document),
    $popup = $('.js-'+popup),
    activeClass = 'is-opened-'+popup,
    hiddenClass = 'is-hidden',
    _this = this;
  this.open = function() {
    var d = $.Deferred();
    if (!_this.isAnimated) {
      _this.isAnimated = true;
      _this.isOpened = true;
      $html.addClass(activeClass);
      $popup[0].scrollTop = 1;
      if (!App.device.wide) {
        $popup.removeClass(hiddenClass);
      }
      if (_this.afterOpen) {
        setTimeout(function() {
          _this.afterOpen(d);
          d.done(function() {
            _this.isAnimated = false;
          })
        }, 10);
      } else { _this.isAnimated = false; }
      $docum.on('keydown.kdwn', function(ev) {
        if (ev.which === 27) {
          _this.close();
        }
      });
    }
  };
  this.isAnimated = false;
  this.isOpened = false;
  this.afterOpen = null;
  this.beforeClose = null;
  this.close = function() {
    var close = function() {
      $html.removeClass(activeClass);
      if (!App.device.wide) { $popup.addClass(hiddenClass); }
      $docum.off('.kdwn');
      _this.isOpened = false;
      _this.isAnimated = false;
    };
    if (!_this.isAnimated) {
      _this.isAnimated = true;
      if (_this.beforeClose) {
        var d = $.Deferred();
        _this.beforeClose(d);
        d.done(close);
      } else { close(); }
    }
  };
  if (!App.device.wide) {
    $popup.addClass(hiddenClass);
  }
  if (App.device.touch) {
    $popup.on('touchstart', function(ev) {
      var top = this.scrollTop,
        totalScroll = this.scrollHeight,
        elHeight = this.offsetHeight,
        currentScroll = top + elHeight;
      if (top === 0) {
        this.scrollTop = 1;
      } else if (currentScroll === totalScroll || currentScroll + 1 === totalScroll) {
        this.scrollTop = top - 1;
      }
    });
  }
};
App.menu = new App.Popup('menu');
App.filter = new App.Popup('filter');

App.Accordion = function(slider) {
  var _this = this,
      $slider = $(slider),
      $item = $slider.find('.item'),
      $info = $slider.find('.hidden-info'),
      activeClass = 'is-opened',
      speed = 150;
  this.open = function(i) {
    if (!this.isOpened(i)) {
      this.close();
      if (App.device.wide) {
        $item.eq(i).addClass(activeClass);
        $info.eq(i).fadeIn(speed);
      } else {
        $item.eq(i).addClass(activeClass).find('.hidden-info').slideDown(speed);
      }
    }
  };
  this.close = function(i) {
    if (App.device.wide) {
      $info.hide();
      $item.removeClass(activeClass);
    } else {
      $info.slideUp(speed).parent().removeClass(activeClass);
    }
  };
  this.isOpened = function(i) {
    var info = App.device.wide ? $info.eq(i) : $item.eq(i).find('.hidden-info');
    return info.is(':visible') ? true : false;
  };
  $item.on('click', function() {
    var i = $(this).index();
    App.device.wide ? _this.open(i) : _this.isOpened(i) ? _this.close(i) : _this.open(i);
  });
};

App.Loader = function(loader) {
  var _this = this,
    $loader = $(loader),
    $area = $loader.find('.loader__area'),
    areaHeight = $loader.height(),
    areaWidth = $loader.width(),
    delay = App.device.wide ? 400 : 500;
  this.stepTranslate = 0;
  this.steps = App.device.wide ? 4 : 3;
  this.step = 1;
  this.stepWidth = Math.floor(App.device.wide ? window.innerWidth / 13 : areaWidth / (this.steps - 1));
  this.deg = function() {
    var hyp = Math.sqrt(Math.pow(areaHeight, 2) + Math.pow(_this.stepWidth, 2));
    return 180 - 90 - Math.asin(areaHeight / hyp) * 180 / 3.14;
  };
  this.start = function() {
    if (_this.step < _this.steps) {
      var flag = (_this.step - 1) % 2;
      App.device.wide
        ? _this.stepTranslate += _this.stepWidth * (flag ? 4 : 2)
        : flag ? _this.stepTranslate += _this.stepWidth * 2 : null;
      var expr = 'skew(' + (flag ? -_this.deg() : _this.deg()) + 'deg) translate3d(' + _this.stepTranslate + 'px, 0, 0)';
      $area.css({
        transform: expr,
        '-webkit-transform': expr
      });
      _this.step++;
      setTimeout(_this.start, delay);
    } else if (_this.step === _this.steps) {
      // pre finish
      $area.addClass('is-finished').css('transform', '');
      _this.step++;
      setTimeout(_this.start, delay);
    } else {
      _this.hide().onEnd();
    }
  };
  this.hide = function() {
    $loader.addClass('is-hidden');
    return this;
  };
  this.onEnd = $.noop;
  this.reset = function() {
    _this.step = 1;
    _this.stepTranslate = 0;
    $area.removeClass('is-finished');
    $loader.removeClass('is-hidden');
    return this;
  };
};

App.loader = new App.Loader('.loader');
App.loader.start();
if (App.device.wide) {
  App.loader.onEnd = function() {
    if (document.getElementById('lamp-anim')) {
      lavaAnimation.run();
    }
    setTimeout(function() {
      $('.js-works-d-list').addClass('is-loaded');
    }, 150);
  };
}

App.parallax = (function() {
  return {
    timeout: null,
    slide1: {
      isInited: false,
      obj: null
    },
    slide2: {
      isInited: false,
      obj: null
    }
  }
})();


$(function() {
  var $window = $(window),
    $docum = $(document),
    $header = $('.header'),
    $headerTopBar = $('.header__top-bar'),
    $floatMenu = $('.menu-floating'),
    $menu = $('.js-menu');

  FastClick.attach(document.body);
  SVGInjector(document.querySelector('.svg-sprite'));

  var screenSliderSettings = {
    pagination: '.js-screen-slider-pagin',
    keyboardControl: true,
    simulateTouch: false,
    paginationClickable: true,
    paginationBulletRender: function(i, className) {
      return '<div class="'+className+' bullet"><svg class="icon"><use xlink:href="#oval"></use></svg></div>';
    }
  };
  if (App.device.touch) {
    new Swiper('.js-screen-slider', screenSliderSettings);
  } else {
    new Swiper('.js-screen-slider', $.extend({}, screenSliderSettings, {
      prevButton: '.js-screen-slider-btn-prev',
      nextButton: '.js-screen-slider-btn-next',
      onSlideChangeStart: function(swiper) {
        clearTimeout(App.parallax.timeout);
        if (App.parallax.slide1.obj && App.parallax.slide1.obj.enabled) {
          App.parallax.slide1.obj.disable();
        }
        if (App.parallax.slide2.obj && App.parallax.slide2.obj.enabled) {
          App.parallax.slide2.obj.disable();
        }
      },
      onTransitionEnd: function(swiper) {
        App.parallax.timeout = setTimeout(function() {
          switch (swiper.activeIndex) {
            case 1:
              if (!App.parallax.slide1.isInited) {
                App.parallax.slide1.obj = new Parallax(document.getElementById('main_slide_2'));
                App.parallax.slide1.isInited = true;
              } else { App.parallax.slide1.obj.enable(); }
              break;
            case 2:
              if (!App.parallax.slide2.isInited) {
                App.parallax.slide2.obj = new Parallax(document.getElementById('main_slide_3'));
                App.parallax.slide2.isInited = true;
              } else { App.parallax.slide2.obj.enable(); }
              break;
          }
        }, 750);
      }
    }));
  }

  // Menu
  (function() {
    if (App.device.wide) {
      var timeout;
      var $menuAnimBg = $menu.find('.menu__bg');
      var deg = function() {
        var screenWidth = window.innerWidth;
        var hyp = Math.sqrt(Math.pow(screenWidth, 2) + Math.pow(275, 2));
        return 180 - 90 - Math.asin(screenWidth / hyp) * 180 / 3.14;
      };

      App.menu.afterOpen = function(d) {
        $menuAnimBg.addClass('is-visible').css({
          '-webkit-transform': 'skewY(-'+deg()+'deg) translate3d(0, 500px, 0)',
          'transform': 'skewY(-'+deg()+'deg) translate3d(0, 500px, 0)'
        })
        timeout = setTimeout(function() {
          $menuAnimBg.addClass('is-full');
          $menu.addClass('is-animation-ended');
          d.resolve();
        }, 270);
        return d;
      };
      App.menu.beforeClose = function(d) {
        clearTimeout(timeout);
        $menu.removeClass('is-animation-ended');
        $menuAnimBg.removeClass('is-full').one('transitionend webkitTransitionEnd', function() {
          $menuAnimBg.css('transform', '').removeClass('is-visible').one('transitionend webkitTransitionEnd', d.resolve);
        });
        return d;
      };
    }

    $('.js-open-menu-btn').on('click', App.menu.open);
    $('.js-close-menu-btn').on('click', App.menu.close);
  })();

  var jobsAcc = new App.Accordion('.js-jobs-accordion');
  var agencyAcc = new App.Accordion('.js-agency-accordion');
  if (App.device.wide) {
    jobsAcc.open(0);
  }
  agencyAcc.open(0);

  $window.on('scroll', function() {
    $floatMenu.toggleClass('is-active', $window.scrollTop() >= window.innerHeight);
    $headerTopBar.toggleClass('is-fixed', $window.scrollTop() >= window.innerHeight);
  });
  $('.js-btn-go-to-top').on('click', function() {
    $('html, body').animate({
      scrollTop: 0
    }, 200);
  });

  $header.find('.nav').clone(true).prependTo('.js-filter-content');
  $('.js-filter-close').on('click', App.filter.close);
  $('.js-filter-open').on('click', App.filter.open);
	
	
  $('.gmCookiesInfoBox button').click(function(ev){
		Cookies.set('eljeGoogleMap', 'accepted');
		initMap();
		$('.gmCookiesInfoBackground').addClass('gmAccepted');
	});
	if(Cookies.get('eljeGoogleMap')=='accepted'){
		initMap();
	}
  

  /*
  $('.js-open-map').on('click', function() {
    $(this).closest('.js-contact-city').find('.map-container').addClass('is-visible');
  });
  $('.js-close-map').on('click', function() {
    $(this).closest('.js-contact-city').find('.map-container').removeClass('is-visible');
  });
  */
  
  $('.filter-d.category a').click(function(ev){
	ev.preventDefault();
	var currentClass = $(this).attr('data-filter');
	if(!$(this).hasClass('underline')){
		$('.filter-d a.underline').removeClass('underline');
		$(this).addClass('underline');
	}
	if($(this).hasClass('All')){
		$('.works-d__item').fadeIn();
	}else{
		$('.works-d__item.'+currentClass).fadeIn();
		$('.works-d__item').not('.'+currentClass).fadeOut();
	}
  }); 
  
  $('.filterNav').click(function(ev){
	ev.preventDefault();
	if(!$(this).hasClass('active')){
		$('.filterNav.active').removeClass('active');
		var filterClass = $(this).attr('data-filter');
		if(filterClass=='All'){
			$('.works__item').slideDown(150);
		}else{
			$('.works__item.'+filterClass).slideDown();
			$('.works__item').not('.'+filterClass).slideUp(150);
			$(this).addClass('active');
		}
	}else{
		$('.filterNav.active').removeClass('active');
		$('.works__item').slideDown(150);
	}
	$('html, body').animate({
		scrollTop: $('#works').offset().top
	}, 200);
  });

  if($('#worksPage').length){
	if (location.href.indexOf("#") > -1) {                                     
	  var filterHref = location.href;                      
	  filterHref = filterHref.substr(filterHref.indexOf("#")+1);
	  if(filterHref.indexOf('-') > 0){
		if(filterHref.indexOf('Brand') < 0){
			$('.works__item.Brand').not('.Digital').not('.Product').slideUp(150);
		}else if(filterHref.indexOf('Digital') < 0){
			$('.works__item.Digital').not('.Brand').not('.Product').slideUp(150);
		}else{
			$('.works__item.Product').not('.Brand').not('.Digital').slideUp(150);
		}
	  }else{
		filterHref = 'Brand';
		$('.works__item').not('.'+filterHref).slideUp(150);
		$('.filterNav[data-filter="'+filterHref+'"]').addClass('active');
	  }
	  $('html, body').animate({
		scrollTop: $('#works').offset().top
	}, 200);
	}
  }  
  
  $('.openAachen').click(function(){
	$('.gmBoxContact').eq(0).addClass('opened');  
  });
  $('.openMoscow').click(function(){
	$('.gmBoxContact').eq(1).addClass('opened');  
  });
  
  $('.gmBoxContact .js-close-map').click(function(){
	$(this).parent().removeClass('opened');  
  });
  
  $(window).bind('keydown', function(event) {
	if(event.keyCode === 27) {
		$('.gmBoxContact').removeClass('opened'); 
	}
  });
  
  $('.mapInfo').on('click', function() {
    $(this).next().toggleClass('opened');
	var scrollTo = 0;
	if($('#contactPage').length){
		var scrollParam = $(window).height() - $(window).width();
		scrollTo = $(this).next().offset().top - scrollParam;
	}else{
		scrollTo = $(this).find('h4').offset().top - 106;
	}
	$('html, body').animate({
		scrollTop: scrollTo
	}, 200);
  });

  $('.jobs-accordion a').click(function(ev){
	ev.stopImmediatePropagation();
  });
  
  if($('body').hasClass('pageId3') && !$('body').hasClass('mobile')){
		var imagesToPreload = [];
		$('.previewItem').each(function() {
			elementToTest = $(this);
			imagePath = elementToTest.attr('data-src');
			imagesToPreload.push(imagePath);
		});
	
		$.imgpreload(imagesToPreload,{
			each: function(){
				var imgPath = this.src;
				//var backgroundPath = imgPath.replace("http://elje-group.com",".");
				var elementToChange = $('.previewItem[data-src="'+imgPath+'"]');
				elementToChange.addClass('is-loaded');
			},	
			all: function(){
			}
		});

	}
});
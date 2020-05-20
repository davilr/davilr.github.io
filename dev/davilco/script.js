var lFollowX = 0,
    lFollowY = 0,
    x = 0,
    y = 0,
    friction = 1 / 30,
	lFollowX2 = 0,
    lFollowY2 = 0,
    x2 = 0,
    y2 = 0,
    friction2 = 1 / 40,
	lFollowX3 = 0,
    lFollowY3 = 0,
    x3 = 0,
    y3 = 0,
    friction3 = 1 / 50,
	lFollowX4 = 0,
    lFollowY4 = 0,
    x4 = 0,
    y4 = 0,
    friction4 = 1 / 50,
	lFollowX5 = 0,
    lFollowY5 = 0,
    x5 = 0,
    y5 = 0,
    friction5 = 1 / 50,
	lFollowX6 = 0,
    lFollowY6 = 0,
    x6 = 0,
    y6 = 0,
    friction6 = 1 / 50,
	lFollowX7 = 0,
    lFollowY7 = 0,
    x7 = 0,
    y7 = 0,
    friction7 = 1 / 50;

function moveBackground() {
  x += (lFollowX - x) * friction;
  y += (lFollowY - y) * friction;
  x2 += (lFollowX2 - x2) * friction2;
  y2 += (lFollowY2 - y2) * friction2;
  x3 += (lFollowX3 - x3) * friction3;
  y3 += (lFollowY3 - y3) * friction3;
  x4 += (lFollowX4 - x4) * friction4;
  y4 += (lFollowY4 - y4) * friction4;
  x5 += (lFollowX5 - x5) * friction5;
  y5 += (lFollowY5 - y5) * friction5;
  x6 += (lFollowX6 - x6) * friction6;
  y6 += (lFollowY6 - y6) * friction6;
  x7 += (lFollowX7 - x7) * friction7;
  y7 += (lFollowY7 - y7) * friction7;
  
  translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.3)';
  translate2 = 'translate(' + x2 + 'px, ' + y2 + 'px) scale(1.3)';
  translate3 = 'translate(' + x3 + 'px, ' + y3 + 'px) scale(1.3)';
  translate4 = 'translate(' + x4 + 'px, ' + y4 + 'px) scale(1.3)';
  translate5 = 'translate(' + x5 + 'px, ' + y5 + 'px) scale(1.3)';
  translate6 = 'translate(' + x6 + 'px, ' + y6 + 'px) scale(1.3)';
  translate7 = 'translate(' + x7 + 'px, ' + y7 + 'px) scale(1.3)';

  $('.bg').css({
    '-webit-transform': translate,
    '-moz-transform': translate,
    'transform': translate
  });
  $('.bg2').css({
    '-webit-transform': translate2,
    '-moz-transform': translate2,
    'transform': translate2
  });
  $('.bg3').css({
    '-webit-transform': translate3,
    '-moz-transform': translate3,
    'transform': translate3
  });
  $('.bg4').css({
    '-webit-transform': translate4,
    '-moz-transform': translate4,
    'transform': translate4
  });
  $('.bg5').css({
    '-webit-transform': translate5,
    '-moz-transform': translate5,
    'transform': translate5
  });
  $('.bg6').css({
    '-webit-transform': translate6,
    '-moz-transform': translate6,
    'transform': translate6
  });
  $('.bg7').css({
    '-webit-transform': translate7,
    '-moz-transform': translate7,
    'transform': translate7
  });

  window.requestAnimationFrame(moveBackground);
}

$(window).on('mousemove click', function(e) {

  var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
  var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
  lFollowX = (20 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
  lFollowY = (10 * lMouseY) / 100;
  lFollowX2 = (40 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
  lFollowY2 = (20 * lMouseY) / 100;
  lFollowX3 = (60 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
  lFollowY3 = (30 * lMouseY) / 100;
  lFollowX4 = (70 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
  lFollowY4 = (35 * lMouseY) / 100;
  lFollowX5 = (65 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
  lFollowY5 = (32 * lMouseY) / 100;
  lFollowX6 = (75 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
  lFollowY6 = (38 * lMouseY) / 100;
  lFollowX7 = (70 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
  lFollowY7 = (35 * lMouseY) / 100;

});

moveBackground();
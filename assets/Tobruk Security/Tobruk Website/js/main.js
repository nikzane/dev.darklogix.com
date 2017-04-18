$().ready(function(){

  $(window).scroll(function () { 
         var b = $(window).scrollTop(); // <-- You've scrolled this (b) much
         debug(b); // <-- See?
         if(b >= 0 && b <= 1598) // <-- 'HOME' Section
         	{
           		$('.navbutton').removeClass('nav-active');
           		$('#navhome').addClass('nav-active')
          		debug('home');
         	}
         else if(b >= 1599 && b <= 2399) // <-- 'ABOUT' Section
         	{
           		$('.navbutton').removeClass('nav-active');
           		$('#navabout').addClass('nav-active')
              debug('about');
         	}
         	else if(b >= 2400 && b <= 2878)  // <-- 'SERVICES' Section
         		{
           		$('.navbutton').removeClass('nav-active');
           		$('#navservices').addClass('nav-active')
         			debug('services');
         		}
         	else if(b >= 2879 && b <= 3000)
         		{
           		$('.navbutton').removeClass('nav-active');
           		$('#navpuzzle').addClass('nav-active')
         			debug('puzzle');
         		}
         	else if(b >= 3001)
         		{
           		$('.navbutton').removeClass('nav-active');
           		$('#navcontact').addClass('nav-active')
         			debug('contact');
         		}
         debug(b);         		
  });

  $('#accordion').accordion();

  sectionposArray = new Array();

  run();

  function run() {
    var d = new Date();
    var y = d.getFullYear();
    $('#copyright-year').text(y);
//     navResonder($('#navhome'));
    getSections();
    
//     snapfit.defaultMixed = true;
  }

  $(document).on('scroll', function() {
  	var x = $(window).scrollTop();
  	
  	$.each(sectionposArray, function(i, val) {
  		var sec = sectionposArray[i];
  		var id = sec[0].replace('section-', '');
  		var pos = sec[1] - 100;
  		var h = sec[2];
  		if(x >= pos && x <= (pos + h)) {
  		  var obj = $('#' + id);
//   		  moveNavMarker(obj);
        //console.log(obj);
  		}
  	});
  });

  $('.home-security').mouseover(function()
  	{
  		$(this).fadeIn();
  	});

  function getSections() {
    var sections = new Array($('section'));
    
    $.each(sections[0], function(i, val) {
      var sectionid = val.id;
      var sectionpos = $('#' + sectionid).offset().top;
      var sectionheight = $('#' + sectionid).outerHeight();
      var sectiondata = new Array(sectionid, sectionpos, sectionheight);

      sectionposArray.push(sectiondata);
      
    	console.log(sectionpos);
    });

    console.log(sectionposArray);
  }

  $('.navbutton').on('click', function() {
    navResonder($(this));
  });

  function navResonder(obj) {
  	var id = obj.attr('id');
  	var sec = 'section-' + id;
  	var s = $(window).scrollTop();
  	var scrollto = $('#' + sec).offset().top - 145;
  	$('.navbutton').removeClass('nav-active');
  	obj.addClass('nav-active');
  	$('html,body').animate({scrollTop: scrollto}, 400, 'easeOutCubic');
//   	moveNavMarker(obj);
  }

  function getNavPos(obj) {
  	var pos = obj.position();
  	var x = pos.left;
  	var w = obj.outerWidth();
  	var newpos = x + (w / 2) - 15;
  	return newpos;
  }

  function moveNavMarker(obj) {
    var newpos = getNavPos(obj);
    $('#navmarker').stop().transition({left: newpos + 'px'}, 400, 'easeOutCubic');
  }
  function moveNavMarkerGhost(obj) {
    var newpos = getNavPos(obj);
    $('#navmarker-ghost').stop().transition({left: newpos + 'px'}, 400, 'easeOutCubic');
  }

  function responsiveBG() {
    $(window).resize(function() {
      setLogoPos();
      setContainerSize();
      setBackgroundSize();
    });
  }


  function setBackgroundSize() {
    var dims = new BodyDims();
		var w = dims.w;
		var h = dims.h;
		$layers = $('#background, #stars01, #stars02, #stars03');
		if((w/h) <= 1.6)
			{
        $layers.css({backgroundSize:'auto 100%'});
			}
    else
      {
        $layers.css({backgroundSize:'100% auto'});
      }
  }

  function BodyDims() {
    curPosX = '';
    curPosY = '';
    $('body').mousemove(function(e) {
      curPosX = e.pageX;
      curPosY = e.pageY;
    });
    return {
      w: $('body').outerWidth(),
      h: $('body').outerHeight()
    };
  }

  function debug(arg) {
    $('#debug').text(arg).fadeIn();
  }

$('img.puzzle').snapPuzzle({ rows: 4, columns: 3 });

$('#frontsplash').vegas({
    transitionDuration: 1000,
    timer: false,
    slides: [
        { src: "/img/splash01.jpg" },
        { src: "/img/splash02.jpg" },
        { src: "/img/splash03.jpg" }
    ],
    transition: 'swirlLeft2'
});







});
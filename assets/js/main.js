$().ready(function(){

  run();
  
  function run() {
    responsiveBG();
    setCopyrightYear();
    setBackgroundSize();
    $('#logo-main').delay(200).css({opacity:0}).transit({opacity:1},1000, 'easeOutQuad');
    $('#main-content').delay(600).css({opacity:0}).transit({opacity:1},1000, 'easeOutQuad');
    $('footer').delay(700).css({bottom:'-50px', opacity:0}).transit({bottom:'10px', opacity:1},1000, 'easeOutQuad');
  }

  function responsiveBG() {
    $(window).resize(function() {
      setBackgroundSize();
    });
  }

  function setBackgroundSize() {
    var dims = new BodyDims();
		var w = dims.w;
		var h = dims.h;
		var ar = 1.7777777778; // Aspect Ratio = W/H of image being used
		$layers = $('body');
		
		if((w/h) <= ar)
			{
        $layers.css({backgroundSize:'auto 100%'});
			}
    else
      {
        $layers.css({backgroundSize:'100% auto'});
      }
  }

  function BodyDims() {
    return {
      w: $('body').outerWidth(),
      h: $('body').outerHeight()
    };
  }

  $('#debug').on('click', function() {
    $(this).fadeOut();
  })

  function setCopyrightYear() {
    var d = new Date();
    var y = d.getFullYear();
    $('#copyrightyear').text(y);
  }

  function debug(arg) {
    $('#debug').html(arg).fadeIn();
  }

});



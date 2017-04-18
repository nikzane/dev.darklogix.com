<!DOCTYPE html><html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery snapPuzzle Plugin</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300">
    <link rel="stylesheet" href="https://cdn.rawgit.com/yahoo/pure-release/v0.6.0/pure-min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/yahoo/pure-release/v0.6.0/grids-responsive-min.css">
    <!--[if lt IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
    <style>
        /* required snapPuzzle styles */
        .snappuzzle-wrap { position: relative; display: block; }
        .snappuzzle-pile { position: relative; }
        .snappuzzle-piece { cursor: move; }
        .snappuzzle-slot { position: absolute; background: #fff; opacity: .8; }
        .snappuzzle-slot-hover { background: #eee; }
    </style>
</head>
<body>
    <div id="puzzle-containment" style="border-top: 1px solid #eee;border-bottom:1px solid #eee;background:#fafafa;margin:30px 0;padding:10px;text-align:center">
        <div class="pure-g" style="max-width:1280px;margin:auto">
            <div class="pure-u-1 pure-u-md-1-2"><div style="margin:10px">
                <img id="source_image" class="pure-img" src="image.jpg">
            </div></div>
            <div class="pure-u-1 pure-u-md-1-2">
                <div id="pile" style="margin:10px">
                    <div id="puzzle_solved" style="display:none;text-align:center;position:relative;top:25%">
                        <h2 style="margin:0 0 20px">Well done!</h2>
                        <a class="pure-button button-lg restart-puzzle" data-grid="3">Restart Puzzle</a>
                        <br><br>
                        <a href="#" class="restart-puzzle" data-grid="5">5x5</a>
                        &nbsp; <a href="#" class="restart-puzzle" data-grid="7">7x7</a>
                        &nbsp; <a href="#" class="restart-puzzle" data-grid="10">10x10</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="jquery.snap-puzzle.js"></script>
    <script>
        // jQuery UI Touch Punch 0.2.3 - must load after jQuery UI
        // enables touch support for jQuery UI
        !function(a){function f(a,b){if(!(a.originalEvent.touches.length>1)){a.preventDefault();var c=a.originalEvent.changedTouches[0],d=document.createEvent("MouseEvents");d.initMouseEvent(b,!0,!0,window,1,c.screenX,c.screenY,c.clientX,c.clientY,!1,!1,!1,!1,0,null),a.target.dispatchEvent(d)}}if(a.support.touch="ontouchend"in document,a.support.touch){var e,b=a.ui.mouse.prototype,c=b._mouseInit,d=b._mouseDestroy;b._touchStart=function(a){var b=this;!e&&b._mouseCapture(a.originalEvent.changedTouches[0])&&(e=!0,b._touchMoved=!1,f(a,"mouseover"),f(a,"mousemove"),f(a,"mousedown"))},b._touchMove=function(a){e&&(this._touchMoved=!0,f(a,"mousemove"))},b._touchEnd=function(a){e&&(f(a,"mouseup"),f(a,"mouseout"),this._touchMoved||f(a,"click"),e=!1)},b._mouseInit=function(){var b=this;b.element.bind({touchstart:a.proxy(b,"_touchStart"),touchmove:a.proxy(b,"_touchMove"),touchend:a.proxy(b,"_touchEnd")}),c.call(b)},b._mouseDestroy=function(){var b=this;b.element.unbind({touchstart:a.proxy(b,"_touchStart"),touchmove:a.proxy(b,"_touchMove"),touchend:a.proxy(b,"_touchEnd")}),d.call(b)}}}(jQuery);

        function start_puzzle(x){
            $('#puzzle_solved').hide();
            $('#source_image').snapPuzzle({
                rows: x, columns: x,
                pile: '#pile',
                containment: '#puzzle-containment',
                onComplete: function(){
                    $('#source_image').fadeOut(150).fadeIn();
                    $('#puzzle_solved').show();
                }
            });
        }

        $(function(){
            $('#pile').height($('#source_image').height());
            start_puzzle(3);

            $('.restart-puzzle').click(function(){
                $('#source_image').snapPuzzle('destroy');
                start_puzzle($(this).data('grid'));
            });

            $(window).resize(function(){
                $('#pile').height($('#source_image').height());
                $('#source_image').snapPuzzle('refresh');
            });
        });


        if (~window.location.href.indexOf('http')) {
            (function() {var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;po.src = 'https://apis.google.com/js/plusone.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);})();
            (function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];if (d.getElementById(id)) return;js = d.createElement(s); js.id = id;js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=114593902037957";fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));
            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
            $('#github_social').html('\
                <iframe style="float:left;margin-right:15px" src="//ghbtns.com/github-btn.html?user=Pixabay&repo=jQuery-snapPuzzle&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="110" height="20"></iframe>\
                <iframe style="float:left;margin-right:15px" src="//ghbtns.com/github-btn.html?user=Pixabay&repo=jQuery-snapPuzzle&type=fork&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="110" height="20"></iframe>\
            ');
        }
    </script>
</body>
</html>

 
<html>
<head>
<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type"/>

<title>CarSlideShow</title>

<script type="text/javascript" src="Jequery/jquery-1.2.6.min.js"></script>

<script type="text/javascript">
function slideSwitch() {
    var $active = $('#slideshow IMG.active');

    if ( $active.length == 0 ) $active = $('#slideshow IMG:last');

        var $next =  $active.next().length ? $active.next()
        : $('#slideshow IMG:first');
     
    $active.addClass('last-active');

    $next.css({opacity: 0.0})
        .addClass('active')
        .animate({opacity: 1.0}, 1000, function() {
            $active.removeClass('active last-active');
        });
}

$(function() {
    setInterval( "slideSwitch()", 2000 );
});

</script>

<style type="text/css">

/*** set the width and height to match your images **/

#slideshow {
    position:relative;
    height:350px;
}

#slideshow IMG {
    position:absolute;
    top:0;
    left:0;
    z-index:8;
    opacity:0.0;
}

#slideshow IMG.active {
    z-index:10;
    opacity:1.0;
}

#slideshow IMG.last-active {
    z-index:9;
}

</style>

</head>

<body style="font-family: Arial, Sans-serif, sans;">
 <div id="slideshow" style=" position: absolute;
    height:50px;
    width: 50px;
    margin: auto;">
    <img  width ="200" height="200" src="Picture/image1.jpg" alt="Slideshow Image 1" class="active" />
    <img  width ="200" height="200"  src="Picture/image2.jpg" alt="Slideshow Image 2" />
    <img  width ="200" height="200" src="Picture/image3.jpg" alt="Slideshow Image 3" />
    <img  width ="200" height="200 src="Picture/image4.jpg" alt="Slideshow Image 4" />
</div>
</body>
</html>
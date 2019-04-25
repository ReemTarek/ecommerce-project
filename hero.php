 <?php
include_once 'Navs1.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="herostyle.css">

</head>
<body>
<div class="slide-wrap">
  <div class="slide-mask">
    <ul class="slide-group">
      <li class="slide"><img src="dd.png"><p style="background-color: rgba(0,0,0,0.3); padding: 13px 0;">welcome to fleurelle where everything is in flower</p></li>
      <li class="slide"><img src="dd1.png"><p style="background-color: rgba(0,0,0,0.3); padding: 13px 0;">discover what is new in out products</p></li>      
      <li class="slide"><img src="Flower_thingy.png" style="height: 450px"><p style="background-color: rgba(0,0,0,0.3); padding: 13px 0;">we like to express our selves with flowers</p></li>
    </ul>
  </div>
  
  <div class="slide-nav">
    <ul>
      <li class="bullet"></li>
      <li class="bullet"></li>
      <li class="bullet"></li>      
    </ul>
  </div>
</div>
	<script>
		var $slide = $('.slide'),
    $slideGroup = $('.slide-group'),
    $bullet = $('.bullet');

var slidesTotal = ($slide.length - 1),
    current = 0,
    isAutoSliding = true;

$bullet.first().addClass('current');

var clickSlide = function() {
  //stop auto sliding
  window.clearInterval(autoSlide);
  isAutoSliding = false;

  var slideIndex = $bullet.index($(this));

  updateIndex(slideIndex);
};

var updateIndex = function(currentSlide) {
  if(isAutoSliding) {
    if(current === slidesTotal) {
      current = 0;
    } else {
      current++;
    }
  } else {
      current = currentSlide;
  }

  $bullet.removeClass('current');
  $bullet.eq(current).addClass('current');

  transition(current);
};

var transition = function(slidePosition) {
    $slideGroup.animate({
      'top': '-' + slidePosition + '00%'
    });
};

$bullet.on( 'click', clickSlide);

var autoSlide = window.setInterval(updateIndex, 2000);
	</script>
</body>
</html>
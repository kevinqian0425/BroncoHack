$( "li" ).hover(
  function() {
      $(this).find("span").stop().animate({
      width:"100%",
      opacity:"1",
    }, 400, function () {
    })
  }, function() {
      $(this).find("span").stop().animate({
      width:"0%",
      opacity:"0",
    }, 400, function () {
    })
  }
);



var heart = false;
$('.lv').click(function() {
	if (!heart) {
		$(this).addClass('fa-heart').removeClass('fa-heart-o');
		heart = true;
	}
  else {
		$(this).removeClass('fa-heart').addClass('fa-heart-o');
		heart = false;
	});


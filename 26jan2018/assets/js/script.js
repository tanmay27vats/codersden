$(document).ready(function() {
	//mobile-menu
	$('.mobile-nav-button').click(function(){
		$('.overlay-menu, .mobile-nav-popup').fadeIn();
		$('body').css({overflow:'hidden',height:'100%'});
	});
	$('.overlay-menu').click(function(){
		$('.overlay-menu, .mobile-nav-popup').fadeOut();
		$('body').css({overflow:'auto',height:'auto'});
	});
	//dialog-box event
	$('#view_more').click(function(){
		$('.overlay, .dialog-box').fadeIn();
		$('body').css({overflow:'hidden',height:'100%'});
	});
	$('#cancel').click(function(){
		$('.overlay, .dialog-box').fadeOut();
		$('body').css({overflow:'auto',height:'auto'});
	});
		var offset = 200;
		var duration = 500;
		jQuery(window).scroll(function() {
			if (jQuery(this).scrollTop() > offset) {
					jQuery(".scroll_top").fadeIn(duration);
				} else {
					jQuery(".scroll_top").fadeOut(duration);
				}
		});
		jQuery(".scroll_top").click(function(){
		var aTop=$(".brand").offset().top;
		jQuery("html,body").animate({scrollTop: aTop},500);
	});
	
});//jQuery


var countDownDate = new Date("Jan 26, 2018 00:00:00").getTime();
var x = setInterval(function() {
    var now = new Date().getTime();
    var distance = countDownDate - now;
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("timer").innerHTML = days + "<span>d</span> " + hours + "<span>h</span> "
    + minutes + "<span>m</span> " + seconds + "<span>s</span> ";
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("timer").innerHTML = "EXPIRED";
    }
}, 1000);


	
$(function(){
    var slide = $('#slider ul').bxSlider({
        slideWidth  : 990,
        slideMargin : 90,
        controls    : true,
        auto        : true,
        minSlides   : 3,
        maxSlides   : 3,
        moveSlides  : 1,
        speed       : 1000,
        pause       : 5000,
        onSlideAfter: function(){
            slide.startAuto();
        }
    });
});

function acdMenu(){
	$("#acd-menu dd").css("display", "none");
	$("#acd-menu dt").click(function(){
		$(this).toggleClass("open").next().slideToggle("fast");
	});
}
 
$(function(){
	acdMenu();
});
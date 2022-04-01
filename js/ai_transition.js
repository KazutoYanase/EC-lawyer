$('a[href*="#"]').click(function() {
	var speed = 400,
			href = $(this).prop("href"),
			hrefPageUrl = href.split("#")[0],
			currentUrl = location.href,
			currentUrl = currentUrl.split("#")[0];
	if(hrefPageUrl == currentUrl){
		href = href.split("#");
		href = href.pop();
		href = "#" + href;
	}
	var target = $(href == "#" || href == "" ? 'html' : href);
	var position = target.offset().top - $('.g-header').height();
	$("html, body").animate({scrollTop:position}, 400, "swing");
});

var adjustFlowLine = function(){
	var flowLineHeight = $('.ai-translation__sec04__list').outerHeight() - $('.ai-translation__sec04__item').eq(2).outerHeight();
	$('.ai-translation__sec04__list>span').css({ 'height': flowLineHeight + 'px' });
}

$(window).on('load resize', function(){
	adjustFlowLine();
});
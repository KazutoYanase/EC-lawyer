
$('a[href*="#"]').click(function() {
	var w = $(window).width();
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
	if(w > 767) {
		var position = target.offset().top - $('.g-header').height() - $('.about-service__timeline').outerHeight(true);
	} else {
		var position = target.offset().top - $('.g-header').height() - 16;
	}
	$("html, body").animate({scrollTop:position}, 400, "swing");
});


/* 別ページからのアンカーの場合
------------------------------------------------------------*/

$('body,html').stop().scrollTop(0);

var url = $(location).attr('href');
var w = $(window).width();

if(url.indexOf("#") != -1){
	var anchor = url.split("#");
	var anchor_id = anchor[anchor.length - 1];
	var target = $('#' + anchor_id);
	if(target.length){
		if(w > 767) {
			var position = target.offset().top - $('.g-header').height() - $('.about-service__timeline').outerHeight(true);
		} else {
			var position = target.offset().top - $('.g-header').height() - 16;
		}
		$("html, body").animate({scrollTop:position}, 400, "swing");
	}
}
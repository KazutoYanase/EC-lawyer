 (function($){

 	//top-page fixed contents & navigation #profile
 	var	$win = $(window),
 	$winWidth = $win.width();
 	//var sideBnrPos = $('.side-floating__inner').offset().top,
 	headerH = $('.g-header').height();
 	var fixedClass = 'is-fixed';

 	//drawer ( use jquery plugin )
 	$('.drawer').drawer();

  //swiper
  if( $('.swiper-container').length ) {
  	var mySwiper = new Swiper('.swiper-container', {
  		spaceBetween: 2,
  		slidesPerView: 'auto',
  		freeMode: true,
  		navigation: {
  			nextEl: '.swiper-button-next',
  			prevEl: '.swiper-button-prev',
  		}
  	});
  }

  // prace table-header fixed
  if( $('table.price-table').length ) {
  	var $table = $('table.price-table');
  	$win.on('load resize', function(){
  		if($winWidth > 767) {
  			$table.floatThead({
  				top: 125,
  				zIndex: 400,
  				responsiveContainer: function($table){
  					return $table.closest('.price-table__wrap');
  				}
  			});
  		} else {
  			$table.floatThead({
  				top: 56,
  				zIndex: 400,
  				responsiveContainer: function($table){
  					return $table.closest('.price-table__wrap');
  				}
  			});
  		}
  	});
  }

/*
	//side fixed
	function sideFixed() {
		var winValue = $win.scrollTop();
		if((winValue + headerH + 25) > sideBnrPos) {
			$('.side-floating__inner').addClass(fixedClass);
		} else {
			$('.side-floating__inner').removeClass(fixedClass);
		}
	}
	$('.side-floating__close').on('click',function(){
		$('.side-floating').hide();
	});
*/

	function fixedContents() {
		$('.about-service__timeline').each(function(){
			var winValue = $win.scrollTop(),
			parentY = $(this).parent('.about-service__body').offset().top,
			parentH = $(this).parent('.about-service__body').height(),
			tgStyle =  {},
			fixedMargin = 0;

			if(winValue > parentY - (headerH)) {

				if(winValue > (parentY + parentH) - $(this).height() - fixedMargin - 220) {
					$(this).removeClass(fixedClass);
					tgStyle = {
						top: parentH - $(this).height() + fixedMargin - 94
					};
				} else {
					$(this).addClass(fixedClass);
					tgStyle = {
						top: headerH + fixedMargin
					}
				}

			} else {
				$(this).removeClass(fixedClass);
				tgStyle = {
					top: fixedMargin + 'px'
				}
			}

			$(this).css(tgStyle);

		});
	}

	function navProfile() {
		if($('.profile').length){
			profileY = $('.profile').offset().top,
			profileH = $('.profile__upper').eq(0).height() + $('.profile__upper').eq(1).height(),
			targetNav = $('.g-header__nav .profile-nav a')
			activeClass = 'active';

			var winValue = $win.scrollTop();
			var activeFlag = false;

			if(winValue > profileY - (headerH)) {
				if(winValue > (profileY + profileH)) {
					activeFlag = false;
				} else {
					activeFlag = true;
				}

			} else {
				activeFlag = false;
			}

			if(activeFlag == true) {
				targetNav.addClass(activeClass);
			} else {
				targetNav.removeClass(activeClass);
			}
		}
	}

	$win.on('load scroll', function(){
		fixedContents();
		navProfile();
		//sideFixed();
	});

	// anchor-link adjust
	var headerHeight = $('.g-header').outerHeight(),
	url = $(location).attr('href');
	if(url.indexOf("?id=") != -1){
		var id = url.split("?id=");
		var $target = $('#' + id[id.length - 1]);
		if($target.length){
			var pos = $target.offset().top - headerHeight;
			$("html, body").animate({scrollTop:pos}, 400);
		}
	}

	// top title animation
	if($('#rev-1').length) {
		var rev1 = new RevealFx(document.querySelector('#rev-1'), {
			revealSettings : {
				bgcolor: '#ff931e',
				onCover: function(contentEl, revealerEl) {
					contentEl.style.opacity = 1;
				}
			}
		});
		rev1.reveal();
	}

	if($('#rev-2').length) {
		var rev2 = new RevealFx(document.querySelector('#rev-2'), {
			revealSettings : {
				bgcolor: '#ff931e',
				delay: 250,
				onCover: function(contentEl, revealerEl) {
					contentEl.style.opacity = 1;
				}
			}
		});
		rev2.reveal();
	}

})(jQuery);
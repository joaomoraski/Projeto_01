$(function(){


	var curSlide = 0;

	var maxSlide = $('.banner-single').length -1;//-1 pq começa do 0


	var delay = 3;

	changeSlide();
	initSlider();

	function initSlider(){
		$('.banner-single').hide();
		$('.banner-single').eq(0).show();
		for (var i = 0; i < maxSlide+1; i++) {
			var content = $('.bullets').html();
			if (i == 0) {
				content+='<span class = "active-slider"></span>';
			} else{
				content+='<span></span>';
			}
			$('.bullets').html(content);
		}

	}


	function changeSlide(){
		setInterval(function() {
			$('.banner-single').eq(curSlide).animate({'opacity':'0'},2000);
			curSlide++;
			if (curSlide > maxSlide) {
				curSlide = 0;
			}
			$('.banner-single').eq(curSlide).animate({'opacity':'1'},2000);
			//trocar bullets da navegaçao
			$('.bullets span').removeClass('active-slider');
			$('.bullets span').eq(curSlide).addClass('active-slider');
		},delay * 1000);
	}

	$('body').on('click','.bullets span', function(){
		var currentBullet = $(this);
		$('.banner-single').eq(curSlide).stop().fadeOut(1000);
		var curSlide = currentBullet.index();
		$('.banner-single').eq(curSlide).stop().fadeIn(1000);
		$('.bullets span').removeClass('active-slider');
		currentBullet.addClass('active-slider');
	})

})
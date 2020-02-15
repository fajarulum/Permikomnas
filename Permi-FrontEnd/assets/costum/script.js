'use_strict'

const sliderTedi = {
	speed : 500,
	autoswitch : true,
	autoswitch_speed : 8000,
	nextSlide : ()=>{
		$('.box-middle.active').removeClass('active').addClass('oldActive')
		if($('.oldActive').is(':last-child')){
			$('.box-middle').first().addClass('active')
		}else{
			$('.oldActive').next().addClass('active')
		}
		$('.box-middle.oldActive').removeClass('oldActive')
		$('.box-middle').fadeOut(this.speed)
		$('.box-middle.active').fadeIn(this.speed)
	},
	prevSlide : ()=>{
		$('.box-middle.active').removeClass('active').addClass('oldActive');
	    if($('.oldActive').is(':first-child')){
	        $('.box-middle').last().addClass('active');
	    } else {
	        $('.oldActive').prev().addClass('active');
	    }
	    $('.box-middle.oldActive').removeClass('oldActive');
	    $('.box-middle').fadeOut(this.speed);
	    $('.box-middle.active').fadeIn(this.speed);
	}
}


$(document).ready(()=>{
	$('.box-middle').first().addClass('active')

	$('.box-middle').hide()

	$('.active').show()

	$('#nextSlide').click(()=>{
		sliderTedi.nextSlide();
	})

	$('#prevSlide').click(()=>{
		sliderTedi.nextSlide();
	})


})
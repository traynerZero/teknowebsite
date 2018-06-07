
$(document).ready(function() {
	var v_trig = false;
	setTimeout(function(){
		$('#service-content').addClass('fade-in');
		$('body').addClass('loaded');
	}, 1000);


	var mobile = 1;

	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
 // some code..
 		$('#a32').removeClass('slide-in');
 		$('#b32').removeClass('slide-in');
 		$('#c32').removeClass('slide-in');
 		mobile = 1;
	}else{
		mobile = 0;

		$('#a32').addClass('slide-in');
		$('#b32').addClass('slide-in');
		$('#c32').addClass('slide-in');
	}
	//SERVICE
	if(mobile == 0){
	$('#a32').on('click',function(){

			$('#b32').hide('blind');
			$('#c32').hide('blind');
			$('#a32').hide('blind');
			$('#a32_disp').show('fade');
	});

	$('#a32_disp').on('click',function(){

			$('#b32').show('blind');
			$('#c32').show('blind');

			$('#a32').show('blind');
			$('#a32_disp').hide('fade');
	});


	//
	$('#b32').on('click',function(){

			$('#a32').hide('blind');
			$('#c32').hide('blind');
			$('#b32').hide('blind');
			$('#b32_disp').show('fade');
	});

	$('#b32_disp').on('click',function(){

			$('#a32').show('blind');
			$('#c32').show('blind');

			$('#b32').show('blind');
			$('#b32_disp').hide('fade');
	});


	//
	$('#c32').on('click',function(){

			$('#b32').hide('blind');
			$('#a32').hide('blind');
			$('#c32').hide('blind');
			$('#c32_disp').show('fade');
	});

	$('#c32_disp').on('click',function(){

			$('#b32').show('blind');
			$('#a32').show('blind');
			$('#c32').show('blind');
			$('#c32_disp').hide('fade');
	});

	$('#sd-click').on('click',function(){

			$('#sd_desc').show('blind');
			$('#tc_desc').hide('blind');
			$('#tc_mdesc').hide('blind');
	});

	$('#tc-click').on('click',function(){

			$('#sd_desc').hide('blind');
			$('#tc_desc').show('blind');
			$('#tc_mdesc').show('blind');
	});
	
	$('#v_more').on('click',function(){
			v_trig = true;
			$('#services').hide('blind');
			$('#v_more').hide('blind');
			$('#v_less').show('blind');
			$('.more_desc_serv').show('blind');
	});

	$('#v_less').on('click',function(){
			v_trig = false;
			$('#services').show('blind');
			$('#v_more').show('blind');
			$('#v_less').hide('blind');
			$('.more_desc_serv').hide('blind');
	});

}


$('.toggle').on('click',function(){

	$('#header').hide('fade');

});

$('.close').on('click',function(){

	$('#header').show('fade');

});


$(window).scroll(function(){
    $(".fade-scroll-1").css("opacity", 1 - $(window).scrollTop() / 250);
  });

$(window).scroll(function(){
    $(".fade-scroll-2").css("opacity", 1 - $(window).scrollTop() / 750);
  });

$(window).scroll(function(){
    $(".fade-scroll-3").css("opacity", 1 - $(window).scrollTop() / 850);
  });


});
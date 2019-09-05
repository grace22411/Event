$(document).ready(function() {
	$(".join").click(function(){
		$("#tabs").hide();
		$("#tabs-2").fadeIn();
	});
	
	$(".join2").click(function(){
		$("#tabs").fadeIn();
		$("#tabs-2").hide();
	});
	
	// Hide and show DIVs
	$("#test1").click(function(){
		$(".hide1").slideDown(1000);
		$(".hide2").hide();
	})
	$("#test2").click(function(){
		$(".hide2").slideDown(1000);
		$(".hide1").hide();
	})
	
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
		});
		//swipe box js -->
		$(".swipebox").swipebox();
		// swipe box js end -->
		
		//script-for-menu -->
			$("span.menu").click(function(){
				$(".top-menu ul").slideToggle("slow" , function(){
				});
			});
		//script-for-menu -->
	
		var navoffeset=$(".header-bottom").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".header-bottom").addClass("fixed");
			}else{
				$(".header-bottom").removeClass("fixed");
			}
		 });
	
	 $("#owl-demo").owlCarousel({
		items : 1,
		lazyLoad : true,
		autoPlay : true,
		navigation : false,
		navigationText :  false,
		pagination : true,
	  });
	
	});



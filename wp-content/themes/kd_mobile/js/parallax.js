jQuery(document).ready(function($) {
	// Hand Scroll 
	$(window).bind('scroll', function() {
		parallax();
	});	
	
});

function parallax() {
    var scrollPos = $(window).scrollTop();	
    
    // header
	if(scrollPos >10){
		$('#main-header').removeClass('unactive');
		$('#main-header').addClass('active');    
	}else{
		$('#main-header').removeClass('active');
		$('#main-header').addClass('unactive');
	}
    
    if($('#section-1').length){ // page index        	
        // Section 1
        $('#section-1').css('backgroundPosition', "50% " + Math.round(($('#section-1').offset().top - scrollPos) * 0.5) + "px");
        // Section 2
        $('#section-2').css('backgroundPosition', "50% " + Math.round((scrollPos - $('#section-2').offset().top	) * 1.1) + "px");
        // Section 3
        $('#section-3').css('backgroundPosition', "50% " + Math.round(($('#section-3').offset().top - scrollPos) * 0.4) + "px");
        // Section 4
        $('#section-4').css('backgroundPosition', "50% " + Math.round(($('#section-4').offset().top - scrollPos) * 0.8) + "px");



        if(scrollPos >= 900){
            $('#section-2').addClass('active');
        }
        if(scrollPos >= 1600){
            $('#section-3').addClass('active');
            setTimeout(function(){
                $('#section-3 .feature:nth-child(1)').addClass('active');
            }, 1000);
            setTimeout(function(){
                $('#section-3 .feature:nth-child(2)').addClass('active');
            }, 2000);
            setTimeout(function(){
                $('#section-3 .feature:nth-child(3)').addClass('active');
            }, 3000);
        }
        if(scrollPos >= 2400){
            $('#section-4').addClass('active');
            setTimeout(function(){
                $('#section-4 #product1').addClass('active');
            }, 1000);
        }
        if(scrollPos >= 3400){
            $('#section-5').addClass('active');		
            setTimeout(function(){
                $('#section-5 .section-content').addClass('active');
            }, 1000);
            setTimeout(function(){
                $('#section-5 .section-content-2').addClass('active');
                $('#section-5 .section-content-3').addClass('active');
            }, 3000);
            setTimeout(function(){
                $('#section-5 .section-content-4').addClass('active');            
            }, 5000);
        }
    }
}
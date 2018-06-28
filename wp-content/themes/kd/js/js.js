jQuery(document).ready(function($){	
    $('#section-3 .section-content2 .feature .feature-icon').mouseenter(function() {
		$(this).children('.feature-content').slideDown( "slow", function() {
			// Animation complete.
		});
	}).mouseleave(function() {
		$(this).children('.feature-content').slideUp( "slow", function() {
			// Animation complete.
		});
	});
	latestSection = 0;
    
     $('.feature-icon img').bighover({width:500});
    
    
    
    if($('#hinhs-wrapper').length){
        
         jssor_slider1_init('jssor_1');
    }
        
    
    $('#btnShowMenu').click(function(){
        $('#main-menu').toggle();
    });
    
    $('#registerArea #hand').click(function(){
        $('#registerArea form').toggleClass('active');
    });
    
});

 jssor_slider1_init = function (containerId) {
                                var options = {
                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,
                    $ChanceToShow: 2
                }
            };
            var jssor_slider1 = new $JssorSlider$(containerId, options);
        };


jQuery(window).load(function($) {
	
});




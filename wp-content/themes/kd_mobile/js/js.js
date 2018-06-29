jQuery(document).ready(function($){	
   
    
    $('#btnShowMenu').click(function(){
        $('#main-menu').toggle();
    });
    
    $('#registerArea #hand').click(function(){
        $('#registerArea form').toggleClass('active');
    });
    
    $("#btnShowPopup").fancybox();
    setTimeout(function(){ 
        $("#btnShowPopup").trigger('click');
    }, 3000);
});

jQuery(window).load(function($) {
	
});




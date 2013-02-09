$(function(){
	var header = $('header');
	var drops = header.find('.drops');
	var logo = header.find('h2');
	var nav = header.find('nav');
	//var tooltip = $('header .tooltip');
	logo.on('click',function(){
		nav.toggle();
		drops.toggleClass('on');
		return false;	
	});
	/*logo.on('hover',function(){
		fadeout();
	});*/
	
	$(window).on('scroll',function(){
		var $this = $(this);
		if($this.scrollTop() > 100) {
			header.addClass('scrolled');
		} else {
			header.removeClass('scrolled');
		}
	});
	
	//more appifying
	/*var links = $('body').find('a');
	links.on('click', function(e){
		e.preventDefault();
		linkLocation = $(this).attr('href');
		$('body').fadeOut(300, redirectPage);
	});
	
	// where to
	function redirectPage() {
        window.location = linkLocation;
    }
    
    var links = $('body').find('a');
    
    links.on('click',function(){
    	var $this = $(this);
    	var url = $this.attr('href');
    	var _blank = $this.attr('target');
    	//var url_split = url.split('/');
    	if(_blank=='_blank'){
    		//nada
    	}else{
    		$('body').load(url);
    		return false;
    		//$.ajax(url);	
    	}
    });*/
	
});

function fadeout() {
	setTimeout(function(){
		$('header .tooltip').animate().css('bottom','-9999px');
	}, 3000);
}


// mobile hide URL bar
(function( win ){
	var doc = win.document;
	// If there's a hash, or addEventListener is undefined, stop here
	if( !location.hash && win.addEventListener ){
	//scroll to 1
	window.scrollTo( 0, 1 );
	var scrollTop = 1,
	getScrollTop = function(){
	return win.pageYOffset || doc.compatMode === "CSS1Compat" && doc.documentElement.scrollTop || doc.body.scrollTop || 0;
	},
	//reset to 0 on bodyready, if needed
	bodycheck = setInterval(function(){
	if( doc.body ){
	clearInterval( bodycheck );
	scrollTop = getScrollTop();
	win.scrollTo( 0, scrollTop === 1 ? 0 : 1 );
	}
	}, 15 );
	win.addEventListener( "load", function(){
	setTimeout(function(){
	//reset to hide addr bar at onload
	win.scrollTo( 0, scrollTop === 1 ? 0 : 1 );
	}, 0);
	} );
	}
})( this );
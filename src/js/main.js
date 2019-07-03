(function($){    
    /**
     * When DOM is ready
     */
    $(function() {
        $('.ham').click(function() {
            $('.mobile-navbar').toggleClass('is-active');
        });
        $('.mobile-navbar a').click(function() {
            $('.mobile-navbar').removeClass('is-active');
            $('.ham').removeClass('active');
        });  


        // ютубчик
        var youtube = document.querySelectorAll( ".youtube" );
        for (var i = 0; i < youtube.length; i++) {
            
            var source = "https://img.youtube.com/vi/"+ youtube[i].dataset.embed +"/sddefault.jpg";
            var image = new Image();
                    image.src = source;
                    image.addEventListener( "load", function() {
                        youtube[ i ].appendChild( image );
                    }( i ) );
            
                    youtube[i].addEventListener( "click", function() {
                        var iframe = document.createElement( "iframe" );
                                iframe.setAttribute( "frameborder", "0" );
                                iframe.setAttribute( "allowfullscreen", "" );
                                iframe.setAttribute( "src", "https://www.youtube.com/embed/"+ this.dataset.embed +"?rel=0&showinfo=0&autoplay=1" );
                                this.innerHTML = "";
                                this.appendChild( iframe );
                    } );	
        };

        $("body").niceScroll({
            scrollspeed: 60, // scrolling speed
            mousescrollstep: 60, // scrolling speed with mouse wheel (pixel)
        });  // let's do the magic! 

        // Lazyloading
        $('.lazy').lazy({
            // your configuration goes here
            scrollDirection: 'vertical',
            effect: 'fadeIn',
            effectTime: 1200,
            //threshold: 0,
            visibleOnly: true,
            onError: function(element) {
                console.log('error loading ' + element.data('src'));
            }
        });

        var mixer = mixitup('.job-container');

        //simple lightbox
        var lightbox1 = $('.lighbox-1 a').simpleLightbox();

        
    });

})(jQuery); // <----- jQuery no conflict wrapper

( function() {

	var youtube = document.querySelectorAll( ".youtube" );
	
	for (var i = 0; i < youtube.length; i++) {
		
		var source = "https://img.youtube.com/vi/"+ youtube[i].dataset.embed +"/sddefault.jpg";
		
		var image = new Image();
				image.src = source;
				image.addEventListener( "load", function() {
					youtube[ i ].appendChild( image );
				}( i ) );
		
				youtube[i].addEventListener( "click", function() {

					var iframe = document.createElement( "iframe" );

							iframe.setAttribute( "frameborder", "0" );
							iframe.setAttribute( "allowfullscreen", "" );
							iframe.setAttribute( "src", "https://www.youtube.com/embed/"+ this.dataset.embed +"?rel=0&showinfo=0&autoplay=1" );

							this.innerHTML = "";
							this.appendChild( iframe );
				} );	
	};
	
} )();

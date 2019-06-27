(function($){    
    /**
     * When DOM is ready
     */
    $(function() {

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
    });

})(jQuery); // <----- jQuery no conflict wrapper

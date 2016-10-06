/* Main js file */
(function($) {
    $.fn.countTo = function(options) {
        // merge the default plugin settings with the custom options
        options = $.extend({}, $.fn.countTo.defaults, options || {});

        // how many times to update the value, and how much to increment the value on each update
        var loops = Math.ceil(options.speed / options.refreshInterval),
            increment = (options.to - options.from) / loops;

        return $(this).each(function() {
            var _this = this,
                loopCount = 0,
                value = options.from,
                interval = setInterval(updateTimer, options.refreshInterval);

            function updateTimer() {
                value += increment;
                loopCount++;
                $(_this).html(value.toFixed(options.decimals));

                if (typeof(options.onUpdate) == 'function') {
                    options.onUpdate.call(_this, value);
                }

                if (loopCount >= loops) {
                    clearInterval(interval);
                    value = options.to;

                    if (typeof(options.onComplete) == 'function') {
                        options.onComplete.call(_this, value);
                    }
                }
            }
        });
    };

    $.fn.countTo.defaults = {
        from: 0,  // the number the element should start at
        to: 100,  // the number the element should end at
        speed: 1000,  // how long it should take to count between the target numbers
        refreshInterval: 100,  // how often the element should be updated
        decimals: 0,  // the number of decimal places to show
        onUpdate: null,  // callback method for every time the element is updated,
        onComplete: null,  // callback method for when the element finishes updating
    };
})(jQuery);

function countit(){

        $('.pos-c').countTo({
            from: 0,
            to: 1000,
            speed: 2000,
            refreshInterval: 50,
            onComplete: function(value) {
                console.debug(this);
            }
        });
        $('.pos-c').append("+");

        $('.cv-c').countTo({
            from: 0,
            to: 3000,
            speed: 2000,
            refreshInterval: 50,
            onComplete: function(value) {
                console.debug(this);
            }
        });
        $('.cv-c').append("+");

        $('.par-c').countTo({
            from: 0,
            to: 20,
            speed: 2000,
            refreshInterval: 50,
            onComplete: function(value) {
                console.debug(this);
            }
        });
        $('.par-c').append("+");

        $('.med-c').countTo({
            from: 0,
            to: 30,
            speed: 2000,
            refreshInterval: 50,
            onComplete: function(value) {
                console.debug(this);
            }
        });
        $('.med-c').append("+");
    }

    var triggered = false;
    $(document).on('scroll', function() {
      if(!triggered){
        if($(this).scrollTop()>=$('#counter').position().top){
          triggered = true;
          countit();
        }
      }
    });

/* Scroll */
function goToByScroll(id){
                 // Remove "link" from the ID
                 id = id.replace("link", "");
                   // Scroll
                  $('html,body').animate({
                    scrollTop: $("#"+id).offset().top - 50},
                     'slow');
            }

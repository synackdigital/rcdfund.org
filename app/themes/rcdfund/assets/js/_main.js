// Modified http://paulirish.com/2009/markup-based-unobtrusive-comprehensive-dom-ready-execution/
// Only fires on body class (working off strictly WordPress body_class)

var RCDFund = {
  // All pages
  common: {
    init: function() {

      // Give all affixed elements an explicit position
      $('[data-spy="affix"]').each(function(index) {
        var el = $(this);
        var offset = $(this).offset();
        el.css('top', offset.top).css('left', offset.left);
      });

      // Find team member info
      var $teamsection = $('.team');
      if ($teamsection.length > 0) {
        var $descriptions = $teamsection.find('.descriptions li');
        var $images = $teamsection.find('.images li');

        // Different layouts for mobile and desktop
        if ( $(document).width() > 782 ) {
          var outerHeight = 0;
          var activeIndex = 0;

          $descriptions.each(function(i, el) {
            var $el = $(el);
            var height = $el.outerHeight(true) + $teamsection.find('h1').outerHeight(true);
            $el.css('width', $el.outerWidth()).addClass('absolute pin-tr');
            outerHeight = (height > outerHeight) ? height : outerHeight;
          });

          $images.each(function(i, el) {
            var $el = $(el);
            var height = $el.outerHeight(true);
            $el.addClass('absolute pin-tl');
            outerHeight = (height > outerHeight) ? height : outerHeight;
          });

          $teamsection.css('height', outerHeight + $teamsection.find('.row').outerHeight(true) - $teamsection.find('h1').outerHeight(true));

          var show = function(i) {
            $descriptions.each(function(j, el) {
              if (j === i) {
                $(el).fadeIn();
              } else {
                $(el).fadeOut('fast');
              }
            });
            $images.each(function(j, el) {
              if (j === i) {
                $(el).fadeIn();
              } else {
                $(el).fadeOut('fast');
              }
            });
          };

          setInterval(function() {
            if ( activeIndex < $descriptions.size()-1 ) {
              activeIndex++;
            } else {
              activeIndex = 0;
            }
            show(activeIndex);
          }, 6500);

          show(0);

        } else {
          $images.each(function(i, el) {
            var $el = $(el);
            $el.addClass('mt-2').append($descriptions[i]);
          });
        }

      }
    },
    finalize: function() { }
  },
};

var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = RCDFund;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {

    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });

    UTIL.fire('common', 'finalize');
  }
};

$(document).ready(UTIL.loadEvents);

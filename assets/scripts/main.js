/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages

        //JS FOR THE OFF-CANVAS NAV
        $(document).ready(function(){
            var body = $("body"),
                 navOverlay = $(".overlay"),
                 nav = $("nav#off-canvas-nav"),
                 navIcon = $("#nav-icon"),
                 subMenu = $("li.menu-item-has-children > a");
            navIcon.click(function(e) {
                e.preventDefault();
                $(this).toggleClass("open");
                body.toggleClass("nav-open");
                nav.toggleClass("open");
            });
            navOverlay.click(function() {
                navIcon.removeClass("open");
                body.removeClass("nav-open");
                nav.removeClass("open");
            });
            subMenu.click(function(drop) {
                drop.preventDefault();
                $(this).parent().toggleClass("open");
            });
            //END OFF-CANVAS JS

              //JS FOR THE AOS ANIMATION ON SCROLL
              AOS.init({
                offset: 200,
                duration: 600,
                easing: 'ease-in-sine',
                delay: 100,
              });

              //HELP FUNCTION FOR Morphext
              function morphMethod(element,action,time,alt){
                if($(window).width() > 1024){
                  $(element).Morphext({
                    animation: action,
                    separator: ",",
                    speed: time
                  });
                }else{
                  $(element).html(alt);
                }
              }
              //METHOD INVOKED
              morphMethod('#js-sliding','fadeInUp',6000,'Toxicology');
              morphMethod('#js-fading','fadeInUp',6000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit, Lorem ipsum dolor sit amet, consectetur adipiscing elit');
              // morphMethod('#js-rotating','flipInX',4000, 'Reliability');

              $(function(){
                $('.column-wrap').matchHeight();
              });

          });//END .ready


      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // CONTACT TEMPLATE
    'page_template_contact': {
      init: function() {

      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },

    'page_template_our_team': {
      init: function() {
        // OUR TEAM
        $(function() {
          $('.staff-member').matchHeight();
        });



      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.

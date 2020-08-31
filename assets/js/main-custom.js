

jQuery(document).ready(function ($) {

var themeName = 'clean-custom';

var baseUrl = window.location.protocol + "//" + window.location.host + '/' + themeName + '/';



// Vanilla JS getScript Alternative
const loadScript = (source, beforeEl, async = true, defer = true) => {
  return new Promise((resolve, reject) => {
    let script = document.createElement('script');
    const prior = beforeEl || document.getElementsByTagName('script')[0];

    script.async = async;
    script.defer = defer;

    function onloadHander(_, isAbort) {
      if (isAbort || !script.readyState || /loaded|complete/.test(script.readyState)) {
        script.onload = null;
        script.onreadystatechange = null;
        script = undefined;

        if (isAbort) { reject(); } else { resolve(); }
      }
    }

    script.onload = onloadHander;
    script.onreadystatechange = onloadHander;

    script.src = source;
    prior.parentNode.insertBefore(script, prior);
  });
}



function landingPageSlick(){

  $('.landing-page .slider').slick({
    dots: false,
    infinite: true,
    speed: 1000,
    slidesToShow: 1,
    adaptiveHeight: true,
    autoplay: true,
      infinite: true,
      fade: true,
    cssEase: 'linear'
  });

}  
 




function slickSlideLoad(){
  if (document.querySelector('.slick') !== null) { 
      const scriptUrl = baseUrl + 'wp-content/themes/' + themeName + '/assets/slick/slick/slick.min.js';
      loadScript(scriptUrl).then(() => {
        console.log('script loaded');
        console.log('slick exists');
        landingPageSlick(); 
      }, () => {
        console.log('fail to load script');
      });
  }
}
slickSlideLoad();

///////////////////////////////
// Load Matcheight
///////////////////////////////

// function slickSlideLoad(){
// if (document.querySelector('.slick') !== null) { 
//     // console.log('slick exists');
//     jQuery.getScript( baseUrl + 'wp-content/themes/shieldx-master/assets/slick/slick/slick.min.js', function(){

//         slickSlideCheckWrap();

//     }, true);
//   }
// }
// slickSlideLoad();



window.addEventListener('load', function(event) {

    var hqyLazy = new HqyLazyload({
      loadInvisible: true,
      offset: 60
    });


});



// function gsapStagger(){
//   gsap.to(".our-content", {
//     x: "+=100",
//     duration: 1,
//     stagger: {
//       amount: 2,
//       from: "center",
//       grid: "auto",
//      // onComplete: myFunction //define callbacks inside the stagger to make them apply to each sub-tween
//     }
//   });
// }
// gsapStagger();

// Main menu nav toggle
// function mainNavToggle() {

//   $("#main-menu").on('show.bs.collapse', function(){
//     $('#main-nav').addClass('active');
//   });

//   $("#main-menu").on('hide.bs.collapse', function(){
//     $('#main-nav').removeClass('active');
//   });

// }
// mainNavToggle();

///////////////////////////////
// Video player controls
///////////////////////////////
// function videoControls() {
//   if (document.querySelector('video') !== null) { 
//       $('.play').click(function(){

//           $(this).siblings('video').fadeIn();

//           $(this).siblings('video')[0].play();
//           $(this).siblings('video')[0].controls = true; 
//           if($(this).hasClass('playing')){
//               $(this).siblings('video')[0].pause();
//               // $(this).parent('.play-wrap').siblings('.section-title').fadeIn();

//           }    
//       })
//       $('video').bind('play seeking pause', function () { //should trigger once on any play and ended event
//           // $(this).siblings('.play, .blender, .header-animation, .video-background').addClass('playing'); 
//           // $(this).parent('.play-wrap').siblings('.section-title').fadeOut();
          
//       });

//       $('video').bind('ended', function () { //should trigger once on every pause event
//            $(this).siblings('.play, .blender, .header-animation, .video-background').removeClass('playing'); 
//            // $(this).parent('.play-wrap').siblings('.section-title').fadeIn();
//       });
//       // console.log('video load');
//       }

//     $('.video-background').mouseover(function() { 
//       $(this).addClass('play-animation');
//     });


//     $('.play-button .play_1').bind("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd", function(){
//         $('.video-background').removeClass('play-animation');
//     });
// }
// videoControls();





///////////////////////////////////////////////////////////////////////
// Load Lightcase if we have lighcase outside of the resource page. Currently only on home page
//////////////////////////////////////////////////////////////////////////////


function loadLightcase() {

   if ($('[data-rel="lightcase"]').length > 0) {
    // console.log('lightcase exist');
    jQuery.getScript( baseUrl + 'wp-content/themes/' + themeName + '/assets/lightcase/src/js/lightcase.js', function(){
        // console.log('lightcase loaded');
      $('a.lightcase-video').lightcase({video: {
          width: 1600,
          height: 900,
          poster: '',
          preload: 'auto',
          controls: true,
          autobuffer: true,
          autoplay: true,
          loop: false
        }});

        $('.lightcase').lightcase();
    }, true);
  } else {
    // console.log('no lightcase');
  }
}
loadLightcase();


//////////////////////////////////////////////////////////////////////////////
// Call the Resource page function from Academy-loader.js / Academy-filter.php
//////////////////////////////////////////////////////////////////////////////

resourcesLoad();

///////////////////////////////////////
// Smooth Scroll to anchors on new page
///////////////////////////////////////


function smoothScrollAnchors() {
  
  // Lets get all the achor tag links and apply data-no-swup to them
 jQuery('a[href*="#"]').each(function(i,el){
   $(el).attr('data-no-swup', '');
 })



// Select all links with hashes
jQuery('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')

  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

}
smoothScrollAnchors();


///////////////////////////////////////
// Change the header styles on scroll
///////////////////////////////////////

function scrollTop() {
    //caches a jQuery object containing the header element
    var header = $(".start-header");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 50) {
            header.removeClass('start-header').addClass("scroll-header");
            // $('.navbar-toggler').addClass('collapsed');
            if (document.querySelector('.home') !== null) { 
                $('#homeTopBanner').addClass( "out");
            }
            $('#main-nav').removeClass('active');
            $('#main-menu').removeClass('show');
            // $('#main-menu').removeClass('show');
        } else {  
            header.removeClass("scroll-header").addClass('start-header');
            if (document.querySelector('.home') !== null) { 
              $('#homeTopBanner').removeClass("out");
            }
            // $('#main-nav').removeClass('active');
        }
    });
}
scrollTop();




function animationTriggers() {

  $('.trigger').waypoint(function() {
        $(this.element).addClass('animate');
  }, {
      offset: '65%'
  });

}
animationTriggers();


/////////////////////////////////////////////////////////////////////////////////////
// Update Navigation by matching partial URL (might need to change this when go live)
/////////////////////////////////////////////////////////////////////////////////////
function navigationUpdate() {
    $('header a, footer .nav-item, header .nav-item').removeClass('current-menu-item');
    // 2. go through all links and add current-menu-item class if href == current URL
    var path = window.location.href.split('/');
    // console.log(path);
    var parentPage =  path[0] + '//' + path[2] + '/' + path[3] + '/' ;
    // console.log(parentPage);
    // console.log(path[3]);
    $('header a[href*="' + parentPage + '"]').parent().addClass('current-menu-item');
    $('footer a[href*="' + parentPage + '"]').parent().addClass('current-menu-item');

    $('header .dropdown-menu a[href*="' + path[3] + '"]').addClass('current-menu-item');

}
navigationUpdate();

// Start slick slide function wrap


function slickSlideCheckWrap() { 
  // Banner ajax call, grabs template-parts/header/banner-slider.php
  function loadTopBanner(){
     if (document.querySelector('.home') !== null) { 
          // console.log('Fired Top Banner');
           jQuery.ajax({
            url: ft_loadmore_params.ajaxurl,
            type: 'POST',
            data: {
            action: 'getloadBanner'
            },
            dataType: 'html',
            success: function(response) {
            jQuery("#homeTopBanner").html(response);
            jQuery("#homeTopBanner").removeClass('out');
             // Init home award slick after success
             homeAwardsSLick();
             // Add drop class to banner to have it drop down
             setTimeout(function(){  jQuery("#homeTopBanner").addClass('drop'); }, 1000);
            }
          
        }); 
      } 

  }
  loadTopBanner();
}
///////////////////////////////////////////////////////////////
// Call all needed function on page reload
//////////////////////////////////////////////////////////////
function pageReload(callback) {

   var hqyLazy = new HqyLazyload();

    slickSlideLoad();
    // cardSelect();
    smoothScrollAnchors();

    navigationUpdate();
    animationTriggers();

    loadLightcase();

    // videoTitles();
    // videoControls();
    resourcesLoad();

    // Refresh waypoints after calling your animation triggers to get correct height on page reload
    callback();
}
// pageReload();


// var numOctOut = 4;
// var gsap.utils.snap = gsap.utils.gsap.utils.snap(5)
// gsap.utils.snap(1, 4)
  // console.log(domain);

   // Check if user is not logged in and only do swup then
  if(document.body.classList.contains( 'logged-in' ) === -1){

  const options = [
  

    { 
      linkSelector:
    'a[href^="' + window.location.origin + '"]:not([data-no-swup]), a[href^="/"]:not([data-no-swup]), a[href^="#"]:not([data-no-swup])',
    

      from: '(.*)',
      to: '(.*)',
      in: function(next) {

           

          var tl = new gsap.timeline({onComplete: next});
          document.querySelector('#swup').style.opacity = 0;

          tl.fromTo(document.querySelector('#swup'), 1 ,{opacity: 0, y: 30}, {opacity: 1, y: 0, ease: Expo.easeOut}, 0);

     

      },

      out: (next) => {

        
        var tl = new gsap.timeline({onComplete: next});

            
          // not Google Chrome 
          tl.fromTo(document.querySelector('#swup'), 1 ,{opacity: 1, y: 0}, {opacity: 0, y: 30, ease: Expo.easeOut}, 0);
            

        
      }
    },


  ];

    
  const swup = new Swup({
    plugins: [
          new SwupJsPlugin(options),
          new SwupFormsPlugin({formSelector: 'form[data-swup-form]'}), 
          new SwupBodyClassPlugin(), 
          // new SwupGaPlugin(),
          new SwupScriptsPlugin({head: false}),
          new SwupScrollPlugin({
          doScrollingRightAway: false,
          animateScroll: false,
      })
    ]
  });


  document.addEventListener('swup:contentReplaced', event => {
    // console.log('content is replaced');
    pageReload();

    // Flush Cache on pages with Slick Sliders
    swup.cache.remove('/');


    // $('#main-menu').removeClass('show');
    $('#main-nav').removeClass('active');
     $('#main-menu').removeClass('show');
   
     $('#homeTopBanner').removeClass('drop');
    
    // Call all local functions before refreshing waypoints
     pageReload(function() {
        setTimeout(function(){
          Waypoint.refreshAll(); 
          // console.log('timeout');
        }, 200);
      });        


    if (document.querySelector('.home') !== null) { 
      $("#homeTopBanner").removeClass('out');
    } else {
      $("#homeTopBanner").addClass('out');
    }

    // Refresh waypoints after calling your animation triggers to get correct height on page reload
    // setTimeout(function(){
    //   Waypoint.refreshAll(); 
    //   // console.log('timeout fired');
    // }, 200);
    

    
   

  });


}//END OF CHECK IF USER IS LOGGED IN




});





 



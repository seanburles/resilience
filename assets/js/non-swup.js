jQuery(document).ready(function($) {

var baseUrl = window.location.protocol + "//" + window.location.host + "/shieldx/";
// console.log(baseUrl);


///////////////////////////////
// Load Odometer
///////////////////////////////

function odometerLoad(){
if (document.querySelector('.odometer') !== null) { 
    // console.log('odometer exist');
    jQuery.getScript( baseUrl + 'wp-content/themes/shieldx-master/assets/js/odometer.min.js', function(){
      // console.log('odometer loaded');
         $('.odometer').waypoint(function() {
             // console.log('odometer fired');
            var el = this.element;
            var count = $(el).attr("data-value");


            var  od = new Odometer({
                el: el,
                value: 0,
              })
              od.update(count);
      }, {
          offset: '65%'
    });
    }, true);
  }
}
odometerLoad();


///////////////////////////////
// Load Matcheight
///////////////////////////////

function slickSlideLoad(){
if (document.querySelector('.slick') !== null) { 
    // console.log('slick exists');
    jQuery.getScript( baseUrl + 'wp-content/themes/shieldx-master/assets/slick/slick/slick.min.js', function(){

        slickSlideCheckWrap();

    }, true);
  }
}
slickSlideLoad();






function videoTitles(){
if (document.querySelector('#landing-animation') !== null) { 

    var v = document.getElementById('landing-animation');
    // var t = document.getElementById('time');
    v.addEventListener('timeupdate',function(event){
      // t.innerHTML = v.currentTime;

      if(v.currentTime > 2 ) {
        $('.page-home .video-title.one').addClass('active');
      } 
      if( v.currentTime > 5.4 ) {
        $('.page-home .video-title.one').removeClass('active');
      } 
      if(v.currentTime > 6.8 ) {
          $('.page-home .video-title.two').addClass('active');
      }
      if(v.currentTime > 9.9){
        $('.page-home .video-title.two').removeClass('active');
      }
      if(v.currentTime > 11 ) {
          $('.page-home .video-title.three').addClass('active');
      }
      if(v.currentTime > 13.1){
        $('.page-home .video-title.three').removeClass('active');
      }
      if(v.currentTime > 14 ) {
          $('.page-home .video-title.four').addClass('active');
      }
      if(v.currentTime > 16.5){
        $('.page-home .video-title.four').removeClass('active');
      }
      if(v.currentTime > 19.3 ) {
          $('.page-home .video-title.five').addClass('active');
      }
      if(v.currentTime > 21.6){
        $('.page-home .video-title.five').removeClass('active');
      }
      if(v.currentTime > 24.7 ) {
          $('.page-home .video-title.six').addClass('active');
      }
      if(v.currentTime > 27){
        $('.page-home .video-title.six').removeClass('active');
      }
      if(v.currentTime > 28 ) {
          $('.page-home .video-title.seven').addClass('active');
      }
      if(v.currentTime > 30.3){
        $('.page-home .video-title.seven').removeClass('active');
      }

    },false);
}
}
videoTitles();

$(window).load(function(){

    var hqyLazy = new HqyLazyload({
      loadInvisible: true,
      offset: 60
    });


});





// Main menu nav toggle
function mainNavToggle() {

  $("#main-menu").on('show.bs.collapse', function(){
    $('#main-nav').addClass('active');
  });

  $("#main-menu").on('hide.bs.collapse', function(){
    $('#main-nav').removeClass('active');
  });

}
mainNavToggle();

///////////////////////////////
// Video player controls
///////////////////////////////
function videoControls() {
  if (document.querySelector('video') !== null) { 
      $('.play').click(function(){

          $(this).siblings('video').fadeIn();

          $(this).siblings('video')[0].play();
          $(this).siblings('video')[0].controls = true; 
          if($(this).hasClass('playing')){
              $(this).siblings('video')[0].pause();
              // $(this).parent('.play-wrap').siblings('.section-title').fadeIn();

          }    
      })
      $('video').bind('play seeking pause', function () { //should trigger once on any play and ended event
          // $(this).siblings('.play, .blender, .header-animation, .video-background').addClass('playing'); 
          // $(this).parent('.play-wrap').siblings('.section-title').fadeOut();
          
      });

      $('video').bind('ended', function () { //should trigger once on every pause event
           $(this).siblings('.play, .blender, .header-animation, .video-background').removeClass('playing'); 
           // $(this).parent('.play-wrap').siblings('.section-title').fadeIn();
      });
      // console.log('video load');
      }

    $('.video-background').mouseover(function() { 
      $(this).addClass('play-animation');
    });


    $('.play-button .play_1').bind("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd", function(){
        $('.video-background').removeClass('play-animation');
    });
}
videoControls();









///////////////////////////////
// Card Selector
///////////////////////////////
function cardSelect(){
  $('.card-wrap .info-card').on('click', function(){
    $(".card-wrap .info-card").not(this).removeClass('active');
    $(this).addClass('active');

  });
}
cardSelect();


///////////////////////////////////////////////////////////////////////
// Load Lightcase if we have lighcase outside of the resource page. Currently only on home page
//////////////////////////////////////////////////////////////////////////////


function loadLightcase() {

// console.log('lightcase called');

   if (($('[data-rel="lightcase"]').length > 0) && ($('.page-resource').length == 0)) {
    // console.log('lightcase exist');
    jQuery.getScript( baseUrl + 'wp-content/themes/shieldx-master/assets/lightcase/src/js/lightcase.js', function(){
        // console.log('lightcase loaded');
      $('a[data-rel=lightcase]').lightcase({video: {
          width: 1600,
          height: 900,
          poster: '',
          preload: 'auto',
          controls: true,
          autobuffer: true,
          autoplay: true,
          loop: false
        }});
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
 $('a[href*="#"]').each(function(i,el){
  console.log('this link exists');
   $(el).attr('data-no-swup', '');
 })
  // Select all links with hashes
$('a[href*="#"]')
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

    
    // Turbulence
    if (document.querySelector('.turbulence') !== null) { 
      let timeline = new TimelineMax({
        repeat: -1,
        yoyo: true
      }),

      feTurb = document.querySelector('#feturbulence');

    timeline.add(
      TweenMax.to(feTurb, 20, {
        onUpdate: function() {
          
          let bfX = this.progress() * .015 + 0.015, //base frequency x
            bfY = this.progress() * .05 + .05; //base frequency y
          feTurb.setAttribute('baseFrequency', `${bfX} ${bfY}`);
        }
      }), 0,
    );
  } 

 

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

function slickSlideCheckWrap(){

  function  homeAwardsSLick() {
    // This is called from within the Banner Ajax call so it doesnt get called too early
    // console.log('home awards');
    if (document.querySelector('.home-press-awards') !== null) { 
         $('.home-press-awards-slick').slick({
            // lazyLoad: 'ondemand',
            autoplay: true,
            autoplaySpeed: 5000,
            dots: false,
            arrows: false,
            slidesToShow: 1,
            infinite: true,
            centerMode: true,
            variableWidth: false,
            fade: true
            // nextArrow: $('#next1, #next2')
        });
      }
    }
      // homeAwardsSLick();
  // What others are saying Slick slider instance and controls
  function  awardsSLick() {
    if (document.querySelector('.press-awards-slick') !== null) { 
         $('.press-awards-slick').slick({
            // lazyLoad: 'ondemand',
            autoplay: true,
            autoplaySpeed: 5000,
            dots: true,
            arrows: true,
            slidesToShow: 1,
            infinite: false,
            centerMode: true,
            variableWidth: false,
            // nextArrow: $('#next1, #next2')
        });
      }
    }
      awardsSLick();


    function  whoWeAreSLick() {
    if (document.querySelector('.what-other-are-saying') !== null) { 
         $('.what-other-are-saying').slick({
            // lazyLoad: 'ondemand',
            autoplay: true,
            autoplaySpeed: 5000,
            dots: true,
            arrows: true,
            slidesToShow: 1,
            infinite: false,
            centerMode: true,
            variableWidth: false,
            // nextArrow: $('#next1, #next2')
        });
      }
    }
      whoWeAreSLick();

      // Infographics Slick slider instance and controls
    function  howItWorksSLick() {
    if (document.querySelector('.see-how-it-works-slider') !== null) { 
         $('.see-how-it-works-slider').slick({
            lazyLoad: 'ondemand',
            dots: true,
            arrows: true,
            slidesToShow: 1,
            infinite: false,
            fade: true
        });

      }
    

      $('.see-how-it-works-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
            // console.log(nextSlide);
          

              if(nextSlide == 0){
                $('.shiw-icon').removeClass('active');
                $('.shiw-icon.discover').addClass('active');

              }
              if (nextSlide == 1){
                $('.shiw-icon').removeClass('active');
                $('.shiw-icon.automate').addClass('active');
              }
              if (nextSlide == 2){
                $('.shiw-icon').removeClass('active');
                $('.shiw-icon.secure').addClass('active');
              }
              if (nextSlide == 3){
                $('.shiw-icon').removeClass('active');
                $('.shiw-icon.know').addClass('active');
              }


          });
         

          $('.see-how-it-works button[data-slide]').click(function(e) {
           e.preventDefault();
           var slideno = $(this).data('slide');
           $('.see-how-it-works-slider').slick('slickGoTo', slideno - 1);
         });
     }
      howItWorksSLick();



      // What others are saying Slick slider instance and controls
    function  whatShieldxMeansSlick() {
    if (document.querySelector('.what-shieldx-means-slider') !== null) { 
         $('.what-shieldx-means-slider').slick({
            lazyLoad: 'ondemand',
            autoplay: true,
            autoplaySpeed: 5000,
            dots: true,
            arrows: false,
            slidesToShow: 1,
            infinite: false,
            centerMode: true,
            variableWidth: false,
            fade: true
            // nextArrow: $('#next1, #next2')
        });

        $('.what-shieldx-means-slider button[data-slide]').click(function(e) {
           e.preventDefault();
           var slideno = $(this).data('slide');
           $('.what-shieldx-means-slider').slick('slickGoTo', slideno - 1);
         });
      }
    }
      whatShieldxMeansSlick();


          // What others are saying Slick slider instance and controls
    function  businessLogicSlick() {
    if (document.querySelector('.business-logic-slider') !== null) { 
         $('.business-logic-slider').slick({
            lazyLoad: 'ondemand',
            autoplay: true,
            autoplaySpeed: 5000,
            dots: false,
            arrows: false,
            slidesToShow: 1,
            infinite: false,
            centerMode: true,
            variableWidth: false,
            fade: true
            // nextArrow: $('#next1, #next2')
        });

             $('.business-logic-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
            // console.log(nextSlide);
            

            $('.business-logic-slider-wrap li, .business-logic-slider-wrap .info-card').removeClass('slick-current');


              if(nextSlide == 0){
                  $('.business-logic-slider-wrap .zero').addClass('slick-current'); 
              }
              if (nextSlide == 1){
                  $('.business-logic-slider-wrap .one').addClass('slick-current'); 
              }
              if (nextSlide == 2){
                  $('.business-logic-slider-wrap .two').addClass('slick-current'); 
              }
              if (nextSlide == 3){
                  $('.business-logic-slider-wrap .three').addClass('slick-current'); 
              }


          });

        $('.business-logic-slider-wrap button[data-slide]').click(function(e) {
           e.preventDefault();
           var slideno = $(this).data('slide');
           $('.business-logic-slider').slick('slickGoTo', slideno - 1);
         });
      }
    }
      businessLogicSlick();
      

     // What others are saying Slick slider instance and controls
    function  alwasyEvolvingSlick() {
    if (document.querySelector('.always-evolving-slider') !== null) { 
         $('.always-evolving-slider').slick({
            lazyLoad: 'ondemand',
            autoplay: false,
            autoplaySpeed: 5000,
            dots: true,
            arrows: true,
            slidesToShow: 1,
            infinite: true,
            // centerMode: true,
            // variableWidth: false,
            fade: true
            // nextArrow: $('#next1, #next2')
        });

          $('.always-evolving-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
            // console.log(nextSlide);
               $('.evolving .info-card').removeClass('slick-current');

              if(nextSlide == 0){
                  $('.evolving .zero').addClass('slick-current'); 
              }
              if (nextSlide == 1){
                  $('.evolving .one').addClass('slick-current'); 
              }
              if (nextSlide == 2){
                  $('.evolving .two').addClass('slick-current'); 
              }
              if (nextSlide == 3){
                  $('.evolving .three').addClass('slick-current'); 
              }

          });   

        $('.evolving button[data-slide]').click(function(e) {
           e.preventDefault();
           var slideno = $(this).data('slide');
           $('.always-evolving-slider').slick('slickGoTo', slideno - 1);
         });
      }
    }
      alwasyEvolvingSlick();



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


// slickSlideCheckWrap();




});
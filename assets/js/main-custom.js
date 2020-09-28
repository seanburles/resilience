

jQuery(document).ready(function ($) {

var themeName = 'r-mural';

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








function directoryPage(){
  $(function() {
    // $('select').selectric();

    $('select').selectric({
      optionsItemBuilder: function(itemData, element, index) {
        return element.val().length ? '<span class="wrap">' + itemData.text : itemData.text + '</span>';
      }
    });
  });
}
directoryPage();

function slickSlideLoad(){
  if (document.querySelector('.slick') !== null) { 
      const scriptUrl = baseUrl + 'wp-content/themes/' + themeName + '/assets/slick/slick/slick.min.js';
      loadScript(scriptUrl).then(() => {
        console.log('script loaded');

        // landingPageSlick(); 
       
        storyVideoControls();
      }, () => {
        console.log('fail to load script');
      });
  }
}
slickSlideLoad();




// function landingPageSlick(){
//   if (document.querySelector('.landing-page .slider') !== null) {
//     $('.slider').slick({
//       dots: false,
//       infinite: true,
//       speed: 2000,
//       slidesToShow: 1,
//       adaptiveHeight: true,
//       autoplay: true,
//         infinite: true,
//         fade: true,
//       cssEase: 'linear'
//     });
//   }  
// }  
// landingPageSlick()

///////////////////////////////
// Load Matcheight
///////////////////////////////




function lazyLoad(){

    var hqyLazy = new HqyLazyload({
      loadInvisible: true,
      // offset: 60
    });

}
lazyLoad();




// $('.video-body .slide').hover(function() {
// var playPromise = video.play();

//     // $('video', this).get(0).play(); 

// }, function() {
//     $('video', this).get(0).pause(); 
// });





// $('.stories-slick .fullscreen').on('click', function(){

//   var elem = $(this).parent().parent().parent().find('video')
// if (elem.requestFullscreen) {
//   elem.requestFullscreen();
// } else if (elem.mozRequestFullScreen) {
//   elem.mozRequestFullScreen();
// } else if (elem.webkitRequestFullscreen) {
//   elem.webkitRequestFullscreen();
// } else if (elem.msRequestFullscreen) { 
//   elem.msRequestFullscreen();
// }
// })

// toggle play/pause
// function togglePlay() {
//   const method = video.paused ? 'play' : 'pause';
//   video[method]();
// }

// // Detect press of spacebar, toggle play
// function detectKeypress(e) {
//   if (e.keyCode == 32) {
//     togglePlay();
//   } else {
//       return;
//   }
// }
// function storiesPageSlick(){
//    if (document.querySelector('.stories-slick') !== null) {

    
    
//  }
// }  
// storiesPageSlick();


// function slickSlideLoad(){
// if (document.querySelector('.slick') !== null) { 
//     // console.log('slick exists');
//     jQuery.getScript( baseUrl + 'wp-content/themes/' + themeName + '/assets/slick/slick/slick.min.js', function(){

//         // slickSlideCheckWrap();

//     }, true);
//   }
// }
// slickSlideLoad();

//////////////////////////////////////
//////////////////////////////////////

function storyVideoControls(){

  if (document.querySelector('.page-stories') !== null) {



  // Hover video play

      var figure = $(".video-body .slide").hover( hoverVideo, hideVideo );

      function hoverVideo(e) {  
          $('video', this).get(0).play(); 
      }

      function hideVideo(e) {
        var that = $('video', this);
        setTimeout(function(){    
          that.get(0).pause(); 
          // console.log(that);
          }, 100)
      }


      $('.stories-slick .play').on('click', function(){
        $(this).parent().parent().siblings('video').get(0).play(); 
        $(this).parent().parent('.info').addClass('playing'); 
        $(this).parent().parent().siblings('video').attr('controls',true);; 
      })
      
      // const player       =  document.querySelector('.stories-slick .slick-active');
      // const fullscreen   =  player.querySelector('.fullscreen');
      // const video        =  player.querySelector('.stories-slick video');
      // const video = $(this).parent().parent().parent().find('video');
      // console.log('testing');
      function toggleFullscreen() {
        if(video.requestFullScreen){
          video.requestFullScreen();
        } else if(video.webkitRequestFullScreen){
          video.webkitRequestFullScreen();
        } else if(video.mozRequestFullScreen){
          video.mozRequestFullScreen();
        }
      }


      $('.fullscreen').on('click', function(){
        var video = $(this).parent().parent().siblings('video')[0];
        console.log(video);
        // toggleFullscreen();
         if(video.requestFullScreen){
              video.requestFullScreen();
            } else if(video.webkitRequestFullScreen){
              video.webkitRequestFullScreen();
            } else if(video.mozRequestFullScreen){
              video.mozRequestFullScreen();
            }
      });
        


        $('.stories-slick video').bind('play seeking pause', function () { //should trigger once on any play and ended event
            $(this).siblings('.info').addClass('playing'); 
            // video.controls = "controls";
            $(this).attr('controls',true);
        });


        $('.stories-slick video').bind('ended', function () { //should trigger once on every pause event
             $(this).siblings('.info').removeClass('playing'); 
              $(this).removeAttr('controls',true);
        });

        // $('.stories-slick').on('init', function(event, slick){
        //     $(this).slideUp(10);
        //     console.log('plooop');
        // });



        $('.stories-slick').slick({
            dots: false,
            // arrows: false,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            adaptiveHeight: true,
            autoplay: false,
              // infinite: true,
            fade: true,
            cssEase: 'linear',
          // nextArrow: $('#next'),
          // prevArrow: $('#prev')
        });
        




         $('.stories-slick').on('init beforeChange', function (event, slick, currentSlide, nextSlide) {
          var mySlideNumber = nextSlide;
          console.log(mySlideNumber);

          $('.video-body .slide').removeClass('active');
          $('.video-body .slide[data-slide="' + mySlideNumber + '"]').addClass('active');

          // Pause videos on slide Change
          document.querySelectorAll('video').forEach(vid => vid.pause());

        });


           $('div[data-slide]').on('click', function(e) {
             // $('.stories-slick').slideDown();
             var tl = new gsap.timeline();
             var slickHeight = $('.stories-slick').height(); 
             tl.to(".slick-wrap", .15, {height: slickHeight, ease: "power3.inOut"})
              // $(".slick-wrap").animate({
              //     height: slickHeight
              // },400);
              // $('.slick-wrap').addClass('open');

             var slideno = $(this).data('slide');
             $('.stories-slick').slick('slickGoTo', slideno);
           });

           $('.stories-slick .close').on('click', function(e){
               // $('.stories-slick').slideUp();
                var tl = new gsap.timeline();
                tl.to(".slick-wrap", .15, {height: 0, ease: "power3.inOut"})
               document.querySelectorAll('video').forEach(vid => vid.pause());
           })


    // setTimeout(function(){    
    //     var content = $('.stories-slick.slick-initialized');
    //     content.slideUp(10);
    // }, 40);


  } 
}
// storyVideoControls();





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
  var menu = new gsap.timeline({paused: true});
        menu.from("#main-menu li", {
            x: "+=75",
            // opacity: 1,
            // duration: .25,
           ease: "back.out(3)",
            stagger: {
              amount: .35,
              ease: "back.out(3)",
              // each: .1,
              // from: "center",
              grid: "auto",
             // onComplete: myFunction //define callbacks inside the stagger to make them apply to each sub-tween
            }
          });

$('.menu.navbar-toggler').on('click', function(){
  if($(this).hasClass('open')){
      $(this).removeClass('open');
      $('#main-menu').removeClass('open');
      menu.reverse(0);
  } else {
      $(this).addClass('open');
      $('#main-menu').addClass('open');
       menu.play();
  }
})



// $('#main-menu').on('show.bs.collapse', function () {
//   // do something…
//   menu.play();
// })

// $('#main-menu').on('hide.bs.collapse ', function () {
//   // do something…
//   menu.reverse(0);
// })


// Video Play button
// function videoButtonAnim() {

//   $('.video-background').mouseover(function() { 
//     $(this).addClass('play-animation');
//   });


//   $('.play-button .play_1').bind("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd", function(){
//       $('.video-background').removeClass('play-animation');
//   });

// }
// videoButtonAnim();
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
    $('header a, footer .nav-item, header .menu-item').removeClass('active');
    // 2. go through all links and add current-menu-item class if href == current URL
    var path = window.location.href.split('/');
    console.log(path);
    var parentPage =  path[0] + '//' + path[2] + '/' + path[3] + '/' + path[4] + '/' ; ;
    console.log(parentPage);
    console.log(path[4]);

    $('header a[href*="' + parentPage + '"]').parent().addClass('active');
    $('footer a[href*="' + parentPage + '"]').parent().addClass('active');

    $('header .dropdown-menu a[href*="' + path[4] + '"]').addClass('active');

     if(path[4] == ''){
      console.log('this should fire active on home li')
       $("a[title='Home']").parent().addClass('active');
      }
}
navigationUpdate();

// Start slick slide function wrap


// function slickSlideCheckWrap() { 
//   // Banner ajax call, grabs template-parts/header/banner-slider.php
//   function loadTopBanner(){
//      if (document.querySelector('.home') !== null) { 
//           // console.log('Fired Top Banner');
//            jQuery.ajax({
//             url: ft_loadmore_params.ajaxurl,
//             type: 'POST',
//             data: {
//             action: 'getloadBanner'
//             },
//             dataType: 'html',
//             success: function(response) {
//             jQuery("#homeTopBanner").html(response);
//             jQuery("#homeTopBanner").removeClass('out');
//              // Init home award slick after success
//              homeAwardsSLick();
//              // Add drop class to banner to have it drop down
//              setTimeout(function(){  jQuery("#homeTopBanner").addClass('drop'); }, 1000);
//             }
          
//         }); 
//       } 

//   }
//   loadTopBanner();
// }
///////////////////////////////////////////////////////////////
// Call all needed function on page reload
//////////////////////////////////////////////////////////////
function pageReload(callback) {

   var hqyLazy = new HqyLazyload();
    directoryPage();
    slickSlideLoad();
    // cardSelect();
    smoothScrollAnchors();

    navigationUpdate();
    animationTriggers();

    loadLightcase();
    storyVideoControls();
    // videoTitles();
    // videoControls();
    resourcesLoad();
    // storiesPageSlick()
    // Refresh waypoints after calling your animation triggers to get correct height on page reload
    lazyLoad();
    // callback();
}
// pageReload();


// var numOctOut = 4;
// var gsap.utils.snap = gsap.utils.gsap.utils.snap(5)
// gsap.utils.snap(1, 4)
  // console.log(domain);

   // Check if user is not logged in and only do swup then
  // if(document.body.classList.contains( 'logged-in' ) === -1){

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

    if (document.querySelector('.slick') !== null) {
      $('.slick').slick('unslick').slick('reinit');
     } 

    // $('#main-menu').removeClass('show');
    $('#main-nav').removeClass('active');
     $('#main-menu').removeClass('show');
   
     $('#homeTopBanner').removeClass('drop');
    
    // Call all local functions before refreshing waypoints
     pageReload(function() {
        // setTimeout(function(){
        //   Waypoint.refreshAll(); 
        //   // console.log('timeout');
        // }, 200);
      }); 

      $('.menu.navbar-toggler').removeClass('open collapsed');       


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


// }//END OF CHECK IF USER IS LOGGED IN




// $('.start-select').on('click', function (ev) {
//   $('.start-select').css('opacity', '0');
//   $('.list__ul').toggle();
// });

//  $('.list__ul span').on('click', function (ev) {
//    ev.preventDefault();
//    var index = $(this).parent().index();
   
//    $('.start-select').text( $(this).text() ).css('opacity', '1');
   
//    console.log($('.list__ul').find('li').eq(index).html());
   
//    $('.list__ul').find('li').eq(index).prependTo('.list__ul');
//    $('.list__ul').toggle();   
   
//  });


// $('select').on('change', function (e) {
  
//   // Set text on start-select hidden element
//   $('.start-select').text(this.value);
  
//   // Animate select width as start-select
//   $(this).animate({width: $('.start-select').width() + 'px' });
  
// });



});





 



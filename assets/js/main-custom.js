

jQuery(document).ready(function ($) {

var themeName = 'r-mural';

  // var baseUrl = window.location.protocol + "//" + window.location.host + '/' + themeName + '/';

  var baseUrl = window.location.protocol + "//" + window.location.host + '/' ;







function directoryPage(){
  $(function() {
    // $('select').selectric();
    $('select').selectric({
      optionsItemBuilder: function(itemData, element, index) {
        return element.val().length ? '<span class="wrap">' + itemData.text : itemData.text + '</span>';
      },
       // inheritOriginalWidth: true,
    });
  });
}
directoryPage();


function slickSlideLoad(){
if (document.querySelector('.slick') !== null) { 
    // console.log('slick exists');
    jQuery.getScript( baseUrl + 'wp-content/themes/' + themeName + '/assets/slick/slick/slick.min.js', function(){

        // slickSlideCheckWrap();

    }, true);
  }
}
slickSlideLoad();




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




function scrollMarkers(){
if (document.querySelector('.r-text') !== null) {

  const section = gsap.utils.toArray('.r-text');
  // console.log(section);

  section.forEach((sec, i) => {
    
    let anim = gsap.timeline({paused:true});
    let before = $(sec).find('.anim-brack');
    // console.log(before)
    anim.fromTo(sec, 1, { opacity: 0, y: 100}, {duration: 1, opacity: 1, y: 0, ease: "back.out(1.7)"})
                    .set(before, {className:"+=anim-brack active"});
    // console.log(sec.querySelector('.anim-brack'));
    // console.log($(sec).find('.anim-brack:before'));
    ScrollTrigger.create({
      trigger: sec,
      animation: anim,
       // markers: true,
      start: "bottom bottom",
      toggleActions: 'play none none none',
      once: true,
      // scroller: container,
      onEnter: self => {
        console.log(self + i)
      // console.log("progress:", self.progress.toFixed(3), "direction:", self.direction, "velocity", self.getVelocity());
      self.trigger.classList.add("loaded");
     // console.log(self.trigger)
    }
    });
  });
}
}
scrollMarkers();






//////////////////////////////////////
//////////////////////////////////////

function storyVideoControls(){

  if (document.querySelector('.page-stories') !== null) {


      // Hover video play
      var figure = $(".video-body .slide").hover( hoverVideo, hideVideo );

      function hoverVideo(e) {  
          // $(this).addClass('hover');
          $('video', this).get(0).play(); 
      }

      function hideVideo(e) {
        var that = $('video', this);
        // $(this).removeClass('hover');
        setTimeout(function(){    
          that.get(0).pause(); 
          // console.log(that);
          }, 100)
      }


      // 
      $(".video-body .slide .play").on('click', function(){
          $(".video-body .slide .play").not(this).parent().parent().parent().parent().parent().removeClass('active');
          $(this).parent().parent().parent().parent().parent().addClass('active');
      })

      $('.mobile-close').on('click', function(){
        // console.log($(this).parent().parent().parent());
        $(this).parent().parent().parent().removeClass('active');
      })

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




      $('.stories-slick').on('init', function(slick){
         var currentSlide = $(this).find('li.slide.slick-current');
      });


         $('.stories-slick').on('init beforeChange', function (event, slick, currentSlide, nextSlide) {
          var mySlideNumber = nextSlide;
          console.log(mySlideNumber);

          $('.video-body .slide').removeClass('active');
          $('.video-body .slide[data-slide="' + mySlideNumber + '"]').addClass('active');

          // Pause videos on slide Change
          document.querySelectorAll('video').forEach(vid => vid.pause());

        });


           $('div[data-slide] .play').on('click', function(e) {
             // $('.stories-slick').slideDown();
             var tl = new gsap.timeline();
             var slickHeight = $('.stories-slick').height(); 

             tl.to(".slick-wrap", .15, {height: slickHeight, ease: "power3.inOut"});

            // console.log($("div[data-slick-index='"+ slideno +"' ]"));
             var slideno = $(this).parent().parent().parent().parent().parent().data('slide');

             $("div[data-slide='"+ slideno +"' ]").addClass('active');
             $('.stories-slick').slick('slickGoTo', slideno);


                 // Lets play the video on open
                 console.log(slideno);
              $(".slick-slide[data-slick-index='" + slideno + "' ] video").get(0).play(); 
           });
        

          
           $('.stories-slick .close').on('click', function(e){
               // $('.stories-slick').slideUp();
                var tl = new gsap.timeline();
                tl.to(".slick-wrap", .15, {height: 0, ease: "power3.inOut"})
               document.querySelectorAll('video').forEach(vid => vid.pause());
           })




        $('.stories-slick').not('.slick-initialized').slick({
            dots: false,
            // arrows: false,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            // adaptiveHeight: true,
            autoplay: false,
              // infinite: true,
            fade: true,
            cssEase: 'linear',
            // adaptiveHeight: true
          // nextArrow: $('#next'),
          // prevArrow: $('#prev')
        });
        

    // setTimeout(function(){    
    //     var content = $('.stories-slick.slick-initialized');
    //     content.slideUp(10);
    // }, 40);


  } 
}

storyVideoControls();



// storyVideoControls();


function singleStoryVideoControls(){

  if (document.querySelector('.single-stories') !== null) {



  // Hover video play


      $('.play').on('click', function(){
        $(this).parent().parent().siblings('video').get(0).play(); 
        $(this).parent().parent('.info').addClass('playing'); 
        $(this).parent().parent().siblings('video').attr('controls',true);
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
        


        $('.single-stories video').bind('play seeking pause', function () { //should trigger once on any play and ended event
            $(this).siblings('.info').addClass('playing'); 
            // video.controls = "controls";
            $(this).attr('controls',true);
        });


        $('.single-stories video').bind('ended', function () { //should trigger once on every pause event
             $(this).siblings('.info').removeClass('playing'); 
              $(this).removeAttr('controls',true);
        });



  } 
}
singleStoryVideoControls();






// Video Play button
function videoButtonAnim() {

  $('.video-background').mouseover(function() { 
    $(this).addClass('start');
  });


  $('.YNGxvoTC_0, .YNGxvoTC_1').bind("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd", function(){
      $('.video-background').removeClass('start');
  });

}
videoButtonAnim();


function homeVideo(){

  if (document.querySelector('.home') !== null) {

  $('.play-btn').on('click', function(){
    // $(this).siblings('video').attr('controls',true);
    $(this).siblings('video').get(0).play();

  })


  $('.video-wrap video').bind('play seeking pause', function () { //should trigger once on any play and ended event
        $(this).siblings('.play-btn').slideUp(); 
        // video.controls = "controls";
        $(this).attr('controls',true);
    });


    $('.video-wrap video').bind('ended', function () { //should trigger once on every pause event
         $(this).siblings('.play-btn').slideDown() 
          $(this).removeAttr('controls',true);
    });



  let videoText = gsap.timeline();

  videoText.fromTo('.lead-text', 1, { opacity: 0, y: 100}, {duration: 1, opacity: 1, y: 0, ease: "back.out(1.7)"})
        .set('.lead-text .anim-brack', {className:"+=anim-brack active"})
        .set('.lead-text .strike', {className:"+=strike active"}, '+=1.5')
        .set('.lead-text .anim-brack-strike', {className:"+=anim-brack-strike active"}, '+=1')
        .set('.lead-text .thrive', {className:"+=thrive active"}, '+=1')
        .set('.lead-text .thrive', {css: {color: "#fff"}}, '+=1')

        // Load popover script for home page
        $(function () {
            $('[data-toggle="popover"]').popover()
          })

          $('body').on('click', function (e) {
          //did not click a popover toggle, or icon in popover toggle, or popover
          if ($(e.target).data('toggle') !== 'popover' && $(e.target).parents('[data-toggle="popover"]').length === 0
              && $(e.target).parents('.popover.in').length === 0) {
              (($('[data-toggle="popover"]').popover('hide').data('bs.popover') || {}).inState || {}).click = false;
          }
          });


  }
}
homeVideo();



function singleVideo(){

  if (document.querySelector('.single-story') !== null) {

  $('.play-btn').on('click', function(){
    // $(this).siblings('video').attr('controls',true);
    $(this).siblings('video').get(0).play();

  })


  $('.video-wrap video').bind('play seeking pause', function () { //should trigger once on any play and ended event
        $(this).siblings('.play-btn').slideUp(); 
        // video.controls = "controls";
        $(this).attr('controls',true);
    });


    $('.video-wrap video').bind('ended', function () { //should trigger once on every pause event
         $(this).siblings('.play-btn').slideDown() 
          $(this).removeAttr('controls',true);
    });




  }
}
singleVideo();

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
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    event.stopImmediatePropagation();
    console.log('scroll clicked')
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
        event.stopImmediatePropagation();
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          console.log('scroll done')
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




/////////////////////////////////////////////////////////////////////////////////////
// Update Navigation by matching partial URL (might need to change this when go live)
/////////////////////////////////////////////////////////////////////////////////////
function navigationUpdate() {
    $('header a, footer .nav-item, header .menu-item').removeClass('active');
    // 2. go through all links and add current-menu-item class if href == current URL
    var path = window.location.href.split('/');
    // console.log(path);
    var parentPage =  path[0] + '//' + path[2] + '/' + path[3] + '/'; 
    // console.log(parentPage);
    // console.log(path[3]);

    $('header a[href*="' + parentPage + '"]').parent().addClass('active');
    $('footer a[href*="' + parentPage + '"]').parent().addClass('active');

    $('header .dropdown-menu a[href*="' + path[3] + '"]').addClass('active');

     if(path[3] == ''){
      // console.log('this should fire active on home li')
       $(".menu-item-home").addClass('active');
      }
}
navigationUpdate();

// Start slick slide function wrap


///////////////////////////////////////////////////////////////
// Call all needed function on page reload
//////////////////////////////////////////////////////////////
function pageReload() {
   var hqyLazy = new HqyLazyload();
    directoryPage();
    slickSlideLoad();
    // cardSelect();
    videoButtonAnim();
    smoothScrollAnchors();
    homeVideo();
    navigationUpdate();
    // animationTriggers();
    scrollMarkers();
    loadLightcase();
    storyVideoControls();
    // videoTitles();
    // videoControls();
    resourcesLoad();
    // storiesPageSlick()
    // Refresh waypoints after calling your animation triggers to get correct height on page reload
    lazyLoad();
    // callback();
  console.log('page reload');
}
// pageReload();


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
          // adding page reload here trying to reduce the double call
           pageReload();
           $('.page-spinner').fadeOut('slow');

      },

      out: (next) => {

        
        var tl = new gsap.timeline({onComplete: next});

            
          tl.fromTo(document.querySelector('#swup'), 1 ,{opacity: 1, y: 0}, {opacity: 0, y: 30, ease: Expo.easeOut}, 0);
            
          $('.page-spinner').fadeIn();
        
      }
    },


  ];

    
  const swup = new Swup({
    plugins: [
          new SwupJsPlugin(options),
          new SwupFormsPlugin({formSelector: 'form[data-swup-form]'}), 
          new SwupBodyClassPlugin(), 
          new SwupGaPlugin(),
          new SwupScriptsPlugin({head: false}),
          new SwupScrollPlugin({
          doScrollingRightAway: false,
          animateScroll: false,
      })
    ]
  });


  document.addEventListener('swup:contentReplaced', event => {
    event.stopImmediatePropagation();

    console.log('content is replaced');
   

    // Flush Cache on pages with Slick Sliders
    swup.cache.remove('/');
    swup.cache.remove('/stories/');
    swup.cache.remove('/directory/');

    if (document.querySelector('.slick') !== null) {
      $('.slick-initialized').slick('unslick').slick('reinit');
     } 

    // $('#main-menu').removeClass('show');
    $('#main-nav').removeClass('active');
     $('#main-menu').removeClass('show');
   
     $('#homeTopBanner').removeClass('drop');
    
    // Call all local functions before refreshing waypoints
     pageReload(function() {
        setTimeout(function(){
         ScrollTrigger.refresh()
        }, 200);
      }); 

      $('.menu.navbar-toggler').removeClass('open collapsed');       




    if(document.querySelector('.page-directory') !== null){
      $('#ct_posts_wrap').html('');
    }



  

  });




});





 



!function(e){"function"==typeof define&&define.amd?define(e):e()}((function(){"use strict";jQuery(document).ready((function(e){var t=window.location.protocol+"//"+window.location.host+"/";function o(){e((function(){e("select").selectric({optionsItemBuilder:function(e,t,o){return t.val().length?'<span class="wrap">'+e.text:e.text+"</span>"}})}))}function n(){null!==document.querySelector(".slick")&&jQuery.getScript(t+"wp-content/themes/r-mural/assets/slick/slick/slick.min.js",(function(){}),!0)}function i(){new HqyLazyload({loadInvisible:!0})}function a(){if(null!==document.querySelector(".r-text")){gsap.utils.toArray(".r-text").forEach((t,o)=>{let n=gsap.timeline({paused:!0}),i=e(t).find(".anim-brack");n.fromTo(t,1,{opacity:0,y:100},{duration:1,opacity:1,y:0,ease:"back.out(1.7)"}).set(i,{className:"+=anim-brack active"}),ScrollTrigger.create({trigger:t,animation:n,start:"bottom bottom",toggleActions:"play none none none",once:!0,onEnter:e=>{console.log(e+o),e.trigger.classList.add("loaded")}})})}}function s(){if(null!==document.querySelector(".page-stories")){e(".video-body .slide").hover((function(t){e("video",this).get(0).play()}),(function(t){var o=e("video",this);setTimeout((function(){o.get(0).pause()}),100)}));e(".video-body .slide .play").on("click",(function(){e(".video-body .slide .play").not(this).parent().parent().parent().parent().parent().removeClass("active"),e(this).parent().parent().parent().parent().parent().addClass("active")})),e(".mobile-close").on("click",(function(){e(this).parent().parent().parent().removeClass("active")})),e(".stories-slick .play").on("click",(function(){e(this).parent().parent().siblings("video").get(0).play(),e(this).parent().parent(".info").addClass("playing"),e(this).parent().parent().siblings("video").attr("controls",!0)})),e(".fullscreen").on("click",(function(){var t=e(this).parent().parent().siblings("video")[0];console.log(t),t.requestFullScreen?t.requestFullScreen():t.webkitRequestFullScreen?t.webkitRequestFullScreen():t.mozRequestFullScreen&&t.mozRequestFullScreen()})),e(".stories-slick video").bind("play seeking pause",(function(){e(this).siblings(".info").addClass("playing"),e(this).attr("controls",!0)})),e(".stories-slick video").bind("ended",(function(){e(this).siblings(".info").removeClass("playing"),e(this).removeAttr("controls",!0)})),e(".stories-slick").on("init",(function(t){e(this).find("li.slide.slick-current")})),e(".stories-slick").on("init beforeChange",(function(t,o,n,i){var a=i;console.log(a),e(".video-body .slide").removeClass("active"),e('.video-body .slide[data-slide="'+a+'"]').addClass("active"),document.querySelectorAll("video").forEach(e=>e.pause())})),e("div[data-slide] .play").on("click",(function(t){var o=new gsap.timeline,n=e(".stories-slick").height();o.to(".slick-wrap",.15,{height:n,ease:"power3.inOut"});var i=e(this).parent().parent().parent().parent().parent().data("slide");e("div[data-slide='"+i+"' ]").addClass("active"),e(".stories-slick").slick("slickGoTo",i),console.log(i),e(".slick-slide[data-slick-index='"+i+"' ] video").get(0).play()})),e(".stories-slick .close").on("click",(function(e){(new gsap.timeline).to(".slick-wrap",.15,{height:0,ease:"power3.inOut"}),document.querySelectorAll("video").forEach(e=>e.pause())})),e(".stories-slick").not(".slick-initialized").slick({dots:!1,infinite:!0,speed:500,slidesToShow:1,autoplay:!1,fade:!0,cssEase:"linear"})}}function l(){e(".video-background").mouseover((function(){e(this).addClass("start")})),e(".YNGxvoTC_0, .YNGxvoTC_1").bind("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd",(function(){e(".video-background").removeClass("start")}))}function r(){if(null!==document.querySelector(".home")){e(".play-btn").on("click",(function(){e(this).siblings("video").get(0).play()})),e(".video-wrap video").bind("play seeking pause",(function(){e(this).siblings(".play-btn").slideUp(),e(this).attr("controls",!0)})),e(".video-wrap video").bind("ended",(function(){e(this).siblings(".play-btn").slideDown(),e(this).removeAttr("controls",!0)})),gsap.timeline().fromTo(".lead-text",1,{opacity:0,y:100},{duration:1,opacity:1,y:0,ease:"back.out(1.7)"}).set(".lead-text .anim-brack",{className:"+=anim-brack active"}).set(".lead-text .strike",{className:"+=strike active"},"+=1.5").set(".lead-text .anim-brack-strike",{className:"+=anim-brack-strike active"},"+=1").set(".lead-text .thrive",{className:"+=thrive active"},"+=1").set(".lead-text .thrive",{css:{color:"#fff"}},"+=1"),e((function(){e('[data-toggle="popover"]').popover()})),e("body").on("click",(function(t){"popover"!==e(t.target).data("toggle")&&0===e(t.target).parents('[data-toggle="popover"]').length&&0===e(t.target).parents(".popover.in").length&&(((e('[data-toggle="popover"]').popover("hide").data("bs.popover")||{}).inState||{}).click=!1)}))}}o(),n(),i(),a(),s(),null!==document.querySelector(".single-stories")&&(e(".play").on("click",(function(){e(this).parent().parent().siblings("video").get(0).play(),e(this).parent().parent(".info").addClass("playing"),e(this).parent().parent().siblings("video").attr("controls",!0)})),e(".fullscreen").on("click",(function(){var t=e(this).parent().parent().siblings("video")[0];console.log(t),t.requestFullScreen?t.requestFullScreen():t.webkitRequestFullScreen?t.webkitRequestFullScreen():t.mozRequestFullScreen&&t.mozRequestFullScreen()})),e(".single-stories video").bind("play seeking pause",(function(){e(this).siblings(".info").addClass("playing"),e(this).attr("controls",!0)})),e(".single-stories video").bind("ended",(function(){e(this).siblings(".info").removeClass("playing"),e(this).removeAttr("controls",!0)}))),l(),r(),null!==document.querySelector(".single-story")&&(e(".play-btn").on("click",(function(){e(this).siblings("video").get(0).play()})),e(".video-wrap video").bind("play seeking pause",(function(){e(this).siblings(".play-btn").slideUp(),e(this).attr("controls",!0)})),e(".video-wrap video").bind("ended",(function(){e(this).siblings(".play-btn").slideDown(),e(this).removeAttr("controls",!0)})));var c,d=new gsap.timeline({paused:!0});function u(){e('[data-rel="lightcase"]').length>0&&jQuery.getScript(t+"wp-content/themes/r-mural/assets/lightcase/src/js/lightcase.js",(function(){e("a.lightcase-video").lightcase({video:{width:1600,height:900,poster:"",preload:"auto",controls:!0,autobuffer:!0,autoplay:!0,loop:!1}}),e(".lightcase").lightcase()}),!0)}function p(){jQuery('a[href*="#"]').each((function(t,o){e(o).attr("data-no-swup","")})),e('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click((function(t){if(t.stopImmediatePropagation(),console.log("scroll clicked"),location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var o=e(this.hash);(o=o.length?o:e("[name="+this.hash.slice(1)+"]")).length&&(t.stopImmediatePropagation(),t.preventDefault(),e("html, body").animate({scrollTop:o.offset().top},1e3,(function(){console.log("scroll done");var t=e(o);if(t.focus(),t.is(":focus"))return!1;t.attr("tabindex","-1"),t.focus()})))}}))}function m(){e("header a, footer .nav-item, header .menu-item").removeClass("active");var t=window.location.href.split("/"),o=t[0]+"//"+t[2]+"/"+t[3]+"/";e('header a[href*="'+o+'"]').parent().addClass("active"),e('footer a[href*="'+o+'"]').parent().addClass("active"),e('header .dropdown-menu a[href*="'+t[3]+'"]').addClass("active"),""==t[3]&&e(".menu-item-home").addClass("active")}function h(){new HqyLazyload;o(),n(),l(),p(),r(),m(),a(),u(),s(),resourcesLoad(),i(),console.log("page reload")}d.from("#main-menu li",{x:"+=75",ease:"back.out(3)",stagger:{amount:.35,ease:"back.out(3)",grid:"auto"}}),e(".menu.navbar-toggler").on("click",(function(){e(this).hasClass("open")?(e(this).removeClass("open"),e("#main-menu").removeClass("open"),d.reverse(0)):(e(this).addClass("open"),e("#main-menu").addClass("open"),d.play())})),u(),resourcesLoad(),p(),c=e(".start-header"),e(window).scroll((function(){e(window).scrollTop()>=50?(c.removeClass("start-header").addClass("scroll-header"),null!==document.querySelector(".home")&&e("#homeTopBanner").addClass("out"),e("#main-nav").removeClass("active"),e("#main-menu").removeClass("show")):(c.removeClass("scroll-header").addClass("start-header"),null!==document.querySelector(".home")&&e("#homeTopBanner").removeClass("out"))})),m();const g=[{linkSelector:'a[href^="'+window.location.origin+'"]:not([data-no-swup]), a[href^="/"]:not([data-no-swup]), a[href^="#"]:not([data-no-swup])',from:"(.*)",to:"(.*)",in:function(t){var o=new gsap.timeline({onComplete:t});document.querySelector("#swup").style.opacity=0,o.fromTo(document.querySelector("#swup"),1,{opacity:0,y:30},{opacity:1,y:0,ease:Expo.easeOut},0),h(),e(".page-spinner").fadeOut("slow")},out:t=>{new gsap.timeline({onComplete:t}).fromTo(document.querySelector("#swup"),1,{opacity:1,y:0},{opacity:0,y:30,ease:Expo.easeOut},0),e(".page-spinner").fadeIn()}}],v=new Swup({plugins:[new SwupJsPlugin(g),new SwupFormsPlugin({formSelector:"form[data-swup-form]"}),new SwupBodyClassPlugin,new SwupGaPlugin,new SwupScriptsPlugin({head:!1}),new SwupScrollPlugin({doScrollingRightAway:!1,animateScroll:!1})]});document.addEventListener("swup:contentReplaced",t=>{t.stopImmediatePropagation(),console.log("content is replaced"),v.cache.remove("/"),v.cache.remove("/stories/"),v.cache.remove("/directory/"),null!==document.querySelector(".slick")&&e(".slick-initialized").slick("unslick").slick("reinit"),e("#main-nav").removeClass("active"),e("#main-menu").removeClass("show"),e("#homeTopBanner").removeClass("drop"),h(),e(".menu.navbar-toggler").removeClass("open collapsed"),null!==document.querySelector(".page-directory")&&e("#ct_posts_wrap").html("")})}))}));
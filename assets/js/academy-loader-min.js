function resourcesLoad(){null!==document.querySelector(".page-blog")&&jQuery((function(a){var t=window.location.protocol+"//"+window.location.host+"/clean-custom/";jQuery.getScript(t+"wp-content/themes/clean-custom/assets/lightcase/src/js/lightcase.js",(function(){a("a[data-rel=lightcase]").lightcase()}),!0),a(document).ready((function(){return a.ajax({url:ft_loadmore_params.ajaxurl,data:a("#ft_filters").serialize(),dataType:"json",type:"POST",beforeSend:function(a){},success:function(t){ft_loadmore_params.current_page=1,ft_loadmore_params.posts=t.posts,ft_loadmore_params.max_page=t.max_page,a("#ft_posts_wrap").html(t.content);new HqyLazyload;a("a[data-rel=lightcase]").lightcase()}}),!1})),a("#ft_filters").change((function(){return a("#ft_posts_wrap").show(),a.ajax({url:ft_loadmore_params.ajaxurl,data:a("#ft_filters").serialize(),dataType:"json",type:"POST",beforeSend:function(t){a("#ft_filters").find(".spinner").fadeIn()},success:function(t){a("#ft_filters").find(".spinner").fadeOut(),ft_loadmore_params.current_page=1,ft_loadmore_params.posts=t.posts,ft_loadmore_params.max_page=t.max_page,a("#ft_posts_wrap").html(t.content);new HqyLazyload;a("a[data-rel=lightcase]").lightcase()},error:function(t){a("#ft_posts_wrap").html('<h5 class="text-center animate pb-5 m-5 dash">Nothing found for your criteria.</h5>'),a("#ft_filters").find(".spinner").fadeOut()}}),!1}))}))}
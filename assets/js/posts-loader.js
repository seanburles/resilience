





function resourcesLoad(){

if (document.querySelector('.page-blog') !== null) { 

jQuery(function($){
	var themeName = 'clean-custom';
	var baseUrl = window.location.protocol + "//" + window.location.host + '/' + themeName + '/';
	jQuery.getScript( baseUrl + 'wp-content/themes/' + themeName + '/assets/lightcase/src/js/lightcase.js', function(){
       // console.log('resources lightcase exists');
       // $('a[data-rel=lightcase]').lightcase();
   }, true);
 


	function gsapStagger(){
		// var tl = gsap.timeline({onComplete:reloadHeight})
	  gsap.to(".our-content", {
	    x: "+=50",
	    opacity: 1,
	    duration: .75,
	    stagger: {
	      amount: 2,
	      // from: "center",
	      grid: "auto",
	     // onComplete: myFunction //define callbacks inside the stagger to make them apply to each sub-tween
	    }
	  });
	}

	function reloadHeight(){
		var areaHeight = $('#ct_posts_wrap').height();
		console.log(areaHeight);
		$("#posts-limit-wrap").animate({
	    	height: areaHeight
		},1000);
		// console.log(areaHeight);
	}


 	$(document).ready(function(){
 	


		
		$.ajax({
			url : ct_loadmore_params.ajaxurl,
			data : $('#ct_filters').serialize(), // form data
			dataType : 'json', // this data type allows us to receive objects from the server
			type : 'POST',
			beforeSend : function(xhr){
				// $('#ct_filters').find('button').text('Filtering...');
			},
			success : function( data ){
 				
				// when filter applied:
				// set the current page to 1
				ct_loadmore_params.current_page = 1;
 
				// set the new query parameters
				ct_loadmore_params.posts = data.posts;
 
				// set the new max page parameter
				ct_loadmore_params.max_page = data.max_page;
 
				// change the button label back
				// $('#ct_filters').find('button').text('Apply filter');
 				
				// insert the posts to the container
				$('#ct_posts_wrap').html(data.content);
 				
				gsapStagger();
	
				
				// var hqyLazy = new HqyLazyload();
				// $('.mh').matchHeight();
				// $('a[data-rel=lightcase]').lightcase();
			}
		});
	
		return false;
 			
	});
	/*
	 * Filter
	 */
	$('#ct_filters').change(function(){

	function gsapStaggerOut(){
	 var tlrl = gsap.timeline({onComplete: postChange})
	  tlrl.to(".our-content", {
	    x: "-=50",
	    opacity: 0,
	    duration: .25,
	    stagger: {
	      amount: 2,
	      // from: "center",
	      grid: "auto",
	     //onComplete: gsapStagger(); //define callbacks inside the stagger to make them apply to each sub-tween
	    },
	    onComplete:function(){
		  // postChange();
		}
	  });
	}	



		gsapStaggerOut();

		function postChange(){

		$('#ct_posts_wrap').show();
 		// console.log('Changed');
		$.ajax({
			url : ct_loadmore_params.ajaxurl,
			data : $('#ct_filters').serialize(), // form data
			dataType : 'json', // this data type allows us to receive objects from the server
			type : 'POST',
			beforeSend : function(xhr){
				$('#ct_filters').find('.spinner').fadeIn();
			},
			success : function( data ){
				$('#ct_filters').find('.spinner').fadeOut();
				var originalHeight = $('#ct_posts_wrap').height();
				console.log(originalHeight + 'this is BEFORE data is loaded on change');

				
				// when filter applied:
				// set the current page to 1
				ct_loadmore_params.current_page = 1;
 
				// set the new query parameters
				ct_loadmore_params.posts = data.posts;

				// set the new max page parameter
				ct_loadmore_params.max_page = data.max_page;
 					
				// change the button label back
				// $('#ct_filters').find('button').text('Apply filter');
 				
				// insert the posts to the container


				$('#ct_posts_wrap').html(data.content);

				var areaHeight = $('#ct_posts_wrap').height();
				console.log(areaHeight + 'this is after data is loaded on change');
				$("#posts-limit-wrap").animate({
			    	height: areaHeight
				},1000);
 			// 	var areaHeight = $('#ct_posts_wrap').height();
				// $("#posts-limit-wrap").animate({
				//     height: areaHeight
				// },1000);
				// hide load more button, if there are not enough posts for the second page
				// if ( data.max_page < 2 ) {
				// 	$('#ct_loadmore').hide();
				// } else {
				// 	$('#ct_loadmore').show();
				// }
				var hqyLazy = new HqyLazyload();
				// $('a[data-rel=lightcase]').lightcase();
 				gsapStagger();
			},
			error: function(xhr){
	
				$('#ct_posts_wrap').html('<h5 class="text-center animate pb-5 m-5 dash">Nothing found for your criteria.</h5>');
				$('#ct_filters').find('.spinner').fadeOut();
			 }
		});
		// do not submit the form
		return false;
 		}
	});

 
});

}
}
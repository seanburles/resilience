

$('#ct_filters select').click(function(e)
{
    // Special stuff to do when this link is clicked...
    // Cancel the default action
    e.preventDefault();
});



function resourcesLoad(){

if (document.querySelector('.page-directory') !== null) { 

jQuery(function($){


	var themeName = 'r-mural';
	var baseUrl = window.location.protocol + "//" + window.location.host + '/' + themeName + '/';


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

				var t = new gsap.timeline({paused: true});
				t.to(".resource-content", {
					    x: "=50",
					    opacity: 1,
					    duration: .25,
					    stagger: {
					      amount: .25,
					      // from: "center",
					      grid: "auto",
					     // onComplete: myFunction //define callbacks inside the stagger to make them apply to each sub-tween
					    }
					  });
				t.then(function(res) {

				var areaHeight = $('#ct_posts_wrap').height();	
				$("#posts-limit-wrap").animate({
			    	height: areaHeight
				},500);
				  // console.log('promise resolved')

				});

 				
 				t.play();
	
				
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
		// $('.list__ul').on('click', function(){

		var t1 = new gsap.timeline({paused: true});
				t1.to(".resource-content", {
					    x: "-=50",
					    opacity: 0,
					    duration: .25,
					    stagger: {
					      amount: .25,
					      // from: "center",
					      grid: "auto",
					     // onComplete: myFunction //define callbacks inside the stagger to make them apply to each sub-tween
					    }
					  });
				t1.then(function(res) {
				  // console.log('promise resolved')
				  postChange();
				});

			t1.play();	

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

					var t = new gsap.timeline({paused: true});
					t.to(".resource-content", {
						    x: "=0",
						    opacity: 1,
						    duration: .25,
						    stagger: {
						      amount: .25,
						      // from: "center",
						      grid: "auto",
						     // onComplete: myFunction //define callbacks inside the stagger to make them apply to each sub-tween
						    }
						  });
					t.then(function(res) {
					  // console.log('promise resolved')
				});


 				
 				t.play();

				var areaHeight = $('#ct_posts_wrap').height();
			
				$("#posts-limit-wrap").animate({
			    	height: areaHeight
				},500);
 			
				var hqyLazy = new HqyLazyload();
				// $('a[data-rel=lightcase]').lightcase();
 			
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
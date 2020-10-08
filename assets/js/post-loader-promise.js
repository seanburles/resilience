

// $('#ct_filters select').click(function(e)
// {
//     // Special stuff to do when this link is clicked...
//     // Cancel the default action
//     e.preventDefault();
// });



function resourcesLoad(){

if (document.querySelector('.page-directory') !== null) { 

		// jQuery(function($){


			var themeName = 'r-mural';
			var baseUrl = window.location.protocol + "//" + window.location.host + '/' + themeName + '/';


		 	$(document).ready(function(event){
		 	
				
				$.ajax({
					url : ct_loadmore_params.ajaxurl,
					data : $('#ct_filters').serialize(), // form data
					dataType : 'json', // this data type allows us to receive objects from the server
					type : 'POST',
					beforeSend : function(xhr){
						// $('.title.sort').text('Filtering...');	
						// console.log('try to empty the post wrap')
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
							    x: "0",
							    opacity: 1,
							    duration: .25,
							    stagger: {
							      amount: .25,
							      grid: "auto",
							     // onComplete: myFunction //define callbacks inside the stagger to make them apply to each sub-tween
							    }
							  });
						t.then(function(res) {
							console.log('load first')
							var areaHeight = $('#ct_posts_wrap').height();	
							$("#posts-limit-wrap").animate({
						    	height: areaHeight
							},500);
			
						});

		 				
		 				t.play();
			
					}
				});
			
				return false;
		 			
			});


			/*///////////////////////////////
			 * Filter ON CHANGE
			 *///////////////////////////////
			
			$("#ct_filters").unbind(); 
			$('#ct_filters').change(function(){
			$('#ct_filters').find('.title.sort').text('Filtering...');	
			$('#ct_filters').find('.spinner').fadeIn();


				var timelinePromise = function(){
				return new Promise(function(resolve){
				
					var t1 = new TimelineLite({
						paused: true,
						onComplete: function(){ 
							console.log('on complete resolving')
							resolve(true)
						}
					}).to(".resource-content", {
							    x: "-=50",
							    opacity: 0,
							    duration: .25,
							    stagger: {
							      amount: .25,
							      grid: "auto",
							     // onComplete: myFunction //define callbacks inside the stagger to make them apply to each sub-tween
							    }
							  });

					t1.play();
				});
			}
				
			timelinePromise().then(function(res){ console.log('promise resolved'); postChange(); });

				function postChange(){
				console.log('change promise resolved')
				$('#ct_posts_wrap').show();
		 	

				$.ajax({
					url : ct_loadmore_params.ajaxurl,
					data : $('#ct_filters').serialize(), // form data
					dataType : 'json', // this data type allows us to receive objects from the server
					type : 'POST',
					beforeSend : function(xhr){
						
						// $('#ct_filters').find('.title.sort').text('Filtering...');	
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

							var t2 = new gsap.timeline({paused: true});
							t2.fromTo(".resource-content", {
								    x: "-=50",
								    opacity: 0,
								    duration: .25,
						
								  },{
								    x: "0",
								    opacity: 1,
								    duration: .25,
								    stagger: {
								      amount: .25,
								      grid: "auto",
								     // onComplete: myFunction //define callbacks inside the stagger to make them apply to each sub-tween
								    }
								  });
							t2.then(function(res) {
							  console.log('postchange promise resolved')
						});
		 				
		 					t2.play();

						var areaHeight = $('#ct_posts_wrap').height();
					
						$("#posts-limit-wrap").animate({
					    	height: areaHeight
						},500);
		 			
						var hqyLazy = new HqyLazyload();
						// $('a[data-rel=lightcase]').lightcase();
		 				$('#ct_filters').find('.title.sort').html('Sort&nbsp;by');	
					},
					error: function(xhr){
			
						// $('#ct_posts_wrap').html('<h5 class="text-center animate pb-5 m-5 dash">Nothing found for your criteria.</h5>');
						// $('#ct_filters').find('.spinner').fadeOut();
					 }
				});
				// do not submit the form
				return false;
		 		}
			
			});

		 
		// });

	} else {
		console.log('not-directory');
	}
}
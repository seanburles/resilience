jQuery(function($){
 

	// $('#ft_loadmore').click(function(){
 
	// 	$.ajax({
	// 		url : ft_loadmore_params.ajaxurl, // AJAX handler
	// 		data : {
	// 			'action': 'loadmorebutton', // the parameter for admin-ajax.php
	// 			'query': ft_loadmore_params.posts, // loop parameters passed by wp_localize_script()
	// 			'page' : ft_loadmore_params.current_page // current page
	// 		},
	// 		type : 'POST',
	// 		beforeSend : function ( xhr ) {
	// 			$('#ft_loadmore').text('Loading...'); // some type of preloader
	// 		},
	// 		success : function( posts ){
	// 			if( posts ) {
 
	// 				$('#ft_loadmore').text( 'More posts' );
	// 				$('#ft_posts_wrap').find('.col-sm-3:last-of-type').after( posts ); // insert new posts
	// 				ft_loadmore_params.current_page++;
 
	// 				if ( ft_loadmore_params.current_page == ft_loadmore_params.max_page ) 
	// 					$('#ft_loadmore').hide(); // if last page, HIDE the button
 
	// 			} else {
	// 				$('#ft_loadmore').hide(); // if no data, HIDE the button as well
	// 			}
	// 			var hqyLazy = new HqyLazyload();
	// 			$('.mh').matchHeight();
	// 		}
	// 	});
	// 	return false;
	// });
 

 	$(document).ready(function(){
 
		$.ajax({
			url : ft_loadmore_params.ajaxurl,
			data : $('#ft_filters').serialize(), // form data
			dataType : 'json', // this data type allows us to receive objects from the server
			type : 'POST',
			beforeSend : function(xhr){
				// $('#ft_filters').find('button').text('Filtering...');
			},
			success : function( data ){
 
				// when filter applied:
				// set the current page to 1
				ft_loadmore_params.current_page = 1;
 
				// set the new query parameters
				ft_loadmore_params.posts = data.posts;
 
				// set the new max page parameter
				ft_loadmore_params.max_page = data.max_page;
 
				// change the button label back
				// $('#ft_filters').find('button').text('Apply filter');
 
				// insert the posts to the container
				$('#ft_posts_wrap').html(data.content);
 
				// hide load more button, if there are not enough posts for the second page
				// if ( data.max_page < 2 ) {
				// 	$('#ft_loadmore').hide();
				// } else {
				// 	$('#ft_loadmore').show();
				// }
				var hqyLazy = new HqyLazyload();
				$('.mh').matchHeight();
			}
		});
 
		// do not submit the form
		return false;
 
	});
	/*
	 * Filter
	 */
	$('#ft_filters').change(function(){
 
		$.ajax({
			url : ft_loadmore_params.ajaxurl,
			data : $('#ft_filters').serialize(), // form data
			dataType : 'json', // this data type allows us to receive objects from the server
			type : 'POST',
			beforeSend : function(xhr){
				// $('#ft_filters').find('button').text('Filtering...');
			},
			success : function( data ){
 
				// when filter applied:
				// set the current page to 1
				ft_loadmore_params.current_page = 1;
 
				// set the new query parameters
				ft_loadmore_params.posts = data.posts;
 
				// set the new max page parameter
				ft_loadmore_params.max_page = data.max_page;
 
				// change the button label back
				// $('#ft_filters').find('button').text('Apply filter');
 
				// insert the posts to the container
				$('#ft_posts_wrap').html(data.content);
 
				// hide load more button, if there are not enough posts for the second page
				// if ( data.max_page < 2 ) {
				// 	$('#ft_loadmore').hide();
				// } else {
				// 	$('#ft_loadmore').show();
				// }
				var hqyLazy = new HqyLazyload();
				$('.mh').matchHeight();
			}
		});
 
		// do not submit the form
		return false;
 
	});


 
});
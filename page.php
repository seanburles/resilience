<?php get_header();?>
	
		<section class="container">
			
			

			<div class="row">
				<div class="col-sm-12">
				<h2 class="dark-blue pt-5 ct-left"><?php the_title();?></h2>

				 	<?php 
						if ( have_posts() ) {
							while ( have_posts() ) {
								the_post(); 
								//
								// Post Content here
								//
								the_content();
							} // end while
						} // end if
						?>

					</div>	
				<div class="col-sm-4 ct-right"></div>
			</div>		

		</section>
	
<?php get_footer(); ?>

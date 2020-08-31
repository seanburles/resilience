<?php get_header();?>

	<div class="page-404">
          <div class="sticky-wrap">
                  <section class="resource-image multiply lazy" data-src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/open-graph.jpg">
                            <div class="content d-flex justify-content-center flex-column">
                                     
                                <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/page-what-we-do/clouds-01_animated.svg" alt="cloud connectors">
                                <img class="clouds turbulence" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/page-what-we-do/just-clouds.png" alt="clouds">
                                <h1 class="green align-self-center turbulence">404</h1>
                                             
                                       
                            </div>
                  </section>
           </div>  
		<section class="py-5 text-center">
			<div class="container py-5">
				<div class="row">
					<div class="col-sm-12">
						<h3 class="green">Sorry, the page you are looking for doesn't exist.</h3>
						<h5 class="dash py-5">Perhaps you are here because:</h4>
						
							<p class="large">The page has moved</p>
				
						<a href="<?php echo home_url();?>" class="btn grn lrg mt-4">Home</a>
					</div>
				</div>
			</div>
		</section>

	</div>

<?php get_footer(); ?>


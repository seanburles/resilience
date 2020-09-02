<?php get_header();?>

	<div class="page-404">
          <section class="sixteen-nine lazy" data-src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/landing-page/mural-1.jpg">
                    <div class="content d-flex justify-content-center flex-column">
                        <a class="align-self-center white" href="<?php echo home_url(); ?>">
                            <img class="r-logo" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/resilience.svg" alt="Resilience">
                            <h1 class="align-self-center white text-center">404</h1>
                        </a>
                    </div>
          </section>

		<section class="py-5 text-center">
			<div class="container py-5">
				<div class="row">
					<div class="col-sm-12">
						<h3 class="green">Sorry, the page you are looking for doesn't exist.</h3>
						<h5 class="dash py-5">Perhaps you are here because:</h4>

							<p class="large">The page has moved</p>

						<a href="<?php echo home_url(); ?>" class="btn btn-dark">Home</a>
					</div>
				</div>
			</div>
		</section>

	</div>

<?php get_footer();?>


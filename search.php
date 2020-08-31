<?php get_header(); ?>

	<div class="page-search">

		<section class="light-blue-bg p-5">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2>Search</h2>
						<h3>You searched for: <?php echo get_search_query(); ?></h3>
						<?php if ( have_posts() ) : ?>
							<?php
								// Start the Loop.
								while ( have_posts() ) :
									the_post();

									the_content();

								
								endwhile;

							else : ?>
								
								<h3>No Posts were found</h3>

							<?php endif; ?>
							
					</div>
				</div>
			</div>
		</section>
		
	</div>

<?php get_footer(); ?>


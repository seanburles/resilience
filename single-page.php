

<?php get_header();?>
	

<div class="single-page-template">


		<section class="headline">
				<div class="container-fluid rel">
				
					<div class="row">
						<div class="featured-content d-flex">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xl-1 col-md-1 col-sm-2"></div>
									<div class="col-xl-9 col-md-9 col-sm-9">
										<h1 class="lead ct-left"><?php the_title();?></h1>
										<?php if( get_field('subline') ): ?>
											<h2 class="ct-gold py-5 ct-right">
												<?php the_field('subline');?>
											</h2>
										<?php endif; ?>

										<?php if (has_excerpt() ) : ?>
												<div class="pb-5">
														<?php the_excerpt();?>
												</div>		
										<?php endif; ?>
												
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</section>
	
		<?php get_template_part( 'template-parts/header/header', 'address' ); ?>

	<?php if (get_field('featured_image')):?>
	<?php $image = get_field('featured_image');?>
			<div class="four-three lazy" data-src="<?php echo $image['url']; ?>"></div>
	<?php endif;?>

			<section class="work-loop ct-left">
				<div class="container-fluid">
						<div class="row lax ct-right" data-lax-preset="driftLeft-20 fadeIn">
								<div class="col-xl-2 col-sm-1"></div>
								<div class="col-md-10">
									
										 	<?php 
												if ( have_posts() ) {
													while ( have_posts() ) {
														the_post(); ?>
															<div class="py-5">
																<?php the_content();?>
															</div>	
																
														<? } // end while
													} // end if ?>
												

							</div>
						</div>
				

				</div>
			</section>



			
	</div>
<?php get_footer(); ?>

<?php get_header();?>
	<div class="page-faq">
		<section class="gradient header">
			
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
					<h1 class="title black">FREQUENTLY ASKED QUESTIONS</h1>

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
				</div>
			</div>
			
		</section>
		
		<section>	
			<div class="container pb-5">
				<div class="row">
					<div class="col-sm-12 accordio-wrap">

						<?php $accordion = 1;?>

						<?php if( have_rows('faq_accordion') ): ?>
						<?php while ( have_rows('faq_accordion') ) : the_row(); $accordion++; ?>

							<h1 class="accordion-title pt-5 pb-3"><?php the_sub_field('accordion_title');?></h1>
							
								<!-- <?php //echo $accordion;?> -->

									<?php if( have_rows('add_accordion') ) : $counter = 1; ?>
										
										<div id="accordion-<?php echo $accordion; ?>" class="accordion-container my-3">

											<?php while ( have_rows('add_accordion') ) : the_row(); $counter++; ?>
												<div class="card">
													<div class="accordion-title p-0" id="heading-<?php echo $counter; ?>">
														<a class="collapsed" data-toggle="collapse" 
														data-target="#collapse-<?php echo $accordion;?>-<?php echo $counter; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $counter; ?>">
															<h2 class="mb-0 pb-3 pt-4">
																	<?php the_sub_field('accordion_title'); ?>
															</h2>
														</a>
													</div>
													<div id="collapse-<?php echo $accordion;?>-<?php echo $counter; ?>" class="collapse accordion-content" aria-labelledby="heading-<?php echo $counter; ?>" data-parent="#accordion-<?php echo $accordion; ?>">
														<div class="card-body gray">
															<p>
																<?php echo get_sub_field('accordion_content'); ?>
															</p>
														</div>
													</div>
												</div>
											<?php endwhile; ?>

										</div>

									<?php endif; ?>

				   		<?php  endwhile; ?>
					<?php endif; ?> 

					</div>

					</div>
				</div>
			</div>
			

		</section>

	</div>
<?php get_footer(); ?>

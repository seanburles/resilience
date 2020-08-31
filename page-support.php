<?php get_header();

global $post;
$post_slug = $post->post_name;
?>
<div class="page-<?php echo $post_slug;?>">


    <div class="sticky-wrap">
        <section class="header lazy" data-src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/page-<?php echo $post_slug;?>/header-bg.jpg">
           <div class="container">
               <div class="row">
	                <div class="col-lg-7">
	                    <h1>HELP IS A<span class="red"> CLICK AWAY</span></h1>
	                    <p class="subline">Dive into frequently asked questions by topic, or reach out for any questions or thoughts you might have.</p>
	                </div>
	                <div class="col-lg-5">

	                </div>
	            </div>
	        </div>   
   	 	</section>
	</div>  

	<div class="body-wrap">

	<section class="py-5 mb-5">	
			<div class="container pb-5">
				<h1 class="alternate text-center">FAQS</h1>
				<div class="row">
					<div class="col-sm-12 accordio-wrap">

						<?php $accordion = 1;?>

						<?php if( have_rows('faq_accordion') ): ?>
						<?php while ( have_rows('faq_accordion') ) : the_row(); $accordion++; ?>

							 <h5 class="accordion-title pt-5 pb-3 green dash"><?php the_sub_field('accordion_title');?></h5>
							
								<!-- <?php //echo $accordion;?> -->

									<?php if( have_rows('add_accordion') ) : $counter = 1; ?>
										
										<div id="accordion-<?php echo $accordion; ?>" class="accordion-container my-3">

											<?php while ( have_rows('add_accordion') ) : the_row(); $counter++; ?>
												<div class="card">
													<div class="accordion-title p-0" id="heading-<?php echo $counter; ?>">
														<a class="collapsed" data-toggle="collapse" 
														data-target="#collapse-<?php echo $accordion;?>-<?php echo $counter; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $counter; ?>">
															 <p class="mb-2 pb-3 pt-4 large">
																	<?php the_sub_field('accordion_title'); ?>
															</p>
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
    <!-- end body wrap -->
        
</div>
  
<?php get_footer(); ?>

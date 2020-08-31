<?php get_header();?>
		


		<div class="page-archive-case-study">


			<section class="headline">
				<div class="container-fluid rel">
					<div class="row">
						<div class="featured-content d-flex">
							<div class="container-fluid">
								<div class="row">
									<div class="col-lg-2 col-sm-1"></div>
									<div class="col-md-10">
										<h1 class="lead ct-left">work <br>archive</h1>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-5 px-0"></div>
						<div class="col-sm-7 px-0">
							<div class="header-one-one">
							</div>
						</div>
					</div>
					<?php get_template_part( 'template-parts/header/header', 'address' ); ?>
				</div>
			</section>
				
				


			<section class="initiatives ct-right">

				<div class="container">
					
					<?php 
						$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
						$temp = $wp_query; 
						$wp_query = null; 
						$args = array(
					        'post_type' => 'casestudy',
					        'orderby'   => 'meta_value',
					        'order' => 'DESC',
					        'posts_per_page' => 10,
					        'paged' => $paged
					        );
						  $wp_query = new WP_Query($args); 
					
						  while ($wp_query->have_posts()) : $wp_query->the_post();
						?>



						<?php if($wp_query->current_post % 2 == 0) : ?>

				
							<div class="row lax ct-up" data-lax-preset="driftLeft-20 fadeIn">
								<div class="col-lg-1"></div>
								<div class="col-lg-7 ">
									<?php $image = get_field('featured_image');?>
									<div class="sixteen-nine lazy contain" data-src="<?php echo $image['sizes']['medium-width']; ?>"></div>
									<span><?php $post_tags = get_the_tags();
										if ( $post_tags ) {
									    foreach( $post_tags as $tag ) {
									     echo '<span class="tag ">' . $tag->name . ' <span>+</span></span> '; 
									    }
										};?>
									</span>
								</div>
								<div class="col-lg-3">
									<h2 class="ct-gold"><?php the_title();?></h2>
									<span class=""><?php the_excerpt();?></span>
									<a class="gold" href="<?php the_permalink();?>">read more</a>
								</div>
								<div class="col-lg-1"></div>
							</div>


						<?php elseif($wp_query->current_post % 2 == 1) : ?>
							
							<div class="row flex-row-reverse lax  ct-up" data-lax-preset="driftRight-20 fadeIn" >
								<div class="col-lg-1"></div>
								<div class="col-lg-7">
									<?php $image = get_field('featured_image');?>
									<div class="sixteen-nine lazy contain" data-src="<?php echo $image['sizes']['medium-width']; ?>"></div>
									<?php $post_tags = get_the_tags();
										if ( $post_tags ) {
									    foreach( $post_tags as $tag ) {
									    echo '<span class="tag ">' . $tag->name . ' <span>+</span></span> '; 
									    }
										};?>
									
								</div>
								
								<div class="col-lg-3">
									<h2 class="ct-gold"><?php the_title();?></h2>
									<span class=""><?php the_excerpt();?></span>
									<a class="gold" href="<?php the_permalink();?>">read more</a>
								</div>
								<div class="col-lg-1"></div>
							</div>

					<?php endif; ?>
								

						<?php endwhile; ?>

						<nav>
						    <?php previous_posts_link('&laquo; Newer') ?>
						    <?php next_posts_link('Older &raquo;') ?>
						</nav>

						<?php 
						  $wp_query = null; 
						  $wp_query = $temp;  // Reset
						?>
				
				</div>
			</section>


			<section class="contact-us ct-gold-bg text-center">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<h2 class="white">have the right project for us? <a href="mailto:Tamon@creativetheory.agency"><span>get in touch</span></a></h2>
						</div>	
					</div>
				</div>
			</section>
				
				
		</div>
	
<?php get_footer(); ?>


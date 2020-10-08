<?php get_header();

global $post;
$post_slug = $post->post_name;
?>
    <div class="page-<?php echo $post_slug;?> single-resource">


          <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-sm-12">
                            <?php if(get_field('website_link')):?>
                                <a href="<?php the_field('website_link');?>" target="_blank" rel="noopener noreferrer"><h3><?php the_title();?></h3></a>
                                <?php else:?>
                                <h3><?php the_title();?></h3>   
                            <?php endif;?>
                        </div>            
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <?php if(get_the_content()):?>
                                    <div class="py-5"><?php the_content();?></div>
                                <?php else:?>
                                    <?php echo '<p class="small">' . get_the_excerpt() . '</p>';?>
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-12 social">
                            <?php if( have_rows('social_media') ): ?>
                            <?php while( have_rows('social_media') ): the_row(); 
                                // Get sub field values.
                                $twitter = get_sub_field('twitter');
                                $instagram = get_sub_field('instagram');
                                $facebook = get_sub_field('facebook');

                                ?>
                            
                                    <?php if($twitter):?>
                                        <a href="<?php echo $twitter;?>" target="_blank" rel="noopener noreferrer">Twitter</a>
                                    <?php endif;?>    
                                    <?php if($instagram):?>
                                        <a href="<?php echo $instagram;?>" target="_blank" rel="noopener noreferrer">Instagram</a>
                                    <?php endif;?>    
                                    <?php if($facebook):?>
                                        <a href="<?php echo $facebook;?>" target="_blank" rel="noopener noreferrer">Facebook</a>
                                    <?php endif;?>   
                             
                           
                            <?php endwhile; ?>
                        <?php endif; ?>
                        </div>
                    </div>
                
               
            </div>            



    </div>
  
<?php get_footer(); ?>

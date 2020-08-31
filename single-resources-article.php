<?php get_header();

global $post;
$post_slug = $post->post_name;
?>



<div class="page-<?php echo $post_slug;?> single-resource">
     <?php  $image = get_field('featured_image');
            $imgurl = $image['url'];?> 

    <div class="sticky-wrap">
        <section class="resource-image multiply lazy" data-src="<?php echo $imgurl; ?>"></section>
    </div>  

    <div class="body-wrap">
        <article>
     <?php if( have_rows('article_resource_fields') ): ?>
            <?php while( have_rows('article_resource_fields') ): the_row(); ?>


                <meta property="og:title" content="<?php the_title(); ?>">
                <meta property="og:image" content="<?php echo $imgurl; ?>">
                <meta temprop="name" content="<?php the_title(); ?>">
                <meta itemprop="datePublished" content="<?php the_sub_field('date'); ?>">
                <meta itemprop="author" content="<?php the_sub_field('author'); ?>">



        <section class="article-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 social">
                        <div>
                            <!-- Linked in -->
                            <p>
                                <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink() ?>&amp;title=<?php the_title(); ?>&amp;summary=&amp;source=<?php bloginfo('name'); ?>" target="_new" rel="noopener noreferrer">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33.33 33.33">
                                      <circle cx="16.49" cy="16.27" r="15" style="fill: #231f20"/>
                                      <path d="M10.05,7.83a2,2,0,1,1-2,2A2,2,0,0,1,10.05,7.83ZM8.3,13.39h3.49V24.6H8.3Z" style="fill: #fff"/>
                                      <path d="M14,13.39h3.34v1.54h.05a3.65,3.65,0,0,1,3.29-1.81c3.52,0,4.18,2.32,4.18,5.33V24.6H21.34V19.15c0-1.3,0-3-1.8-3s-2.09,1.41-2.09,2.88V24.6H14Z" style="fill: #fff;fill-rule: evenodd"/>
                                    </svg>
                                </a> 
                            </p>
                            <!-- Facebook -->
                             <p>
                                <a href="https://www.facebook.com/sharer?u=<?php the_permalink();?>&t=<?php the_title(); ?>;" target="_blank" rel="noopener noreferrer">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33.33 33.33">
                                        <circle cx="17.04" cy="17.04" r="15" style="fill: #231f20"/>
                                        <path d="M24.34,8.84H9.74a.9.9,0,0,0-.9.9v14.6a.9.9,0,0,0,.9.9H17.6V18.89H15.46V16.41H17.6V14.59a3,3,0,0,1,3.18-3.28,17.14,17.14,0,0,1,1.91.1v2.22H21.38c-1,0-1.22.49-1.22,1.2v1.58h2.45l-.32,2.48H20.16v6.35h4.18a.9.9,0,0,0,.9-.9V9.74A.9.9,0,0,0,24.34,8.84Z" style="fill: #fff;fill-rule: evenodd"/>
                                    </svg>
                                </a>
                            </p>
                           <!-- Twitter -->
                            <p> 
                                <a title="Click to share this post on Twitter" href="http://twitter.com/intent/tweet?text=Currently reading <?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" target="_blank" rel="noopener noreferrer">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33.33 33.33">
                                        <circle cx="16.6" cy="16.71" r="15" style="fill: #231f20"/>
                                        <path d="M25,11.5A7,7,0,0,1,23,12a3.47,3.47,0,0,0,1.51-1.91,6.83,6.83,0,0,1-2.19.84,3.45,3.45,0,0,0-6,2.36,3.33,3.33,0,0,0,.09.78,9.75,9.75,0,0,1-7.1-3.6,3.4,3.4,0,0,0-.47,1.73,3.44,3.44,0,0,0,1.53,2.87,3.47,3.47,0,0,1-1.56-.43v.05a3.44,3.44,0,0,0,2.77,3.37,3.45,3.45,0,0,1-.91.13,3.5,3.5,0,0,1-.65-.07,3.46,3.46,0,0,0,3.22,2.4A7,7,0,0,1,9,22a7.38,7.38,0,0,1-.82,0,9.81,9.81,0,0,0,15.09-8.26c0-.15,0-.3,0-.45A7.27,7.27,0,0,0,25,11.5Z" style="fill: #fff;fill-rule: evenodd"/>
                                    </svg>
                                </a>
                            </p>





                            <h5>Related</h5>
                        </div>    
                    </div>
                    <div class="col-md-10">
                        <h2><?php the_title();?></h2>
                        <?php if(get_sub_field('subhead')):?>
                            <h3 class="green"><?php the_sub_field('subhead'); ?></h3>
                        <?php endif;?>
                        
                        <?php if(get_sub_field('author')):?>
                            <p class="mb-1 mt-3"><?php the_sub_field('author'); ?></p>
                        <?php endif;?>
                         <?php if(get_sub_field('date')):?>
                            <p class="mb-4 pb-4"><?php the_sub_field('date'); ?></p>
                        <?php endif;?>

                        <?php if(get_sub_field('intro_text')):?>
                            <p class="subhead"><?php the_sub_field('intro_text'); ?></p>
                        <?php endif;?>

                    </div>
                </div>
            </div>
        </section>
       

           
                    


                 

                    <?php if( have_rows('article_layout') ): ?>
                        <?php while( have_rows('article_layout') ): the_row(); ?>
                    
                        <!-- WYSIWYG Layout Start -->

                            <?php if( get_row_layout() == 'wysiwyg' ): ?>
                                <section>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-10">
                                                <?php the_sub_field('wysiwyg'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            <?php endif; ?>

                        <!-- WYSIWYG Layout End -->    
                            
                        <!-- Text / Quote Layout Start -->

                            <?php if( get_row_layout() == 'text_and_quote' ): ?>
                                <section class="text-and-quote overflow-x-hidden">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p><?php the_sub_field('wysiwyg'); ?></p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="info-list-block trigger">
                                                            <div class="inner-block">
                                                                <h5 class="headline"><?php the_sub_field('quote'); ?></h5>
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>         
                            <?php endif; ?>

                        <!-- Text / Quote Layout End -->  


                        <!-- Image Layout Start -->  

                        <?php if( get_row_layout() == 'image' ): 
                            $image = get_sub_field('image'); 
                            $imageUrl = $image['url'];
                            $imageThmb = $image['sizes']['thumbnail']; ?>
                            
                            <section class="wysiwyg">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="image-wrap">
                                                <img src="<?php echo $imageThmb;?>" class="lazy img-fluid w-100" data-src="<?php echo $imageUrl;?>" alt="<?php echo $image['alt'];?>">
                                                <p class="caption"><?php echo $image['caption'];?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        <?php endif; ?>
                      
                        <!-- Image Layout End -->    



                        <?php endwhile; ?>
                    <?php endif; ?>




                <?php endwhile; ?>
            <?php endif; ?>

        </article>
    </div>  
    <!-- end body wrap -->
        
</div>
  
<?php get_footer(); ?>

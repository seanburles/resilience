
  <!-- Header Banner for front page -->
<!--   <?php if( have_rows('news_ticker', 27) ):  ?>
       <section class="home-press-awards slick">

          <div class="container">
              <div class="home-press-awards-slick">
                  <?php while( have_rows('news_ticker', 27) ): the_row(); 
                        $title = get_sub_field('title');
                        $link = get_sub_field('link');
                        $file = get_sub_field('file'); ?>

                        <div class="item">
                            <?php if ($link):?>
                                    <a href="<?php echo $link;?>" class="white"><p class="mb-0"><?php echo mb_strimwidth($title, 0, 50, '...');?> | READ NOW</p></a>
                            <?php else:?>
                                    <a href="<?php echo $file;?>" class="white"><p class="mb-0"><?php echo mb_strimwidth($title, 0, 50, '...');?> | READ NOW</p></a>  
                            <?php endif;?>
                        </div>
                  <?php endwhile; ?>
                
              </div>
          </div>

      </section>
  <?php endif; ?> -->




  <!-- Header Banner for front page -->

       <section class="home-press-awards slick">

          <div class="container">
              <div class="home-press-awards-slick">
                 

                        <div class="item">
                           
                              <a href="<?php echo $link;?>" class="white"><p class="mb-0">PLOOOOP | READ NOW</p></a>
                        
                        </div>
                
                
              </div>
          </div>

      </section>
 
  <!-- Header Banner for front page -->
  <?php if( have_rows('press_and_awards', 12) ):  ?>
       <section class="home-press-awards">

          <div class="container">
              <div class="home-press-awards-slick">
                  <?php while( have_rows('press_and_awards', 12) ): the_row(); 
                      $title = get_sub_field('title');
                      $link = get_sub_field('link');?>
                      
                              <!-- Slide Start -->
                              <div class="item">
                                  <?php if ($title):?>
                                       <a href="<?php echo $link;?>" class="white"><p class="mb-0"><?php echo $title;?> | READ THE REPORT</p></a>
                                  <?php endif;?>
                              </div>
                              <!-- Slide End -->
                  <?php endwhile; ?>
                
              </div>
          </div>

      </section>
  <?php endif; ?>



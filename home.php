<?php get_header();?>

<div class="page-blog">


    <!-- Body -->

    <div class="body-wrap">
             <section class="filter">
                <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                     
                 
                            <form id="ct_filters" class="select-values" action="#">
                                    <div class="form-group row">
                                    
                                        <div class="col-form-label col-12">
                            
                                            <div class="d-flex flex-wrap justify-content-around">
                                                  <div class="filter-card">
                                                    <label>
                                                        <input type="radio" name="filter" value="ciscoguides">
                                                        <div class="button">
                                                            <div class="info-card">
                                                                <div class="content">
                                                                   <?php get_template_part( 'assets/images/page-resources/cisco-guides' ); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div class="filter-card">
                                                    <label>
                                                        <input type="radio" name="filter" value="collateral">
                                                        <div class="button">
                                                            <div class="info-card">
                                                                <div class="content">
                                                                   <?php get_template_part( 'assets/images/page-resources/shieldx-collateral' ); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>    
 
                                                
                                             <!--    <div class="filter-card">
                                                    <label>
                                                      <input type="radio" name="filter" value="webinars">
                                                        <div class="button">
                                                            <div class="info-card">
                                                                <div class="content">
                                                                    <?php get_template_part( 'assets/images/page-resources/webinars' ); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div> -->
                                                <div class="filter-card">
                                                    <label>
                                                        <input type="radio" name="filter" value="video">
                                                        <div class="button">
                                                            <div class="info-card">
                                                                <div class="content">
                                                                   <?php get_template_part( 'assets/images/page-resources/videos' ); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                    </div>
                                                    <div class="filter-card">
                                                    <label>
                                                        <input type="radio" name="filter" value="papersreports">
                                                        <div class="button">
                                                            <div class="info-card">
                                                                <div class="content">
                                                                   <?php get_template_part( 'assets/images/page-resources/papers-and-reports' ); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>

                                     
                                                <div class="filter-card">
                                                    <label>
                                                        <input type="radio" name="filter" value="casestudy">
                                                        <div class="button">
                                                            <div class="info-card">
                                                                <div class="content">
                                                                   <?php get_template_part( 'assets/images/page-resources/case-studies' ); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>


                                        </div>

                                        
                                        <div class="d-flex justify-content-center pt-3 pb-3">
                                            <label>
                                              <input type="radio" name="filter" value="all">
                                               <div class="btn grn">
                                                    
                                                    VIEW ALL
                                                    
                                                </div>
                                            </label>
                                        </div> 

                                        
                                        <div class="d-flex justify-content-center pb-5">
                                            <div id="resource-loader"  class="spinner"></div>
                                        </div> 
                                                                            



                                   <!--          <?php 
                                                  $descendant= array('child_of'=>3);
                                                  $categories = get_categories($descendant);

                                                   echo '<select class="select-css" name="categoryfilter"><option value="">SUBJECT</option>';
                                                  foreach($categories as $category) :
                                                      echo '<option value="' . $category->term_id . '">' . $category->name . '</option>'; // ID of the category as the value of an option
                                                  endforeach;
                                                  echo '</select>';
                                                  ?> -->

           
                                        </div>                                                           
                                                            
                                        <!-- required hidden field for admin-ajax.php -->
                                        <input type="hidden" name="action" value="ftfilter" />
                                    </div>
                                    <!-- <button>Apply Filters</button> -->
                            </form>

                        </div>
                    </div>    
                </div>           
                            
                            <div id="posts-limit-wrap" class="container">
                                <div id="ct_posts_wrap" class="row">

                                    <!-- Posts will be here -->

                                </div>
                            </div>    
                        
                
            
            </section>
    </div> <!-- Body -->

</div><!-- End Wrap -->

<?php get_footer(); ?>
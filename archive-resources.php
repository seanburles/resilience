<?php get_header();

// global $post;
// $post_slug = $post->post_name;

?>
    <div class="page-resources">

        <div class="sticky-wrap">
          <section class="header lazy" data-src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/page-resources/header-bg.jpg">
                 <div class="container">
                     <div class="row">
                         <div class="col-lg-8 col-12">
                           <h1>A LIBRARY OF <span class="red">DATA CENTER CLOUD SECURITY</span> KNOWLEDGE</h1>
                            <p class="subline">Information for beginners and experts on the new approach to security.</p>
                         </div>
                         <div class="col-lg-4">
                           
                         </div>
                     </div>
                 </div>   
            </section>
        </div>  
 
        <div class="body-wrap">
            <section class="crush">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-10 mx-auto">
                            <h3 class="pb-3">Want to Crush Cloud Complexity?</h3>
                            <p class="large">Here you’ll find case studies, detailed white papers, videos, webinars, and thought&#8209;provoking guides that help support your security solution education. </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="filter">
                <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <span class="green-bar"></span>
                          <!--   <h3>FILTER</h3> -->
                            <form id="ft_filters" class="select-values" action="#">
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

                            <div id="ft_posts_wrap">

                                <!-- Posts will be here -->

                            </div>
                        

                          
                            
    
                    </div>
                </div>
                
            </div>
            </section>
        </div>
		



	</div>

<?php get_footer(); ?>


<?php get_header();?>
<?php
global $post;
$post_slug = $post->post_name;
?>
<div class="page-<?php echo $post_slug; ?>">

<div style="height: 400px;"></div>
            <section class="filter">
                <div class="container">

                <div class="row">
                    <div class="col-sm-12">
                        <span class="green-bar"></span>
                          <!--   <h3>FILTER</h3> -->
                            <form id="ft_filters" class="select-values" action="#">
                                    <div class="form-group row">

                                        <div class="col-form-label col-12">


                                                    <label>
                                                        <input type="radio" name="filter" value="ciscoguides">
                                                            <div class="button">
                                                            radio button
                                                            </div>
                                                    </label>


                                                    <label>
                                                        <input type="radio" name="filter" value="collateral">
                                                        <div class="button">
                                                            <div class="button">
                                                                radio button
                                                            </div>
                                                        </div>
                                                    </label>



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




                                            <?php
// $descendant = array('child_of' => 3);
// $categories = get_categories($descendant);

// echo '<select class="select-css" name="categoryfilter"><option value="">SUBJECT</option>';
// foreach ($categories as $category):
//  echo '<option value="' . $category->term_id . '">' . $category->name . '</option>'; // ID of the category as the value of an option
// endforeach;
// echo '</select>';
// if( $terms = get_terms( array(
//     'post_type'
//     'taxonomy' => 'category', // to make it simple I use default categories
//     'orderby' => 'name'
// ) ) ) :
//     // if categories exist, display the dropdown
//     echo '<select name="categoryfilter"><option value="">Select category...</option>';
//     foreach ( $terms as $term ) :
//         echo '<option value="' . $term->term_id . '">' . $term->name . '</option>'; // ID of the category as an option value
//     endforeach;
//     echo '</select>';
// endif;

?>
                                    <?php wp_dropdown_categories('resources');?>


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
<?php get_footer();?>
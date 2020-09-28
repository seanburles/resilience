<?php get_header();?>
<?php
global $post;
$post_slug = $post->post_name;
?>
<div class="page-<?php echo $post_slug; ?>">

<div style="height: 400px;"></div>
<section class="lead-in">
                    <div class="container">
                <h1 class="orange">Directory & Resources</h1>
                <div class="row">
                    <div class="col-sm-6">
                   <h3>Take a deep dive into our 
Directory and discover a multitude of resources ranging from organizations, charities, and everything in between. In partnership with Capital One, we have curated an extensive list of information and links to companies and programs dedicated to helping with the complexities of the world we live in today. With helpfulness in mind, this directory provides information on programs, grants, mental health resources, free educational courses, and minority-owned businesses to support.</h3>
                    </div>
                    <div class="col-sm-6">
                        <h3>Education</h3>
                        <p>Education Resources in the form of books, articles, videos, and podcasts on various topics such as immigration, Black Lives Matter, and intersectionality. </p>

                        <h3>Mental Health</h3>
                        <p>Community impact starts from within. Taking care of your mind is just as important as taking care of your body. These resources are specifically catered towards Black and brown communities and provide therapists, financial assistance, and training for therapeutic practitioners. </p>

                        <h3>Job Opportunities</h3>
                         <p>Aimed to drive economic and social advancement by providing job opportunities and tools to better prepare for the rigorous job search of today. Opportunities include connecting employers and employees and open positions in various industries.</p>

                        <h3>Food Services</h3>
                         <p>Distributing food where it is needed the most. Providing food for individuals and families in need with the help of farmers, wholesalers, restaurants, and fellow community members.</p>

                        <h3>Minority-Owned Businesses</h3>
                         <p>This collection of minority-owned businesses includes companies ranging from beauty products to PPE items. Supporting small businesses makes big impacts on communities all around the globe.</p>

                        <h3>Grants</h3>
                         <p>Charities, organizations, companies, and programs dedicated to providing financial assistance to those affected by COVID-19 and the racial pandemic, including minority communities, frontline employees, artists, and service workers.</p>
                    </div>
                </div>
            </section>
            
            <section class="filter">
                <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                            <form id="ct_filters" class="select-values container" action="#">
                                    <div class="form-group row">

                                        <div class="col-form-label col-12">


                                            <div class="d-flex">
                                                <span class="title">Sort by</span>
                                                <div class="select-box col px-0">
                                                    <?php
                                                        $tax_args = array(
                                                        	'taxonomy' => 'resource-types',
                                                        	'show_option_all' => 'All',
                                                        	'orderby' => 'name',
                                                        	'show_count' => 0,
                                                        	'hierarchical' => 1,
                                                        	'option_none_value' => '-1',
                                                        	'class' => 'btn',
                                                        );
                                                        wp_dropdown_categories($tax_args);?>
                                                </div>
                                            </div>



                                        </div>


                                        <div class="d-flex justify-content-center pb-5">
                                            <div id="resource-loader"  class="spinner"></div>
                                        </div>

                                        <!-- required hidden field for admin-ajax.php -->
                                        <input type="hidden" name="action" value="ctfilter" />
                                    </div>
                                    <!-- <button>Apply Filters</button> -->
                            </form>

                            <div id="posts-limit-wrap">
                                <div id="ct_posts_wrap" class="container">

                                    <!-- Posts will be here -->

                                </div>
                            </div>




                    </div>
                </div>

            </div>
            </section>
</div>
<?php get_footer();?>
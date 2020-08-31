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
                    <h1>DEDICATED TO <span class="red">CRUSHING CLOUD COMPLEXITY</span></h1>
                    <p class="subline">Make security the easiest thing<br class="medium"> you do in the cloud.</p>
                </div>
                <div class="col-lg-5">

                </div>
            </div>
        </div>   
    </section>
</div>  

<div class="body-wrap">

    <section class="headquartered">
        <div class="container">
            <div class="row">
               <div class="col-xl-10 mx-auto col-12">
                   <h3 class="pb-5"><span class="green">Headquartered in Silicon Valley</span>, ShieldX is funded and founded by a consortium of veteran investors, serial entrepreneurs, and colleagues from well-known security companies including Carbon Black, Cylance, Digital Guardian, FireEye, ForcePoint, Fortify, Imperva, Intel, Juniper, McAfee and NitroSecurity. Our management team has 86 patents, experienced four IPOs and six acquisitions.</h3>

                   <div class="row">
                       <div class="col-md-6">
                           <p class="large">We all grew up with a “defend the north-south” mentality and didn’t think much about east-west defense. In a cloud-native future, however, east-west network traffic is as risk-laden as north-south was in the “old” days. As enterprises place their data centers in the cloud, you’ve essentially exposed your crown jewels. Enterprises are now realizing just how much security and compliance postures become downgraded by a move to the cloud. That’s the problem ShieldX set out to solve.</p>
                       </div>
                       <div class="col-md-6">
                           <div class="info-list-block trigger">
                                <div class="inner-block">
                                   <h5 class="headline">
                                       Along the way, we attracted the who’s who of cybersecurity as investors, advisors and customers, including:
                                   </h5>
                                   <ul class="bullets">
                                       <li>Former CEO of Symantec</li>
                                       <li>Founder and former CEO of FireEye</li>
                                       <li>Former COO of Symantec</li>
                                       <li>Former president, Palo Alto Networks</li>
                                       <li>CISOs from leading banks, retail and manufacturing </li>
                                   </ul>
                               </div>     
                           </div>
                       </div>
                   </div>
               </div>
           </div>
        </div>
    </section>

    <section class="our-people">

        <div class="d-flex">
            <div>
                <h2 class="large">OUR PEOPLE</h2>
                <h5 class="dash green">MANAGEMENT</h5>
            </div>
        </div>    



    <!-- Our People Wrapping row -->
        <div id="accordion" class="accordion-container my-3">

            <?php if( have_rows('our_people') ):  $counter = 1; ?>

                <?php while( have_rows('our_people') ): the_row(); 

                    $count = $counter++;
                                            // vars
                    $image = get_sub_field('profile_picture');
                    $name = get_sub_field('name');
                    $title = get_sub_field('title');
                    $info = get_sub_field('info');


                    ?>
                    <article>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-10 mx-auto col-12">

                                    <div class="row">

                                        <div class="col-sm-4">
                                            <div class="portrait-image lazy" data-src="<?php echo $image['sizes']['large'];?>"></div>
                                        </div>

                                        <div class="col-sm-8">

                                            <h3><?php echo $name;?></h3>

                                            <p class="large light"><?php echo $title;?></p>


                                            <?php if(get_sub_field('info')):?>
                                                <div class="card">
                                                    <div id="collapse-<?php echo $count;?>" class="collapse accordion-content" aria-labelledby="heading-<?php echo $count;?>" data-parent="#accordion">
                                                        <div class="card-body gray">
                                                            <?php echo $info;?>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-title p-0" id="heading-<?php echo $count;?>">
                                                        <a class="collapsed" data-toggle="collapse" 
                                                        data-target="#collapse-<?php echo $count;?>" aria-expanded="false" aria-controls="collapse-<?php echo $count;?>">
                                                        <p class="mb-2 pb-3 large"></p>  
                                                        </a>
                                                    </div>
                                                </div>
                                            <?php endif;?>      


                                        </div>


                                </div>
                                <!-- End  -->
                            </div>
                        </div>
                    </div>
                </article>

            <?php endwhile; ?>

        <?php endif; ?>
    </div>
    <!-- Our People Wrapping row -->

    </section>

    <section class="board-of-directors pb-5">
        <h5 class="dash text-center p-5">BOARD OF DIRECTORS</h5>
        <div id="accordion-board" class="accordion-container my-3">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 mx-auto col-12">
                        <div class="row">
                            <!-- Board of directors row -->
                            <?php if( have_rows('our_directors') ):  $counter = 1; ?>

                                <?php while( have_rows('our_directors') ): the_row(); 

                                    $count = $counter++;
                                            // vars
                                    $image = get_sub_field('profile_picture');
                                    $name_title = get_sub_field('name_title'); 
                                    $extra_info = get_sub_field('extra_info');
                                    ?>

                                    <article class="col-md-4">

                                        <div class="one-one lazy" data-src="<?php echo $image['sizes']['large'];?>"></div>
                                            
                                            <div>
                                                <div class="info">
                                                    <?php echo $name_title;?>
                                                </div>

                                                <?php if(get_sub_field('extra_info')):?>
                                                    <div class="extra-info card">
                                                        <div id="collapse-<?php echo $count;?>-board" class="collapse accordion-content" aria-labelledby="heading-<?php echo $count;?>-board" data-parent="#accordion-board">
                                                            <div class="card-body gray">
                                                                <?php echo $extra_info;?>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-title p-0" id="heading-<?php echo $count;?>">
                                                            <a class="collapsed" data-toggle="collapse" 
                                                            data-target="#collapse-<?php echo $count;?>-board" aria-expanded="false" aria-controls="collapse-<?php echo $count;?>-board">
                                                            <p class="mb-2 pb-3 large"></p>  
                                                            </a>
                                                        </div>
                                                    </div>
                                                <?php endif;?>   
                                            </div>    
                                               
                                    </article>


                                <?php endwhile; ?>

                            <?php endif; ?>
                        </div>
                <!-- Board of directors row -->
                    </div>
                </div>
            </div>    
        </div>
    </section>

    <section class="investors text-center py-5">
    
        <h5 class="dash pb-5">INVESTORS</h5>
            <h3><span class="green">Ashar Aziz,</span> <span class="light">founder FireEye</span></h3>
            <h3><span class="green">Mark Anderson,</span> <span class="light">former president, Palo Alto Networks</span></h3>
            <h3><span class="green">Theresia Gouw,</span> <span class="light">Partner, aCrew Capital</span></h3>
            <h3><span class="green">Umesh Padval,</span> <span class="light">Venture partner, Thomvest</span></h3>
            <h3><span class="green">Harry Singh,</span> <span class="light">cofounder</span></h3>
            <h3><span class="green">Lovely Kaur,</span> <span class="light">cofounder</span></h3>

        <div class="break py-5 my-5"></div>

        <h5 class="dash">CISO and IO advisors</h5>
            <h3 class="green">Brian Talbert</h3>

        <div class="break py-5 my-5"></div>

        <h5 class="dash pb-5">OUR INVESTORS</h5>

        <div class="container">
            <div class="row align-items-center justify-content-around">
                <div class="col-md-3">
                    <img class="img-fluid lazy" data-src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/page-<?php echo $post_slug;?>/thomvest.png"  src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/page-<?php echo $post_slug;?>/lazy/thomvest.png"  alt="Thomvest Logo">
                </div>
                <div class="col-md-3">
                    <img class="img-fluid lazy" data-src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/page-<?php echo $post_slug;?>/symantec.png" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/page-<?php echo $post_slug;?>/lazy/symantec.png" alt="Symantec Logo">
                </div>
                <div class="col-md-3">
                    <img class="img-fluid lazy" data-src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/page-<?php echo $post_slug;?>/ntt.jpg" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/page-<?php echo $post_slug;?>/lazy/ntt.jpg" alt="NTT Logo">
                </div>
            </div>

             <div class="row align-items-center justify-content-around">
                <div class="col-md-3">
                    <img class="img-fluid lazy" data-src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/page-<?php echo $post_slug;?>/aspect.jpg" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/page-<?php echo $post_slug;?>/lazy/aspect.jpg" alt="Aspect Ventures Logo">
                </div>
                <div class="col-md-3">
                    <img class="img-fluid lazy" data-src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/page-<?php echo $post_slug;?>/baincapital.jpg" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/page-<?php echo $post_slug;?>/lazy/baincapital.jpg" alt="BainCapital Logo">
                </div>
                <div class="col-md-3">
                    <img class="img-fluid lazy" data-src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/page-<?php echo $post_slug;?>/fireeye.jpg" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/page-<?php echo $post_slug;?>/lazy/fireeye.jpg" alt="Fireeye Logo">
                </div>
                <div class="col-md-3">
                    <img class="img-fluid lazy" data-src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/page-<?php echo $post_slug;?>/ashar-aziz.jpg" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/page-<?php echo $post_slug;?>/lazy/ashar-aziz.jpg"  alt="Ashar Aziz Logo">
                </div>
            </div>
        </div>
        
    </section>

    <section class="career-listings">
         <h2 class="large text-center pb-5">CURRENT CAREER LISTINGS</h2>
 <!-- Our People Wrapping row -->
        <div id="accordion-jobs" class="accordion-container my-3">

            <?php if( have_rows('jobs_listing') ):  $counter = 1; ?>

                <?php while( have_rows('jobs_listing') ): the_row(); 

                    $count = $counter++;
                                            // vars
                    $title = get_sub_field('title');
                    $location = get_sub_field('location');
                    $about = get_sub_field('about');
                    $employment_type = get_sub_field('employment_type');
                    $minimum_qualifications = get_sub_field('minimum_qualifications');
                    $link_to_apply = get_sub_field('link_to_apply');


                    ?>
                    <article>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-10 mx-auto col-12">

                                    <div class="row">

                                    

                                        <div class="col-sm-12">
                                          <!--   <p class="large light"><?php echo $title;?></p> -->
                                            
                                                <div class="card">
                                                    <div class="accordion-title p-0" id="heading-<?php echo $count;?>-jobs">
                                                        <a class="collapsed" data-toggle="collapse" 
                                                        data-target="#collapse-<?php echo $count;?>-jobs" aria-expanded="false" aria-controls="collapse-<?php echo $count;?>-jobs">
                                                            <div class="my-3 large py-2">
                                                                <div class="d-flex justify-content-between job-toggle">
                                                                    <div>
                                                                        <?php echo $title;?>
                                                                    </div>
                                                                     <div>
                                                                        <?php echo $location;?>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div> 
                                                        </a>
                                                    </div>
                                                    <div id="collapse-<?php echo $count;?>-jobs" class="collapse accordion-content" aria-labelledby="heading-<?php echo $count;?>-jobs" data-parent="#accordion-jobs">
                                                        <div class="card-body gray">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                      <h5>About</h5>
                                                                    <?php echo $about;?>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <?php if(get_sub_field('employment_type')):?>
                                                                        <h5>EMPLOYMENT TYPE</h5>
                                                                        <div class="pb-5">
                                                                                <?php echo $employment_type;?>
                                                                         </div>       
                                                                    <?php endif;?>
                                                                    <?php if(get_sub_field('minimum_qualifications')):?>
                                                                        <h5>MINIMUM QUALIFICATIONS</h5>
                                                                      <div class="pb-5">
                                                                                <?php echo $minimum_qualifications;?>
                                                                         </div>
                                                                    <?php endif;?>
                                                                    
                                                                        <a class="btn grn" href="mailto:jobs@shieldx.com?subject=Appy%20for%20Job%20-%20<?php echo $title;?>" aria-label="<?php echo $title;?>" data-no-swup>Apply</a>
                                                                
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               


                                        </div>


                                </div>
                                <!-- End  -->
                            </div>
                        </div>
                    </div>
                </article>

            <?php endwhile; ?>

        <?php endif; ?>
    </div>
    <!-- Our People Wrapping row -->
    </section>


<?php if( have_rows('press_and_awards') ):  ?>
     <section class="press-awards">


        <div class="container">
            <h2 class="large pb-5">PRESS AND AWARDS</h2>
            <div class="press-awards-slick slick">
                <?php while( have_rows('press_and_awards') ): the_row(); 

                    
                                            // vars
                    $title = get_sub_field('title');
                    $intro_line = get_sub_field('intro_line');
                    $content = get_sub_field('content');
                    $link = get_sub_field('link');
                    $number_of_star = get_sub_field('number_of_star');


                    ?>
                            <!-- Slide Start -->
                            <div class="item">

                                <?php if ($intro_line):?>
                                    <p><?php echo $intro_line;?></p>
                                <?php endif;?>
                                 <?php if ($title):?>
                                    <h2><?php echo $title;?></h2>
                                <?php endif;?>
                                
                                <?php if ($number_of_star):?>
                                <div class="row">
                                    <div class="col-sm-10">
                                        <div class="row">
                                                <!-- Get star count and display the amount of stars -->
                                             <?php  for ($x = 0; $x <= $number_of_star -1 ; $x+=1) { ?>
                                                  <div class="col-2"><img class="img-fluid w-100" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/icons/star-full.svg"></div>
                                             <?php }?>
                                            <?php if (floor($number_of_star) != $number_of_star) :?>
                                                <div class="col-2"><img class="img-fluid w-100" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/icons/star-half.svg"></div>
                                            <?php endif;?>
                            
                                  
                                        </div>
                                    </div>
                                </div>
                                <?php endif;?>
                                
                                <a href="<?php echo $link;?>" class="btn dark mt-5" aria-label="<?php if ($intro_line):?><?= $intro_line;?><?php endif;?> | <?php if ($title):?><?= $title;?><?php endif;?>">Learn More</a>
                            </div>
                            <!-- Slide End -->
                           


                <?php endwhile; ?>
              
            </div>
          
        </div>

    </section>
<?php endif; ?>




    <section class="quick-facts">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h5 class="dash green pb-4">ShieldX Quick Facts</h5>
                    <ul class="bullets">
                        <li>Gartner 2017 “Cool Vendor” in Cloud Security and MarketsandMarkets “Innovator” in Micro-Segmentation</li>
                        <li>Enterprise Strategy Group (ESG) Lab validated that ShieldX Elastic Security Platform can be deployed in 15 minutes and scales to handle over a terabit of traffic</li>
                        <li>Certified VMware-Ready®, OpenStack Compatible® and now ready to deploy on AWS EC2® and Microsoft Azure®</li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <h5 class="dash green pb-4">ACCOMPLISHMENTS</h5>
                    <ul class="bullets">
                        <li>Invented the industry's first microservices platform for Cloud security that combines network-based security with the latest innovations in application and infrastructure technology</li>
                        <li>Currently in deployment with leading companies covering finance, technology, communications, government and higher education industries</li>
                        <li>More than 40 more patents filed</li>
                    </ul>
                </div>
            </div>

        
                <div class="text-center mt-5">
                    <h5 class="dash green">PRESS CONTACT</h5>
                    <a href="mailto:info@ShieldX.com">info@ShieldX.com</a>
                </div>
          
        </div>
    </section>


    
    </div>  
    <!-- end body wrap -->
        
    </div>
  
<?php get_footer(); ?>

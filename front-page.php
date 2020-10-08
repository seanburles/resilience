<?php get_header();?>
<?php
global $post;
$post_slug = $post->post_name;
?>
<div class="page-<?php echo $post_slug; ?>">
   <?php $video = get_field('header_video');?>
   <div class="video-header h-100">
      <video class="lazy" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
         <source data-src="<?php echo $video['url']; ?>" type="video/mp4">
      </video>
      <div class="container">
         <h2 class="white lead-text"><span class="anim-brack">R</span>esilience. The ability to <span class="anim-brack-strike"><span class="strike">persist</span></span> <span class="rel"><span class="thrive" data-toggle="popover" title="thrive" data-content="to grow or develop vigorously; flourish:">thrive</span></span> in spite of challenging and unprecedented circumstances</h2>
         <div class="desktop">
            <div class="lazy logos align-self-end flex-column" data-src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/icons/icon-group-header.svg" ></div>
         </div>
      </div>
   </div>


<!-- End body wrap -->

<section class="main-body">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-7 col-lg-6 pt-lg-5 pt-4">
                <p class="lead sapphire">What is the R Mural Project?</p>
            
                <p >An art installation by DC-based, Creative Theory Agency designed to both inspire our community through art and storytelling while offering tangible resources to those most affected by COVID-19.</p>
            </div>
            <div class="col-sm-12 col-md-10 pt-lg-4 pt-3 pb-3 pb-md-5 pb-4">
                <h2 class="orange r-text">This is OU<span class="anim-brack">R</span> Mural Project; Stories of <span style="white-space:nowrap"><span class="anim-brack">R</span>esilience.</span></h2>
            </div>
            <?php if(get_field('body_video')):?>
             <div class="col-sm-12">

                <?php 
                    $videoImg = get_field('body_video_placeholder_image'); 
                    // var_dump($videoImg['sizes']['large']);
                // $video = get_field('body_video'); 


                //     $pieces = explode("/", $video);
                //     $subpieces = explode('.', $pieces[4]);
                //     $vimeoBase = 'https://vimeo.com/';
                //     $vimeoVideo = $vimeoBase . $subpieces[0];

                //     $vimeoBaseURI = 'https://player.vimeo.com/video/' . $subpieces[0];
                   
                //     $imgid = $subpieces[0];                 

                    
                //             $imgJson = json_decode( file_get_contents('http://vimeo.com/api/v2/video/' .  $imgid . '.json'  ));
                            // echo '<pre>';
                            // var_dump($imgJson[0]);
                            // echo '</pre>';
                            // echo $imgJson[0]->thumbnail_large;
                ?>
               
                <div class="video-wrap pt-lg-3 pb-3 pb-md-5 mb-md-5">
                    <video preload="auto" poster="<?php echo $videoImg['sizes']['large'];?>" src="<?php the_field('body_video');?>"></video>
                    <button class="play-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" width="264" height="265" viewBox="0 0 264 265" style="" class="video-background">
                            <g fill="none" fill-rule="evenodd" stroke-linejoin="round">
                                <g stroke="#FCA824" stroke-width="4">
                                    <path d="M721 1591L851 1850 591 1850z" transform="translate(-589 -1588) rotate(90 721 1720.5)" class=""></path>
                                </g>
                                <g stroke="#fff" stroke-width="4">
                                    <path d="M721 1591L851 1850 591 1850z" transform="translate(-589 -1588) rotate(90 721 1720.5)" class="YNGxvoTC_1 pSntlhYO_1"></path>
                                </g>
                                <g stroke="#039681" stroke-width="4">
                                    <path d="M721 1591L851 1850 591 1850z" transform="translate(-589 -1588) rotate(90 721 1720.5)" class="YNGxvoTC_0 pSntlhYO_2"></path>
                                </g>

                            </g>
                        <style>

                        .pSntlhYO_1{stroke-dasharray:840 842;stroke-dashoffset:841;}
                        .start .pSntlhYO_1{animation:pSntlhYO_draw_1 6700ms ease-in-out 0ms 3}
                        .pSntlhYO_2{stroke-dasharray:840 842;stroke-dashoffset:841;}
                        .start .pSntlhYO_2{animation:pSntlhYO_draw_2 6700ms ease-in-out 300ms 3}
                        @keyframes pSntlhYO_draw{100%{stroke-dashoffset:0;}}
                        @keyframes pSntlhYO_fade{0%{stroke-opacity:1;}94.02985074626866%{stroke-opacity:1;}100%{stroke-opacity:0;}}
                        

                        @keyframes pSntlhYO_draw_0{11.940298507462686%{stroke-dashoffset: 841}49.25373134328358%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 841;}}
                        @keyframes pSntlhYO_draw_1{11.940298507462686%{stroke-dashoffset: 841}49.25373134328358%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 841;}}
                        @keyframes pSntlhYO_draw_2{11.940298507462686%{stroke-dashoffset: 841}49.25373134328358%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 841;}}
                        </style>
                        </svg>
                    </button>
                </div>
             
            </div>
        <?php endif;?>

            
        </div>
   </div>
</section>

<section class="pb-5 mb-5">
    <div class="container-fluid ">
        
        <div class="row">
            <div class="col-md-6 col-lg-5 col-sm-12 pb-5 pr order-md-2">
                <p>The project is comprised of three components that come together to make a narrative whole:</p>
                <p class="try-bld lead yellow"><b>Interactive Art Mural: At Union Market DC</b></p>
                <p class="try-bld  lead  yellow">bDigital Mural: Sharing videos of resilience from essential workers to creatives of color</p>
                <p class="try-bld lead  yellow">bDirectory of Community Support: Providing resources for those most vulnerable</p>
            </div>

                <?php
                $imageUrl = get_bloginfo('stylesheet_directory') . '/assets/images/page-home/mural-1.jpg';
                list($width, $height) = getimagesize($imageUrl);
                $arr = array('h' => $height, 'w' => $width);
                $aspect_ratio = $arr['h'] / $arr['w'] * 100;
                ?>

            <div class="col-md-6 col-sm-12 pl order-md-1">
                <div class="flexible-ratio lazy mb-30" data-src="<?php echo $imageUrl ?>" style="padding-top: <?php echo $aspect_ratio; ?>%"></div>
            </div>
        </div>


        <div class="row">
            <?php
                $imageUrl = get_bloginfo('stylesheet_directory') . '/assets/images/page-home/mural-4.jpg';
                list($width, $height) = getimagesize($imageUrl);
                $arr = array('h' => $height, 'w' => $width);
                $aspect_ratio = $arr['h'] / $arr['w'] * 100;
                ?>
            <!-- Large Image Right -->
            <div class="col-sm-6 pr order-md-2">
                 <div class="flexible-ratio lazy tall-cut-30 mb-30" data-src="<?php echo $imageUrl ?>" style="padding-top: <?php echo $aspect_ratio; ?>%"></div>
            </div>
            <div class="col-sm-6 pl">
                    <?php
                    $imageUrl = get_bloginfo('stylesheet_directory') . '/assets/images/page-home/mural-2.jpg';
                    list($width, $height) = getimagesize($imageUrl);
                    $arr = array('h' => $height, 'w' => $width);
                    $aspect_ratio = $arr['h'] / $arr['w'] * 100;
                    ?>

                <div class="flexible-ratio lazy mb-30" data-src="<?php echo $imageUrl ?>" style="padding-top: <?php echo $aspect_ratio; ?>%"></div>
                <div class="row inner">
                    <div class="col-sm-5"></div>

                        <?php
                        $imageUrl = get_bloginfo('stylesheet_directory') . '/assets/images/page-home/mural-3.jpg';
                        list($width, $height) = getimagesize($imageUrl);
                        $arr = array('h' => $height, 'w' => $width);
                        $aspect_ratio = $arr['h'] / $arr['w'] * 100;
                        ?>
                    <div class="col-sm-7 order-md-1">
                         <div class="flexible-ratio lazy mb-30" data-src="<?php echo $imageUrl ?>" style="padding-top: <?php echo $aspect_ratio; ?>%"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">    
            <?php
                $imageUrl = get_bloginfo('stylesheet_directory') . '/assets/images/page-home/mural-5.jpg';
                list($width, $height) = getimagesize($imageUrl);
                $arr = array('h' => $height, 'w' => $width);
                $aspect_ratio = $arr['h'] / $arr['w'] * 100;
                ?>
            <div class="col-sm-6 pl">
                <div class="flexible-ratio lazy mb-30" data-src="<?php echo $imageUrl ?>" style="padding-top: <?php echo $aspect_ratio; ?>%"></div>
            </div>

                <?php
                    $imageUrl = get_bloginfo('stylesheet_directory') . '/assets/images/page-home/mural-6.jpg';
                    list($width, $height) = getimagesize($imageUrl);
                    $arr = array('h' => $height, 'w' => $width);
                    $aspect_ratio = $arr['h'] / $arr['w'] * 100;
                    ?>
            <div class="col-sm-6">
                <div class="row inner">
                    <div class="col-lg-7 col-md-12 pr">
                        <div class="flexible-ratio lazy mb-30" data-src="<?php echo $imageUrl ?>" style="padding-top: <?php echo $aspect_ratio; ?>%"></div>
                        <p>
                            From Physical to Digital: This multi-layered project, in partnership with Capital One, is designed to encourage perseverance through artistic expression and storytelling while providing pandemic relief resources and minority-owned businesses.
                        </p>
                        <h3 class="try-bld lead yellow r-text">This is <span style="white-space:nowrap">OU<span class="anim-brack">R</span></span> Mural Project; Stories of our <span style="white-space:nowrap"><span class="anim-brack">R</span>esilence</span></h3>
                    </div>
                </div>

            </div>
        </div>
    </div>


</section>


<section class="sapphire-bg py-4">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="yellow py-5">Capital One: Commitment to Community</h2>
            </div>
                <div class="col-md-6">
                    <p>With such a unique opportunity to impact the community in which we live and serve, CTA sought a strategic partner that aligned with our core values and supported the mission of our project. Fortunately for us, this unique opportunity to support those disproportionately impacted during the pandemic aligned perfectly with the goals and actions of Capital One.</p>

                    <div class="home-page-spinner one-one"></div>
     
                </div>
                <div class="col-md-6">
                    <p><a class="orange" href="https://capital.one/3kQelgu" target="_blank" rel="noopener noreferrer"><b>Capital One is committed</b></a> to helping address the changing needs of our communities impacted by COVID-19. Their focus has been helping address the most pressing needs around food and hunger relief, housing and shelter security, support to small business owners, and assistance for low-income individuals in the communities in which their customers and associates live.  As the situation and communities' needs have evolved, their support has focused on digital capabilities and access, student support and education, and financial stability programs — while also exploring new ways to their company’s assets to meet changing needs. Capital One is proud to support the R Mural Project along with other community initiatives across the nation.</p><p><a class="orange" href="https://www.capitalone.com/about/newsroom/creative-theory-resilience/?utm_source=external&utm_medium=CTA&utm_campaign=RRCTA" target="_blank" rel="noopener noreferrer"><b>Learn more</b></a> about the CTA x Capital One journey to [R]esilience and the making of the 6th Street Mural.</p>
                    <img class="img-fluid w-75 py-5 my-5 lazy" data-src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/icons/icon-group-header-white.svg" alt="Creative Theory and Capital One">
                </div>
            </div>
        </div>
    </div>
</section>


</div>
<?php get_footer();?>
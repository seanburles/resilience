<?php get_header();?>
<?php
global $post;
$post_slug = $post->post_name;
?>
<div class="page-<?php echo $post_slug; ?>">
   <?php $video = get_field('video_background');?>
   <div class="video-header h-100">
      <video class="lazy" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
         <source data-src="<?php echo $video['url']; ?>" type="video/mp4">
      </video>
      <div class="container">
         <h2 class="desktop white">[R]esilience. The ability to <strike>persist</strike> thrive in spite of challenging and unprecedented circumstances</h2>
         <div class="desktop">
            <div class="lazy logos align-self-end flex-column" data-src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/icons/icon-group-header.svg" ></div>
         </div>
      </div>
   </div>


<!-- End body wrap -->

<section class="main-body">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-9 col-lg-7">
                <p class="lead yellow">What is the R Mural Project?</p>
                <!-- <p class="desktop py-5">An art installation by DC-based, Creative Theory Agency designed to both inspire our community through art and storytelling while offering tangible resources to those most affected by COVID-19.</p>
                   <h2 class="mobile pt-3">[R]esilience. The ability to <strike>persist</strike> thrive in spite of challenging and unprecedented circumstances</h2>
                    -->
                <p lass="lead desktop">An art installation by DC-based, Creative Theory Agency designed to both inspire our community through art and storytelling while offering tangible resources to those most affected by COVID-19.</p>
            </div>
            <div class="col-sm-12 col-md-10 ">
                <h2 class="desktop orange">This is OU[R] Mural Project; Stories of [R]esilience.</h2>
            </div>


            <div class="col-12">
                <p class="mobile py-3">An art installation by DC-based, Creative Theory Agency designed to both inspire our community through art and storytelling while offering tangible resources to those most affected by COVID-19.</p>
                <h2 class="mobile orange pb-5">This is OU[R] Mural Project; Stories of [R]esilience.</h2>
            </div>
        </div>
   </div>
</section>

<section>
    <div class="container-fluid ">
        <div class="row">
<?php
$imageUrl = get_bloginfo('stylesheet_directory') . '/assets/images/page-home/mural-1.jpg';
list($width, $height) = getimagesize($imageUrl);
$arr = array('h' => $height, 'w' => $width);
$aspect_ratio = $arr['h'] / $arr['w'] * 100;
?>
            <div class="col-md-6 col-sm-12 pl">
                <div class="flexible-ratio lazy" data-src="<?php echo $imageUrl ?>" style="padding-top: <?php echo $aspect_ratio; ?>%"></div>

            </div>
            <div class="col-md-6 col-lg-5 col-sm-12 pb-5 pr">
                <p>The project is comprised of three components that come together to make a narrative whole:</p>
                <p class="lead yellow">Interactive Art Mural: At Union Market DC</p>
                <p class="lead yellow">Digital Mural: Sharing videos of resilience from essential workers to creatives of color</p>
                <p class="lead yellow">Directory of Community Support: Providing resources for those most vulnerable</p>

            </div>

            <div class="col-sm-6 pl">
<?php
$imageUrl = get_bloginfo('stylesheet_directory') . '/assets/images/page-home/mural-2.jpg';
list($width, $height) = getimagesize($imageUrl);
$arr = array('h' => $height, 'w' => $width);
$aspect_ratio = $arr['h'] / $arr['w'] * 100;
?>
                <div class="flexible-ratio lazy" data-src="<?php echo $imageUrl ?>" style="padding-top: <?php echo $aspect_ratio; ?>%"></div>
                <div class="row inner">
                    <div class="col-sm-6"></div>

<?php
$imageUrl = get_bloginfo('stylesheet_directory') . '/assets/images/page-home/mural-3.jpg';
list($width, $height) = getimagesize($imageUrl);
$arr = array('h' => $height, 'w' => $width);
$aspect_ratio = $arr['h'] / $arr['w'] * 100;
?>
                    <div class="col-sm-6">
                         <div class="flexible-ratio lazy" data-src="<?php echo $imageUrl ?>" style="padding-top: <?php echo $aspect_ratio; ?>%"></div>
                    </div>
                </div>
            </div>
            <?php
$imageUrl = get_bloginfo('stylesheet_directory') . '/assets/images/page-home/mural-4.jpg';
list($width, $height) = getimagesize($imageUrl);
$arr = array('h' => $height, 'w' => $width);
$aspect_ratio = $arr['h'] / $arr['w'] * 100;
?>
            <!-- Large Image Right -->
            <div class="col-sm-6 pr">
                 <div class="flexible-ratio lazy" data-src="<?php echo $imageUrl ?>" style="padding-top: <?php echo $aspect_ratio; ?>%"></div>
            </div>

            <?php
$imageUrl = get_bloginfo('stylesheet_directory') . '/assets/images/page-home/mural-5.jpg';
list($width, $height) = getimagesize($imageUrl);
$arr = array('h' => $height, 'w' => $width);
$aspect_ratio = $arr['h'] / $arr['w'] * 100;
?>
            <div class="col-sm-6 pl">
                <div class="flexible-ratio lazy" data-src="<?php echo $imageUrl ?>" style="padding-top: <?php echo $aspect_ratio; ?>%"></div>
            </div>

                        <?php
$imageUrl = get_bloginfo('stylesheet_directory') . '/assets/images/page-home/mural-6.jpg';
list($width, $height) = getimagesize($imageUrl);
$arr = array('h' => $height, 'w' => $width);
$aspect_ratio = $arr['h'] / $arr['w'] * 100;
?>
            <div class="col-sm-6">
                <div class="row inner">
                    <div class="col-md-7 col-sm-12 pr">
                        <div class="flexible-ratio lazy" data-src="<?php echo $imageUrl ?>" style="padding-top: <?php echo $aspect_ratio; ?>%"></div>
                        <p class="lead">
                            From Physical to Digital: This multi-layered project, in partnership with Capital One, is designed to encourage perseverance through artistic expression and storytelling while providing pandemic relief resources and minority-owned businesses.
                        </p>
                        <h3 class="yellow">This is OU[R] Mural Project; Stories of our [R]esilence.</h3>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<section class="sapphire-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="yellow">Capital One: Commitment to Community</h2>
            </div>
                <div class="col-md-6">
                    <p>With such a unique opportunity to impact the community in which we live and serve, CTA sought a strategic partner that aligned with our core values and supported the mission of our project. Fortunately for us, this unique opportunity to support those disproportionately impacted during the pandemic aligned perfectly with the goals and actions of Capital One.</p>
                </div>
                <div class="col-md-6">
                    <p>Capital One is committed to helping address the changing needs of our communities impacted by COVID-19. Their focus has been helping address the most pressing needs around food and hunger relief, housing and shelter security, support to small business owners, and assistance for low-income individuals in the communities in which their customers and associates live.  As the situation and communities' needs have evolved, their support has focused on digital capabilities and access, student support and education, and financial stability programs — while also exploring new ways to their company’s assets to meet changing needs. Capital One is proud to support the R Mural Project along with other community initiatives across the nation.</p><p>Learn more about the CTA x Capital One journey to [R]esilience and the making of the 6th Street Mural.</p>
                    <img class="img-fluid w-50 py-5 my-5" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/icons/logo-group-2.svg" alt="Creative Theory and Capital One">
                </div>
            </div>
        </div>
    </div>
</section>


</div>
<?php get_footer();?>
<?php get_header();

global $post;
$post_slug = $post->post_name;

?>
    <div class="page-<?php echo $post_slug;?>">

        <div class="sticky-wrap">
            <section class="header lazy" data-src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/page-partners/partners-bg.jpg">
                 <div class="container">
                     <div class="row">
                         <div class="col-lg-7">
                           <h1>GET ON <span class="red">BOARD</span></h1>
                            <p class="subline">Partner with the next giant-leap forward in cloud and network security.</p>
                         </div>
                         <div class="col-lg-5">
                           
                         </div>
                     </div>
                 </div>   
            </section>
        </div>  

        <div class="body-wrap">
            <section class="gray-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 mx-auto col-12">
                            <h3>ShieldX provides partnerships that allow you to offer <span class="green">next-generation security</span> to customers. With a solution that offers data center security in the cloud and support from ShieldX from deployment to training, you can grow your business and impress your customers.</h3>
                        </div>
                    </div>
                </div>
            </section>
            <section class="services dotted-border-top">
                <div class="container">
                    <div class="row">
                       <div class="col-xl-10 mx-auto col-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <?php get_template_part( 'assets/images/page-partners/cloud-animated' ); ?>
                                    <h3>Managed Service Providers</h3>
                                    <p class="large">ShieldX can help make the cloud a safe place for your customers to do business—opening up opportunities to green-light digital transformation initiatives and grow service agreements with you as a provider.</p>
                                </div>
                                <div class="col-md-6">
                                    <?php get_template_part( 'assets/images/page-partners/puzzle-animated' ); ?>
                                    <h3>Solution Providers<br>
                                        <span class="d-none d-md-block">&nbsp;</span>
                                    </h3>
                                    <p class="large">Open opportunities for resellers and distributors to help companies move to a modern security in the cloud era—and increase margins along the way.</p>
                                </div>
                                <div class="col-md-6">
                                    <?php get_template_part( 'assets/images/page-partners/bug-animated' ); ?>
                                    <h3>System Integrators</h3>
                                    <p class="large">Moving faster is how system integrators can gain an edge on the competition. ShieldX provides industry-leading security that helps your clients migrate to the cloud at breakneck speed with built-in security.</p>
                                </div>
                                <div class="col-md-6">
                                    <?php get_template_part( 'assets/images/page-partners/hand-animated' ); ?>
                                    <h3>Incident Responders</h3>
                                    <p>Putting customers at ease at a scary time is how incident responders gain a reputation as the best in the field. ShieldX can offer a way to adapt and analyze attacks faster and easier across any environment.</p>
                                </div>

                                <div class="col-12">
                                           <div class="quote static trigger">
                                            <a href="https://www.itcentralstation.com/products/shieldx-reviews" target="_blank" rel="noopener noreferrer" data-no-swup>
                                                <h3 class="pullquote">
                                                   “Partnering with ShieldX puts resellers on the cutting edge of securing enterprises as they move the multicloud.”
                                                </h3>
                                                <p class="name">Warren Small</p>
                                                <p class="title">SVP of Sales</p>
                                                <p class="company">NTT Security</p>
                                            </a>
                                        </div>   
                                </div>
                            </div>   
                       </div>
                    </div>

                </div>
            </section>
          
        </div>
		



	</div>

<?php get_footer(); ?>


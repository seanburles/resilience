<?php get_header();?>
    
    
    <div class="page-ui">

    <section class="header lazy" data-src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/header-placeholder.jpg">
         <div class="container">
             <div class="row">
                 <div class="col-lg-6">
                     <h1>ux/ui shieldx page <span class="red">header</span> sample</h1>
                     <p class="subline">Secure multi cloud environments with a single console providing automated policies and security controls.</p>
                 </div>
             </div>
         </div>   
    </section>
    
      <section>
        <div class="container py-5">
          <div class="row">
            <div class="col-sm-12">
                  
        
            <?php 
              if ( have_posts() ) {
                while ( have_posts() ) {
                  the_post(); ?>
                    <p><?php the_content();?></p>
               <?php } // end while
              } // end if
              ?>
            </div>
         
          </div>
        </div>
      </section>

      <section class="black-bg py-5">
        <div class="container my-5">
          <div class="row">
            <div class="col-sm-6 header">
                      <h1>Headline 1 tag</h1>
                      <hr>
                      <p>Header Headline</p>
                      <p>Regular</p>
                      <p>Alternate Gothic No3 D</p>
                      <p>Uppercase</p>
                      <p>(71px Max) (41px Min)</p>
            </div>
            <div class="col-sm-6 header">
                      <p class="subline">
                        Secure multi cloud environments with a single console providing automated policies and security controls.
                      </p>
                      <hr>
                      <p>Header Subline</p>
                      <p>Montserrat light</p>
                      <p>Sentence Case</p>
                      <p>(26px Max) (20px Min)</p>

            </div>
          </div>
        </div>  
      </section>

      <section>
          <div class="container py-5">
          <div class="row">

            <div class="col-sm-6">
                      <h2>Headline 2 tag</h2>
                      <hr>
                      <p>Montserrat </p>
                      <p>Bold</p>
                      <p>Sentence Case</p>
                      <p>(52px Max) (34px Min)</p>
            </div>
                      <div class="col-sm-6">
                      <h2 class="large">Headline 2 (.large)</h2>
                      <hr>
                      <p>Montserrat </p>
                      <p>Bold</p>
                      <p>Title Case</p>
                      <p>(58px Max) (36px Min)</p>
            </div>
          </div>
        </div>  
      </section>

       <section class="py-5">
          <div class="container">
          <div class="row">

            <div class="col-sm-6">
                      <h3>Headline 3 Tag</h3>
                      <hr>
                      <p>Montserrat </p>
                      <p>Bold</p>
                      <p>1.5 em line height</p>
                      <p>(29px Max) (24px Min)</p>
            </div>
            <div class="col-sm-6">
                      <h3 class="light">Headline 3 Tag (.light)</h3>
                      <hr>
                      <p>Montserrat </p>
                      <p>100</p>
                      <p>1.5 em line height</p>
                      <p>(29px Max) (24px Min)</p>
            </div>
                  <div class="col-sm-6">
                      <h4>Headline 4 Tag</h4>
                      <hr>
                      <p>Montserrat </p>
                      <p>Regular (400)</p>
                      <p>Sentence Case</p>
                      <p>1.5 em line height</p>  
                      <p>(33px Max) (29px Min)</p>
            </div>

               <div class="col-sm-6">
                      <h5 class="dash">Headline 5 Tag (.dash)</h5>
                      <hr>
                      <p>Alternate Gothic No3 D</p>
                      <p>Uppercase</p>
                      <p>Regular (400)</p>
                      <p>Sentence Case</p>
                      <p>1.5 em line height</p>  
                      <p>(33px Max) (29px Min)</p>
            </div>
          </div>
        </div>  
      </section>

      <section class="py-5">
          <div class="container">
          <div class="row">
            <div class="col-sm-6">
                <p class="subhead">Paragraph (.subhead) Tag</p>
                <hr>
                <p>Montserrat </p>
                <p>Medium (500)</p>
                <p>1.5 em line height</p>
                <p>(26px Max) (22px Min)</p>
            </div>
            <div class="col-sm-6">
                      <p class="large">Paragraph (.large) Tag</p>
                      <hr>
                      <p>Montserrat </p>
                      <p>Medium (500)</p>
                      <p>1.5 em line height</p>
                      <p>(23px Max) (18px Min)</p>
            </div>
                      <div class="col-sm-6">
                      <p>Paragraph Tag</p>
                      <hr>
                      <p>Montserrat </p>
                      <p>1.5 em line height</p>  
                      <p>(20px Max) (16px Min)</p>
            </div>
          </div>
        </div>  
      </section>

    <section class="py-5">
          <div class="container">
          <div class="row">

            <div class="col-sm-6">
                      <p class="large">li - list item tag</p>
                      <ul class="bullets">
                        <li>List style here</li>
                        <li>List style here</li>
                        <li>List style here</li>
                      </ul>
                      <hr>
                      <p>Montserrat </p>
                      <p>Medium (500)</p>
                      <p>1.5 em line height</p>
                      <p>(18px Max) (16px Min)</p>
            </div>
                  <div class="col-sm-6">
                        <a class="btn grn" href="#">small button</a>
                      <hr>
                       <p>Alternate Gothic No3 D</p>
                       <p>Uppercase</p>
                      <p>1em line height</p>  
                      <p>20px</p>
              </div>

                 <div class="col-sm-6 pt-5">

                      <a class="btn grn lrg" href="#">large button</a>
                      <hr>
                       <p>Alternate Gothic No3 D</p>
                       <p>Uppercase</p>
                      <p>1em line height</p>  
                      <p>34px</p>
              </div>

              <div class="col-sm-6 pt-5">
                    <a href="#" class="link">SEE ALL PRESS</a>
                    <hr>
                        <p>a .link</p>      
                       <p>Alternate Gothic No3 D</p>
                       <p>Uppercase</p>
                       <p>16px</p>
              </div>
          </div>
        </div>  
      </section>

       <section class="py-5 card-wrap">
          <div class="container">
          <div class="row mb-5 pb-5">

            <div class="col-lg-4 d-flex">
                  <div class="info-card active mb-5">
                    <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/icons/file.svg" alt="file icon">
                    <p class="title">ShieldX Elastic Security Platform Datasheet</p>
                    <p class="mb-5">Learn how the ShieldX platform scales elastically to environments of any size while maintaining performance and security capabilities. </p>
                    <div>
                        <a href="#" class="btn grn">read now</a>
                    </div>
                  </div>    

             </div>     
             <div class="col-lg-4 d-flex">
                  <div class="info-card mb-5">
                    <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/icons/computer.svg" alt="computer icon">
                    <p class="title">Security Platform Datasheet</p>
                    <p class="mb-5">Learn how the ShieldX platform scales elastically to environments of any size while maintaining performance and security capabilities. Learn how the ShieldX platform scales elastically to environments of any size while maintaining performance and security capabilities. </p>
                    <div>
                        <a href="#" class="btn grn">read now</a>
                    </div>
                  </div>  
             </div>
             <div class="col-lg-4 d-flex">       
                  <div class="info-card mb-5">
                    <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/icons/file.svg" alt="file icon">
                    <p class="title">ShieldX Elastic</p>
                    <p class="mb-5">Learn how the ShieldX platform scales elastically. </p>
                    <div>
                        <a href="#" class="btn grn">read now</a>
                    </div>
                  </div>    
            </div>
        
          </div>
        </div>  
      </section>

      <section>

        <div class="container section-title">  
            <div class="row">
                <div class="col-sm-5">
                    <h5 class="dash">SEE HOW WE CAN TRIGGER YOUR CUSTOMERS</h5>
                </div>
            </div>
        </div>

          <div class="container py-5">
              <div class="row">
                   <div class="col-sm-6">
                      <div class="quote static trigger">
                         <h3 class="pullquote">
                           “ShieldX can scale and adapt with our new multi-cloud strategy with a comprehensive and consistent security policy across all environments… ShieldX has been an ideal partner throughout the development process by meeting our on premise and cloud needs.”
                         </h3>
                         <p class="name">Brian Talbert</p>
                         <p class="title">Director of Network and Connectivity Solutions</p>
                         <p class="company">Alaska Airlines</p>
                      </div>    
                      <hr>
                      <p>Quote Module</p>     
                    </div>

                 <div class="col-sm-6">

                     <div class="icon-list trigger">
                        <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/icons/hand-gears.svg" alt="hand gears icon">
                        <h3>Precise threat controls provide comprehensive network security including:</h3>
                           <ul class="bullets">
                               <li>Microsegmentation</li>
                               <li>Threat prevention</li>
                               <li>Malware prevention</li>
                               <li>URL classification and filtering</li>
                               <li>Anomaly detection</li>
                               <li>Lateral movement detection</li>
                           </ul>
                    </div>   
              </div>
              </div>
          </div>
      </section>


      <section>
          <div class="container">
              <div class="row">
                  <div class="col-sm-4">
                    <div class="odometer-wrap">
                        <div class="odometer odometer-theme-minimal" data-value="30">0</div>
                        <h5>minutes to setup</h5>
                    </div>
                  </div>
                   <div class="col-sm-4">
                        <div class="odometer-wrap">
                            <div class="odometer odometer-theme-minimal percent" data-value="530">0</div>
                            <h5>minutes to setup</h5>
                        </div>
                    </div>
                     <div class="col-sm-4">
                        <div class="odometer-wrap">
                            <div class="odometer odometer-theme-minimal" data-value="1530">0</div>
                            <h5>minutes to discovery</h5>
                        </div>
                    </div>
              </div>
          </div>
      </section>
    
        <section>
            <div class="container py-5">
                <div class="row">
                    <div class="col-sm-12">
                            <div class="sixteen-nine">     
                                <div class="content">
                                    <video id="" poster="<?= get_bloginfo('template_directory'); ?>/assets/images/placeholder.jpg" preload="meta" src="<?= get_bloginfo('template_directory'); ?>/assets/video/shieldx-sample.mp4"></video> 
                                        <div class="h-100 w-100 lazy video-background flex-center play" data-src="<?= get_bloginfo('template_directory'); ?>/assets/images/placeholder.jpg">
                                            <?php get_template_part( 'template-parts/video/play', 'button' ); ?>
                                        </div>    
                                </div>
                          </div>    
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h5 class="dash">What others are saying</h5>
            </div>
        </div>
                        <div class="what-other-are-saying">


                            <div class="item">
                                <div class="quote">
                                     <h3 class="pullquote">
                                       “ShieldX can scale and adapt with our new multi-cloud strategy with a comprehensive and consistent security policy across all environments… ShieldX has been an ideal partner throughout the development process by meeting our on premise and cloud needs.” 
                                     </h3>
                                     <p class="name">Brian Talbert</p>
                                     <p class="title">Director of Network and Connectivity Solutions</p>
                                     <p class="company">Alaska Airlines</p>
                                </div>    
                            </div>  

                            <div class="item">
                                <div class="quote">
                                     <h3 class="pullquote">
                                       “ShieldX can scale and adapt with our new multi-cloud strategy with a comprehensive and consistent security policy across all environments… ShieldX has been an ideal partner throughout the development process by meeting our on premise and cloud needs.”
                                       “ShieldX can scale and adapt with our new multi-cloud strategy with a comprehensive and consistent security policy across all environments… 
                                     </h3>
                                     <p class="name">Brian Talbert</p>
                                     <p class="title">Director of Network and Connectivity Solutions</p>
                                     <p class="company">Alaska Airlines</p>
                                </div>    
                            </div>   

                            <div class="item">
                                <div class="quote">
                                     <h3 class="pullquote">
                                       “ShieldX can scale and adapt with our new multi-cloud strategy with a comprehensive and consistent security policy across all environments… ShieldX has been an ideal partner throughout the development process by meeting our on premise and cloud needs.”
                                     </h3>
                                     <p class="name">Brian Talbert</p>
                                     <p class="title">Director of Network and Connectivity Solutions</p>
                                     <p class="company">Alaska Airlines</p>
                                </div>    
                            </div>    
                          
                        </div>
  
            </div>
        </section>


        <section>   
            <div class="container pb-5">
                <div class="row">
                    <div class="col-sm-12 accordio-wrap">

                        <h5 class="accordion-title pt-5 pb-3 green dash">ShieldX Elastic Security Platform Overview</h5>

                                        
                            <div id="accordion" class="accordion-container my-3">

                              
                                    <div class="card">
                                        <div class="accordion-title p-0" id="heading-1">
                                            <a class="collapsed" data-toggle="collapse" 
                                            data-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                                                <p class="mb-2 pb-3 pt-4 large">
                                                    What is ShieldX Elastic Security Platform? What does it do?
                                                </p>
                                            </a>
                                        </div>
                                        <div id="collapse-1" class="collapse accordion-content" aria-labelledby="heading-1" data-parent="#accordion">
                                            <div class="card-body gray">
                                                <p>
                                                    While ShieldX Elastic Security Platform follows cloud-principles regarding elasticity, automation, and the economics of lower resource costs and on-demand deployment, ShieldX Elastic Security Platform is actually a software-based product. It is not what is known as a “Security-as-a-Service” or “managed service” model. ShieldX does not host your deployment, or manage it for you. We just make it easier for you. Organizations acquire, deploy and manage it within their infrastructure, whether on-premises, hosted, within public cloud or combinations of all of it.

                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="card">
                                        <div class="accordion-title p-0" id="heading-2">
                                            <a class="collapsed" data-toggle="collapse" 
                                            data-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                                <p class="mb-2 pb-3 pt-4 large">
                                                    Who are the primary users of ShieldX Elastic Security Platform?
                                                </p>
                                            </a>
                                        </div>
                                        <div id="collapse-2" class="collapse accordion-content" aria-labelledby="heading-2" data-parent="#accordion">
                                            <div class="card-body gray">
                                                <p>
                                                    While ShieldX Elastic Security Platform follows cloud-principles regarding elasticity, automation, and the economics of lower resource costs and on-demand deployment, ShieldX Elastic Security Platform is actually a software-based product. It is not what is known as a “Security-as-a-Service” or “managed service” model. ShieldX does not host your deployment, or manage it for you. We just make it easier for you. Organizations acquire, deploy and manage it within their infrastructure, whether on-premises, hosted, within public cloud or combinations of all of it.

                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                     <div class="card">
                                        <div class="accordion-title p-0" id="heading-3">
                                            <a class="collapsed" data-toggle="collapse" 
                                            data-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                                <p class="mb-2 pb-3 pt-4 large">
                                                    Is ShieldX Elastic Security Platform a “cloud security,” or a Cloud Access Security Broker (CASB), solution?
                                                </p>
                                            </a>
                                        </div>
                                        <div id="collapse-3" class="collapse accordion-content" aria-labelledby="heading-3" data-parent="#accordion">
                                            <div class="card-body gray">
                                                <p>
                                                    While ShieldX Elastic Security Platform follows cloud-principles regarding elasticity, automation, and the economics of lower resource costs and on-demand deployment, ShieldX Elastic Security Platform is actually a software-based product. It is not what is known as a “Security-as-a-Service” or “managed service” model. ShieldX does not host your deployment, or manage it for you. We just make it easier for you. Organizations acquire, deploy and manage it within their infrastructure, whether on-premises, hosted, within public cloud or combinations of all of it.

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                            

                            </div>

                                



                    </div>

                    </div>
                </div>
            </div>
            

        </section>
    
    
        
    </div>
  
<?php get_footer(); ?>

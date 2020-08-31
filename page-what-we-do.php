<?php get_header();?>
    
<?php
    global $post;
    $post_slug = $post->post_name;
?>
    <div class="page-<?php echo $post_slug;?>">


<div class="sticky-wrap">
     <section class="header lazy" data-src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/page-<?php echo $post_slug;?>/header-bg.jpg">
         <div class="container">
             <div class="row">
                 <div class="col-lg-7">
                    <h1>WE MAKE SECURITY THE <span class="red">EASIEST THING</span> TO DO IN THE CLOUD FOR SECURITY, INFRASTRUCTURE, AND OPERATIONS</h1>
                    <!-- <p class="subline">for security and infrastructure and operations.</p> -->
                 </div>
                 <div class="col-lg-5">
                    <div class="one-one">
                        <div class="content">
                            <img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/page-what-we-do/clouds-01_animated.svg" alt="cloud connectors">
                            <img class="clouds turbulence" src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/page-what-we-do/just-clouds.png" alt="clouds">
                        </div>    
                    </div>    
                 </div>
             </div>
         </div>   
    </section>
</div>  

<div class="body-wrap">
        <!-- <section class="see-how-we-can-help">
             <div class="container">
                 <div class="row">
                     <div class="col-md-4 mx-auto text-center">
                         <h3 class="white">See how we can help</h3>
                         <a href="#" onclick="alert('Where does this go?')" class="btn dark inverse mt-3 mr-3">INFRASTRUCTURE</a> <a href="#" class="btn dark mt-3" onclick="alert('Where does this go?')">SECURITY</a>
                     </div>
                 </div>
             </div>       
        </section> -->
    
      <section class="agentless">
        <div class="container">

            <!-- Headline Row -->
            <div class="row">
                 <div class="col-lg-10 mx-auto text-center">
                    <h2 class="large">Agentless. Automated. Accurate. </h2>
                    <p class="large">Agent-based approaches add complexity, costing time and money. Worse still, micro-segmentation that uses agents merely manages an IP table's firewall rules on workloads and doesn't provide true security.</p>
                    <p class="large">The agentless ShieldX approach provides a frictionless means to discover, automate, and micro-segment all the way to layer 7. By sitting at the network layer, all workloads and applications are visible, and policies with native security control are generated in minutes—without the need to install a burdensome agent.</p>
                </div>
            </div>

        </div>
    </section>

    <section class="black-bg lazy agents" data-src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/page-what-we-do/header-bg.jpg">
          <div class="container">
              <div class="row">
                  <div class="col-sm-6">
                      <div class="one-one lazy" data-src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/page-what-we-do/red-connectors.svg"></div>
                  </div>
                  <div class="col-sm-6 flex-align-center">
                        <div>
                            <p class="large white t1"><b>THE AVERAGE CLOUD<br> WORKLOAD CONTAINS</b></p>
                            <h1 class="red alternate t2">20 AGENTS</h1>
                            <p class="white t3">— Forrester</p>
                      </div>
                  </div>
              </div>
          </div>    
    </section>

    <!-- ShieldX uses business logic Slick Slider Section -->

      <section class="secure-data">
         <div class="container">
             <div class="row">
                 <div class="col-md-6">
                     <h2 class="green">Secure data, workloads, and applications</h2>
                     <p class="large">ShieldX is revolutionizing cloud security by providing comprehensive, automated, and consistent network security that is in sync with the changes in multi-cloud environments.</p>
                 </div>
                 <div class="col-md-6">
                     <div class="one-one lazy contain" data-src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/page-what-we-do/imac_screens.gif"></div>
                 </div>
             </div>
             
                <h3>ShieldX uses business logic—not ports and protocols&mdash;<br class="medium"> to provide one view into your network</h3>

                 <div class="business-logic-slider-wrap row">

                    <!-- Slick Slider Button / Navigation Wrap -->
                    <div class="col-lg-12 pb-4">
                        <div class="row ">
                            <div class="col-lg-2 col-md-3 col-6 mb-3">
                                <button data-slide="1" aria-label="visibility" >
                                    <div class="zero slick-current info-card">
                                        <div class="content">
                                            <?php get_template_part( 'assets/images/page-what-we-do/gain', 'visibility' ); ?>
                                        </div>
                                    </div>
                                </button>
                            </div>
                            <div class="col-lg-2 col-md-3 col-6 mb-3">
                                <button data-slide="2" aria-label="tasks">
                                    <div class="info-card one">
                                        <div class="content">
                                            <?php get_template_part( 'assets/images/page-what-we-do/export', 'tasks' ); ?>
                                        </div>
                                    </div>
                                </button>
                            </div>
                            <div class="col-lg-2 col-md-3 col-6 mb-3">    
                                <button data-slide="3" aria-label="scale instantly">
                                    <div class="info-card two">
                                        <div class="content">
                                            <?php get_template_part( 'assets/images/page-what-we-do/scale', 'instantly' ); ?>
                                        </div>
                                    </div>
                                </button>
                            </div>
                            <div class="col-lg-2 col-md-3 col-6 mb-3">    
                                <button data-slide="4" aria-label="sleep easy">
                                    <div class="info-card three">
                                        <div class="content">
                                            <?php get_template_part( 'assets/images/page-what-we-do/sleep', 'easy' ); ?>
                                        </div>
                                    </div>
                                </button>
                            </div>    
                        </div>    
                    </div>

                    <!-- Slick Slider Section Wrap -->
                    <div class="col-lg-12">
                        <div class="business-logic-slider slick">
                            <!-- Slide One Gain Visibility -->
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="slick-bullets">
                                            <li>Infrastructure connector leverages cloud provider APIs to discover assets and normalize activity</li>
                                            <li>Allows the creation of one consistent, but dynamic, policy</li>
                                            <li>Continuously discovers and catalogs assets while leveraging intelligence to generate policies at the perimeter and within</li>
                                            <li>Provides situational awareness about applications running anywhere (even the dark corners) in virtualized data centers</li>
                                            <li>Apply tags based on initiating and terminating connections</li>
                                            <li>See indications of lateral movement during an attack campaign</li>
                                            <li>Layer 7 capabilities allow context about application components in use</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="slick-bullets">
                                            <li>Map the topology of networks and identify applications dependencies to gain end-to-end visibility of every resource</li>
                                            <li>Advanced monitoring includes SIEM and analytics, aggregating logs, forwarding events, and enriching data and events with observed behavior</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                             <!-- Slide Two Automate Tasks -->
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="slick-bullets">
                                            <li>An adaptive intention engine efficiently models relationships to produce a visual application connectivity graph</li>
                                            <li>Learn what needs to be allowed based on a clear picture of traffic dynamics</li>
                                            <li>Security policies are suggested based on the application connectivity model</li>
                                            <li>Automation allows policies to be implemented in hours—not weeks or months</li>
                                           
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="slick-bullets">
                                            <li>Granularly group workloads into resource groups with the ability to tune policies for an individual group</li>
                                            <li>Continuously looks for new workloads, networks, and load balancers and reacts at cloud speed to determine intent</li>
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide Three Scale Instantly -->
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="slick-bullets">
                                            <li>Avoid performance degradation or reduced security by responding to demand in real time</li>
                                            <li>Scale out required microservices</li>
                                            <li>Deploy scale back when demand isn’t as high to reduce costs without interrupting traffic</li>
                                            
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="slick-bullets">
                                            <li>Realize unparalleled ability to deploy security controls when and where they are needed, at any scale, without compromise</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide Four Sleep Easy -->
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <ul class="slick-bullets">
                                            <li>Only trusted users and applications can access specific systems and data</li>
                                             <li>Zero Trust is extended across OSI layers</li>
                                            <li>Data and applications are kept safe through east-west network trarffic protection</li>
                                            <li>Be prepared for audits and eliminate stressful surprises</li>
                                            <li>Detect and prevent attacks by visualizing attacker behavior on a threat execution map</li>
                                            
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="slick-bullets">
                                            <li>Learn how multi-cloud behaves and shows anomalies based on knowledge of normal activity</li>
                                            <li>Anomalous activity is quarantined, preventing attacks from spreading, without stopping work</li>
                                            <li>Take the headache out of managing complex multi-cloud environments to save
time</li>

                        
                                        </ul>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                       
                    </div>
                    <!-- Manually added slick dots -->
                        <div class="manual-dots">
                            <ul class="slick-dots">
                                <li class="slick-current zero">
                                    <button type="button" aria-label="slide 1" data-slide="1"></button>
                                </li>
                                <li class="one">
                                    <button type="button" aria-label="slide 2" data-slide="2"></button>
                                </li>
                                <li class="two">
                                    <button type="button" aria-label="slide 3" data-slide="3"></button>
                                </li>
                                <li class="three">
                                    <button type="button" aria-label="slide 4" data-slide="4"></button>
                                </li>
                            </ul>
                        </div>
                 </div> <!-- END SLIDER WRAP -->
                

             </div>
         </section>

            <section class="what-others">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h5 class="dash">What others are saying</h5>
                            </div>

                            <div class="col-sm-12">
                                <div class="quote static trigger mt-5">
                                    <a href="https://www.itcentralstation.com/products/shieldx-reviews" target="_blank" rel="noopener noreferrer" data-no-swup>
                                        <h3 class="pullquote">
                                           “ShieldX can scale and adapt with our new multi-cloud strategy with a comprehensive and consistent security policy across all environments… ShieldX has been an ideal partner throughout the development process by meeting our on-premise and cloud needs.”
                                        </h3>
                                        <!-- <p class="name">Brian Talbert</p>
                                        <p class="title">Director of Network and Connectivity Solutions</p>
                                        <p class="company">Alaska Airlines</p> -->
                                    </a>
                                </div>
                            </div>
                        </div>

<!--                     <div class="what-other-are-saying">

                        <div class="item">
                            <div class="quote">
                                 <h3 class="pullquote">
                                   “ShieldX makes the cloud safer than on-prem deployments. That is because the number-one cause of security incidents today is human error, and those errors are often a result of very complex security structures. ShieldX makes it a lot easier to define your policies and define your rules, and that greatly reduces the opportunity for user error.”
                                 </h3>
                                 <p class="name">Brian Talbert</p>
                                 <p class="title">Director of Network and Connectivity Solutions</p>
                                 <p class="company">Alaska Airlines</p>
                            </div>    
                        </div>  

                        <div class="item">
                            <div class="quote">
                                 <h3 class="pullquote">
                                  “The most valuable feature is the automatic scaling. With its microservices-based architecture, ShieldX scales both up and down, depending on traffic and throughput.”
                                 </h3>
                                 <p class="name">Michael Procyshyn</p>
                                 <p class="title">IT director</p>
                                 <p class="company">Park Holiday</p>
                            </div>    
                        </div>   

                        <div class="item">
                            <div class="quote">
                                 <h3 class="pullquote">
                                   “One of the beauties about ShieldX is that it's such a good "fire-and-forget" product. We wouldn't have moved into AWS without it, because of the protection that it gives.”
                                 </h3>
                                 <p class="name">Michael Procyshyn</p>
                                 <p class="title">IT director</p>
                                 <p class="company">Park Holiday</p>
                            </div>    
                        </div>    
                      
                    </div> -->
      
                </div>
            </section>



        <section>
             <div class="sixteen-nine lazy" data-src="<?= get_bloginfo('template_directory'); ?>/assets/video/cloudUpdate-placeholder.jpg">     
                <div class="content">
                    <div class="container section-title">  
                        <div class="row">
                            <div class="col-sm-7 col-md-5">
                                <h5 class="dash animate">See why the old approach no longer works</h5>
                            </div>
                        </div>
                    </div>
                    <a href="<?= get_bloginfo('template_directory'); ?>/assets/video/CloudUpdateAndMusic-1.mp4" data-rel="lightcase" data-no-swup>
                    <div class="play-wrap">
                    <video class="lazy d-none d-sm-block"  poster="<?= get_bloginfo('template_directory'); ?>/assets/video/cloudUpdate-placeholder.jpg" muted autoplay loop preload="meta" data-src="<?= get_bloginfo('template_directory'); ?>/assets/video/CloudUpdateAndMusic-1.mp4"></video> 
                        <!-- <div class="h-100 w-100 lazy video-background flex-center  play" data-src="<?= get_bloginfo('template_directory'); ?>/assets/video/cloudUpdate-placeholder.jpg"> -->
                            <div class="h-100 w-100 video-background play flex-center ">
                                        <?php get_template_part( 'template-parts/video/play', 'button' ); ?>
                            </div> 
                    </div>       
                    </a>
                </div>
            </div>    
        </section>

        <!-- Always Evolving section -->

        <section class="evolving dotted-border-top">
            <h2 class="text-center large py-5">Always evolving,<br> always-on protection</h2>

            <div class="container">
                <div class="row">
                        <div class="col-md-9 mx-auto pb-5">
                            <div class="row">
                                <div class="col-4">
                                    <button class="icon" aria-label="Discover" data-slide="1">
                                        <div class="item info-card zero slick-current">
                                            <?php get_template_part( 'assets/images/page-what-we-do/discover' ); ?>
                                        </div>
                                    </button>
                                </div>
                                <div class="col-4">
                                    <button class="icon" aria-label="Automate" data-slide="2">
                                        <div class="item info-card one">
                                            <?php get_template_part( 'assets/images/page-what-we-do/automate' ); ?>
                                        </div>
                                    </button>
                                </div>
                                <div class="col-4">
                                    <button class="icon" aria-label="Secure" data-slide="3">
                                        <div class="item info-card two">
                                            <?php get_template_part( 'assets/images/page-what-we-do/secure' ); ?> 
                                        </div>
                                    </button>
                                </div>
                                
                            </div>
                        </div>

                            <!-- Start Evolving text slider -->

                         <div class="col-md-11 text-center mx-auto">   
                            <div class="always-evolving-slider pb-3 mb-5">   
                                <div class="item">
                                  
                                       <p class="bullets"><span>ShieldX automatically scans the entire network for applications and data</span></p>
                                       <p class="bullets"><span>Agentless discovery doesn’t affect performance</span></p>
                                       <p class="bullets"><span>Gives visibility into N-tier applications within the multi-cloud</span></p>
                                  
                                </div>
                                <div class="item">
                                   
                                       <p class="bullets"><span>Automatically generates security policies in minutes</span></p>
                                       <p class="bullets"><span>Transforms intention into controls across 7 layers of networking</span></p>
                                       <p class="bullets"><span>Cloud-native microservices auto scale to any environment</span></p>
                                  
                                </div>
                                <div class="item">
                                   
                                       <p class="bullets"><span>Monitors and protects against data loss</span></p>
                                       <p class="bullets"><span>Tracks attacker movement and creates an actionable plan for security teams</span></p>
                                       <p class="bullets"><span>Prevents breaches or significantly reduces impact</span></p>
                                  
                                </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>

        <section class="bolstered">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h2>Bolstering <span class="green">networking operations</span> in the multi&#8209;cloud</h2>
                    </div>
                    <div class="col-lg-10">
                         <h3>ShieldX brings a non-invasive, easy-to-use cloud-native platform to bring unprecedented visibility and security in the multi-cloud. ShieldX taps private and public cloud networks to:</h3>
                    </div>
                </div>

                

                <div class="row">
                    <div class="col-sm-4">
                         <?php get_template_part( 'assets/images/page-what-we-do/squares-animated' ); ?> 
                         <h3 class="light">Avoid environmental complexity</h3>
                    </div>
                    <div class="col-sm-4">
                        <?php get_template_part( 'assets/images/page-what-we-do/person-animated' ); ?> 
                        <h3 class="light">Stop incremental resourcing</h3>
                    </div>
                    <div class="col-sm-4">
                        <?php get_template_part( 'assets/images/page-what-we-do/clock-animated' ); ?> 
                        <h3 class="light">Deploy quickly with a set-it-and-forget-it approach that requires almost no long-term maintenance</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                            <div class="quote static trigger mt-5">
                            <a href="https://www.itcentralstation.com/product_reviews/shieldx-review-66724-by-michaelprocyshyn" target="_blank" rel="noopener noreferrer" data-no-swup>
                                <h3 class="pullquote">
                                  “One of the beauties about ShieldX is that it's such a good "fire-and-forget" product.”
                                </h3>
                                    <p class="name">Michael Procyshyn</p>
                                    <p class="title">IT director</p>
                                    <p class="company">Park Holiday</p>
                            </a>
                            </div>
                    </div>
                </div>
            </div>
        </section>

    
    </div>  
    <!-- end body wrap -->
        
    </div>
  
<?php get_footer(); ?>

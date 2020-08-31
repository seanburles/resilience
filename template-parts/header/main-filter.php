			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				    <a class="navbar-brand" href="<?php echo home_url(); ?>">
				    	<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/images/global/main-logo.svg" alt="Latinx Design Directory">
				    </a>
				    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				    	<!-- Start discipline -->
				        <li class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          <?php echo get_cat_name( $category_id = 4 );?>
					        </a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					         <div class="ui-group">
						         
						              <?php
						                  $catTerms = get_terms('category', array(
						                    'hide_empty' => 0, 
						                    'orderby' => 'ASC', 
						                    'child_of'=> 4 // discipline applications
						                  ));?>
						                 <?php foreach($catTerms as $catTerm) : ?>  
						                    <div class="dropdown-item">
						                      <input class="input" type="checkbox" value=".<?php echo $catTerm->slug; ?>"><?php echo $catTerm->name; ?>
						                    </div> 
						                <?php endforeach; ?>
						       
						        </div>
					        </div>
					    </li>
					    <!-- End discipline -->
				     	<!-- Start based in -->
				        <li class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          	<?php echo get_cat_name( $category_id = 18 );?>
					        </a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					         	<div class="ui-group">
					        
					              <?php
					                  $catTerms = get_terms('category', array(
					                    'hide_empty' => 0, 
					                    'orderby' => 'ASC', 
					                    'child_of'=> 18 // discipline applications
					                  ));?>
										<?php foreach($catTerms as $catTerm) : ?>  
						                    <div class="dropdown-item">
						                      <input class="input" type="checkbox" value=".<?php echo $catTerm->slug; ?>"><?php echo $catTerm->name; ?>
						                    </div> 
						                <?php endforeach; ?>
					            
					          
					        	</div>
					        </div>
					    </li>
					    <!-- End based in -->
					    <!-- Start home -->
				        <li class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          	<?php echo get_cat_name( $category_id = 31 );?>
					        </a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					                 <div class="ui-group">
								      
								            
								            
								              <?php
								                  $catTerms = get_terms('category', array(
								                    'hide_empty' => 0, 
								                    'orderby' => 'ASC', 
								                    'child_of'=> 31 // discipline applications
								                  ));?>
								               <?php foreach($catTerms as $catTerm) : ?>  
								                    <div class="dropdown-item">
								                      <input class="input" type="checkbox" value=".<?php echo $catTerm->slug; ?>"><?php echo $catTerm->name; ?>
								                    </div> 
								                  <?php endforeach; ?>
								                
								       
								        </div>
					        </div>
					    </li>
					    <!-- End home -->

					     <!-- Start pronoun -->
				        <li class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          	<?php echo get_cat_name( $category_id = 44 );?>
					        </a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					                <div class="ui-group">
						              <?php
						                  $catTerms = get_terms('category', array(
						                    'hide_empty' => 0, 
						                    'orderby' => 'ASC', 
						                    'child_of'=> 44 // discipline applications
						                  ));?>
						                <?php foreach($catTerms as $catTerm) : ?>  
						                    <div class="dropdown-item">
						                      <input class="input" type="checkbox" value=".<?php echo $catTerm->slug; ?>"><?php echo $catTerm->name; ?>
						                    </div> 
						                <?php endforeach; ?>
								    </div>
					        </div>
					    </li>
					    <!-- End pronoun -->
				     	



				    </ul>
				    <form class="form-inline my-2 my-lg-0">
				    	<input  class="form-control mr-sm-2" type="text" id="quicksearch" placeholder="Search" />
				    </form>
				  </div>
			</nav>
<div class="section-content section-alter">
	<div class="container">
		<div class="row">	
			<div class="col-md-12 col-sm-12">
				<?php $wl_theme_options = weblizar_get_options(); ?>
				<div class="center-title">
					<?php if($wl_theme_options['latest_post'] !='') { ?>
					<div class="heading-title">
						<h2 class="h2-section-title"><?php echo $wl_theme_options['latest_post']; ?></h2>
					</div>
					<?php } ?>
					<?php if($wl_theme_options['blog_text'] !='') { ?>
					<p><?php echo $wl_theme_options['blog_text']; ?></p>
					<?php } ?>
					<div class="space-sep20"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="blog-features-carousel">
			<?php $args = array( 'post_type' => 'post','posts_per_page' =>6,'post__not_in'=>get_option("sticky_posts")); 	
					query_posts( $args );
					if(query_posts( $args ))
					{	$i=0;
						while(have_posts()):the_post();
						{ 	$recent_expet = get_the_excerpt(); ?>				
							<div data-animdelay="0.<?php echo $i; ?>s" data-animspeed="1s" data-animrepeat="0" data-animtype="fadeIn" class="feature animated fadeIn animatedVisi" style="animation-delay: 0s; animation-duration: 1s;">
								<div class="feature-image img-overlay">
									
									<?php
									$defalt_arg =array('class' => "img-responsive");
									if(has_post_thumbnail()): 
									the_post_thumbnail('home_blog', $defalt_arg);
									$post_thumbnail_id = get_post_thumbnail_id();
									$image_thumbnail_url = wp_get_attachment_url($post_thumbnail_id );					 
									?>					
									<div class="item-img-overlay">
										<div class="item_img_overlay_content">
											<a title="<?php the_title(); ?>" data-rel="prettyPhoto[portfolio]" href="<?php echo $image_thumbnail_url; ?>">
												<i class="icon-search"></i>
											</a>									
											<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><i class="icon-link"></i></a>                    
										</div>
									</div> 
									<?php endif; ?>
								</div>
								<div class="feature-content">
									<h3 class="h3-blog-title">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h3>
									<p><?php echo get_the_excerpt(); ?></p>
								</div>					
								<div class="feature-details">
									<span><i class="icon-picture"></i></span>							
									<span><i class="icon-time"></i> <?php the_time('M d, Y'); ?></span>
									<span><i class="icon-user"></i><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">Admin <?php //echo get_the_author(); ?></a></span>
									
								</div>        
							</div>				
					<?php $i=$i+2;
						} endwhile;
					}  ?>		
			</div>
		</div>
	</div>
	<div class="space-sep60"></div>
	<div class="feature-arrows">
		<div class="feature-arrow feature-arrow-left icon-angle-left"></div>
		<div class="feature-arrow feature-arrow-right icon-angle-right"></div>
	</div>
</div>
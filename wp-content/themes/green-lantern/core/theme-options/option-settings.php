<?php $wl_theme_options = weblizar_get_options(); ?>
<div class="block ui-tabs-panel active" id="option-general" >	
	<form method="post" id="weblizar_theme_options_general">
		<div id="heading">
			<table style="width:100%;"><tr>
				<td cols=2 ><h2><?php _e('General Settings','weblizar');?></h2></td>
				<td style="width:30%;">
					<div class="weblizar_settings_loding" id="weblizar_loding_general_image"></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_general_success" ><?php _e('Options Data updated','weblizar');?></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_general_reset" ><?php _e('Options data Reset','weblizar');?></div>
				</td>
				<td style="text-align:right;">					
					<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('general');">
					<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('general')" >
				</td>
				</tr>
			</table>			
		</div>	
		<div class="section">
			<div class="panel-group" id="accordion">
		
				  <div class="panel panel-default">				 
					<div class="panel-heading">					 
					  <h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
						 <?php _e('Theme Color Schemes','weblizar'); ?>
						</a>
						<a href="http://weblizar.com/themes/green-lantern-premium-theme/" target="_blank" class="btn btn-success btn_upsell"><?php _e('GET PREMIUM ','weblizar'); ?></a>
					  </h4>					  
					</div>
					
					<div id="collapseOne" class="panel-collapse collapse in">
					  <div class="panel-body">
						<?php $stylesheet= ' ' ;?>
						<select id="style_sheet" name="style_sheet" class="_inpute">
								<option <?php echo selected($stylesheet, 'light-blue.css' ); ?> value="light-blue.css" ><?php _e('light-blue','weblizar'); ?></option>
								<option <?php echo selected($stylesheet, 'green.css' ); ?> value="green.css" ><?php _e('green','weblizar'); ?></option>
								<option <?php echo selected($stylesheet, 'red.css' ); ?> value="red.css" ><?php _e('red','weblizar'); ?></option>
								<option <?php echo selected($stylesheet, 'pink.css' ); ?> value="pink.css" ><?php _e('pink','weblizar'); ?></option>
								<option <?php echo selected($stylesheet, 'light-purple.css' ); ?> value="light-purple.css" ><?php _e('light-purple','weblizar'); ?></option>
								<option <?php echo selected($stylesheet, 'orange.css' ); ?> value="orange.css" ><?php _e('orange','weblizar'); ?></option>
								<option <?php echo selected($stylesheet, 'bright-green.css' ); ?> value="bright-green.css" ><?php _e('bright-green','weblizar'); ?></option>
								<option <?php echo selected($stylesheet, 'dark-blue.css' ); ?> value="dark-blue.css" ><?php _e('dark-blue','weblizar'); ?></option>
								<option <?php echo selected($stylesheet, 'oil.css' ); ?> value="oil.css" ><?php _e('oil','weblizar'); ?></option>
								<option <?php echo selected($stylesheet, 'black.css' ); ?> value="black.css"  ><?php _e('black','weblizar'); ?></option>
								<option <?php echo selected($stylesheet, 'light-brown.css' ); ?> value="light-brown.css" ><?php _e('light-brown','weblizar'); ?></option>
								<option <?php echo selected($stylesheet, 'coffee.css' ); ?> value="coffee.css" ><?php _e('coffee','weblizar'); ?></option>
								<option <?php echo selected($stylesheet, 'flat-blue.css' ); ?> value="flat-blue.css"  ><?php _e('flat-blue','weblizar'); ?></option>
						</select>
						<span class="explain"><?php  _e('Select OUT of 10+ Color Schemes','weblizar'); ?></span>
					  </div>
					</div>
				  </div> 
			</div>	
		</div>
		<div class="section">
			<h3><?php _e('Enable Front-Page','weblizar'); ?></h3>
			<input type="checkbox" <?php if($wl_theme_options['_frontpage']=='on') echo "checked='checked'"; ?> id="_frontpage" name="_frontpage" > <span class="explain"><?php _e('Enable front-page on the HOME','weblizar');?> <a href="<?php echo home_url( '/' ); ?>wp-admin/options-reading.php"><?php _e('Click Here','weblizar');?></a>.</span>
		</div>
		<div class="section">
			<h3><?php _e('Add Your Company Logo','weblizar'); ?></h3>
			<input class="weblizar_inpute" id="weblizar_inpute4" type="text" value="<?php if($wl_theme_options['upload_image_logo']!='') { echo esc_attr($wl_theme_options['upload_image_logo']); } ?>"  name="upload_image_logo" size="36" class="upload has-file"/>
			<input type="button" id="upload_button4" value="Upload" class="btn btn-primary upload_image_button" onclick="show_re(4)" />
			<input type="button" id="preview_image4" value="Preview" class="btn btn-success " onclick="preview_image(4)" />
			<input type="button" id="remove_button4" value="Remove" class="btn btn-danger remove_button" style="<?php if($wl_theme_options['upload_image_logo']=='') { ?> display:none<?php } ?>" onclick="remove_image(4);" />
			<span class="explain" id="no_slide_media4" style="display:none"><?php _e('No media Selected','weblizar');?> </span>
			<span class="explain"><?php _e('Add Company logo from here suggested size is 150X50','weblizar');?></span>	
			<img class="weblizar-prev-img" id="slide-img4"  src="" />
		</div>
		<div class="section">
			<h3><?php _e('Logo Height','weblizar'); ?></h3>
			<input class="weblizar_inpute"  type="text" name="height" id="height" value="<?php echo $wl_theme_options['height']; ?>" >	
			<span class="explain"><?php  _e('Default Logo Height : 55px, if you want to increase than specify your value','weblizar'); ?></span>
		</div>
		<div class="section">
			<h3><?php _e('Logo Width','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="width" id="width"  value="<?php echo $wl_theme_options['width']; ?>" >	
			<span class="explain"><?php  _e('Default Logo Width : 150px, if you want to increase than specify your value','weblizar');?></span>
		</div>
		<div class="section">
			<h3><?php _e('Your Blog Title','weblizar'); ?></h3>
			<input type="checkbox" <?php if($wl_theme_options['text_title']=='on') echo "checked='checked'"; ?> id="text_title" name="text_title" > <span class="explain"><?php _e('Enable Blog-Title as a Logo for your . Setup title','weblizar');?> <a href="<?php echo home_url( '/' ); ?>wp-admin/options-general.php"><?php _e('Click Here','weblizar');?></a>.</span>
		</div>
		<div class="section">
			<h3><?php _e('Add Your Company Fevicon','weblizar'); ?></h3>
			<input class="weblizar_inpute" id="weblizar_inpute5" type="text" value="<?php if($wl_theme_options['upload_image_favicon']!='') { echo esc_attr($wl_theme_options['upload_image_favicon']); } ?>"  name="upload_image_favicon" size="36" class="upload has-file"/>
			<input type="button" id="upload_button5" value="Upload" class="btn btn-primary upload_image_button" onclick="show_re(5)" />
			<input type="button" id="preview_image5" value="Preview" class="btn btn-success " onclick="preview_image(5)" />
			<input type="button" id="remove_button5" value="Remove" class="btn btn-danger remove_button" onclick="remove_image(5);" style="<?php if($wl_theme_options['upload_image_favicon']=='') { ?> display:none<?php } ?>"  />
			<span class="explain" id="no_slide_media5" style="display:none"><?php _e('No media Selected','weblizar'); ?> </span>
			<span class="explain"><?php _e('Add Company fevicon from here suggested size is 32X32','weblizar');?></span>	
			<img class="weblizar-prev-img" id="slide-img5"  src="" />
		</div>		
		<div class="section">
			<h3><?php _e('Custom css','weblizar'); ?></h3>
			<textarea rows="8" cols="8" id="custom_css" name="custom_css"><?php if($wl_theme_options['custom_css']!='') { echo esc_attr($wl_theme_options['custom_css']); } ?></textarea>
			<div class="explain"><?php _e('This is a powerful feature provided here. No need to use custom css plugin, just paste your css code and see the magic.','weblizar'); ?><br></div>
		</div>
		<div class="section">
			<h3><?php _e('Blog-Post Title','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="latest_post" id="latest_post"  value="<?php echo $wl_theme_options['latest_post']; ?>" >	
			<div class="explain"><?php _e('Blog Post on Home Title','weblizar'); ?><br></div>
		</div>	
		<div class="section">
			<h3><?php _e('Blog-Post Text','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="blog_text" id="blog_text"  value="<?php echo $wl_theme_options['latest_post']; ?>" >	
			<div class="explain"><?php _e('Blog Post on Home Text','weblizar'); ?><br></div>
		</div>		
		<div id="button_section">
			<input type="hidden" value="1" id="weblizar_settings_save_general" name="weblizar_settings_save_general" />			
			<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('general');">
			<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('general')" >
		</div>
	</form>	
</div>
<!-------- Home slider setting -------->
<div class="block ui-tabs-panel deactive" id="option-home-image" >
	<form method="post" id="weblizar_theme_options_home-image">
		<div id="heading">
			<table style="width:100%;"><tr>
				<td cols=2 ><h2><?php _e('Slide show Settings','weblizar');?></h2></td>
				<td style="width:30%;">
					<div class="weblizar_settings_loding" id="weblizar_loding_home-image_image"></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_home-image_success" ><?php _e('Options Data updated','weblizar');?></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_home-image_reset" ><?php _e('Options data Reset','weblizar');?></div>
				</td>
				<td style="text-align:right;">					
					<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('home-image');">
					<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('home-image')" >
				</td>
				</tr>
			</table>			
		</div>
		<div class="section">
			<h3><?php _e('Slide show Interval','weblizar') ?></h3>
			<?php $side_interval = $wl_theme_options['side_interval']; ?>		
				<select name="side_interval" class="_inpute" >
					<option value="4000" <?php selected($side_interval, '4000' ); ?>>2000</option>
					<option value="4000" <?php selected($side_interval, '4000' ); ?>>3000</option>
					<option value="4000" <?php selected($side_interval, '4000' ); ?>>4000</option>
					<option value="5000" <?php selected($side_interval, '5000' ); ?>>5000</option>
					<option value="6000" <?php selected($side_interval, '6000' ); ?>>6000</option>
					<option value="7000" <?php selected($side_interval, '7000' ); ?>>7000</option>
					<option value="8000" <?php selected($side_interval, '8000' ); ?>>8000</option>
					<option value="9000" <?php selected($side_interval, '9000' ); ?>>9000</option>
					<option value="10000" <?php selected($side_interval, '10000' ); ?>>10000</option>
				</select>
				<span class="explain"><?php _e('Select Slide show Interval.','weblizar'); ?></span>	
		</div>
		<div class="section">
			<h3><?php _e('On-mouse hover Pause','weblizar'); ?></h3>
			<?php $side_pause = $wl_theme_options['side_pause']; ?>		
			<select name="side_pause" class="webriti_inpute" >					
				<option value="yes"  <?php echo selected($side_pause, 'yes' ); ?>><?php _e('Yes','weblizar');?></option>
				<option value="no" <?php echo selected($side_pause, 'no' ); ?>><?php _e('No','weblizar');?></option> 
			</select>
			<span class="explain"><?php _e('Pause Slider on hover.','weblizar'); ?></span>
		</div>	
		<div class="panel-group" id="1accordion">		
			<div class="panel panel-default">				 
				<div class="panel-heading">					 
					<h4 class="panel-title">
						<a id="panel-title" data-toggle="collapse" data-parent="#1accordion" href="#collapse11">
							<?php _e('Slide Detail One','weblizar'); ?>
							<span class="dashicons dashicons-arrow-down btn_upsell_arrow"></span>
						</a>
					</h4>					  
				</div>
				<div id="collapse11" class="panel-collapse collapse in">
					<div class="panel-body">			
						<div class="section">		
							<h3><?php _e('Home Feature Image One','weblizar'); ?></h3>
							<input class="weblizar_inpute" id="weblizar_inpute1" type="text" value="<?php if($wl_theme_options['slide_image']!='') { echo esc_attr($wl_theme_options['slide_image']); } ?>"  name="slide_image" size="36" class="upload has-file"/>
							<input type="button" id="upload_button1" value="Upload" class="btn btn-primary upload_image_button" onclick="show_re(1)" />
							<input type="button" id="preview_image1" value="Preview" class="btn btn-success " onclick="preview_image(1)" />
							<input type="button" id="remove_button1" value="Remove" class="btn btn-danger remove_button" style="<?php if($wl_theme_options['slide_image']=='') { ?> display:none<?php } ?>" onclick="remove_image(1);" />
							<span class="explain" id="no_slide_media1" style="display:none"><?php _e('No media Selected','weblizar'); ?> </span>
							<span class="explain"><?php _e('Add Home Feature image here, size suggestion is 1900X525.','weblizar'); ?></span><br>
							<img class="weblizar-prev-img" id="slide-img1"  src="" />
						</div>				
						<div class="section">
							<h3><?php _e('Home Feature Image Title One','weblizar'); ?></h3>
							<input  class="weblizar_inpute" type="text" name="slide_title" id="slide_title"  value="<?php if($wl_theme_options['slide_title']!='') { echo esc_attr($wl_theme_options['slide_title']); } ?>" >	
							<span class="explain"><?php  _e('Type Home Feature Image Title Here','weblizar');?></span>
						</div>			
						<div class="section">
							<h3><?php _e('Home Feature Image Description One','weblizar'); ?></h3>
							<input  class="weblizar_inpute" type="text" name="slide_desc" id="slide_desc"  value="<?php if($wl_theme_options['slide_desc']!='') { echo esc_attr($wl_theme_options['slide_desc']); } ?>" >	
							<span class="explain"><?php  _e('Type Home Feature Image Description Here','weblizar');?></span>
						</div>			
						<div class="section">
							<h3><?php _e('Home Feature Image Button Text One','weblizar'); ?></h3>
							<input  class="weblizar_inpute" type="text" name="slide_btn_text" id="slide_btn_text"  value="<?php if($wl_theme_options['slide_btn_text']!='') { echo esc_attr($wl_theme_options['slide_btn_text']); } ?>" >	
							<span class="explain"><?php  _e('Type Home Feature Image Button Text Here','weblizar');?></span>
						</div>			
						<div class="section">
							<h3><?php _e('Home Feature Image Button Link One','weblizar'); ?></h3>
							<input  class="weblizar_inpute" type="text" name="slide_btn_link" id="slide_btn_link"  value="<?php if($wl_theme_options['slide_btn_link']!='') { echo esc_attr($wl_theme_options['slide_btn_link']); } ?>" >	
							<span class="explain"><?php  _e('Type Home Feature Image Button Link Here','weblizar');?></span>
						</div>
					</div>
				</div>
			</div> 
		</div>
		<!-- Home Feature 2 -->
		<div class="section"></div>
		<div class="panel-group" id="2accordion">		
				  <div class="panel panel-default">				 
					<div class="panel-heading">	  
					<h4 class="panel-title">
						<a id="panel-title" data-toggle="collapse" data-parent="#2accordion" href="#collapse12">
							<?php _e('Slide Detail Two','weblizar'); ?>
							<span class="dashicons dashicons-arrow-down btn_upsell_arrow"></span>
						</a>
					</h4>					
					</div>
		<div id="collapse12" class="panel-collapse collapse">
		<div class="panel-body">
		<div class="section">
			<h3><?php _e('Home Feature Image Two','weblizar'); ?></h3>
			<input class="weblizar_inpute" type="text" id="weblizar_inpute2" value="<?php if($wl_theme_options['slide_image_1']!='') { echo esc_attr($wl_theme_options['slide_image_1']); } ?>"  name="slide_image_1" size="36" class="upload has-file"/>
			<input type="button" id="upload_button2" value="Upload" class="btn btn-primary upload_image_button" onclick="show_re(2)" />
			<input type="button" id="preview_image2" value="Preview" class="btn btn-success " onclick="preview_image(2)" />
			<input type="button" id="remove_button2" value="Remove" class="btn btn-danger remove_button" style="<?php if($wl_theme_options['slide_image_1']=='') { ?> display:none<?php } ?>" onclick="remove_image(2);" />
			<span class="explain" id="no_slide_media2" style="display:none"><?php _e('No media Selected','weblizar'); ?> </span>
			<span class="explain"><?php _e('Add Home Feature image here, size suggestion is 1900X525.','weblizar');?></span><br>	
			<img class="weblizar-prev-img" id="slide-img2"  src="" />
		</div>
		<div class="section">
			<h3><?php _e('Home Feature Image Title Two','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="slide_title_1" id="slide_title_1"  value="<?php if($wl_theme_options['slide_title_1']!='') { echo esc_attr($wl_theme_options['slide_title_1']); } ?>" >	
			<span class="explain"><?php  _e('Type Home Feature Image Title Here','weblizar');?></span>
		</div>
		<div class="section">
			<h3><?php _e('Home Feature Image Description Two','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="slide_desc_1" id="slide_desc_1"  value="<?php if($wl_theme_options['slide_desc_1']!='') { echo esc_attr($wl_theme_options['slide_desc_1']); } ?>" >	
			<span class="explain"><?php  _e('Type Home Feature Image Description Here','weblizar');?></span>
		</div>
		
		<div class="section">
			<h3><?php _e('Home Feature Image Button Text Two','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="slide_btn_text_1" id="slide_btn_text_1"  value="<?php if($wl_theme_options['slide_btn_text_1']!='') { echo esc_attr($wl_theme_options['slide_btn_text_1']); } ?>" >	
			<span class="explain"><?php  _e('Type Home Feature Image Button Text Here','weblizar');?></span>
		</div>
		
		<div class="section">
			<h3><?php _e('Home Feature Image Button Link Two','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="slide_btn_link_1" id="slide_btn_link_1"  value="<?php if($wl_theme_options['slide_btn_link_1']!='') { echo esc_attr($wl_theme_options['slide_btn_link_1']); } ?>" >	
			<span class="explain"><?php  _e('Type Home Feature Image Button Link Here','weblizar');?></span>
		</div>
		</div>
		</div>
		</div> 
		</div>
		<!-- Home Feature 3 -->
		<div class="section"></div>
		<div class="panel-group" id="3accordion">		
			<div class="panel panel-default">				 
				<div class="panel-heading">
					<h4 class="panel-title">
						<a id="panel-title" data-toggle="collapse" data-parent="#2accordion" href="#collapse13">
							<?php _e('Slide Detail Three','weblizar'); ?>
							<span class="dashicons dashicons-arrow-down btn_upsell_arrow"></span>
						</a>
					</h4>
				</div>
		<div id="collapse13" class="panel-collapse collapse">
		<div class="panel-body">
		<div class="section">
			<h3><?php _e('Home Feature Image Three','weblizar'); ?></h3>
			<input class="weblizar_inpute" id="weblizar_inpute3" type="text" value="<?php if($wl_theme_options['slide_image_2']!='') { echo esc_attr($wl_theme_options['slide_image_2']); } ?>"  name="slide_image_2" size="36" class="upload has-file"/>
			<input type="button" id="upload_button3" value="Upload" class="btn btn-primary upload_image_button" onclick="show_re(3)" />
			<input type="button" id="preview_image3" value="Preview" class="btn btn-success " onclick="preview_image(3)" />
			<input type="button" id="remove_button3" value="Remove" class="btn btn-danger remove_button" style="<?php if($wl_theme_options['slide_image_2']=='') { ?> display:none<?php } ?>" onclick="remove_image(3);" />
			<span class="explain" id="no_slide_media3" style="display:none"><?php _e('No media Selected','weblizar'); ?> </span>
			<span class="explain"><?php _e('Add Home Feature image here, size suggestion is 1900X525.','weblizar');?></span><br>	
			<img class="weblizar-prev-img" id="slide-img3"  src="" />
		</div>
		<div class="section">
			<h3><?php _e('Home Feature Image Title Three','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="slide_title_2" id="slide_title_2"  value="<?php if($wl_theme_options['slide_title_2']!='') { echo esc_attr($wl_theme_options['slide_title_2']); } ?>" >	
			<span class="explain"><?php  _e('Type Home Feature Image Title Here','weblizar');?></span>
		</div>
		<div class="section">
			<h3><?php _e('Home Feature Image Description Three','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="slide_desc_2" id="slide_desc_2"  value="<?php if($wl_theme_options['slide_desc_2']!='') { echo esc_attr($wl_theme_options['slide_desc_2']); } ?>" >	
			<span class="explain"><?php  _e('Type Home Feature Image Description Here','weblizar');?></span>
		</div>
		
		<div class="section">
			<h3><?php _e('Home Feature Image Button Text Three','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="slide_btn_text_2" id="slide_btn_text_2"  value="<?php if($wl_theme_options['slide_btn_text_2']!='') { echo esc_attr($wl_theme_options['slide_btn_text_2']); } ?>" >	
			<span class="explain"><?php  _e('Type Home Feature Image Button Text Here','weblizar');?></span>
		</div>
		
		<div class="section">
			<h3><?php _e('Home Feature Image Button Link Three','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="slide_btn_link_2" id="slide_btn_link_2"  value="<?php if($wl_theme_options['slide_btn_link_2']!='') { echo esc_attr($wl_theme_options['slide_btn_link_2']); } ?>" >	
			<span class="explain"><?php  _e('Type Home Feature Image Button Link Here','weblizar');?></span>
		</div>
		</div>
		</div>
		</div> 
		</div>	
		<div class="section">
			<div class="panel-group" id="accordion1">		
			  <div class="panel panel-default">		 
				<div class="panel-heading">				 
				  <h4 class="panel-title">
					<a data-toggle="collapse" data-parent="#accordion" href="#collapsetwo">
					 <?php _e('More Slides','weblizar'); ?>
					</a>
					<a href="http://weblizar.com/themes/green-lantern-premium-theme/" target="_blank" class="btn btn-success btn_upsell"><?php _e('GET PREMIUM','weblizar'); ?></a>
				  </h4>
				  
				</div>
				
				<div id="collapsetwo" class="panel-collapse collapse in">
				  <div class="panel-body">
				   
					<span class="explain"><?php  _e('Add Unlimited slides for your sideshow ','weblizar'); ?></span>
				  </div>
				</div>
			  </div> 
			</div>
		</div>
		<!---Save DATA -->
		
		<div id="button_section">
			<input type="hidden" value="1" id="weblizar_settings_save_home-image" name="weblizar_settings_save_home-image" />			
			<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('home-image');">
			<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('home-image')" >
		</div>
	</form>
</div>

<!--------------- service settings ------------>
<div class="block ui-tabs-panel deactive" id="option-home-service">
	<form method="post" id="weblizar_theme_options_home-service">
		<div id="heading">
			<table style="width:100%;"><tr>
				<td cols=2 ><h2><?php _e('Service Settings','weblizar');?></h2></td>
				<td style="width:30%;">
					<div class="weblizar_settings_loding" id="weblizar_loding_home-service_image"></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_home-service_success" ><?php _e('Options Data updated','weblizar');?></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_home-service_reset" ><?php _e('Options data Reset','weblizar');?></div>
				</td>
				<td style="text-align:right;">					
					<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('home-service');">
					<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('home-service')" >
				</td>
				</tr>
			</table>			
		</div>
		<div class="panel-group" id="4accordion">		
				  <div class="panel panel-default">				 
					<div class="panel-heading">					 
					  <h4 class="panel-title">
						<a id="panel-title" data-toggle="collapse" data-parent="#4accordion" href="#collapse14">
						<?php _e('Service Detail One','weblizar'); ?> <span class="dashicons dashicons-arrow-down btn_upsell_arrow"></span>
						</a>							
					  </h4>					  
					</div>
		<div id="collapse14" class="panel-collapse collapse in">
		<div class="panel-body">
		<div class="section">
			<h3><?php _e('Service One','weblizar'); ?></h3>
			<hr>
			<h3><?php _e('Service Title','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="service_1_title" id="service_1_title"  value="<?php if($wl_theme_options['service_1_title']!='') { echo esc_attr($wl_theme_options['service_1_title']); } ?>" >	
			<span class="explain"><?php  _e('Type here your service title','weblizar');?></span>
			<h3><?php _e('Service  Icons','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="service_1_icons" id="service_1_icons"  value="<?php if($wl_theme_options['service_1_icons']!='') { echo esc_attr($wl_theme_options['service_1_icons']); } ?>" >	
			<br>
			<span class="explain"><?php  _e('Service Icon (Using Font-Awesome icon name) like: fa fa-area-chart','weblizar');?> <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank"> <?php _e('Get your Font-Awesome icons','weblizar'); ?>.</a> </span>
			<h3><?php _e('Service Description','weblizar'); ?></h3>			
			<?php $settings = array( "media_buttons" => false,"quicktags" => false, "tinymce" => array( "plugins" => "wordpress" ) ); ?>
		<?php $content = $wl_theme_options["service_1_text"]!="" ? esc_attr($wl_theme_options["service_1_text"]) : "" ; ?>                     
		<?php $editor_id = "service_1_text"; ?>
		<?php wp_editor( $content, $editor_id,$settings ); ?>
			<div class="explain"><?php _e('Type here your service description.','weblizar'); ?><br></div>
			<h3><?php _e('Service  Link','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="service_1_link" id="service_1_link"  value="<?php if($wl_theme_options['service_1_link']!='') { echo esc_attr($wl_theme_options['service_1_link']); } ?>" >	
			<span class="explain"><?php  _e('Type here your service link','weblizar');?></span>
		</div></div></div></div></div>
		
		<div class="section"></div>
		<div class="panel-group" id="5accordion">		
				  <div class="panel panel-default">				 
					<div class="panel-heading">					 
					  <h4 class="panel-title">
						<a  id="panel-title" data-toggle="collapse" data-parent="#5accordion" href="#collapse15">
						 <?php _e('Service Detail Two','weblizar'); ?> <span class="dashicons dashicons-arrow-down btn_upsell_arrow"></span>
						</a>							
					  </h4>					  
					</div>
		<div id="collapse15" class="panel-collapse collapse">
		<div class="panel-body">
		
		<div class="section">
			<h3><?php _e('Service Two','weblizar'); ?></h3>
			<hr>
			<h3><?php _e('Service Title','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="service_2_title" id="service_2_title"  value="<?php if($wl_theme_options['service_2_title']!='') { echo esc_attr($wl_theme_options['service_2_title']); } ?>" >	
			<span class="explain"><?php  _e('Type here your service title','weblizar');?></span>
			<h3><?php _e('Service  Icons','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="service_2_icons" id="service_2_icons"  value="<?php if($wl_theme_options['service_2_icons']!='') { echo esc_attr($wl_theme_options['service_2_icons']); } ?>" >	
			<br>
			<span class="explain"><?php  _e('Service Icon (Using Font-Awesome icon name) like: fa fa-area-chart','weblizar');?> <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank"> <?php _e('Get your Font-Awesome icons','weblizar'); ?>.</a> </span>
			<h3><?php _e('Service Description','weblizar'); ?></h3>			
			<?php $settings = array( "media_buttons" => false,"quicktags" => false, "tinymce" => array( "plugins" => "wordpress" ) ); ?>
		<?php $content = $wl_theme_options["service_2_text"]!="" ? esc_attr($wl_theme_options["service_2_text"]) : "" ; ?>                     
		<?php $editor_id = "service_2_text"; ?>
		<?php wp_editor( $content, $editor_id,$settings ); ?>
			<div class="explain"><?php _e('Type here your service description.','weblizar'); ?><br></div>
			<h3><?php _e('Service  Link','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="service_2_link" id="service_2_link"  value="<?php if($wl_theme_options['service_2_link']!='') { echo esc_attr($wl_theme_options['service_2_link']); } ?>" >	
			<span class="explain"><?php  _e('Type here your service link','weblizar');?></span>
		</div>
		</div>
		</div>
		</div>
		</div>
		
		<div class="section"></div>
		<div class="panel-group" id="7accordion">		
				  <div class="panel panel-default">				 
					<div class="panel-heading">					 
					  <h4 class="panel-title">
						<a id="panel-title" data-toggle="collapse" data-parent="#7accordion" href="#collapse17">
						 <?php _e('Service Detail Three','weblizar'); ?><span class="dashicons dashicons-arrow-down btn_upsell_arrow"></span> 
						</a>							
					  </h4>					  
					</div>
		<div id="collapse17" class="panel-collapse collapse">
		<div class="panel-body">
		<div class="section">
			<h3><?php _e('Service Three','weblizar'); ?></h3>
			<hr>
			<h3><?php _e('Service Title','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="service_3_title" id="service_3_title"  value="<?php if($wl_theme_options['service_3_title']!='') { echo esc_attr($wl_theme_options['service_3_title']); } ?>" >	
			<span class="explain"><?php  _e('Type here your service title','weblizar');?></span>
			<h3><?php _e('Service  Icons','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="service_3_icons" id="service_3_icons"  value="<?php if($wl_theme_options['service_3_icons']!='') { echo esc_attr($wl_theme_options['service_3_icons']); } ?>" >	
			<br>
			<span class="explain"><?php  _e('Service Icon (Using Font-Awesome icon name) like: fa fa-area-chart','weblizar');?> <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank"> <?php _e('Get your Font-Awesome icons','weblizar'); ?>.</a> </span>
			<h3><?php _e('Service Description','weblizar'); ?></h3>			
			<?php $settings = array( "media_buttons" => false,"quicktags" => false, "tinymce" => array( "plugins" => "wordpress" ) ); ?>
		<?php $content = $wl_theme_options["service_3_text"]!="" ? esc_attr($wl_theme_options["service_3_text"]) : "" ; ?>                     
		<?php $editor_id = "service_3_text"; ?>
		<?php wp_editor( $content, $editor_id,$settings ); ?>
			<div class="explain"><?php _e('Type here your service description.','weblizar'); ?><br></div>
			<h3><?php _e('Service  Link','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="service_3_link" id="service_3_link"  value="<?php if($wl_theme_options['service_3_link']!='') { echo esc_attr($wl_theme_options['service_3_link']); } ?>" >	
			<span class="explain"><?php  _e('Type here your service link','weblizar');?></span>
		</div>
		</div>
		</div>
		</div>
		</div>
		<div class="section"></div>
		<div class="panel-group" id="8accordion">		
				  <div class="panel panel-default">				 
					<div class="panel-heading">					 
					  <h4 id="panel-title" class="panel-title">
						<a data-toggle="collapse" data-parent="#8accordion" href="#collapse18">
						 <?php _e('Service Detail Four','weblizar'); ?><span class="dashicons dashicons-arrow-down btn_upsell_arrow"></span> 
						</a>							
					  </h4>					  
					</div>
		<div id="collapse18" class="panel-collapse collapse">
		<div class="panel-body">
		<div class="section">
			<h3><?php _e('Service Four','weblizar'); ?></h3>
			<hr>
			<h3><?php _e('Service Title','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="service_4_title" id="service_4_title"  value="<?php if($wl_theme_options['service_4_title']!='') { echo esc_attr($wl_theme_options['service_4_title']); } ?>" >	
			<span class="explain"><?php  _e('Type here your service title','weblizar');?></span>
			<h3><?php _e('Service  Icons','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="service_4_icons" id="service_4_icons"  value="<?php if($wl_theme_options['service_4_icons']!='') { echo esc_attr($wl_theme_options['service_4_icons']); } ?>" >	
			<br>
			<span class="explain"><?php  _e('Service Icon (Using Font-Awesome icon name) like: fa fa-area-chart','weblizar');?> <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank"> <?php _e('Get your Font-Awesome icons','weblizar'); ?>.</a> </span>
			<h3><?php _e('Service Description','weblizar'); ?></h3>			
			<?php $settings = array( "media_buttons" => false,"quicktags" => false, "tinymce" => array( "plugins" => "wordpress" ) ); ?>
		<?php $content = $wl_theme_options["service_4_text"]!="" ? esc_attr($wl_theme_options["service_4_text"]) : "" ; ?>                     
		<?php $editor_id = "service_4_text"; ?>
		<?php wp_editor( $content, $editor_id,$settings ); ?>
			<div class="explain"><?php _e('Type here your service description.','weblizar'); ?><br></div>
			<h3><?php _e('Service  Link','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="service_4_link" id="service_4_link"  value="<?php if($wl_theme_options['service_4_link']!='') { echo esc_attr($wl_theme_options['service_4_link']); } ?>" >	
			<span class="explain"><?php  _e('Type here your service link','weblizar');?></span>
		</div>
		</div>
		</div>
		</div>
		</div>
		
		<div class="section">
			<div class="panel-group" id="accordion3">
		
			  <div class="panel panel-default">		 
				<div class="panel-heading">
				 
				  <h4 class="panel-title">
					<a id="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapsefour">
					 <?php _e('More Services','weblizar'); ?>
					</a>
					<a href="http://weblizar.com/themes/weblizar-premium-theme/" target="_blank" class="btn btn-success btn_upsell"><?php _e('GET PREMIUM','weblizar'); ?></a>
				  </h4>
				  
				</div>
				
				<div id="collapsefour" class="panel-collapse collapse in">
				  <div class="panel-body">				   
					<span class="explain"><?php  _e('Add More Services on your Home Page.','weblizar'); ?></span>
				  </div>
				</div>
			  </div> 
			</div>
		</div>
		<div id="button_section">
			<input type="hidden" value="1" id="weblizar_settings_save_home-service" name="weblizar_settings_save_home-service" />			
			<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('home-service');">
			<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('home-service')" >
			<!--  alert massage when data saved and reset -->
		</div>
	</form>
</div>

<!-------- Social media link settings ----------->
<div class="block ui-tabs-panel deactive" id="option-social" >	
	<form method="post" id="weblizar_theme_options_social">
		<div id="heading">
			<table style="width:100%;"><tr>
				<td><h2><?php _e('Social media','weblizar');?></h2></td>
					<td style="width:30%;">
						<div class="weblizar_settings_loding" id="weblizar_loding_social_image"></div>
						<div class="weblizar_settings_massage" id="weblizar_settings_save_social_success" ><?php _e('Options Data updated','weblizar');?></div>
						<div class="weblizar_settings_massage" id="weblizar_settings_save_social_reset" ><?php _e('Options data Reset','weblizar');?></div>
					</td>
					<td style="text-align:right;">					
						<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('social');">
						<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('social')" >
					</td>
				</tr>
			</table>	
		</div>		
		<div class="section">
			<h3><?php _e('Enable Social media:','weblizar'); ?>  </h3>
			<input type="checkbox" <?php if($wl_theme_options['footer_section_social_media_enbled']=='on') echo "checked='checked'"; ?> id="footer_section_social_media_enbled" name="footer_section_social_media_enbled" > <span class="explain"><?php _e('Enable Social media in footer section.','weblizar'); ?></span>
		</div>
		<div class="section">
			<h3><?php _e('Twitter Link:','weblizar');?></h3>
			<input class="weblizar_inpute"  type="text" name="social_media_twitter_link" id="social_media_twitter_link" value="<?php if($wl_theme_options['social_media_twitter_link']!='') { echo esc_attr($wl_theme_options['social_media_twitter_link']); } ?>" >
			<span class="explain"><?php  _e('Enter twitter link.','weblizar');?></span>
			</div>
		<div class="section">
			<h3><?php _e('Linkedin Links:','weblizar');?></h3>
			<input class="weblizar_inpute"  type="text" name="social_media_linkedin_link" id="social_media_linkedin_link" value="<?php if($wl_theme_options['social_media_linkedin_link']!='') { echo esc_attr($wl_theme_options['social_media_linkedin_link']); } ?>" >
			<span class="explain"><?php  _e('Enter linkedin link.','weblizar');?></span>
		</div>
		
		<div class="section">
			<h3><?php _e('Facebook Links:','weblizar');?></h3>
			<input class="weblizar_inpute"  type="text" name="social_media_facebook_link" id="social_media_facebook_link" value="<?php if($wl_theme_options['social_media_facebook_link']!='') { echo esc_attr($wl_theme_options['social_media_facebook_link']); } ?>" >
			<span class="explain"><?php  _e('Enter facebook link.','weblizar');?></span>
		</div>
		
		<div class="section">
			<h3><?php _e('Google Plus Links:','weblizar');?></h3>
			<input class="weblizar_inpute"  type="text" name="social_media_google_plus" id="social_media_google_plus" value="<?php if($wl_theme_options['social_media_google_plus']!='') { echo esc_attr($wl_theme_options['social_media_google_plus']); } ?>" >
			<span class="explain"><?php  _e('Enter google plus link.','weblizar');?></span>
		</div>
		<div id="button_section">
			<input type="hidden" value="1" id="weblizar_settings_save_social" name="weblizar_settings_save_social" />			
			<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('social');">
			<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('social')" >
		</div>
	</form>
</div>
<!---------------- footer customization Settings form ------------------------>
<div class="block ui-tabs-panel deactive" id="option-footer" >
	<form method="post" id="weblizar_theme_options_footer">
		<div id="heading">
			<table style="width:100%;"><tr>
				<td cols=2 ><h2><?php _e('Footer Customization','weblizar');?></h2></td>
				<td style="width:30%;">
					<div class="weblizar_settings_loding" id="weblizar_loding_footer_image"></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_footer_success" ><?php _e('Options Data updated','weblizar');?></div>
					<div class="weblizar_settings_massage" id="weblizar_settings_save_footer_reset" ><?php _e('Options data Reset','weblizar');?></div>
				</td>
				<td style="text-align:right;">					
					<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('footer');">
					<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('footer')" >
				</td>
				</tr>
			</table>			
		</div>	
		<div class="section">
			<h3><?php _e('Footer customization','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="footer_customizations" id="footer_customizations"  value="<?php if($wl_theme_options['footer_customizations']!='') { echo esc_attr($wl_theme_options['footer_customizations']); } ?>" >	
			<span class="explain"><?php  _e('Enter your footer customization text ','weblizar');?></span>
		</div>		
		<div class="section">
			<h3><?php _e('Developed by text','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="developed_by_text" id="developed_by_text"  value="<?php if($wl_theme_options['developed_by_text']!='') { echo esc_attr($wl_theme_options['developed_by_text']); } ?>" >	
			<span class="explain"><?php  _e('Enter developed by text','weblizar');?></span>
		</div>		
		<div class="section">
			<h3><?php _e('Developed by link text','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="developed_by_weblizar_text" id="developed_by_weblizar_text"  value="<?php if($wl_theme_options['developed_by_weblizar_text']!='') { echo esc_attr($wl_theme_options['developed_by_weblizar_text']); } ?>" >	
			<span class="explain"><?php  _e('Enter developed by link text  ','weblizar');?></span>
		</div>		
		<div class="section">
			<h3><?php _e('Developed by link','weblizar'); ?></h3>
			<input  class="weblizar_inpute" type="text" name="developed_by_link" id="developed_by_link"  value="<?php if($wl_theme_options['developed_by_link']!='') { echo esc_attr($wl_theme_options['developed_by_link']); } ?>" >	
			<span class="explain"><?php  _e('Enter developed by link','weblizar');?></span>
		</div>			
		<div id="button_section">
			<input type="hidden" value="1" id="weblizar_settings_save_footer" name="weblizar_settings_save_footer" />			
			<input class="button" type="button" name="reset" value="Restore Defaults" onclick="weblizar_option_data_reset('footer');">
			<input class="button button-primary" type="button" value="Save Options" onclick="weblizar_option_data_save('footer')" >
		</div>
	</form>	
</div>
<!---------------- footer customization Settings form ------------------------>
<div class="block ui-tabs-panel deactive" id="option-getpro" >
<div class="plan-name">
	<h2><?php _e('Green Lantern Pro Responsive Wordpress Theme','weblizar'); ?></h2>
	<h6><?php _e('Get The Premium Green Lantern in Just $29','weblizar'); ?> </h6>
</div>

<div class="row-fluid pricing-table pricing-three-column">
	<div class="col-md-4">
		<div class=" plan ap">
			<div class="plan-name">
				<h2><?php _e('Feature','weblizar'); ?></h2>				
			</div>
			<ul>
				<li class="plan-feature"><?php _e('Easy to customize','weblizar'); ?> </li>
				<li class="plan-feature"><?php _e('Awesome & Touch Slider','weblizar'); ?></li>
				<li class="plan-feature"><?php _e('Multi Color','weblizar'); ?></li>
				<li class="plan-feature"><?php _e('Boxed & Wide','weblizar'); ?></li>
				<li class="plan-feature"><?php _e('Widgetized Footer','weblizar'); ?></li>
				<li class="plan-feature"><?php _e('Custom Widgets','weblizar'); ?></li>				
				<li class="plan-feature"><?php _e('Shortcode','weblizar'); ?></li>
				<li class="plan-feature"><?php _e('Page Templates','weblizar'); ?></li>
				<li class="plan-feature"><?php _e('Quick Support','weblizar'); ?></li>
				<li class="plan-feature"><?php _e('Custom CSS','weblizar'); ?></li>
				<li class="plan-feature"><?php _e('Custom Background','weblizar'); ?></li>
				<li class="plan-feature"><?php _e('Logo & Header text','weblizar'); ?></li>
				<li class="plan-feature"><?php _e('Portfolio Template','weblizar'); ?></li>
				<li class="plan-feature"><?php _e('Coming soon Mode','weblizar'); ?> </li>
				<li class="plan-feature"><?php _e('Special Gallery Template','weblizar'); ?></li>
			</ul>
		</div>
	</div>
	<div class="col-md-4">
		<div class=" plan bp">
			<div class="plan-name">
				<h2><?php _e('Free','weblizar'); ?></h2>
				
			</div>
			<ul>
				<li class="plan-feature"><i class="fa fa-times fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-times fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-times fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-times fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-times fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-times fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-times fa-1x"></i></li>
				<li class="plan-feature">1</li>
				<li class="plan-feature"><?php _e('WPORG Support','weblizar'); ?></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-times fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-times fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-times fa-1x"></i></li>
				
				<li class="plan-feature">
					<a href="https://wordpress.org/themes/green-lantern" class="button button-primary button-hero" style="font-size: large; font-weight: bolder;"><i class="fa fa-thumbs-up"></i> <?php _e('Enjoy Theme','weblizar'); ?></a>
				</li>
			</ul>
		</div>
	</div>
	
	<div class="col-md-4">
		<div class=" plan cp">
			<div class="plan-name">
				<h2><?php _e('Pro','weblizar'); ?> - ( $29 )</h2>
				
			</div>
			<ul>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature">15+</li>
				<li class="plan-feature">15+</li>
				<li class="plan-feature"><?php _e('Private Support Forum','weblizar'); ?></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature"><i class="fa fa-check fa-1x"></i></li>
				<li class="plan-feature">
					<a class="btn btn-primary btn-lg" href="http://weblizar.com/themes/green-lantern-premium-theme/" target="_new" style="font-size: large; font-weight: bolder;"><i class="fa fa-check-circle"></i> <?php _e('Demo','weblizar'); ?></a>
					<a class="btn btn-danger btn-lg" href="http://weblizar.com/themes/green-lantern-premium-theme/" target="_new" style="font-size: large; font-weight: bolder;"><i class="fa fa-shopping-cart"></i><?php _e(' Buy','weblizar'); ?></a>
				</li>
			</ul>
		</div>
	</div>	
</div>
<style>
    .pricing-table .plan ul li.plan-feature { padding: 8px !important;  }
    .ap .plan-name {  background-color: #1E8CBE !important; }
    .bp .plan-name {  background-color: #1E8CBE !important; }
    .cp .plan-name {  background-color: #1E8CBE !important; }
    li {  font-size: larger !important;  }
    .row-fluid .span4 { width: 30.624% !important; }
</style>
</div>
<div class="block ui-tabs-panel deactive" id="option-ourproduct" >
	<div class="row-fluid pricing-table pricing-three-column">
	<div class="plan-name centre"> 
	<a style="margin-bottom:10px;textt-align:center" target="_new" href="http://weblizar.com"><img  src="http://weblizar.com/wp-content/themes/home-theme/images/weblizar2.png" /></a>
	<div class="purchase_btn_div">
	<a href="http://www.weblizar.com" target="_new" class="btn btn-primary btn-lg dmobtn"><?php _e('View Site','weblizar'); ?></a>		
	</div>
	</div>	
	<div class="plan-name">
        <h2><?php _e('Weblizar Responsive Wordpress Theme','weblizar'); ?></h2>
		<h6><?php _e('Get The Premium, And Create your website Beautifully.','weblizar'); ?>  </h6>
    </div>
	<div class="col-md-4  demoftr "> 
		<h2><?php _e('Green Lantern Pro','weblizar'); ?></h2>
		<div class="img-wrapper">
			<div class="enigma_home_portfolio_showcase">
				<img class="enigma_img_responsive ftr_img"  src="http://weblizar.com/wp-content/themes/home-theme/images/green-lantern-premium-images/glp-slide-1.jpg">
				<div class="enigma_home_portfolio_showcase_overlay">
					<div class="enigma_home_portfolio_showcase_overlay_inner ">
						<div class="enigma_home_portfolio_showcase_icons">
							<a title="Link" data-toggle="modal" data-target="#myModalGreen" href="View Detail#"><?php _e('View Detail','weblizar'); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal  -->
	<div class="modal" id="myModalGreen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content ">
		  <div class="modal-header ">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php _e('Close','weblizar'); ?></span></button>
				<h4 class="modal-title" id="myModalLabel">
				<a class="pro-dir-button" data-toggle="modal" data-target="#myModal"  data-dismiss="modal" href="View Detail#" class="pro-dir-button"><i style="color:#000;line-height:1.5" class="fa fa-angle-right fa-2x"></i></a>
			</h4>
		  </div>
		  <div class="modal-body">
			<div class="col-md-6">
				<img class="enigma_img_responsive ftr_img"  src="http://weblizar.com/wp-content/themes/home-theme/images/green-lantern-premium-images/glp-slide-1.jpg">
			</div>
			<div class="col-md-6">
				<div class="theme-info">
					<h3 class="theme-name"><?php _e('Green Lantern Pro Theme','weblizar'); ?></h3>
					<h4 class="theme-author"><?php _e('By <a href="http://weblizar.com/" title="Visit author homepage">weblizar','weblizar'); ?></a></h4>
					<p class="theme-description"><?php _e('Green Lantern is a Full Responsive Multi-Purpose Theme suitable for Business , corporate office amd others .Cool Blog Layout and full width page also present','weblizar'); ?></p>
					<h4  style="margin-top:20px;"><?php _e('Features','weblizar'); ?></h4>
					<div class="col-md-6">
						<div class="enigma_sidebar_link">
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Responsive Design','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Retina Ready','weblizar'); ?> 
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Html5 & Css3','weblizar'); ?> 
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Multi-purpose Theme','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Unlimited Color Schemes','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Multiple Templates','weblizar'); ?> 
							</p>
						
						</div>
					</div>
					<div class="col-md-6">
						<div class="enigma_sidebar_link">
							<p>
								<i class="fa fa-angle-right"></i><?php _e('All Browser Support','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Powerful Option Panel','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Coming Soon Mode','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Custom Shortcode','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Isotope Effects and lightbox','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Fast & Friendly Support','weblizar'); ?> 
							</p>
						</div>
					</div>
					<p></p>
					<div class="col-md-12" style="margin-top:20px;">
						<a class="btn btn-success btn-lg" target="_new" href="http://weblizar.com/themes/green-lantern-premium-theme/"><?php _e('View Demo','weblizar'); ?></a>&nbsp;&nbsp;
						<a  class="btn btn-danger btn-lg" target="_new" href="http://weblizar.com/themes/green-lantern-premium-theme/"><?php _e('Purchase Now','weblizar'); ?></a>
					</div>
					
				</div>
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal"><?php _e('Close','weblizar'); ?></button>
			
		  </div>
		</div>
	  </div>
	</div>
	<div class="col-md-4  demoftr "> 
		<h2><?php _e('Enigma-Pro','weblizar'); ?></h2>
		<div class="img-wrapper">
			<div class="enigma_home_portfolio_showcase">
				<img class="enigma_img_responsive ftr_img"  src="http://weblizar.com/wp-content/themes/home-theme/images/enigma-full.jpg">
				<div class="enigma_home_portfolio_showcase_overlay">
					<div class="enigma_home_portfolio_showcase_overlay_inner ">
						<div class="enigma_home_portfolio_showcase_icons">
							<a title="Link" data-toggle="modal" data-target="#myModal" href="View Detail#"><?php _e('View Detail','weblizar'); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	<!-- Modal  -->
	<div class="modal " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content ">
		  <div class="modal-header ">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php _e('Close','weblizar'); ?></span></button>
			<h4 class="modal-title" id="myModalLabel"> 
			<a data-toggle="modal" data-target="#myModalGreen"  data-dismiss="modal" href="View Detail#" class="pro-dir-button"><i style="color:#000;line-height:1.5" class="fa fa-angle-left fa-2x"></i></a>
			<a data-toggle="modal" data-target="#myModalweblizar"  data-dismiss="modal" href="View Detail#"  class="pro-dir-button"><i style="color:#000;line-height:1.5" class="fa fa-angle-right fa-2x"></i></a>
			</h4>
		  </div>
		  <div class="modal-body">
			<div class="col-md-6">
				<img class="enigma_img_responsive ftr_img"  src="http://weblizar.com/wp-content/themes/home-theme/images/enigma-full.jpg">
			</div>
			<div class="col-md-6">
				<div class="theme-info">
					<h3 class="theme-name"><?php _e('Enigma Pro Theme','weblizar'); ?></h3>
					<h4 class="theme-author"><?php _e('By','weblizar'); ?> <a href="http://weblizar.com/" title="Visit author homepage"><?php _e('weblizar','weblizar'); ?></a></h4>
					<p class="theme-description"><?php _e('Enigma is HTML5 & CSS3 Responsive WordPress Business theme with business style , 7 blog templates , 6 portfolio templates and many more.','weblizar'); ?></p>
					<h4  style="margin-top:20px;"><?php _e('Features','weblizar'); ?></h4>
					<div class="col-md-6">
						<div class="enigma_sidebar_link">
							<p><i class="fa fa-angle-right"></i><?php _e('Responsive Design','weblizar'); ?></p>
							<p><i class="fa fa-angle-right"></i><?php _e('Retina Ready','weblizar'); ?> </p>
							<p><i class="fa fa-angle-right"></i><?php _e('Html5 & Css3','weblizar'); ?> </p>
							<p><i class="fa fa-angle-right"></i><?php _e('Multi-purpose Theme','weblizar'); ?></p>
							<p><i class="fa fa-angle-right"></i><?php _e('Unlimited Color Schemes','weblizar'); ?></p>
							<p><i class="fa fa-angle-right"></i><?php _e('Multiple Templates','weblizar'); ?> </p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="enigma_sidebar_link">
							<p>
								<i class="fa fa-angle-right"></i><?php _e('All Browser Support','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Powerful Option Panel','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Coming Soon Mode','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Custom Shortcode','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Isotope Effects and lightbox','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Fast & Friendly Support','weblizar'); ?> 
							</p>
						</div>
					</div>
					<div class="col-md-12" style="margin-top:20px;">
						<a class="btn btn-success btn-lg" target="_new" href="http://weblizar.com/themes/enigma-premium/"><?php _e('View Demo','weblizar'); ?></a>&nbsp;&nbsp;
						<a  class="btn btn-danger btn-lg" target="_new" href="http://weblizar.com/themes/enigma-premium/"><?php _e('Purchase Now','weblizar'); ?></a>
					</div>
				</div>
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal"><?php _e('Close','weblizar'); ?></button>
			
		  </div>
		</div>
	  </div>
	</div>
	<div class="col-md-4 demoftr "> 
		<h2><?php _e('Weblizar Pro','weblizar'); ?></h2>
		<div class="img-wrapper">
			<div class="enigma_home_portfolio_showcase">
				<img class="enigma_img_responsive ftr_img"  src="http://weblizar.com/wp-content/uploads/2014/06/screenshot1.jpg">
				<div class="enigma_home_portfolio_showcase_overlay">
					<div class="enigma_home_portfolio_showcase_overlay_inner ">
						<div class="enigma_home_portfolio_showcase_icons">
							<a title="Link" data-toggle="modal" data-target="#myModalweblizar" href="View Detail#"><?php _e('View Detail','weblizar'); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Modal  -->
	<div class="modal" id="myModalweblizar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content ">
		  <div class="modal-header ">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php _e('Close','weblizar'); ?></span></button>
			<h4 class="modal-title" id="myModalLabel"><a data-toggle="modal" data-target="#myModal"  data-dismiss="modal" href="View Detail#" class="pro-dir-button"><i style="color:#000;line-height:1.5" class="fa fa-angle-left fa-2x"></i></a>
			<a data-toggle="modal" data-target="#myModallightbox"  data-dismiss="modal" href="View Detail#"   class="pro-dir-button"><i style="color:#000;line-height:1.5" class="fa fa-angle-right fa-2x"></i></a>
			</h4>
		  </div>
		  <div class="modal-body">
			<div class="col-md-6">
				<img class="enigma_img_responsive ftr_img"  src="http://weblizar.com/wp-content/uploads/2014/06/screenshot1.jpg">
			</div>
			<div class="col-md-6">
				<div class="theme-info">
					<h3 class="theme-name"><?php _e('Weblizar Pro Theme','weblizar'); ?></h3>
					<h4 class="theme-author"><?php _e('By <a href="http://weblizar.com/" title="Visit author homepage">Weblizar','weblizar'); ?></a></h4>
					<p class="theme-description"><?php _e('Responsive Multi-Purpose Theme suitable for Business , corporate office and others .Cool Blog Layout and full width page.You can also use it for  portfolio, blogging or any type of site. Built with Twitter bootstrap','weblizar'); ?></p>
					<h4  style="margin-top:20px;"><?php _e('Features','weblizar'); ?></h4>
					<div class="col-md-6">
						<div class="enigma_sidebar_link">
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Responsive Design','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Retina Ready','weblizar'); ?> 
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Html5 & Css3','weblizar'); ?> 
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Multi-purpose Theme','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Unlimited Color Schemes','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Multiple Templates','weblizar'); ?> 
							</p>
						
						</div>
					</div>
					<div class="col-md-6">
						<div class="enigma_sidebar_link">
							<p>
								<i class="fa fa-angle-right"></i><?php _e('All Browser Support','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Powerful Option Panel','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Coming Soon Mode','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Custom Shortcode','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Isotope Effects and lightbox','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Fast & Friendly Support','weblizar'); ?> 
							</p>
						</div>
					</div>
					<p></p>
					<div class="col-md-12" style="margin-top:20px;">
						<a class="btn btn-success btn-lg" target="_new" href="http://weblizar.com/themes/weblizar-premium-theme/"><?php _e('View Demo','weblizar'); ?></a>&nbsp;&nbsp;
						<a  class="btn btn-danger btn-lg" target="_new"  href="http://weblizar.com/themes/weblizar-premium-theme/"><?php _e('Purchase Now','weblizar'); ?></a>
					</div>
					
				</div>
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal"><?php _e('Close','weblizar'); ?></button>
			
		  </div>
		</div>
	  </div>
	</div>
	
	
	</div>
	
	
	<div class="row-fluid pricing-table pricing-three-column">
	<div class="plan-name">
        <h2><?php _e('Weblizar Responsive Wordpress Plugins','weblizar'); ?></h2>
		<h6><?php _e('Get the Plugin and create beautiful Galleries and Slideshow.','weblizar'); ?></h6>
    </div>
	<div class="col-md-4 demoftr">
		<h2><?php _e('Lightbox Slider Pro','weblizar'); ?></h2>
		<div class="img-wrapper">
			<div class="enigma_home_portfolio_showcase">
				<img class="enigma_img_responsive ftr_img"  src="http://weblizar.com/wp-content/themes/home-theme/images/lightbox/fancy.jpg">
				<div class="enigma_home_portfolio_showcase_overlay">
					<div class="enigma_home_portfolio_showcase_overlay_inner ">
						<div class="enigma_home_portfolio_showcase_icons">
							<a title="Link" data-toggle="modal" data-target="#myModallightbox" href="View Detail#"><?php _e('View Detail','weblizar'); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
	<!-- Modal  -->
	<div class="modal " id="myModallightbox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content ">
		  <div class="modal-header ">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php _e('Close','weblizar'); ?></span></button>
			<h4 class="modal-title" id="myModalLabel"> <a class="pro-dir-button" data-toggle="modal" data-target="#myModalweblizar"  data-dismiss="modal" href="View Detail#" class="pro-dir-button"><i style="color:#000;line-height:1.5" class="fa fa-angle-left fa-2x"></i></a>
			<a class="pro-dir-button" data-toggle="modal" data-target="#myModalFlickrAlbumGallery"  data-dismiss="modal" href="View Detail#" class="pro-dir-button"><i style="color:#000;line-height:1.5" class="fa fa-angle-right fa-2x"></i></a>
			</h4>
		  </div>
		  <div class="modal-body">
			<div class="col-md-4">
				<img class="enigma_img_responsive ftr_img"  src="http://weblizar.com/wp-content/themes/home-theme/images/lightbox/fancy.jpg">
			</div>
			<div class="col-md-6">
				<div class="theme-info">
					<h3 class="theme-name"><?php _e('LightBox Slider Pro','weblizar'); ?></h3>
					<h4 class="theme-author"><?php _e('By','weblizar'); ?> <a href="http://weblizar.com/" title="Visit author homepage"><?php _e('Weblizar','weblizar'); ?></a></h4>
					<p class="theme-description"><?php _e('Lightbox Slider is premium wordpress plugin to create gallery with lightbox slide.','weblizar'); ?></p>
					<h4  style="margin-top:20px;"><?php _e('Features','weblizar'); ?></h4>
					<div class="col-md-6">
						<div class="enigma_sidebar_link">
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Responsive Design','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Ultimate Lightbox','weblizar'); ?>   
							</p>
							<p>
								<i class="fa fa-angle-right"></i>5 <?php _e('Gallery Layout','weblizar'); ?> 
							</p>
							<p>
								<i class="fa fa-angle-right"></i>500+ <?php _e('Fonts Styles','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i>10 <?php _e('Color Opacity','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i>8 <?php _e('Lightbox','weblizar'); ?> 
							</p>
						
						</div>
					</div>
					<div class="col-md-6">
						<div class="enigma_sidebar_link">
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Gallery Shortcode','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Unlimited Color Schemes','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Retina Ready','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Isotope Effects','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('All Browser Support','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Fast & Friendly Support','weblizar'); ?> 
							</p>
						</div>
					</div>
					<div class="col-md-12" style="margin-top:20px;">
						<a class="btn btn-success btn-lg" target="_new" href="http://weblizar.com/lightbox-slider-pro/"><?php _e('View Demo','weblizar'); ?></a>&nbsp;&nbsp;
						<a  class="btn btn-danger btn-lg" target="_new" href="http://weblizar.com/lightbox-slider-pro/"><?php _e('Purchase Now','weblizar'); ?></a>
					</div>
				</div>
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal"><?php _e('Close','weblizar'); ?></button>
			
		  </div>
		</div>
	  </div>
	</div>
	<div class="col-md-4 demoftr">
		<h2><?php _e('Flickr Album Gallery Pro','weblizar'); ?></h2>
		<div class="img-wrapper">
			<div class="enigma_home_portfolio_showcase">
				<img class="enigma_img_responsive ftr_img"  src="http://weblizar.com/wp-content/themes/home-theme/images/flickr-album-gallery-pro/flicker-snap.png">
				<div class="enigma_home_portfolio_showcase_overlay">
					<div class="enigma_home_portfolio_showcase_overlay_inner ">
						<div class="enigma_home_portfolio_showcase_icons">
							<a title="Link" data-toggle="modal" data-target="#myModalFlickrAlbumGallery" href="View Detail#"><?php _e('View Detail','weblizar'); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
	<!-- Modal  -->
	<div class="modal " id="myModalFlickrAlbumGallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content ">
		  <div class="modal-header ">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php _e('Close','weblizar'); ?></span></button>
			<h4 class="modal-title" id="myModalLabel">
				<a class="pro-dir-button" data-toggle="modal" data-target="#myModallightbox"  data-dismiss="modal" href="View Detail#" class="pro-dir-button"><i style="color:#000;line-height:1.5" class="fa fa-angle-left fa-2x"></i></a> 
				<a class="pro-dir-button" data-toggle="modal" data-target="#myModalresponsive"  data-dismiss="modal" href="View Detail#" class="pro-dir-button"><i style="color:#000;line-height:1.5" class="fa fa-angle-right fa-2x"></i></a>
			</h4>
		  </div>
		  <div class="modal-body">
			<div class="col-md-6">
				<img class="enigma_img_responsive ftr_img"  src="http://weblizar.com/wp-content/themes/home-theme/images/flickr-album-gallery-pro/flicker-snap.png">
			</div>
			<div class="col-md-6">
				<div class="theme-info">
					<h3 class="theme-name"><?php _e('Flickr Album Gallery Pro','weblizar'); ?></h3>
					<h4 class="theme-author"><?php _e('By','weblizar'); ?> <a href="http://weblizar.com/" title="Visit author homepage"><?php _e('Weblizar','weblizar'); ?></a></h4>
					<p class="theme-description"><?php _e('Flickr Album Gallery is premium wordpress plugin to create gallery with Flickr Album Gallery.','weblizar'); ?></p>
					<h4  style="margin-top:20px;"><?php _e('Features','weblizar'); ?></h4>
					<div class="col-md-6">
						<div class="enigma_sidebar_link">
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Responsive Design','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i>8 <?php _e('Animation Effect','weblizar'); ?>   
							</p>
							<p>
								<i class="fa fa-angle-right"></i>6 <?php _e(' Gallery Layout','weblizar'); ?> 
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Unlimited Hover Color','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i>10 <?php _e('Color Opacity','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i>8 <?php _e('Light Box','weblizar'); ?> 
							</p>
						
						</div>
					</div>
					<div class="col-md-6">
						<div class="enigma_sidebar_link">
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Gallery Shortcode','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Unlimited Color Schemes','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Retina Ready','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Isotope Effects','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('All Browser Support','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Fast & Friendly Support','weblizar'); ?> 
							</p>
						</div>
					</div>
					<div class="col-md-12" style="margin-top:20px;">
						<a class="btn btn-success btn-lg" target="_new" href="http://weblizar.com/plugins/flickr-album-gallery-pro/"><?php _e('View Demo','weblizar'); ?></a>&nbsp;&nbsp;
						<a  class="btn btn-danger btn-lg" target="_new" href="http://weblizar.com/plugins/flickr-album-gallery-pro/"><?php _e('Purchase Now','weblizar'); ?></a>
					</div>
				</div>
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal"><?php _e('Close','weblizar'); ?></button>
			
		  </div>
		</div>
	  </div>
	</div>
	
	<div class="col-md-4 demoftr">
		<h2><?php _e('Reponsive Photo Gallery','weblizar'); ?></h2>
		<div class="img-wrapper">
			<div class="enigma_home_portfolio_showcase">
				<img class="enigma_img_responsive ftr_img"  src="http://weblizar.com/wp-content/themes/home-theme/images/gallery-pro.png">
				<div class="enigma_home_portfolio_showcase_overlay">
					<div class="enigma_home_portfolio_showcase_overlay_inner ">
						<div class="enigma_home_portfolio_showcase_icons">
							<a title="Link" data-toggle="modal" data-target="#myModalresponsive" href="View Detail#"><?php _e('View Detail','weblizar'); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	</div>
	<!-- Modal  -->
	<div class="modal " id="myModalresponsive" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content ">
		  <div class="modal-header ">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?php _e('Close','weblizar'); ?></span></button>
			<h4 class="modal-title" id="myModalLabel">
			<a class="pro-dir-button" data-toggle="modal" data-target="#myModalFlickrAlbumGallery"  data-dismiss="modal" href="View Detail#" class="pro-dir-button"><i style="color:#000;line-height:1.5" class="fa fa-angle-left fa-2x"></i></a>
			</h4>
		  </div>
		  <div class="modal-body">
			<div class="col-md-6">
				<img class="enigma_img_responsive ftr_img"  src="http://weblizar.com/wp-content/themes/home-theme/images/gallery-pro.png">
			</div>
			<div class="col-md-6">
				<div class="theme-info">
					<h3 class="theme-name"><?php _e('Responsive Photo Gallery','weblizar'); ?></h3>
					<h4 class="theme-author"><?php _e('By','weblizar'); ?> <a href="http://weblizar.com/" title="Visit author homepage"><?php _e('Weblizar','weblizar'); ?></a></h4>
					<p class="theme-description"><?php _e('A Highly Animated Image Gallery Plugin For WordPress','weblizar'); ?></p>
					<h4  style="margin-top:20px;"><?php _e('Features','weblizar'); ?></h4>
					<div class="col-md-6">
						<div class="enigma_sidebar_link">
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Responsive Design','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i>8 <?php _e('Animation Effect','weblizar'); ?>  
							</p>
							<p>
								<i class="fa fa-angle-right"></i>5 <?php _e('Gallery Layout','weblizar'); ?> 
							</p>
							<p>
								<i class="fa fa-angle-right"></i>500+ <?php _e('Fonts Styles','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i>10 <?php _e('Color Opacity','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i>2 <?php _e('Lightbox','weblizar'); ?> 
							</p>
						
						</div>
					</div>
					<div class="col-md-6">
						<div class="enigma_sidebar_link">
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Gallery Shortcode','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Unlimited Color Schemes','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Retina Ready','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Isotope Effects','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('All Browser Support','weblizar'); ?>
							</p>
							<p>
								<i class="fa fa-angle-right"></i><?php _e('Fast & Friendly Support','weblizar'); ?> 
							</p>
						</div>
					</div>
					<div class="col-md-12" style="margin-top:20px;">
						<a class="btn btn-success btn-lg" target="_new" href="http://weblizar.com/plugins/responsive-photo-gallery-pro/"><?php _e('View Demo','weblizar'); ?></a>&nbsp;&nbsp;
						<a  class="btn btn-danger btn-lg" target="_new" href="http://weblizar.com/plugins/responsive-photo-gallery-pro/"><?php _e('Purchase Now','weblizar'); ?></a>
					</div>
				</div>
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal"><?php _e('Close','weblizar'); ?></button>
			
		  </div>
		</div>
	  </div>
	</div>
	</div>											
	<div class="plan-name centre"> 
	<div class="purchase_btn_div">
	  <a href="http://www.weblizar.com" target="_new" class="btn btn-primary btn-lg dmobtn"><?php _e('View Site','weblizar'); ?></a>		
	</div>
	</div>
</div>
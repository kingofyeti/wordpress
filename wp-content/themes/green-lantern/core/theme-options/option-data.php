<?php $wl_theme_options = weblizar_get_options();
	/*
	* Home slider settings save
	*/
	if(isset($_POST['weblizar_settings_save_general']))
	{	
		if($_POST['weblizar_settings_save_general'] == 1) 
		{
				foreach($_POST as  $key => $value)
				{
					$wl_theme_options[$key]=sanitize_text_field($_POST[$key]);	
				}				
				
				if($_POST['text_title']){
				echo $wl_theme_options['text_title']=sanitize_text_field($_POST['text_title']); } 
				else
				{ echo $wl_theme_options['text_title']="off"; } 
				
				if($_POST['_frontpage']){
				echo $wl_theme_options['_frontpage']=sanitize_text_field($_POST['_frontpage']); } 
				else
				{ echo $wl_theme_options['_frontpage']="off"; } 
			
				update_option('weblizar_options_gl', stripslashes_deep($wl_theme_options));
		}	
		if($_POST['weblizar_settings_save_general'] == 2) 
		{
			reset_general_setting();
		}
	}
	/*
	* Home slider settings save
	*/
	if(isset($_POST['weblizar_settings_save_home-image']))
	{	
		if($_POST['weblizar_settings_save_home-image'] == 1) {
			foreach($_POST as  $key => $value)
			{
				$wl_theme_options[$key]=sanitize_text_field($_POST[$key]);	
			}
			
			update_option('weblizar_options_gl', stripslashes_deep( $wl_theme_options ));
			
		}	
		if($_POST['weblizar_settings_save_home-image'] == 2) 
		{	
			reset_slide_image_setting();
		}
	}
	
	/*
	* Home service setting 
	*/
	if(isset($_POST['weblizar_settings_save_home-service']))
	{	
		if($_POST['weblizar_settings_save_home-service'] == 1) 
		{	
			foreach($_POST as  $key => $value)
			{
				$wl_theme_options[$key]=$_POST[$key];	
			}
			update_option('weblizar_options_gl', stripslashes_deep($wl_theme_options));
			
		}	
		if($_POST['weblizar_settings_save_home-service'] == 2) 
		{	
			reset_service_setting();
		}
	}
	
	/*
	* social media link Settings
	*/
	if(isset($_POST['weblizar_settings_save_social']))
	{	
		if($_POST['weblizar_settings_save_social'] == 1) 
		{
			
			foreach($_POST as  $key => $value)
			{
				$wl_theme_options[$key]=sanitize_text_field($_POST[$key]);	
			}
			
			// Social Icons footer section yes or on
			if(isset($_POST['footer_section_social_media_enbled']))
			{  $wl_theme_options['footer_section_social_media_enbled'] = $_POST['footer_section_social_media_enbled'];
			} else {  	echo $wl_theme_options['footer_section_social_media_enbled'] = "off";	} 
			
			update_option('weblizar_options_gl', stripslashes_deep($wl_theme_options));
			
		}	
		if($_POST['weblizar_settings_save_social'] == 2) 
		{
			reset_social_setting();
		}
	}
	/*
	* footer customization Settings
	*/
	if(isset($_POST['weblizar_settings_save_footer']))
	{	
		if($_POST['weblizar_settings_save_footer'] == 1) 
		{
			foreach($_POST as  $key => $value)
			{
				$wl_theme_options[$key]=sanitize_text_field($_POST[$key]);	
			}
			
			update_option('weblizar_options_gl', stripslashes_deep($wl_theme_options));
		}	
		if($_POST['weblizar_settings_save_footer'] == 2) 
		{
			reset_footer_customizations_setting();
		}
	}	
?>
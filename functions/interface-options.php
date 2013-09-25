<?php

$omsc_shortcodes_options=array(
	'columns'=>array(
		'options'=>array(
			'omsc_column_size' => array(
				'title' => __('Columns Size','om_shortcodes'),
				'desc' => __('Markup for column will be inserted into the editor','om_shortcodes'),
				'type' => 'select',
				'std' => 'one_half',
				'options' => array(
					'one_half'=>__('One Half','om_shortcodes'),
					'one_third'=>__('One Third','om_shortcodes'),
					'two_third'=>__('Two Third','om_shortcodes'),
					'one_fourth'=>__('One Fourth','om_shortcodes'),
					'three_fourth'=>__('Three Fourth','om_shortcodes'),
					'one_fifth'=>__('One Fifth','om_shortcodes'),
					'two_fifth'=>__('Two Fifth','om_shortcodes'),
					'three_fifth'=>__('Three Fifth','om_shortcodes'),
					'four_fifth'=>__('Four Fifth','om_shortcodes'),
					'one_sixth'=>__('One Sixth','om_shortcodes'),
					'five_sixth'=>__('Five Sixth','om_shortcodes'),
				)
			),
			'omsc_column_last' => array(
				'title' => __('Last Column','om_shortcodes'),
				'desc' => __('Check if it\'s the last column in the row','om_shortcodes'),
				'type' => 'checkbox',
				'std' => ''
			)
		)
	),
	
	'buttons'=>array(
		'options'=>array(
			'omsc_button_title' => array(
				'title' => __('Button Title','om_shortcodes'),
				'type' => 'text',
				'std' => ''
			),
			'omsc_button_href' => array(
				'title' => __('Button Link URL','om_shortcodes'),
				'type' => 'text',
				'std' => ''
			),
			'omsc_button_target' => array(
				'title' => __('Button target','om_shortcodes'),
				'type' => 'link_target',
				'std' => '',
			),
			'omsc_button_color' => array(
				'title' => __('Button Color','om_shortcodes'),
				'type' => 'select',
				'std' => '',
				'options' => array(
					'theme'=>__('Theme Color','om_shortcodes'),
					'custom'=>__('Custom Color','om_shortcodes'),
				)
			),
			'omsc_button_customcolor' => array(
				'title' => __('Button Custom Color','om_shortcodes'),
				'type' => 'color',
				'std' => '',
			),
			'omsc_button_hovercolor' => array(
				'title' => __('Button Hover Color','om_shortcodes'),
				'type' => 'color',
				'std' => '',
			),
			'omsc_button_textcolor' => array(
				'title' => __('Text Color','om_shortcodes'),
				'type' => 'color',
				'std' => '#ffffff',
			),
			'omsc_button_size' => array(
				'title' => __('Button Size','om_shortcodes'),
				'type' => 'select',
				'std' => 'medium',
				'options' => array(
					'mini'=>__('Mini','om_shortcodes'),
					'small'=>__('Small','om_shortcodes'),
					'medium'=>__('Medium','om_shortcodes'),
					'large'=>__('Large','om_shortcodes'),
					'xlarge'=>__('XLarge with extra description','om_shortcodes'),
				)
			),
			'omsc_button_width' => array(
				'title' => __('Button Width','om_shortcodes'),
				'type' => 'text',
				'std' => '',
				'fielddesc' => __('Leave this field blank for auto width or specify width, for instance: 200px or 100%','om_shortcodes')
			),
			'omsc_button_icon' => array(
				'title' => __('Icon','om_shortcodes'),
				'type' => 'fontawesomeicon',
				'std' => '',
			),
			'omsc_button_icon_color' => array(
				'title' => __('Icon color','om_shortcodes'),
				'type' => 'select',
				'std' => '',
				'options' => array(
					''=>__('Default','om_shortcodes'),
					'custom'=>__('Custom','om_shortcodes'),
				)
			),

			'omsc_button_icon_color_color' => array(
				'title' => __('Icon custom color','om_shortcodes'),
				'type' => 'color',
				'std' => '',
			),			
			'omsc_button_text' => array(
				'title' => __('Extra description for XLarge button','om_shortcodes'),
				'type' => 'textarea',
				'std' => '',
				'rows' => 3
			),
			'omsc_button_tooltip' => array(
				'title' => __('Tooltip for button','om_shortcodes'),
				'type' => 'text',
				'std' => ''
			),
		)
	),
	
	'dropcaps'=>array(
		'options'=>array(
			'omsc_dropcap_title' => array(
				'title' => __('Letter','om_shortcodes'),
				'type' => 'text',
				'std' => ''
			),
			'omsc_dropcap_size' => array(
				'title' => __('Size','om_shortcodes'),
				'fielddesc' => __('(size in pixels or in percent: 36 or 36px or 180% or 240%)','om_shortcodes'),
				'type' => 'text',
				'std' => '220%'
			),
			'omsc_dropcap_bgcolor' => array(
				'title' => __('Background Color','om_shortcodes'),
				'type' => 'select',
				'std' => '',
				'options' => array(
					''=>__('No background','om_shortcodes'),
					'theme'=>__('Theme Color','om_shortcodes'),
					'custom'=>__('Custom','om_shortcodes'),
				)
			),
			'omsc_dropcap_custombgcolor' => array(
				'title' => __('Custom Background Color','om_shortcodes'),
				'type' => 'color',
				'std' => '',
			),
			'omsc_dropcap_shape' => array(
				'title' => __('Background Shape','om_shortcodes'),
				'type' => 'select',
				'std' => '',
				'options' => array(
					''=>__('Square','om_shortcodes'),
					'circle'=>__('Cirle','om_shortcodes'),
				)
			),
			'omsc_dropcap_textcolor' => array(
				'title' => __('Text color','om_shortcodes'),
				'type' => 'color',
				'std' => '',
			),
		)
	),

	'toggle'=>array(
		'options'=>array(
			'omsc_toggle_title' => array(
				'title' => __('Toggle Title','om_shortcodes'),
				'type' => 'text',
				'std' => ''
			),
			'omsc_toggle_content' => array(
				'title' => __('Toggle text','om_shortcodes'),
				'type' => 'textarea',
				'std' => ''
			),
			'omsc_toggle_state' => array(
				'title' => __('Toggle initial state','om_shortcodes'),
				'type' => 'select',
				'std' => '',
				'options' => array(
					''=>__('Closed','om_shortcodes'),
					'opened'=>__('Opened','om_shortcodes'),
				)
			),
		)
	),
	
	'accordion'=>array(
		'options'=>array(
			'omsc_accordion_count' => array(
				'title' => __('Number of items','om_shortcodes'),
				'desc' => __('Markup for accordion will be inserted into the editor','om_shortcodes'),
				'type' => 'text',
				'std' => ''
			),
			'omsc_accordion_multiopen' => array(
				'title' => __('Allow multiple Toggles open at a time','om_shortcodes'),
				'type' => 'checkbox',
				'std' => ''
			),
		)
	),
	
	'tabs'=>array(
		'options'=>array(
			'omsc_tabs_count' => array(
				'title' => __('Number of tabs','om_shortcodes'),
				'desc' => __('Markup for tabs will be inserted into the editor','om_shortcodes'),
				'type' => 'text',
				'std' => ''
			),
		)
	),

/*	
	'aligned'=>array(
		'options'=>array(
			'omsc_aligned_desc' => array(
				'title' => __('Content Description','om_shortcodes'),
				'type' => 'text',
				'std' => ''
			),
			'omsc_aligned_content' => array(
				'title' => __('Content','om_shortcodes'),
				'desc' => __('image: &lt;img src=".." /&gt; or any HTML code<br/>you can modify it later in the editor','om_shortcodes'),
				'type' => 'textarea',
				'std' => ''
			),
			'omsc_aligned_align' => array(
				'title' => __('Align','om_shortcodes'),
				'type' => 'select',
				'std' => 'left',
				'options' => array(
					'left'=>__('Left','om_shortcodes'),
					'center'=>__('Center','om_shortcodes'),
					'right'=>__('Right','om_shortcodes'),
				)
			),
		)
	),
*/
	
	'infobox'=>array(
		'options'=>array(
			'omsc_infobox_color' => array(
				'title' => __('Background Color','om_shortcodes'),
				'type' => 'select',
				'std' => '',
				'options' => array(
					'theme'=>__('Theme Color','om_shortcodes'),
					'custom'=>__('Custom Color','om_shortcodes'),
				)
			),
			'omsc_infobox_customcolor' => array(
				'title' => __('Custom Background Color','om_shortcodes'),
				'type' => 'color',
				'std' => '',
			),
			'omsc_infobox_textcolor' => array(
				'title' => __('Text Color','om_shortcodes'),
				'type' => 'color',
				'std' => '',
			),
			'omsc_infobox_icon' => array(
				'title' => __('Icon','om_shortcodes'),
				'type' => 'fontawesomeicon',
				'std' => '',
			),
			'omsc_infobox_text' => array(
				'title' => __('Text','om_shortcodes'),
				'type' => 'textarea',
				'std' => ''
			),
		)
	),
	
	'border'=>array(
		'options'=>array(
			'omsc_border_width' => array(
				'title' => __('Border width','om_shortcodes'),
				'desc' => __('in pixels','om_shortcodes'),
				'type' => 'text',
				'std' => '1',
			),
			'omsc_border_color' => array(
				'title' => __('Border Color','om_shortcodes'),
				'type' => 'select',
				'std' => '',
				'options' => array(
					'theme'=>__('Theme Color','om_shortcodes'),
					'custom'=>__('Custom','om_shortcodes'),
				)
			),
			'omsc_border_customcolor' => array(
				'title' => __('Border Custom Color','om_shortcodes'),
				'type' => 'color',
				'std' => '',
			),
			'omsc_border_content' => array(
				'title' => __('Content','om_shortcodes'),
				'desc' => __('you can modify it later in the editor','om_shortcodes'),
				'type' => 'textarea',
				'std' => ''
			),
		)
	),
	
	'biginfobox'=>array(
		'options'=>array(
			'omsc_biginfobox_color' => array(
				'title' => __('Background color','om_shortcodes'),
				'type' => 'select',
				'std' => '',
				'options' => array(
					'theme'=>__('Theme Color','om_shortcodes'),
					'custom'=>__('Custom Color','om_shortcodes'),
				)
			),
			'omsc_biginfobox_customcolor' => array(
				'title' => __('Custom Background Color','om_shortcodes'),
				'type' => 'color',
				'std' => ''
			),
			'omsc_biginfobox_textcolor' => array(
				'title' => __('Text color','om_shortcodes'),
				'type' => 'color',
				'std' => '#ffffff'
			),
			'omsc_biginfobox_title' => array(
				'title' => __('Title','om_shortcodes'),
				'type' => 'text',
				'std' => ''
			),			
			'omsc_biginfobox_text' => array(
				'title' => __('Text','om_shortcodes'),
				'type' => 'textarea',
				'std' => ''
			),
			'omsc_biginfobox_layout' => array(
				'title' => __('Box layout','om_shortcodes'),
				'desc' => '',
				'type' => 'select',
				'std' => '',
				'options' => array(
					''=>__('Horisontal','om_shortcodes'),
					'vertical'=>__('Vertical','om_shortcodes'),
				)
			),
			'omsc_biginfobox_button_title' => array(
				'desc' => __('Leave empty to hide button','om_shortcodes'),
				'title' => __('Button Title','om_shortcodes'),
				'type' => 'text',
				'std' => ''
			),
			'omsc_biginfobox_button_href' => array(
				'title' => __('Button Link URL','om_shortcodes'),
				'type' => 'text',
				'std' => ''
			),
			'omsc_biginfobox_button_target' => array(
				'title' => __('Button Link Target','om_shortcodes'),
				'type' => 'link_target',
				'std' => '',
			),
		)
	),
	
	'icons'=>array(
		'options'=>array(
			'omsc_icon_icon' => array(
				'title' => __('Icon','om_shortcodes'),
				'type' => 'fontawesomeicon',
				'std' => ''
			),
			
			'omsc_icon_size' => array(
				'title' => __('Icon size','om_shortcodes'),
				'type' => 'select',
				'std' => '',
				'options' => array(
					''=>__('default','om_shortcodes'),
					'large'=>__('Large','om_shortcodes'),
					'2x'=>__('2x','om_shortcodes'),
					'3x'=>__('3x','om_shortcodes'),
					'4x'=>__('4x','om_shortcodes'),
				)
			),
			
			'omsc_icon_color' => array(
				'title' => __('Icon color','om_shortcodes'),
				'type' => 'select',
				'std' => '',
				'options' => array(
					''=>__('Default','om_shortcodes'),
					'theme'=>__('Theme Color','om_shortcodes'),
					'custom'=>__('Custom','om_shortcodes'),
				)
			),

			'omsc_icon_customcolor' => array(
				'title' => __('Icon Custom Color','om_shortcodes'),
				'type' => 'color',
				'std' => '',
			),
			
		)
	),
	
	'marker'=>array(
		'options'=>array(
			'omsc_marker_title' => array(
				'title' => __('Text','om_shortcodes'),
				'type' => 'text',
				'std' => ''
			),
			'omsc_marker_custombgcolor' => array(
				'title' => __('Custom Background Color','om_shortcodes'),
				'desc' => __('Default - Theme color','om_shortcodes'),
				'type' => 'color',
				'std' => '',
			),
			'omsc_marker_textcolor' => array(
				'title' => __('Text color','om_shortcodes'),
				'type' => 'color',
				'std' => '',
			),
			'omsc_marker_tooltip' => array(
				'title' => __('Tooltip','om_shortcodes'),
				'type' => 'text',
				'std' => ''
			),
		)
	),

	'bullets'=>array(
		'options'=>array(
			'omsc_bullets_count' => array(
				'title' => __('Number of items','om_shortcodes'),
				'desc' => __('Markup for list will be inserted into the editor','om_shortcodes'),
				'type' => 'text',
				'std' => ''
			),
			
			'omsc_bullets_icon' => array(
				'title' => __('Icon','om_shortcodes'),
				'type' => 'fontawesomeicon',
				'std' => ''
			),
			
			'omsc_bullets_icon_color' => array(
				'title' => __('Icon color','om_shortcodes'),
				'type' => 'select',
				'std' => '',
				'options' => array(
					''=>__('Default','om_shortcodes'),
					'theme'=>__('Theme Color','om_shortcodes'),
					'custom'=>__('Custom','om_shortcodes'),
				)
			),

			'omsc_bullets_icon_customcolor' => array(
				'title' => __('Icon custom color','om_shortcodes'),
				'type' => 'color',
				'std' => '',
			),
			
		)
	),
	
	'bullets_individual'=>array(
		'options'=>array(
			'omsc_bullets_individual_count' => array(
				'title' => __('Number of items','om_shortcodes'),
				'desc' => __('Markup for list will be inserted into the editor','om_shortcodes'),
				'type' => 'text',
				'std' => ''
			),

			'omsc_bullets_individual_icon' => array(
				'title' => __('Icon','om_shortcodes'),
				'desc' => __('Default icon, you will be able to change icon for every item in the inserted code','om_shortcodes'),
				'type' => 'fontawesomeicon',
				'std' => ''
			),

			'omsc_bullets_individual_icon_color' => array(
				'title' => __('Icon color','om_shortcodes'),
				'type' => 'select',
				'std' => '',
				'options' => array(
					''=>__('Default','om_shortcodes'),
					'theme'=>__('Theme Color','om_shortcodes'),
					'custom'=>__('Custom','om_shortcodes'),
				)
			),

			'omsc_bullets_individual_icon_customcolor' => array(
				'title' => __('Icon custom color','om_shortcodes'),
				'type' => 'color',
				'std' => '',
			),
		)
	),
	
	'space'=>array(
		'options'=>array(
			'omsc_space_size' => array(
				'title' => __('Vertical Space Size in Pixels','om_shortcodes'),
				'type' => 'text',
				'std' => ''
			),

		)
	),

/*	
	'gallery'=>array(
		'options'=>array(
			'omsc_gallery_info' => array(
				'desc' => __('Manage galleries with main WP-admin menu &gt; "<a href="edit.php?post_type=galleries">Galleries</a>"','om_shortcodes'),
				'type' => 'info',
				'std' => ''
			),

			'omsc_gallery_id' => array(
				'title' => __('Choose the gallery','om_shortcodes'),
				'type' => 'choose_gallery',
				'std' => ''
			),
			'omsc_gallery_layout' => array(
				'title' => __('Gallery layout','om_shortcodes'),
				'type' => 'select',
				'std' => '',
				'options' => array(
					''=>__('Default','om_shortcodes'),
					'sliced'=>__('Sliced layout','om_shortcodes'),
				)
			),
		)
	),
*/
	
	'table'=>array(
		'options'=>array(
			'omsc_table_info' => array(
				'desc' => __('Markup for table will be inserted into the editor','om_shortcodes'),
				'type' => 'info',
			),
			'omsc_table_columns' => array(
				'title' => __('Enter number of columns','om_shortcodes'),
				'type' => 'text',
				'std' => '3'
			),
			'omsc_table_rows' => array(
				'title' => __('Enter number of rows','om_shortcodes'),
				'type' => 'text',
				'std' => '3'
			),
			'omsc_table_first_heading' => array(
				'title' => __('First row is a heading','om_shortcodes'),
				'type' => 'checkbox',
				'std' => 'true'
			),

/*			
			'omsc_table_style' => array(
				'title' => __('Style','om_shortcodes'),
				'type' => 'select',
				'std' => '1',
				'options' => array(
					'1'=>__('Style-1','om_shortcodes'),
					'2'=>__('Style-2','om_shortcodes'),
				)
			),
*/
			
			'omsc_table_note' => array(
				'desc' => __('Note for inserted code: <b>[tr]</b> tag is a row tag, <b>[th]</b> tag - is a heading cell in a row, <b>[td]</b> tag - is a cell in a row','om_shortcodes'),
				'type' => 'info',
			),
		)
	),
	
	'video'=>array(
		'options'=>array(
			'omsc_video_info' => array(
				'desc' => __('Get the embed video code from YouTube, Vimeo or any other service and paste it below','om_shortcodes'),
				'type' => 'info',
			),
			'omsc_video_code' => array(
				'title' => __('Video Embed Code','om_shortcodes'),
				'type' => 'textarea',
				'std' => ''
			),
			'omsc_video_max_width' => array(
				'title' => __('Maximum video width (in pixels)','om_shortcodes'),
				'desc' => __('Video will be resized and fitted to site width, but you can specify maximum width','om_shortcodes'),
				'type' => 'text',
				'std' => ''
			),
		)
	),
	
	'map'=>array(
		'options'=>array(
			'omsc_map_info_address' => array(
				'desc' => __('Type the address to show on the Google Map','om_shortcodes'),
				'type' => 'info',
			),
			'omsc_map_address' => array(
				'title' => __('Address','om_shortcodes'),
				'type' => 'text',
				'std' => ''
			),
			'omsc_map_info_html' => array(
				'desc' => __('Or grab the HTML embed code of the map from Google and insert here','om_shortcodes'),
				'type' => 'info',
			),
			'omsc_map_code' => array(
				'title' => __('Map Embed Code','om_shortcodes'),
				'type' => 'textarea',
				'std' => ''
			),
			'omsc_map_max_width' => array(
				'title' => __('Maximum map width (in pixels)','om_shortcodes'),
				'desc' => __('Map will be resized and fitted to site width, but you can specify maximum width','om_shortcodes'),
				'type' => 'text',
				'std' => ''
			),
		)
	),
	
	'blockquote'=>array(
		'options'=>array(
			'omsc_blockquote_text' => array(
				'title' => __('Quote','om_shortcodes'),
				'type' => 'textarea',
				'std' => ''
			),
			'omsc_blockquote_author' => array(
				'title' => __('Author','om_shortcodes'),
				'desc' => '',
				'type' => 'text',
				'std' => ''
			),
		)
	),

/*	
	'contactform'=>array(
		'options'=>array(
			'omsc_contactform' => array(
				'title' => '',
				'desc' => __('Contact form fields and other settings can be specified under Theme Options','om_shortcodes'),
				'type' => 'info',
				'std' => ''
			),

		)
	),
*/
	
	'visibility'=>array(
		'options'=>array(
			'omsc_visibility' => array(
				'title' => '',
				'desc' => __('Use this shortcode to show the content only for desktop / tablet / mobile devices','om_shortcodes'),
				'type' => 'info',
				'std' => ''
			),
			'omsc_visibility_code' => array(
				'title' => __('Content','om_shortcodes'),
				'desc' => __('you can modify it later in the editor, also you can use shortcodes inside','om_shortcodes'),
				'type' => 'textarea',
				'std' => '',
			),
			'omsc_visibility_desktop' => array(
				'title' => __('Show on desktop','om_shortcodes'),
				'type' => 'checkbox',
				'std' => '',
			),
			'omsc_visibility_tablet' => array(
				'title' => __('Show on tablet','om_shortcodes'),
				'type' => 'checkbox',
				'std' => '',
			),
			'omsc_visibility_mobile' => array(
				'title' => __('Show on mobile','om_shortcodes'),
				'type' => 'checkbox',
				'std' => '',
			),
/*
			'omsc_visibility_mobile_landscape' => array(
				'title' => __('Show on mobile, landscape orientation','om_shortcodes'),
				'type' => 'checkbox',
				'std' => '',
			),
			'omsc_visibility_mobile_portrait' => array(
				'title' => __('Show on mobile, portrait orientation','om_shortcodes'),
				'type' => 'checkbox',
				'std' => '',
			),
*/

		)
	),

/*	
	'testimonials'=>array(
		'options'=>array(
			'omsc_testimonials' => array(
				'title' => '',
				'desc' => __('Testimoials can be added under "Testimonials > Add New"','om_shortcodes'),
				'type' => 'info',
				'std' => ''
			),
			'omsc_testimonials_category' => array(
				'title' => __('Testimonials category','om_shortcodes'),
				'desc' => __('Can be shown all testimonials or only from chosen category','om_shortcodes'),
				'type' => 'testimonials_category',
				'std' => '0'
			),
			'omsc_testimonials_mode' => array(
				'title' => __('Layout mode','om_shortcodes'),
				'type' => 'select',
				'std' => '',
				'options' => array(
					''=>__('In one box with sliding','om_shortcodes'),
					'list'=>__('Full list','om_shortcodes'),
				)
			),
			'omsc_testimonials_timeout' => array(
				'title' => __('Autorotate for box mode','om_shortcodes'),
				'desc' => __('interval in milliseconds or 0 - to disable autorotate','om_shortcodes'),
				'type' => 'text',
				'std' => '0',
			),
			'omsc_testimonials_pause' => array(
				'title' => __('Pause on hover','om_shortcodes'),
				'type' => 'checkbox',
				'std' => '',
			),
		)
	),
*/
	
	'pricing'=>array(
		'options'=>array(
			'omsc_pricing_info' => array(
				'desc' => __('Markup for pricing table will be inserted into the editor','om_shortcodes'),
				'type' => 'info',
			),
			'omsc_pricing_columns' => array(
				'title' => __('Enter number of columns','om_shortcodes'),
				'desc' => __('Number of tariffs','om_shortcodes'),
				'type' => 'text',
				'std' => '3'
			),
			'omsc_pricing_rows' => array(
				'title' => __('Enter number of rows (parameters to compare)','om_shortcodes'),
				'desc'=> __('Number of parameters to compare','om_shortcodes'),
				'type' => 'text',
				'std' => '5'
			),
			
			'omsc_pricing_note' => array(
				'desc' => __('Note for inserted code:<br /><br /><b>[pricing_column featured="yes"]...[/pricing_column]</b> - tariff description inside (column wrapper), use attribute "featured" to feature the column<br /><br /><b>[pricing_column_name comment="..."]...[/pricing_column_name]</b> - name of the tariff, you can use use attribute "comment"<br /><br /><b>[price comment="..."]...[/price]</b> - the price, you can use use attribute "comment"<br /><br /><b>[line]...[/line]</b> - line in the column. Number of lines should be equal for each column<br /><br /><b>[button href="URL"]...[/button]</b> - button for tariff','om_shortcodes'),
				'type' => 'info',
			),
		)
	),
	
	'recent_posts'=>array(
		'options'=>array(
			'omsc_recent_posts_count' => array(
				'title' => __('Enter number of posts to display','om_shortcodes'),
				'desc' => '',
				'type' => 'text',
				'std' => '3'
			),
			'omsc_recent_posts_date' => array(
				'title' => __('Show post date','om_shortcodes'),
				'desc'=> '',
				'type' => 'checkbox',
				'std' => 'true'
			),
			'omsc_recent_posts_thumbnail' => array(
				'title' => __('Show thumbnails','om_shortcodes'),
				'desc'=> '',
				'type' => 'checkbox',
				'std' => 'true'
			),
			'omsc_recent_posts_excerpt' => array(
				'title' => __('Show excerpt','om_shortcodes'),
				'desc'=> '',
				'type' => 'checkbox',
				'std' => ''
			),
			'omsc_recent_posts_category' => array(
				'title' => __('Posts category','om_shortcodes'),
				'desc'=> '',
				'type' => 'posts_category',
				'std' => '0'
			),
			'omsc_recent_posts_ids' => array(
				'title' => __('Custom post IDs','om_shortcodes'),
				'desc'=> __('You can specify post\'s IDs separated by comma, to display custom set of posts.','om_shortcodes'),
				'type' => 'text',
				'std' => ''
			),
		)
	),

/*	
	'portfolio'=>array(
		'options'=>array(
			'omsc_portfolio_count' => array(
				'title' => __('Enter number of portfolio items to display','om_shortcodes'),
				'desc' => '',
				'type' => 'text',
				'std' => '3'
			),
			'omsc_portfolio_description' => array(
				'title' => __('Show short description','om_shortcodes'),
				'desc'=> '',
				'type' => 'checkbox',
				'std' => ''
			),
			'omsc_portfolio_ratio' => array(
				'title' => __('Thumbnails width/height ratio','om_shortcodes'),
				'type' => 'select',
				'std' => '3:2',
        'options'=>array(
					'2:1' => '2:1',
					'16:9' => '16:9',
					'3:2' => '3:2',
					'4:3' => '4:3',
					'1:1' => '1:1',
					'3:4' => '3:4',
					'2:3' => '2:3',
					'9:16' => '9:16',
					'1:2' => '1:2',
        ),
			),
			'omsc_portfolio_category' => array(
				'title' => __('Portfolio category','om_shortcodes'),
				'desc'=> '',
				'type' => 'portfolio_category',
				'std' => '0'
			),
			'omsc_portfolio_ids' => array(
				'id' => 'omsc_portfolio_ids',
				'title' => __('Custom portfolio IDs','om_shortcodes'),
				'desc'=> __('You can specify portfolios\'s IDs separated by comma, to display custom set of portfolio items.','om_shortcodes'),
				'type' => 'text',
				'std' => ''
			),
		)
	),

*/
	
);


function omsc_shortcodes_options_modify() {
	global $omsc_shortcodes_options;

	$omsc_shortcodes_options = apply_filters('omsc_shortcodes_options', $omsc_shortcodes_options);
		
	$config=$GLOBALS['omShortcodesPlugin']['config'];
	
	if(!$config['theme_color_supported']) {
		
		//buttons
		unset($omsc_shortcodes_options['buttons']['options']['omsc_button_color']);
		$omsc_shortcodes_options['buttons']['options']['omsc_button_customcolor']['title']=__('Button Color','om_shortcodes');
		
		//dropcaps
		unset($omsc_shortcodes_options['buttons']['options']['omsc_dropcap_bgcolor']);
		$omsc_shortcodes_options['buttons']['options']['omsc_dropcap_custombgcolor']['title']=__('Background Color','om_shortcodes');
		
		//infobox
		unset($omsc_shortcodes_options['infobox']['options']['omsc_infobox_color']);
		$omsc_shortcodes_options['infobox']['options']['omsc_infobox_customcolor']['title']=__('Background Color','om_shortcodes');
		
		//border
		unset($omsc_shortcodes_options['border']['options']['omsc_border_color']);
		$omsc_shortcodes_options['border']['options']['omsc_border_customcolor']['title']=__('Border Color','om_shortcodes');

		//biginfobox
		unset($omsc_shortcodes_options['biginfobox']['options']['omsc_biginfobox_color']);
		$omsc_shortcodes_options['biginfobox']['options']['omsc_biginfobox_customcolor']['title']=__('Background Color','om_shortcodes');

		//incons
		unset($omsc_shortcodes_options['icons']['options']['omsc_icon_color']['options']['theme']);
		
		//marker
		$omsc_shortcodes_options['marker']['options']['omsc_marker_custombgcolor']['title']=__('Background Color','om_shortcodes');
		$omsc_shortcodes_options['marker']['options']['omsc_marker_custombgcolor']['desc']='';

		//bullets
		unset($omsc_shortcodes_options['bullets']['options']['omsc_bullets_icon_color']['options']['theme']);
		
		//bullets per item
		unset($omsc_shortcodes_options['bullets_individual']['options']['omsc_bullets_individual_icon_color']['options']['theme']);

	}
}
add_action('init', 'omsc_shortcodes_options_modify');
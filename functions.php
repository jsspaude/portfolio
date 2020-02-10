<?php
/**
	*
	* 	Fields and Default Values added to General Settings
	* 		- Key: 		The Field Name
	* 		- Value: 	The Field Description
	*
	**/
	$Settings = array(
		/**
		* 	
		* 	The Widgets to Create
		* 		- Uses the Standard Wordpress Widget Array
		*
		* 
		**/
		'Widgets' 	=> array(
			array(
				'name'          => 'Footer area one',
				'id'            => 'footer_area_one',
				'description'   => 'Footer Widget',
				'before_widget' => '<li class="footer-widget-item footer-widget-one-item">',
				'after_widget'  => '</li>',
				'before_title'  => '<p>',
				'after_title'   => '</p>'
			),
			array(
				'name'          => 'Footer area two',
				'id'            => 'footer_area_two',
				'description'   => 'Footer Widget 2',
				'before_widget' => '<li class="footer-widget-item footer-widget-two-item">',
				'after_widget'  => '</li>',
				'before_title'  => '<p>',
				'after_title'   => '</p>'
			),
			array(
				'name'          => 'Post Footer',
				'id'            => 'post_footer',
				'description'   => 'Recent Posts',
				'before_widget' => '<div class="recent-post-title">',
				'after_title'	=> '</div>',
				'after_widget'  => ''
			),
			array(
				'name'          => 'Mobile Nav Info',
				'id'            => 'nav_info',
				'description'   => 'Info panel',
				'before_widget' => '',
				'after_title'	=> '',
				'after_widget'  => ''
			)
		),
		/**
		* 	
		* 	Create the Menus
		* 		- Register the Following Menus
		*
		* 
		**/
		'Menus' 	=> array(
			//Primary Navigation
			'primary' => 'Primary',
			//Footer Navigation
			'footer' => 'Footer',
			
			//Responsive Navigation
			'mobile' => 'Mobile'
		),
		/**
		* 	
		* 	Thumbnail Dimensions
		* 		- Additional Thumbnail Dimensions created during each upload
		*
		* 
		**/
		'Thumbnails' 	=> array(
			'width' 		=> 940,
			'height' 		=> 640
		),
		/**
		* 	
		* 	Custom Wordpress Admin Editor Styles
		* 		- Styles / Themes added to the Wordpress Admin Editor Dropdown
		*
		* 
		**/
		'Editor Styles' => array(
			array(
				'title' 	=> 'Small',
				'inline' 	=> 'small'
			),
			array(
				'title' 	=> 'Button',
				'inline' 	=> 'a',
				'classes' 	=> 'button'
			),
			array(
				'title' 	=> 'info',
				'block' 	=> 'div',
				'classes' 	=> 'info',
				'wrapper' 	=> true
			),
		),
		/**
		* 	
		* 	Javascript
		* 		- Add Javascript Files to the Website
		*
		* 
		**/
		'Javascript' 	=> array(
			//These Javascript FIles will Appear on the Website Frontend
			'Client' => array(
				'scripts.js',
				'libraries/lazysizes.min.js'
			),
			//These Javascript Files will Appear in the Administration Area
			'Admin' => array(
			)
		),
		/**
		* 	
		* 	Stylesheets
		* 		- Add Stylesheet Files to the Website
		*
		* 
		**/
		'Stylesheets' 	=> array(
			//These CSS Files will Appear on the Website Frontend
			'Client' => array(
				// google fonts here
				'main.css'
			),
			//These CSS Files will Appear in the Administration Area
			'Admin' => array(
				
			)
		)
	//End $Settings
	);
	/**
	* 	
	* 	Line Break In Widget Title and Footer Menu
	*
	* 
	**/
	function footer_area_one( $title ) {
		$title = str_replace( 'title_line_break', '<br/>', $title );
		return $title;
	}    
	add_filter( 'widget_title', 'footer_area_one' );
	function acf_text_linkStart( $linkStart ) {
		$linkStart = str_replace( '[highlight-this-]', '<span class="highlight">', $linkStart );
		return $linkStart;
	}
	add_filter( 'acf/format_value/type=text', 'acf_text_linkStart' );
	function acf_text_linkEnd( $linkEnd ) {
		$linkEnd = str_replace( '[/]', '</span>', $linkEnd );
		return $linkEnd;
	}
	add_filter( 'acf/format_value/type=text', 'acf_text_linkEnd' );
	/**
	*
	*	wp_title
	*		- Prepares the Wordpress Title Field
	*
	*		Params:
	* 			- $title: 		The Wordpress Title
	* 			- $separator: 	The Title Separator
	*
	*
	* 		Variables:
	*			- $paged: 		Contains the Page Number of a Listing Post
	* 			- $page: 		Contains the Page number of a single post that is paged
	*
	*
	*		Returns:
	* 			n/a
	*
	*
	**/
	add_filter('wp_title',function($title,$separator){
		
		//Load the Variables
		global $paged, $page;
		//Don't affect wp_title() calls in feeds.
		if(is_feed()) return $title;
		//On Search Pages
		if (is_search()){
			//Override the Title
			$title = 'Search results for "'.get_search_query().'"';
			
			//Add a Page Number if we're on Page 2 or more
			if($paged >= 2){
				$title .= ' '.$separator.' Page: '.$paged;
			}
			//Finish the Title and Return
			return $title . ' '.$separator.' '.get_bloginfo('name','display');
		}
		//Append the Site Title
		$title .= get_bloginfo( 'name', 'display' );
		
		//Add the Site Description to the Title if it's the Home Page
		if( is_home() || is_front_page() ){
			if( $site_description = get_bloginfo( 'description', 'display' ) ){
				$title .= ' '.$separator.' '.$site_description;
			}
		}
		// Add a page number if necessary:
		if( $paged >= 2 || $page >= 2 ){
			$title .= ' ' . $separator . ' Page ' . max( $paged, $page );
		}
		//Return the Title
		return $title;
	}, 10 , 2);
	/**
	*	
	*	Initialize the Widgets
	*		- Sets up the Widgets		
	*
	*	Params
	* 		n/a
	*
	**/
	add_action('widgets_init',function(){
		//Load the Settings
		global $Settings;
		if(!empty($Settings['Widgets'])){
			foreach($Settings['Widgets'] as $Widget){
				//Create the Widget
				register_sidebar($Widget);
			}
		}
	});
	/**
	*
	*	after_setup_theme
	*		- The Theme Initialization and Configuration
	*
	*	Params:
	* 		n/a
	*
	**/
	add_action( 'after_setup_theme',function(){
		//Get the Settings
		global $Settings;
		// This theme styles the visual editor with editor-style.css to match the theme style.
		add_editor_style();
		// This theme uses post thumbnails
		add_theme_support( 'post-thumbnails' );
		// Add default posts and comments RSS feed links to head
		add_theme_support( 'automatic-feed-links' );
		// Make the Theme Available for Translation
		load_theme_textdomain( 'twentyten', TEMPLATEPATH . '/languages' );
		//Include the Translations
		if(is_readable( TEMPLATEPATH . '/languages/' . get_locale() . '.php' )){
			require_once( TEMPLATEPATH . '/languages/' . get_locale() . '.php' );
		}
		// Set the Post Thumbnail Size
		set_post_thumbnail_size( $Settings['Thumbnails']['width'], $Settings['Thumbnails']['height'], true );
		//Prepare the Data
		$menus = array();
		//Build the Menus
		if(!empty($Settings['Menus'])){
			foreach($Settings['Menus'] as $i=>$menu){
				$menus[ strtolower(preg_replace('/[^a-z0-9]/i','',$menu)) ] = __( $menu , 'twentyten' );
			}
		}
		//Create the Menu's
		if(!empty($menus)){
			register_nav_menus( $menus );
		}
		//Add Conditional HTML5Shim
		add_action('wp_head',function(){ ?>
			<!--[if lt IE 9]>
				<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<![endif]-->
		<?php });
	});
	/**
	*
	*	Additional Image Sizes
	*
	**/
	add_image_size( 'laptopLrg', 400, 600, true );
	add_image_size( 'laptopMed', 300, 500, true );
	add_image_size( 'laptopSmall', 200, 400, true );
	add_image_size( 'squareMed', 440, 440, true );
	add_image_size( 'squareLrg', 600, 600, true );
	add_image_size( 'squareSmall', 200, 200, true );
	/**
	*
	*	wp_enqueue_scripts
	*		- Add the Stylesheets and Javascript Files
	*
	*	Params:
	* 		$area: 		(String) Client, Admin - Use the Client Side scripts or the Admin Scripts
	*
	**/
	function enqueueScripts($area){
		//Get the Settings
		global $Settings;
		//Add the Scripts & Styles
		foreach( array('script'=>'Javascript','style'=>'Stylesheets') as $type=>$arr ){
			foreach( $Settings[$arr][$area] as $file){
				call_user_func_array('wp_enqueue_'.$type, array(
					//The Handle
					preg_replace('/[^a-z0-9]/i','',$file) , 
					//The File
					( substr($file,0,4) == 'http' || substr($file,0,2) == '//' ? $file : get_template_directory_uri() . '/'.( $type=='script' ? 'js' : 'css' ).'/' . $file ),
					//The Dependencies
					( $type == 'script' ? array('jquery') : array() ),
					//The Version
					@( substr($file,0,4) == 'http' || substr($file,0,2) == '//' ? '1.0.0' : filemtime( dirname(__FILE__) . '/' . ( $type=='script' ? 'js' : 'css' ) . '/' . $file ) ),
					//"In Footer" (Javascript) "Media" (Styles)
					( $type == 'script' ? true : 'all' )
				));
			}
		}
	}
	//Run the Client SCripts
	add_action('wp_enqueue_scripts',function(){
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
		
		//Enqueue the Styles
		enqueueScripts( 'Client' );
	});
	//Run the Admin Scripts
	add_action('admin_enqueue_scripts', function(){
		//Get the Settings
		global $Settings;
		
		//Add the Default Admin Stylesheet
		$Settings['Stylesheets']['Admin'][-1] = 'admin.css';
		//Enqueue the Styles
		enqueueScripts( 'Admin' );
	});
	/**
	*
	*	Excerpt Settings
	*		- Note: The Excerpts are duplicated in case you want to change one
	*
	**/
	//Set the Excerpt Length
	add_filter('excerpt_length',function(){
		return get_option('excerptlength',40);
	});
	/**
	*
	*	Add Custom Class to Sub-Menu Parents
	*		- 
	* 		
	* 		Params:
	* 			- $items: 		(Object) The Menu Items
	* 			- $args: 		(Object) The nav_menu_object arguments
	*
	*		Returns:
	* 			n/a
	*
	**/
	add_filter('wp_nav_menu_objects',function($items,$args){
		//The Parent's key
	    $last = 0;
	    //The Menu Items
	    foreach($items as $key=>$obj){
	    	//Check if the item parent is 0
	        if( $obj->menu_item_parent == 0 ){
	        	//Save the Parent Key
	            $last = $key;
	        }else{
	            
	        	//Add a Class
	            $items[$last]->classes['dropdown'] = 'has-submenu';
	        }
	    }
	    //Return the Array
	    return $items;
	},10,2);
	/**
	*
	*	Show the Home Page in the Menu
	*		- 
	* 		
	* 		Params:
	* 			- $args: 		(Object) The nav_menu_object arguments
	*
	*		Returns:
	* 			n/a
	*
	**/
	add_filter('wp_page_menu_args',function($args){
		$args['show_home'] = true;
		return $args;
	});
	/**
	*
	*	Remove the Comment Styles
	*		- 
	* 		
	* 		Params:
	* 			- $args: 		(Object) The CSS Headers
	*
	*		Returns:
	* 			n/a
	*
	**/
	add_action( 'widgets_init', function() {
		global $wp_widget_factory;
		remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
	});
	/**
	*
	*	Add Class to Next and Previous Post Links
	*		- 
	* 		
	* 		Params:
	* 			n/a
	*
	*		Returns:
	* 			n/a
	*
	**/
	add_filter('next_posts_link_attributes',function(){ return 'class="previous"'; });
	add_filter('previous_posts_link_attributes',function(){ return 'class="next"'; });
	add_filter('next_post_link',function($output){ return str_replace('<a href=','<a class="next" href=',$output); });
	add_filter('previous_post_link',function($output){ return str_replace('<a href=','<a class="previous" href=',$output); });
	
	/**
	*
	*
	*	Theme Custom Logo
	*
	*
	**/
	
	function jss_theme_setup() {
		add_theme_support('custom-logo');
	}
	
	add_action('after_setup_theme', 'jss_theme_setup');
	add_image_size('jss-logo', 160, 90);
	add_theme_support('custom-logo', array(
		'size' => 'jss_theme-logo'
	));

	function jss_theme_custom_logo() {
		// Try to retrieve the Custom Logo
		$output = '';
		if (function_exists('get_custom_logo'))
			$output = '<h1 class="custom-logo">' . get_custom_logo() . '</h1>';
	
		// Nothing in the output: Custom Logo is not supported, or there is no selected logo
		// In both cases we display the site's name
		if (empty($output))
			$output = '<h1><a href="' . esc_url(home_url('/')) . '">' . get_bloginfo('name') . '</a></h1>';
	
		echo $output;
	}
	/**
	*
	*	Add Custom Tiny MCE Buttons
	*		- Adds Custom Buttons the the Tiny MCE Editor
	*
	* 		Params:
	* 			n/a
	*
	*		Returns:
	* 			n/a
	*
	**/
	add_filter('tiny_mce_before_init',function($settings){
		//Load the Settings
		global $Settings;
		//Show all Hidden Fields
		$settings['wordpress_adv_hidden'] 	= false;
		//Add Formatting
		$settings['style_formats'] 			= json_encode( $Settings['Editor Styles'] );
		//Return Settings
		return $settings;
	});
	//Return Missing Fields
	add_filter('mce_buttons_3',function($buttons){
		$buttons[] = 'styleselect';
		$buttons[] = 'format';
		$buttons[] = 'cut';
		$buttons[] = 'copy';
		$buttons[] = 'charmap';
		$buttons[] = 'hr';
		$buttons[] = 'visualaid';
		$buttons[] = 'table';
		return $buttons;
	
	});
	/**
	*
	*	sidebar
	*		- Get the Template or Default Sidebar
	*
	* 		Params:
	* 			- $default: 		(String) The Default Sidebar
	*
	*		Returns:
	* 			- The Sidebar
	*
	**/
	function sidebar($default=null){
		if( !is_tax() && !is_category() ){
			$template = basename( get_page_template() );
			$template = substr( $template , strpos( $template , '-' ) + 1 , strpos( $template , '.' ) - strlen( $template ) );
			return get_sidebar( file_exists( get_template_directory() . '/sidebar-' . $template . '.php' ) ? $template : $default ) ;
		}else{
			return get_sidebar( $default );
		}
	}
	/**
	*
	*	Change the Login Logo
	*		- Changes the Wordpress Login Logo
	*
	* 		Params:
	* 			n/a
	*
	*		Returns:
	* 			n/a
	*
	**/
	add_action('login_enqueue_scripts', function(){
		//Prepare the Javascript File
		$javascript = '/js/login.js';
	   
		//Prepare the Stylesheet File
		$stylesheet = '/css/login.css';
		//If the Stylesheet Exists
		if( file_exists( get_template_directory() . $stylesheet ) ){
	    	//Enqueue It
	    	wp_enqueue_style( 'custom-login', get_bloginfo('template_directory') . $stylesheet );
		}
	   	//If the Javascript Exists
	   	if( file_exists( get_template_directory() . $javascript ) ){
	   		//Enqueue It
		    wp_enqueue_script( 'custom-login', get_bloginfo('template_directory') . $javascript );
		}
	}, 10);
	/**
	*
	*	Change the Login Home URL
	*		- Changes the Wordpress Login Page Logo URL
	*
	* 		Params:
	* 			n/a
	*
	*		Returns:
	* 			n/a
	*
	**/
	add_filter('login_headerurl',function(){
		return home_url();
	});
	/**
	*
	*	Change the Login Text
	*		- Changes the Wordpress Login Text
	*
	* 		Params:
	* 			n/a
	*
	*		Returns:
	* 			n/a
	*
	**/
	add_filter('login_text',function(){
		return get_bloginfo('name');
	});
	/**
	*
	*	Change the Login Text
	*		- Changes the Wordpress Login Text
	*
	* 		Params:
	* 			$atts: 		(Object) The Shortcode Attributes
	* 			$content: 	(String) The Shortcode Content
	*
	**/
	add_shortcode('b',function($atts,$content=''){
		return '<strong>' . $content . '</strong>';
	});
	add_shortcode('i',function($atts,$content=''){
		return '<em>' . $content . '</em>';
	});
	add_shortcode('br',function($atts,$content=''){
		return '<br />';
	});
	/**
	*
	*	Custom Walker Menu
	* 		- Custom Walker Menu that Adds Description to the Navigation
	*
	* 	Params:
	* 		n/a
	*
	**/
	class Menu_With_Description extends Walker_Nav_Menu {
		function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
			global $wp_query;
			//Check for the Total Posts
			$posts 	= $item->object == 'category' ? new WP_Query( 'cat=' . $item->object_id ) : (object)array( 'found_posts' => 1 );
			//Ensure Posts exist in the Cateogry
			if( $posts->found_posts > 0 ){
				//Prepare the Classes
				$classes	= join( ' ', apply_filters( 'nav_menu_css_class', array_filter( empty( $item->classes ) ? array() : (array) $item->classes ), $item ) );
				//Initialize the Output
				$output .= ( $depth ? str_repeat( "\t", $depth ) : '' ) . '<li id="menu-item-'. $item->ID . '" class="' . esc_attr( $classes ) . '">' ;
				//Prepare Attributes
				$attributes = 
					( !empty( $item->attr_title )? 	' title="' . esc_attr( $item->attr_title ) .'"' 	: '' ) .
					( !empty( $item->target )? 		' target="' . esc_attr( $item->target ) . '"' 		: '' ) .
					( !empty( $item->xfn )? 		' rel="' . esc_attr( $item->xfn ) .'"' 				: '' ) .
					( !empty( $item->url )? 		' href="' . esc_attr( $item->url ) .'"' 			: '' ) ;
				//Create Link
				$link 	= 
					$args->before .
						'<a' . $attributes . '>' .
							$args->link_before . 
								do_shortcode( apply_filters( 'the_title', $item->title, $item->ID ) ) .
							$args->link_after .
							( $item->object == 'category' && !$args->walker->has_children ? ' <span class="total">(' . (int)$posts->found_posts . ')</span>' : '' ) .
							( !empty( $item->description ) ? '<small>' . do_shortcode( $item->description ) . '</small>' : '' ) .
						'</a>' .
					$args->after ;
			}
			//Return
			$output .= apply_filters( 'walker_nav_menu_start_el', ( isset($link) ? $link : '' ), $item, $depth, $args );
		}
	}
	add_filter('wp_nav_menu_items','add_new_menu_item', 10, 2);
	function add_new_menu_item( $nav, $args ) {
		$navLogo 		= get_field( 'nav_logo', 'option' );
	
		
		if( $args->theme_location == 'primary' )
		$newmenuitem = "<li class='menu-item-logo'><div class='menu-logo' style='background-image:url(\"$navLogo[url] \")' >" . "<a href='" . home_url() . "'>" . 
        "</a></div></li>";
		$nav = $newmenuitem.$nav;
		return $nav;
}
	add_filter('wp_nav_menu_items', 'my_wp_nav_menu_items', 10, 2);

	function my_wp_nav_menu_items( $items, $args ) {
		
		// get menu
		$menu = wp_get_nav_menu_object($args->menu);
		
		
		// modify primary only
		if( $args->theme_location == 'primary' ) {

			while (have_rows('nav_info', $menu)) : the_row();
			
			// vars
			$infoImage 	= get_sub_field('image', $menu);
			$infoText 	= get_sub_field('info_label', $menu);
			
			
			// prepend logo
			$infoPanel = '<li class="menu-info-panel"><div class="info-image"><img src="'.$infoImage['url'].'" alt="'.$logo['alt'].'" /></div><div class="info-text"><p>'. $infoText . '</p></div></li>';
			
			
			
			// append html
			$items = $infoPanel . $items;

			endwhile;
			
		}
		
		
		// return
		return $items;
		
	}
	/**
	*
	*	gform_ajax_spinner_url
	* 		- Updates the spinner to a better design
	*
	* 	Params:
	* 		n/a
	*
	**/
	add_filter( 'gform_ajax_spinner_url', function(){
		return 'data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7';
	}, 10, 2 );
	/**
	*
	*	Add ACF Options Page
	* 		- 
	*
	* 	Params:
	* 		n/a
	*
	**/
	if( function_exists('acf_add_options_page') ) {
	
		acf_add_options_page(array(
			'page_title' 	=> 'Theme General Settings',
			'menu_title'	=> 'Theme Settings',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));
	}
	
	//===========================================
	/**
	*
	* 	WEBSITE SPECIFIC
	*
	**/
	//===========================================
	/**
	*
	*	echo_acf
	* 		- Checks to see if acf field exists and spits out HTML
	*
	* 	Params:
	* 		$acf_name: 		The name of the acf field
	* 		$element: 		Wrapper element (e.g. h1)
	* 		$classes: 		(Optional) Any classes you want to apply to the element
	*		$sub: 			Whether or not the acf is a sub-field
	*
	**/
	function echo_acf($acf_name, $element, $classes, $sub = false) {
		if($acf_name && $element) {
			$html = '<%s class="%s">%s</%s>';
			if ($sub) {
				if (get_sub_field($acf_name)) {
					$acf_field = get_sub_field($acf_name);
				}
			}
			else {
				if (get_field($acf_name)) {
					$acf_field = get_field($acf_name);
				}
			}
			if($acf_field) {
				echo sprintf($html, $element, $classes, $acf_field, $element);
			}
			else {
				// No acf data
			}
		}
		else {
			echo 'Specify an acf field & a wrapper element';
		}
	}
	
	/**
	 * Responsive Image Helper Function
	 *
	 * @param string $image_id the id of the image (from ACF or similar)
	 * @param string $image_size the size of the thumbnail image or custom image size
	 * @param string $max_width the max width this image will be shown to build the sizes attribute 
	 */
	
	function acf_responsive_image($image_id,$image_size,$max_width){
	
		// check the image ID is not blank
		if($image_id != '') {
	
			// set the default src image size
			$image_src = wp_get_attachment_image_url( $image_id, $image_size );
	
			// set the srcset with various image sizes
			$image_srcset = wp_get_attachment_image_srcset( $image_id, $image_size );
	
			// generate the markup for the responsive image
			echo 'src="'.$image_src.'" srcset="'.$image_srcset.'" sizes="(max-width: '.$max_width.') 100vw, '.$max_width.'"';
	
		}
	}

	/**
	*
	*	wcc_acf_admin_footer
	* 		- Edits the styles of the WYSIWYG editor
	*
	* 	Params:
	* 		n/a
	*
	**/
	
	add_filter( 'tiny_mce_before_init', function ($mce_init) {

		$content_css = get_stylesheet_directory_uri() .'/css/editor.css';
	  
		//Grab existing stylesheets and then add our new $content_css
		if ( isset( $mce_init[ 'content_css' ] ) ) {
		  $content_css_new =  $mce_init[ 'content_css' ].','.$content_css;
		}
	  
		$mce_init[ 'content_css' ] = $content_css_new;
	  
		return $mce_init;
	  });
	
	/**
	*
	*	my_acf_google_init
	* 		- Updates API key in ACF google map embed field
	*
	* 	Params:
	* 		Google API key
	*
	**/

	function my_acf_google_map_api( $api ){
		$api['key'] = 'AIzaSyAn2QQ6CRjTl9ANVyTqqzvmEf8iKuLwf8c';
		return $api;
	}
	add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


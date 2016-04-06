<?php
/**
 * phones functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package phones
 */

if ( ! function_exists( 'phones_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function phones_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on phones, use a find and replace
	 * to change 'phones' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'phones', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'phones' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'phones_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	$args = array(
		'flex-width'    => true,
		'width'         => 100,
		'flex-height'    => true,
		'height'        => 90,
		'default-image' => get_template_directory_uri() . '/images/1.jpg',
	);
	add_theme_support( 'custom-header', $args );


}
endif;
add_action( 'after_setup_theme', 'phones_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function phones_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'phones_content_width', 640 );
}
add_action( 'after_setup_theme', 'phones_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function phones_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'phones' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'phones' ),
		'before_widget' => '<div class="col-md-3 widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'phones_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function phones_scripts() {
	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
	
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css');

	wp_enqueue_style( 'unslider-dots', get_template_directory_uri() . '/css/unslider-dots.css');

	wp_enqueue_style( 'unslider', get_template_directory_uri() . '/css/unslider.css');
	
	wp_enqueue_style( 'phones-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bootstrap-javascript', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array('jquery'), '20151215', true );

	wp_enqueue_script( 'phones-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151213', true );

	wp_enqueue_script( 'unslider-js', get_template_directory_uri() . '/js/unslider.js', array(), '20151214', true );

	wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/js/scripts.js', array(), '20151215', true );

	wp_enqueue_script( 'phones-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'phones_scripts' );

function themeslug_theme_customizer( $wp_customize ) {
    $wp_customize->add_section( 'themeslug_logo_section' , array(
        'title'       => __( 'Logo', 'themeslug' ),
        'priority'    => 30,
        'description' => 'Upload a logo to replace the default site name and description in the header',
    ) );

    $wp_customize->add_setting( 'themeslug_logo' );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
    	'label'    => __( 'Logo', 'themeslug' ),
    	'section'  => 'themeslug_logo_section',
    	'settings' => 'themeslug_logo',
	) ) );

}
add_action( 'customize_register', 'themeslug_theme_customizer' );

function get_phones_menu() {
	$args = array(
		'menu' => 'main-menu', 
		'container' => 'ul',
		'menu_class' => 'nav navbar-nav navbar-right',
		'theme_location' => 'primary',
		'menu_id' => 'primary-menu'
	);
	wp_nav_menu($args);
}

function get_phones_logo() {
	if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
	    <div class='site-logo'>
	        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
	    </div>
	<?php else : ?>
	    <hgroup>
	        <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
	    </hgroup>
	<?php endif; 
}

function get_phones_portfolio() {
	$query = new WP_Query( array( 'category_name' => 'portfolio','posts_per_page' => 6 ) );

	if ( $query->have_posts() ) : ?>

		<!-- the loop -->
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>
			<div class="col-md-4 col-sm-6 portfolio-item">
				<a href="<?php the_permalink(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/images/portfolio_sample.jpg" class="img img-responsive" alt="">
				</a>
			</div>
		<?php endwhile; ?>
		<!-- end of the loop -->

		<?php wp_reset_postdata(); ?>

	<?php else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; 
}

function get_phones_team_members() {
	$query = new WP_Query( array( 'category_name' => 'team_member', 'posts_per_page' => 12) );

	if ( $query->have_posts() ) : ?>
		
		<!-- the loop -->
		<?php while ( $query->have_posts() ) : $query->the_post(); 
			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		?>			
			<div class="col-md-4 team">
				<div class="team_container" style="background-image: url('<?php echo $url; ?>');">
					<div class="team_member">
						<div class="member_name text-center white bold"><?php the_title(); ?></div>
						<div class="position text-center"><?php the_tags('<span>',',', '</span>'); ?></div>
						<p class="team_content">Your bones don't break, mine do. That's clear. Your cells react to bacteria and viruses differently than mine. You don't get sick, I do. </p>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
		<!-- end of the loop -->
		<?php wp_reset_postdata(); ?>

	<?php else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; 
}

function get_phones_recent_posts() {
	// Query Post Type: 'post' && Post Per Page: 3
	$query = new WP_Query( array( 'category_name' => 'blog', 'post_type' => 'post', 'posts_per_page' => 3) );

	if ( $query->have_posts() ) : ?>
		
		<!-- the loop -->
		<?php while ( $query->have_posts() ) : $query->the_post(); ?>		

			<li class="recent_relative">
				<div class="recent_icon">
					<img src="<?php echo get_template_directory_uri(); ?>/images/recent_icon.png" alt="">
				</div>
				<div class="recent_content">
					<a href="<?php the_permalink(); ?>" class="white"><?php the_title(); ?></a>
					<p>Nov 13 2016</p>
				</div>
			</li>

		<?php endwhile; ?>
		<!-- end of the loop -->
		<?php wp_reset_postdata(); ?>

	<?php else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; 
}

function get_phones_category() {
	// fetch all WordPress tags
	$tags = get_tags();

	foreach ($tags as $tag) {
		$container .= '<span class="tag">' . $tag->name . '</span>';
	}
	return $container;
}




/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

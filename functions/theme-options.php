<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'kontrast', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Links
/* ------------------------------------ */
Kirki::add_section( 'morelink', array(
	'title'       => esc_html__( 'AlxMedia', 'kontrast' ),
	'type'        => 'link',
	'button_text' => esc_html__( 'View More Themes', 'kontrast' ),
	'button_url'  => 'http://alxmedia.se/themes/',
	'priority'    => 13,
) );
Kirki::add_section( 'reviewlink', array(
	'title'       => esc_html__( 'Like This Theme?', 'kontrast' ),
	'panel'       => 'options',
	'type'        => 'link',
	'button_text' => esc_html__( 'Write a Review', 'kontrast' ),
	'button_url'  => 'https://wordpress.org/support/theme/kontrast/reviews/?filter=5#new-post',
	'priority'    => 1,
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'kontrast' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'kontrast' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'kontrast' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'kontrast' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'kontrast' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'layout', array(
    'priority'    => 50,
    'title'       => esc_html__( 'Layout', 'kontrast' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_html__( 'Sidebars', 'kontrast' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'kontrast' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'kontrast' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Responsive Layout
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'responsive',
	'label'			=> esc_html__( 'Responsive Layout', 'kontrast' ),
	'description'	=> esc_html__( 'Mobile and tablet optimizations (responsive.css)', 'kontrast' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Mobile Sidebar
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_html__( 'Mobile Sidebar Content', 'kontrast' ),
	'description'	=> esc_html__( 'Hide sidebar content on low-resolution mobile devices (320px)', 'kontrast' ),
	'section'		=> 'general',
	'default'		=> '1',
	'choices'		=> array(
		'1'			=> esc_html__( 'Show sidebars', 'kontrast' ),
		's1'		=> esc_html__( 'Hide primary sidebar', 'kontrast' ),
		's2'		=> esc_html__( 'Hide secondary sidebar', 'kontrast' ),
		's1-s2'		=> esc_html__( 'Hide both sidebars', 'kontrast' ),
	),
) );
// General: Recommended Plugins
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'kontrast' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'kontrast' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Heading
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-heading',
	'label'			=> esc_html__( 'Heading', 'kontrast' ),
	'description'	=> esc_html__( 'Your blog heading', 'kontrast' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Subheading
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-subheading',
	'label'			=> esc_html__( 'Subheading', 'kontrast' ),
	'description'	=> esc_html__( 'Your blog subheading', 'kontrast' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Excerpt Length
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Excerpt Length', 'kontrast' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'kontrast' ),
	'section'		=> 'blog',
	'default'		=> '34',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Featured Posts Include
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'checkbox',
	'settings'		=> 'featured-posts-include',
	'label'			=> esc_html__( 'Featured Posts', 'kontrast' ),
	'description'	=> esc_html__( 'To show featured posts in the slider AND the content below. Usually not recommended.', 'kontrast' ),
	'section'		=> 'blog',
	'default'		=> false,
) );
// Blog: Featured Category
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'select',
	'settings'		=> 'featured-category',
	'label'			=> esc_html__( 'Featured Category', 'kontrast' ),
	'description'	=> esc_html__( 'By not selecting a category, it will show your latest post(s) from all categories', 'kontrast' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_html__( 'Select a category', 'kontrast' ),
) );
// Blog: Featured Post Count
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'featured-posts-count',
	'label'			=> esc_html__( 'Featured Post Count', 'kontrast' ),
	'description'	=> esc_html__( 'Max number of featured posts to display. Set to 1 and it will show it without any slider script. Set it to 0 to disable', 'kontrast' ),
	'section'		=> 'blog',
	'default'		=> '3',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '10',
		'step'	=> '1',
	),
) );
// Blog: Standard
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'blog-standard',
	'label'			=> esc_html__( 'Standard Blog List', 'kontrast' ),
	'description'	=> esc_html__( 'Show one post per row, image beside text', 'kontrast' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Thumbnail Placeholder
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'placeholder',
	'label'			=> esc_html__( 'Thumbnail Placeholder', 'kontrast' ),
	'description'	=> esc_html__( 'Show featured image placeholders if no featured image is set', 'kontrast' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Thumbnail Comment Count
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_html__( 'Thumbnail Comment Count', 'kontrast' ),
	'description'	=> esc_html__( 'Comment count on thumbnails', 'kontrast' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'kontrast' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'kontrast' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'kontrast' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'kontrast' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'kontrast' ),
		'categories'=> esc_html__( 'Related by categories', 'kontrast' ),
		'tags'		=> esc_html__( 'Related by tags', 'kontrast' ),
	),
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'kontrast' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'kontrast' ),
	'section'		=> 'blog',
	'default'		=> 's1',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'kontrast' ),
		's1'		=> esc_html__( 'Sidebar Primary', 'kontrast' ),
		's2'		=> esc_html__( 'Sidebar Secondary', 'kontrast' ),
		'content'	=> esc_html__( 'Below content', 'kontrast' ),
	),
) );
// Header: Ads
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-ads',
	'label'			=> esc_html__( 'Header Ads', 'kontrast' ),
	'description'	=> esc_html__( 'Header widget ads area', 'kontrast' ),
	'section'		=> 'header',
	'default'		=> 'off',
) );
// Header: Search
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-search',
	'label'			=> esc_html__( 'Header Search', 'kontrast' ),
	'description'	=> esc_html__( 'Header search button', 'kontrast' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Social Links
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_html__( 'Header Social Links', 'kontrast' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'kontrast' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Footer: Ads
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-ads',
	'label'			=> esc_html__( 'Footer Ads', 'kontrast' ),
	'description'	=> esc_html__( 'Footer widget ads area', 'kontrast' ),
	'section'		=> 'footer',
	'default'		=> 'off',
) );
// Footer: Widget Columns
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'kontrast' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 3', 'kontrast' ),
	'section'		=> 'footer',
	'default'		=> '0',
	'choices'     => array(
		'0'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'1'	=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png',
		'2'	=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png',
		'3'	=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png',
		'4'	=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png',
	),
) );
// Footer: Social Links
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'kontrast' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'kontrast' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'kontrast' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'kontrast' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'kontrast' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'kontrast' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'kontrast' ),
	'description'	=> esc_html__( 'Footer credit text', 'kontrast' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Layout: Global
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-global',
	'label'			=> esc_html__( 'Global Layout', 'kontrast' ),
	'description'	=> esc_html__( 'Other layouts will override this option if they are set', 'kontrast' ),
	'section'		=> 'layout',
	'default'		=> 'col-3cm',
	'choices'     => array(
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Home
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-home',
	'label'			=> esc_html__( 'Home', 'kontrast' ),
	'description'	=> esc_html__( '(is_home) Posts homepage layout', 'kontrast' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Single
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-single',
	'label'			=> esc_html__( 'Single', 'kontrast' ),
	'description'	=> esc_html__( '(is_single) Single post layout - If a post has a set layout, it will override this.', 'kontrast' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Archive
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive',
	'label'			=> esc_html__( 'Archive', 'kontrast' ),
	'description'	=> esc_html__( '(is_archive) Category, date, tag and author archive layout', 'kontrast' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout : Archive - Category
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive-category',
	'label'			=> esc_html__( 'Archive - Category', 'kontrast' ),
	'description'	=> esc_html__( '(is_category) Category archive layout', 'kontrast' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Search
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-search',
	'label'			=> esc_html__( 'Search', 'kontrast' ),
	'description'	=> esc_html__( '(is_search) Search page layout', 'kontrast' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Error 404
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-404',
	'label'			=> esc_html__( 'Error 404', 'kontrast' ),
	'description'	=> esc_html__( '(is_404) Error 404 page layout', 'kontrast' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Default Page
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-page',
	'label'			=> esc_html__( 'Default Page', 'kontrast' ),
	'description'	=> esc_html__( '(is_page) Default page layout - If a page has a set layout, it will override this.', 'kontrast' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );

function kontrast_kirki_sidebars_select() {
 	$sidebars = array();
 	if ( isset( $GLOBALS['wp_registered_sidebars'] ) ) {
 		$sidebars = $GLOBALS['wp_registered_sidebars'];
 	}
 	$sidebars_choices = array();
 	foreach ( $sidebars as $sidebar ) {
 		$sidebars_choices[ $sidebar['id'] ] = $sidebar['name'];
 	}
 	if ( ! class_exists( 'Kirki' ) ) {
 		return;
 	}
	// Sidebars: Select
	Kirki::add_field( 'kontrast_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_html__( 'Home', 'kontrast' ),
		'description'	=> esc_html__( '(is_home) Primary', 'kontrast' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices,
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'kontrast' ),
	) );
	Kirki::add_field( 'kontrast_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-home',
		'label'			=> esc_html__( 'Home', 'kontrast' ),
		'description'	=> esc_html__( '(is_home) Secondary', 'kontrast' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices,
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'kontrast' ),
	) );
	Kirki::add_field( 'kontrast_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_html__( 'Single', 'kontrast' ),
		'description'	=> esc_html__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'kontrast' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices,
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'kontrast' ),
	) );
	Kirki::add_field( 'kontrast_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-single',
		'label'			=> esc_html__( 'Single', 'kontrast' ),
		'description'	=> esc_html__( '(is_single) Secondary - If a single post has a unique sidebar, it will override this.', 'kontrast' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices,
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'kontrast' ),
	) );
	Kirki::add_field( 'kontrast_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_html__( 'Archive', 'kontrast' ),
		'description'	=> esc_html__( '(is_archive) Primary', 'kontrast' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices,
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'kontrast' ),
	) );
	Kirki::add_field( 'kontrast_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-archive',
		'label'			=> esc_html__( 'Archive', 'kontrast' ),
		'description'	=> esc_html__( '(is_archive) Secondary', 'kontrast' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices,
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'kontrast' ),
	) );
	Kirki::add_field( 'kontrast_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'kontrast' ),
		'description'	=> esc_html__( '(is_category) Primary', 'kontrast' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices,
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'kontrast' ),
	) );
	Kirki::add_field( 'kontrast_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'kontrast' ),
		'description'	=> esc_html__( '(is_category) Secondary', 'kontrast' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices,
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'kontrast' ),
	) );
	Kirki::add_field( 'kontrast_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_html__( 'Search', 'kontrast' ),
		'description'	=> esc_html__( '(is_search) Primary', 'kontrast' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices,
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'kontrast' ),
	) );
	Kirki::add_field( 'kontrast_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-search',
		'label'			=> esc_html__( 'Search', 'kontrast' ),
		'description'	=> esc_html__( '(is_search) Secondary', 'kontrast' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices,
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'kontrast' ),
	) );
	Kirki::add_field( 'kontrast_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_html__( 'Error 404', 'kontrast' ),
		'description'	=> esc_html__( '(is_404) Primary', 'kontrast' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices,
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'kontrast' ),
	) );
	Kirki::add_field( 'kontrast_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-404',
		'label'			=> esc_html__( 'Error 404', 'kontrast' ),
		'description'	=> esc_html__( '(is_404) Secondary', 'kontrast' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices,
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'kontrast' ),
	) );
	Kirki::add_field( 'kontrast_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_html__( 'Default Page', 'kontrast' ),
		'description'	=> esc_html__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'kontrast' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices,
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'kontrast' ),
	) );
	Kirki::add_field( 'kontrast_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-page',
		'label'			=> esc_html__( 'Default Page', 'kontrast' ),
		'description'	=> esc_html__( '(is_page) Secondary - If a page has a unique sidebar, it will override this.', 'kontrast' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices,
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'kontrast' ),
	) );

 }
add_action( 'init', 'kontrast_kirki_sidebars_select', 999 );

// Social Links: List
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'kontrast' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'kontrast' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'kontrast' ) . ' <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank"><strong>' . esc_html__( 'View All', 'kontrast' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'kontrast' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'kontrast' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'kontrast' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'kontrast' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'kontrast' ) . ' <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank"><strong>' . esc_html__( 'View All', 'kontrast' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'kontrast' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'kontrast' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'kontrast' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'kontrast' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'kontrast' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'kontrast' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'kontrast' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Light Sidebar
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'light-sidebar',
	'label'			=> esc_html__( 'Light Primary Sidebar', 'kontrast' ),
	'description'	=> esc_html__( 'Light colors for the primary sidebar', 'kontrast' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Boxed Layout
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'boxed',
	'label'			=> esc_html__( 'Boxed Layout', 'kontrast' ),
	'description'	=> esc_html__( 'Use a boxed layout', 'kontrast' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Font
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'kontrast' ),
	'description'	=> esc_html__( 'Select font for the theme', 'kontrast' ),
	'section'		=> 'styling',
	'default'		=> 'roboto-condensed',
	'choices'     => array(
		'titillium-web'			=> esc_html__( 'Titillium Web, Latin (Self-hosted)', 'kontrast' ),
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'kontrast' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'kontrast' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'kontrast' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'kontrast' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'kontrast' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'kontrast' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'kontrast' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'kontrast' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'kontrast' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'kontrast' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'kontrast' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'kontrast' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'kontrast' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'kontrast' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'kontrast' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'kontrast' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'kontrast' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'kontrast' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'kontrast' ),
		'arial'					=> esc_html__( 'Arial', 'kontrast' ),
		'georgia'				=> esc_html__( 'Georgia', 'kontrast' ),
		'verdana'				=> esc_html__( 'Verdana', 'kontrast' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'kontrast' ),
	),
) );
// Styling: Container Width
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_html__( 'Website Max-width', 'kontrast' ),
	'description'	=> esc_html__( 'Max-width of the container. If you use 2 sidebars, your container should be at least 1200px. Note: For 720px content (default) use 1380px for 2 sidebars and 1120px for 1 sidebar. If you use a combination of both, try something inbetween.', 'kontrast' ),
	'section'		=> 'styling',
	'default'		=> '1380',
	'choices'     => array(
		'min'	=> '1024',
		'max'	=> '1600',
		'step'	=> '1',
	),
) );
// Styling: Sidebar Width
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'sidebar-padding',
	'label'			=> esc_html__( 'Sidebar Width', 'kontrast' ),
	'section'		=> 'styling',
	'default'		=> '30',
	'choices'		=> array(
		'30'	=> esc_html__( '280px primary (30px padding)', 'kontrast' ),
		'20'	=> esc_html__( '300px primary (20px padding)', 'kontrast' ),
	),
) );
// Styling: Primary Color
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-1',
	'label'			=> esc_html__( 'Primary Color', 'kontrast' ),
	'section'		=> 'styling',
	'default'		=> '#26abd3',
) );
// Styling: Comments Bubble
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-bubble',
	'label'			=> esc_html__( 'Comments Bubble', 'kontrast' ),
	'section'		=> 'styling',
	'default'		=> '#dd5827',
) );
// Styling: Header Menu Background
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-header-menu',
	'label'			=> esc_html__( 'Header Menu Background', 'kontrast' ),
	'section'		=> 'styling',
	'default'		=> '#222222',
) );
// Styling: Footer Menu Background
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-footer-menu',
	'label'			=> esc_html__( 'Footer Menu Background', 'kontrast' ),
	'section'		=> 'styling',
	'default'		=> '#333333',
) );
// Styling: Footer Background
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-footer',
	'label'			=> esc_html__( 'Footer Background', 'kontrast' ),
	'section'		=> 'styling',
	'default'		=> '#222222',
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'kontrast' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'kontrast' ),
	'section'		=> 'styling',
	'default'		=> '60',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Image Border Radius
Kirki::add_field( 'kontrast_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'image-border-radius',
	'label'			=> esc_html__( 'Image Border Radius', 'kontrast' ),
	'description'	=> esc_html__( 'Give your thumbnails and layout images rounded corners', 'kontrast' ),
	'section'		=> 'styling',
	'default'		=> '0',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '15',
		'step'	=> '1',
	),
) );

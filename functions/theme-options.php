<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add config
/* ------------------------------------ */
Kirki::add_config( 'kontrast', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_attr__( 'Theme Options', 'kontrast' ),
    'description' => esc_attr__( '', 'kontrast' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_attr__( 'General', 'kontrast' ),
    'description' => esc_attr__( '', 'kontrast' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_attr__( 'Blog', 'kontrast' ),
    'description' => esc_attr__( '', 'kontrast' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_attr__( 'Header', 'kontrast' ),
    'description' => esc_attr__( '', 'kontrast' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_attr__( 'Footer', 'kontrast' ),
    'description' => esc_attr__( '', 'kontrast' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'layout', array(
    'priority'    => 50,
    'title'       => esc_attr__( 'Layout', 'kontrast' ),
    'description' => esc_attr__( '', 'kontrast' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_attr__( 'Sidebars', 'kontrast' ),
    'description' => esc_attr__( '', 'kontrast' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_attr__( 'Social Links', 'kontrast' ),
    'description' => esc_attr__( '', 'kontrast' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_attr__( 'Styling', 'kontrast' ),
    'description' => esc_attr__( '', 'kontrast' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Custom CSS
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'switch',
	'settings'		=> 'custom',
	'label'			=> esc_attr__( 'Custom Stylesheet', 'kontrast' ),
	'description'	=> esc_attr__( 'Load custom stylesheet (custom.css)', 'kontrast' ),
	'section'		=> 'general',
	'default'		=> 'off',
) );
// General: Responsive Layout
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'switch',
	'settings'		=> 'responsive',
	'label'			=> esc_attr__( 'Responsive Layout', 'kontrast' ),
	'description'	=> esc_attr__( 'Mobile and tablet optimizations (responsive.css)', 'kontrast' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Mobile Sidebar
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'switch',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_attr__( 'Mobile Sidebar Content', 'kontrast' ),
	'description'	=> esc_attr__( 'Sidebar content on low-resolution mobile devices (320px)', 'kontrast' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Mobile Sidebar
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'radio',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_attr__( 'Mobile Sidebar Content', 'kontrast' ),
	'description'	=> esc_attr__( 'Hide sidebar content on low-resolution mobile devices (320px)', 'kontrast' ),
	'section'		=> 'general',
	'default'		=> '1',
	'choices'		=> array(
		'1'			=> esc_attr__( 'Show sidebars', 'kontrast' ),
		's1'		=> esc_attr__( 'Hide primary sidebar', 'kontrast' ),
		's2'		=> esc_attr__( 'Hide secondary sidebar', 'kontrast' ),
		's1-s2'		=> esc_attr__( 'Hide both sidebars', 'kontrast' ),
	),
) );
// General: RSS Feed
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'text',
	'settings'		=> 'rss-feed',
	'label'			=> esc_attr__( 'FeedBurner URL', 'kontrast' ),
	'description'	=> esc_attr__( 'Enter your full FeedBurner URL (or any other preferred feed URL) if you wish to use FeedBurner over the standard WordPress feed e.g. http://feeds.feedburner.com/yoururlhere', 'kontrast' ),
	'section'		=> 'general',
	'default'		=> '',
) );
// General: Post Comments
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'switch',
	'settings'		=> 'post-comments',
	'label'			=> esc_attr__( 'Post Comments', 'kontrast' ),
	'description'	=> esc_attr__( 'Comments on posts', 'kontrast' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Page Comments
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'switch',
	'settings'		=> 'page-comments',
	'label'			=> esc_attr__( 'Page Comments', 'kontrast' ),
	'description'	=> esc_attr__( 'Comments on pages', 'kontrast' ),
	'section'		=> 'general',
	'default'		=> 'off',
) );
// General: Recommended Plugins
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_attr__( 'Recommended Plugins', 'kontrast' ),
	'description'	=> esc_attr__( 'Enable or disable the recommended plugins notice', 'kontrast' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Heading
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'text',
	'settings'		=> 'blog-heading',
	'label'			=> esc_attr__( 'Heading', 'kontrast' ),
	'description'	=> esc_attr__( 'Your blog heading', 'kontrast' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Subheading
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'text',
	'settings'		=> 'blog-subheading',
	'label'			=> esc_attr__( 'Subheading', 'kontrast' ),
	'description'	=> esc_attr__( 'Your blog subheading', 'kontrast' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Excerpt Length
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_attr__( 'Excerpt Length', 'kontrast' ),
	'description'	=> esc_attr__( 'Max number of words. Set it to 0 to disable.', 'kontrast' ),
	'section'		=> 'blog',
	'default'		=> '34',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Featured Posts Include
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'checkbox',
	'settings'		=> 'featured-posts-include',
	'label'			=> esc_attr__( 'Featured Posts', 'kontrast' ),
	'description'	=> esc_attr__( 'To show featured posts in the slider AND the content below. Usually not recommended.', 'kontrast' ),
	'section'		=> 'blog',
	'default'		=> false,
) );
// Blog: Featured Category
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'select',
	'settings'		=> 'featured-category',
	'label'			=> esc_attr__( 'Featured Category', 'kontrast' ),
	'description'	=> esc_attr__( 'By not selecting a category, it will show your latest post(s) from all categories', 'kontrast' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_attr__( 'Select a category', 'kontrast' ),
) );
// Blog: Featured Post Count
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'slider',
	'settings'		=> 'featured-posts-count',
	'label'			=> esc_attr__( 'Featured Post Count', 'kontrast' ),
	'description'	=> esc_attr__( 'Max number of featured posts to display. Set to 1 and it will show it without any slider script. Set it to 0 to disable', 'kontrast' ),
	'section'		=> 'blog',
	'default'		=> '1',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '10',
		'step'	=> '1',
	),
) );
// Blog: Standard
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'switch',
	'settings'		=> 'blog-standard',
	'label'			=> esc_attr__( 'Standard Blog List', 'kontrast' ),
	'description'	=> esc_attr__( 'Show one post per row, image beside text', 'kontrast' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Thumbnail Placeholder
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'switch',
	'settings'		=> 'placeholder',
	'label'			=> esc_attr__( 'Thumbnail Placeholder', 'kontrast' ),
	'description'	=> esc_attr__( 'Show featured image placeholders if no featured image is set', 'kontrast' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Thumbnail Comment Count
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_attr__( 'Thumbnail Comment Count', 'kontrast' ),
	'description'	=> esc_attr__( 'Comment count on thumbnails', 'kontrast' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Sharrre
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'switch',
	'settings'		=> 'sharrre',
	'label'			=> esc_attr__( 'Single - Share Bar', 'kontrast' ),
	'description'	=> esc_attr__( 'Social sharing buttons for each article', 'kontrast' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Sharrre Sticky
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'switch',
	'settings'		=> 'sharrre-scrollable',
	'label'			=> esc_attr__( 'Single - Scrollable Share Bar', 'kontrast' ),
	'description'	=> esc_attr__( 'Make social links stick to browser window when scrolling down', 'kontrast' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Twitter Username
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'text',
	'settings'		=> 'twitter-username',
	'label'			=> esc_attr__( 'Single - Share Bar - Twitter Username', 'kontrast' ),
	'description'	=> esc_attr__( 'Your @username will be added to share-tweets of your posts (optional)', 'kontrast' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_attr__( 'Single - Author Bio', 'kontrast' ),
	'description'	=> esc_attr__( 'Shows post author description, if it exists', 'kontrast' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_attr__( 'Single - Related Posts', 'kontrast' ),
	'description'	=> esc_attr__( 'Shows randomized related articles below the post', 'kontrast' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_attr__( 'Disable', 'kontrast' ),
		'categories'=> esc_attr__( 'Related by categories', 'kontrast' ),
		'tags'		=> esc_attr__( 'Related by tags', 'kontrast' ),
	),
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_attr__( 'Single - Post Navigation', 'kontrast' ),
	'description'	=> esc_attr__( 'Shows links to the next and previous article', 'kontrast' ),
	'section'		=> 'blog',
	'default'		=> 's1',
	'choices'		=> array(
		'disable'	=> esc_attr__( 'Disable', 'kontrast' ),
		's1'		=> esc_attr__( 'Sidebar Primary', 'kontrast' ),
		's2'		=> esc_attr__( 'Sidebar Secondary', 'kontrast' ),
		'content'	=> esc_attr__( 'Below content', 'kontrast' ),
	),
) );
// Header: Ads
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'switch',
	'settings'		=> 'header-ads',
	'label'			=> esc_attr__( 'Header Ads', 'kontrast' ),
	'description'	=> esc_attr__( 'Header widget ads area', 'kontrast' ),
	'section'		=> 'header',
	'default'		=> 'off',
) );
// Header: Custom Logo
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'image',
	'settings'		=> 'custom-logo',
	'label'			=> esc_attr__( 'Custom Logo', 'kontrast' ),
	'description'	=> esc_attr__( 'Upload your custom logo image, 120px height recommended', 'kontrast' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Site Description
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'switch',
	'settings'		=> 'site-description',
	'label'			=> esc_attr__( 'Site Description', 'kontrast' ),
	'description'	=> esc_attr__( 'The description that appears next to your logo', 'kontrast' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Header Image
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'image',
	'settings'		=> 'header-image',
	'label'			=> esc_attr__( 'Header Image', 'kontrast' ),
	'description'	=> esc_attr__( 'Upload a header image. This will disable header title/logo and description.', 'kontrast' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Footer: Ads
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-ads',
	'label'			=> esc_attr__( 'Footer Ads', 'kontrast' ),
	'description'	=> esc_attr__( 'Footer widget ads area', 'kontrast' ),
	'section'		=> 'footer',
	'default'		=> 'off',
) );
// Footer: Widget Columns
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_attr__( 'Footer Widget Columns', 'kontrast' ),
	'description'	=> esc_attr__( 'Select columns to enable footer widgets. Recommended number: 3', 'kontrast' ),
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
// Footer: Custom Logo
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_attr__( 'Footer Logo', 'kontrast' ),
	'description'	=> esc_attr__( 'Upload your custom logo image', 'kontrast' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_attr__( 'Footer Copyright', 'kontrast' ),
	'description'	=> esc_attr__( 'Replace the footer copyright text', 'kontrast' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_attr__( 'Footer Credit', 'kontrast' ),
	'description'	=> esc_attr__( 'Footer credit text', 'kontrast' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Layout: Global
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-global',
	'label'			=> esc_attr__( 'Global Layout', 'kontrast' ),
	'description'	=> esc_attr__( 'Other layouts will override this option if they are set', 'kontrast' ),
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
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-home',
	'label'			=> esc_attr__( 'Home', 'kontrast' ),
	'description'	=> esc_attr__( '(is_home) Posts homepage layout', 'kontrast' ),
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
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-single',
	'label'			=> esc_attr__( 'Single', 'kontrast' ),
	'description'	=> esc_attr__( '(is_single) Single post layout - If a post has a set layout, it will override this.', 'kontrast' ),
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
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive',
	'label'			=> esc_attr__( 'Archive', 'kontrast' ),
	'description'	=> esc_attr__( '(is_archive) Category, date, tag and author archive layout', 'kontrast' ),
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
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive-category',
	'label'			=> esc_attr__( 'Archive - Category', 'kontrast' ),
	'description'	=> esc_attr__( '(is_category) Category archive layout', 'kontrast' ),
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
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-search',
	'label'			=> esc_attr__( 'Search', 'kontrast' ),
	'description'	=> esc_attr__( '(is_search) Search page layout', 'kontrast' ),
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
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-404',
	'label'			=> esc_attr__( 'Error 404', 'kontrast' ),
	'description'	=> esc_attr__( '(is_404) Error 404 page layout', 'kontrast' ),
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
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-page',
	'label'			=> esc_attr__( 'Default Page', 'kontrast' ),
	'description'	=> esc_attr__( '(is_page) Default page layout - If a page has a set layout, it will override this.', 'kontrast' ),
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
// Sidebars: Create Sidebars
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'repeater',
	'label'			=> esc_attr__( 'Create Sidebars', 'kontrast' ),
	'description'	=> esc_attr__( 'You must save and refresh the page to see your new sidebars.', 'kontrast' ),
	'tooltip'		=> esc_attr__( 'Make sure that you save and refresh the page if you can not see the sidebars you have created.', 'kontrast' ),
	'section'		=> 'sidebars',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_attr__('sidebar', 'kontrast' ),
	),
	'settings'		=> 'sidebar-areas',
	'default'		=> '',
	'fields'		=> array(
		'title'	=> array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Sidebar Title', 'kontrast' ),
			'description' => esc_attr__( 'The widget box title', 'kontrast' ),
			'default'     => '',
		),
		'id'	=> array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Sidebar ID', 'kontrast' ),
			'description' => esc_attr__( 'This ID must be unique', 'kontrast' ),
			'default'     => 'sidebar-',
		),
	)
) );


function alx_kirki_sidebars_select() { 
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
	Kirki::add_field( 'alx_kontrast', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_attr__( 'Home', 'kontrast' ),
		'description'	=> esc_attr__( '(is_home) Primary', 'kontrast' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'kontrast' ),
	) );
	Kirki::add_field( 'alx_kontrast', array(
		'type'			=> 'select',
		'settings'		=> 's2-home',
		'label'			=> esc_attr__( 'Home', 'kontrast' ),
		'description'	=> esc_attr__( '(is_home) Secondary', 'kontrast' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'kontrast' ),
	) );
	Kirki::add_field( 'alx_kontrast', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_attr__( 'Single', 'kontrast' ),
		'description'	=> esc_attr__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'kontrast' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'kontrast' ),
	) );
	Kirki::add_field( 'alx_kontrast', array(
		'type'			=> 'select',
		'settings'		=> 's2-single',
		'label'			=> esc_attr__( 'Single', 'kontrast' ),
		'description'	=> esc_attr__( '(is_single) Secondary - If a single post has a unique sidebar, it will override this.', 'kontrast' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'kontrast' ),
	) );
	Kirki::add_field( 'alx_kontrast', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_attr__( 'Archive', 'kontrast' ),
		'description'	=> esc_attr__( '(is_archive) Primary', 'kontrast' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'kontrast' ),
	) );
	Kirki::add_field( 'alx_kontrast', array(
		'type'			=> 'select',
		'settings'		=> 's2-archive',
		'label'			=> esc_attr__( 'Archive', 'kontrast' ),
		'description'	=> esc_attr__( '(is_archive) Secondary', 'kontrast' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'kontrast' ),
	) );
	Kirki::add_field( 'alx_kontrast', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_attr__( 'Archive - Category', 'kontrast' ),
		'description'	=> esc_attr__( '(is_category) Primary', 'kontrast' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'kontrast' ),
	) );
	Kirki::add_field( 'alx_kontrast', array(
		'type'			=> 'select',
		'settings'		=> 's2-archive-category',
		'label'			=> esc_attr__( 'Archive - Category', 'kontrast' ),
		'description'	=> esc_attr__( '(is_category) Secondary', 'kontrast' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'kontrast' ),
	) );
	Kirki::add_field( 'alx_kontrast', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_attr__( 'Search', 'kontrast' ),
		'description'	=> esc_attr__( '(is_search) Primary', 'kontrast' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'kontrast' ),
	) );
	Kirki::add_field( 'alx_kontrast', array(
		'type'			=> 'select',
		'settings'		=> 's2-search',
		'label'			=> esc_attr__( 'Search', 'kontrast' ),
		'description'	=> esc_attr__( '(is_search) Secondary', 'kontrast' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',	
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'kontrast' ),
	) );
	Kirki::add_field( 'alx_kontrast', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_attr__( 'Error 404', 'kontrast' ),
		'description'	=> esc_attr__( '(is_404) Primary', 'kontrast' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'kontrast' ),
	) );
	Kirki::add_field( 'alx_kontrast', array(
		'type'			=> 'select',
		'settings'		=> 's2-404',
		'label'			=> esc_attr__( 'Error 404', 'kontrast' ),
		'description'	=> esc_attr__( '(is_404) Secondary', 'kontrast' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'kontrast' ),
	) );
	Kirki::add_field( 'alx_kontrast', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_attr__( 'Default Page', 'kontrast' ),
		'description'	=> esc_attr__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'kontrast' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'kontrast' ),
	) );
	Kirki::add_field( 'alx_kontrast', array(
		'type'			=> 'select',
		'settings'		=> 's2-page',
		'label'			=> esc_attr__( 'Default Page', 'kontrast' ),
		'description'	=> esc_attr__( '(is_page) Secondary - If a page has a unique sidebar, it will override this.', 'kontrast' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'kontrast' ),
	) );
	
 } 
add_action( 'init', 'alx_kirki_sidebars_select', 999 ); 

// Social Links: List
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'repeater',
	'label'			=> esc_attr__( 'Create Social Links', 'kontrast' ),
	'description'	=> esc_attr__( 'Create and organize your social links', 'kontrast' ),
	'section'		=> 'social',
	'tooltip'		=> esc_attr__( 'Font Awesome names:', 'kontrast' ) . ' <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank"><strong>' . esc_attr__( 'View All', 'kontrast' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_attr__('social link', 'kontrast' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_attr__( 'Title', 'kontrast' ),
			'description'	=> esc_attr__( 'Ex: Facebook', 'kontrast' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_attr__( 'Icon Name', 'kontrast' ),
			'description'	=> esc_attr__( 'Font Awesome icons. Ex: fa-facebook ', 'kontrast' ) . ' <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank"><strong>' . esc_attr__( 'View All', 'kontrast' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_attr__( 'Link', 'kontrast' ),
			'description'	=> esc_attr__( 'Enter the full url for your icon button', 'kontrast' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_attr__( 'Icon Color', 'kontrast' ),
			'description'	=> esc_attr__( 'Set a unique color for your icon (optional)', 'kontrast' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_attr__( 'Open in new window', 'kontrast' ),
			'description'	=> esc_attr__( '', 'kontrast' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_attr__( 'Dynamic Styles', 'kontrast' ),
	'description'	=> esc_attr__( 'Turn on to use the styling options below', 'kontrast' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Boxed Layout
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'switch',
	'settings'		=> 'boxed',
	'label'			=> esc_attr__( 'Boxed Layout', 'kontrast' ),
	'description'	=> esc_attr__( 'Use a boxed layout', 'kontrast' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Font
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_attr__( 'Font', 'kontrast' ),
	'description'	=> esc_attr__( 'Select font for the theme', 'kontrast' ),
	'section'		=> 'styling',
	'default'		=> 'roboto-condensed',
	'choices'     => array(
		'titillium-web'			=> esc_attr__( 'Titillium Web, Latin (Self-hosted)', 'kontrast' ),
		'titillium-web-ext'		=> esc_attr__( 'Titillium Web, Latin-Ext', 'kontrast' ),
		'droid-serif'			=> esc_attr__( 'Droid Serif, Latin', 'kontrast' ),
		'source-sans-pro'		=> esc_attr__( 'Source Sans Pro, Latin-Ext', 'kontrast' ),
		'lato'					=> esc_attr__( 'Lato, Latin', 'kontrast' ),
		'raleway'				=> esc_attr__( 'Raleway, Latin', 'kontrast' ),
		'ubuntu'				=> esc_attr__( 'Ubuntu, Latin-Ext', 'kontrast' ),
		'ubuntu-cyr'			=> esc_attr__( 'Ubuntu, Latin / Cyrillic-Ext', 'kontrast' ),
		'roboto'				=> esc_attr__( 'Roboto, Latin-Ext', 'kontrast' ),
		'roboto-cyr'			=> esc_attr__( 'Roboto, Latin / Cyrillic-Ext', 'kontrast' ),
		'roboto-condensed'		=> esc_attr__( 'Roboto Condensed, Latin-Ext', 'kontrast' ),
		'roboto-condensed-cyr'	=> esc_attr__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'kontrast' ),
		'roboto-slab'			=> esc_attr__( 'Roboto Slab, Latin-Ext', 'kontrast' ),
		'roboto-slab-cyr'		=> esc_attr__( 'Roboto Slab, Latin / Cyrillic-Ext', 'kontrast' ),
		'playfair-display'		=> esc_attr__( 'Playfair Display, Latin-Ext', 'kontrast' ),
		'playfair-display-cyr'	=> esc_attr__( 'Playfair Display, Latin / Cyrillic', 'kontrast' ),
		'open-sans'				=> esc_attr__( 'Open Sans, Latin-Ext', 'kontrast' ),
		'open-sans-cyr'			=> esc_attr__( 'Open Sans, Latin / Cyrillic-Ext', 'kontrast' ),
		'pt-serif'				=> esc_attr__( 'PT Serif, Latin-Ext', 'kontrast' ),
		'pt-serif-cyr'			=> esc_attr__( 'PT Serif, Latin / Cyrillic-Ext', 'kontrast' ),
		'arial'					=> esc_attr__( 'Arial', 'kontrast' ),
		'georgia'				=> esc_attr__( 'Georgia', 'kontrast' ),
		'verdana'				=> esc_attr__( 'Verdana', 'kontrast' ),
		'tahoma'				=> esc_attr__( 'Tahoma', 'kontrast' ),
	),
) );
// Styling: Container Width
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_attr__( 'Website Max-width', 'kontrast' ),
	'description'	=> esc_attr__( 'Max-width of the container. If you use 2 sidebars, your container should be at least 1200px. Note: For 720px content (default) use 1380px for 2 sidebars and 1120px for 1 sidebar. If you use a combination of both, try something inbetween.', 'kontrast' ),
	'section'		=> 'styling',
	'default'		=> '1380',
	'choices'     => array(
		'min'	=> '1024',
		'max'	=> '1600',
		'step'	=> '1',
	),
) );
// Styling: Sidebar Width
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'radio',
	'settings'		=> 'sidebar-padding',
	'label'			=> esc_attr__( 'Sidebar Width', 'kontrast' ),
	'description'	=> esc_attr__( '', 'kontrast' ),
	'section'		=> 'styling',
	'default'		=> '30',
	'choices'		=> array(
		'30'	=> esc_attr__( '280px primary (30px padding)', 'kontrast' ),
		'20'	=> esc_attr__( '300px primary (20px padding)', 'kontrast' ),
	),
) );
// Styling: Primary Color
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'color',
	'settings'		=> 'color-1',
	'label'			=> esc_attr__( 'Primary Color', 'kontrast' ),
	'description'	=> esc_attr__( '', 'kontrast' ),
	'section'		=> 'styling',
	'default'		=> '#26abd3',
) );
// Styling: Comments Bubble
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'color',
	'settings'		=> 'color-bubble',
	'label'			=> esc_attr__( 'Comments Bubble', 'kontrast' ),
	'description'	=> esc_attr__( '', 'kontrast' ),
	'section'		=> 'styling',
	'default'		=> '#dd5827',
) );
// Styling: Footer Menu Background
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'color',
	'settings'		=> 'color-footer-menu',
	'label'			=> esc_attr__( 'Footer Menu Background', 'kontrast' ),
	'description'	=> esc_attr__( '', 'kontrast' ),
	'section'		=> 'styling',
	'default'		=> '#333333',
) );
// Styling: Footer Background
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'color',
	'settings'		=> 'color-footer',
	'label'			=> esc_attr__( 'Footer Background', 'kontrast' ),
	'description'	=> esc_attr__( '', 'kontrast' ),
	'section'		=> 'styling',
	'default'		=> '#222222',
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_attr__( 'Header Logo Image Max-height', 'kontrast' ),
	'description'	=> esc_attr__( 'Your logo image should have the double height of this to be high resolution', 'kontrast' ),
	'section'		=> 'styling',
	'default'		=> '60',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Image Border Radius
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'slider',
	'settings'		=> 'image-border-radius',
	'label'			=> esc_attr__( 'Image Border Radius', 'kontrast' ),
	'description'	=> esc_attr__( 'Give your thumbnails and layout images rounded corners', 'kontrast' ),
	'section'		=> 'styling',
	'default'		=> '0',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '15',
		'step'	=> '1',
	),
) );
// Styling: Body Background
Kirki::add_field( 'alx_kontrast', array(
	'type'			=> 'background',
	'settings'		=> 'body-background',
	'label'			=> esc_attr__( 'Body Background', 'kontrast' ),
	'description'	=> esc_attr__( 'Set background color and/or upload your own background image', 'kontrast' ),
	'section'		=> 'styling',
	'default'     => array(
		'background-color'      => '',
		'background-image'      => '',
		'background-repeat'     => 'no-repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'fixed',
	),
) );
<?php

/*  Initialize the meta boxes.
/* ------------------------------------ */
add_action( 'admin_init', '_custom_meta_boxes' );

function _custom_meta_boxes() {
  
/*  Custom meta boxes
/* ------------------------------------ */
$page_options = array(
	'id'          => 'page-options',
	'title'       => esc_html__( 'Page Options', 'kontrast' ),
	'desc'        => '',
	'pages'       => array( 'page' ),
	'context'     => 'normal',
	'priority'    => 'high',
	'fields'      => array(
		array(
			'label'		=> esc_html__( 'Heading', 'kontrast' ),
			'id'		=> '_heading',
			'type'		=> 'text'
		),
		array(
			'label'		=> esc_html__( 'Subheading', 'kontrast' ),
			'id'		=> '_subheading',
			'type'		=> 'text'
		),
		array(
			'label'		=> esc_html__( 'Primary Sidebar', 'kontrast' ),
			'id'		=> '_sidebar_primary',
			'type'		=> 'sidebar-select',
			'desc'		=> ''
		),
		array(
			'label'		=> esc_html__( 'Secondary Sidebar', 'kontrast' ),
			'id'		=> '_sidebar_secondary',
			'type'		=> 'sidebar-select',
			'desc'		=> ''
		),
		array(
			'label'		=> esc_html__( 'Layout', 'kontrast' ),
			'id'		=> '_layout',
			'type'		=> 'radio-image',
			'desc'		=> '',
			'std'		=> 'inherit',
			'choices'	=> array(
				array(
					'value'		=> 'inherit',
					'label'		=> esc_html__( 'Inherit Layout', 'kontrast' ),
					'src'		=> get_template_directory_uri() . '/functions/images/layout-off.png'
				),
				array(
					'value'		=> 'col-1c',
					'label'		=> esc_html__( '1 Column', 'kontrast' ),
					'src'		=> get_template_directory_uri() . '/functions/images/col-1c.png'
				),
				array(
					'value'		=> 'col-2cl',
					'label'		=> esc_html__( '2 Column Left', 'kontrast' ),
					'src'		=> get_template_directory_uri() . '/functions/images/col-2cl.png'
				),
				array(
					'value'		=> 'col-2cr',
					'label'		=> esc_html__( '2 Column Right', 'kontrast' ),
					'src'		=> get_template_directory_uri() . '/functions/images/col-2cr.png'
				),
				array(
					'value'		=> 'col-3cm',
					'label'		=> esc_html__( '3 Column Middle', 'kontrast' ),
					'src'		=> get_template_directory_uri() . '/functions/images/col-3cm.png'
				),
				array(
					'value'		=> 'col-3cl',
					'label'		=> esc_html__( '3 Column Left', 'kontrast' ),
					'src'		=> get_template_directory_uri() . '/functions/images/col-3cl.png'
				),
				array(
					'value'		=> 'col-3cr',
					'label'		=> esc_html__( '3 Column Right', 'kontrast' ),
					'src'		=> get_template_directory_uri() . '/functions/images/col-3cr.png'
				)
			)
		)
	)
);

$post_options = array(
	'id'          => 'post-options',
	'title'       => esc_html__( 'Post Options', 'kontrast' ),
	'desc'        => '',
	'pages'       => array( 'post' ),
	'context'     => 'normal',
	'priority'    => 'high',
	'fields'      => array(
		array(
			'label'		=> esc_html__( 'Primary Sidebar', 'kontrast' ),
			'id'		=> '_sidebar_primary',
			'type'		=> 'sidebar-select',
			'desc'		=> esc_html__( 'Overrides default', 'kontrast' ),
		),
		array(
			'label'		=> esc_html__( 'Secondary Sidebar', 'kontrast' ),
			'id'		=> '_sidebar_secondary',
			'type'		=> 'sidebar-select',
			'desc'		=> esc_html__( 'Overrides default', 'kontrast' ),
		),
		array(
			'label'		=> esc_html__( 'Layout', 'kontrast' ),
			'id'		=> '_layout',
			'type'		=> 'radio-image',
			'desc'		=> esc_html__( 'Overrides the default layout option', 'kontrast' ),
			'std'		=> 'inherit',
			'choices'	=> array(
				array(
					'value'		=> 'inherit',
					'label'		=> esc_html__( 'Inherit Layout', 'kontrast' ),
					'src'		=> get_template_directory_uri() . '/functions/images/layout-off.png'
				),
				array(
					'value'		=> 'col-1c',
					'label'		=> esc_html__( '1 Column', 'kontrast' ),
					'src'		=> get_template_directory_uri() . '/functions/images/col-1c.png'
				),
				array(
					'value'		=> 'col-2cl',
					'label'		=> esc_html__( '2 Column Left', 'kontrast' ),
					'src'		=> get_template_directory_uri() . '/functions/images/col-2cl.png'
				),
				array(
					'value'		=> 'col-2cr',
					'label'		=> esc_html__( '2 Column Right', 'kontrast' ),
					'src'		=> get_template_directory_uri() . '/functions/images/col-2cr.png'
				),
				array(
					'value'		=> 'col-3cm',
					'label'		=> esc_html__( '3 Column Middle', 'kontrast' ),
					'src'		=> get_template_directory_uri() . '/functions/images/col-3cm.png'
				),
				array(
					'value'		=> 'col-3cl',
					'label'		=> esc_html__( '3 Column Left', 'kontrast' ),
					'src'		=> get_template_directory_uri() . '/functions/images/col-3cl.png'
				),
				array(
					'value'		=> 'col-3cr',
					'label'		=> esc_html__( '3 Column Right', 'kontrast' ),
					'src'		=> get_template_directory_uri() . '/functions/images/col-3cr.png'
				)
			)
		)
	)
);

$post_format_gallery = array(
	'id'          => 'format-gallery',
	'title'       => esc_html__( 'Format: Gallery', 'kontrast' ),
	'desc'        => esc_html__( 'To create a gallery, upload your images and then select "Uploaded to this post" from the dropdown (in the media popup) to see images attached to this post. You can drag to re-order or delete them there. Note: Do not click the "Insert into post" button. Only use the "Insert Media" section of the upload popup, not "Create Gallery" which is for standard post galleries.', 'kontrast' ),
	'pages'       => array( 'post' ),
	'context'     => 'normal',
	'priority'    => 'high',
	'fields'      => array()
);
$post_format_audio = array(
	'id'          => 'format-audio',
	'title'       => esc_html__( 'Format: Audio', 'kontrast' ),
	'desc'        => esc_html__( 'These settings enable you to embed audio into your posts.', 'kontrast' ),
	'pages'       => array( 'post' ),
	'context'     => 'normal',
	'priority'    => 'high',
	'fields'      => array(
		array(
			'label'		=> esc_html__( 'Audio URL', 'kontrast' ),
			'id'		=> '_audio_url',
			'type'		=> 'text',
			'desc'		=> ''
		)
	)
);
$post_format_video = array(
	'id'          => 'format-video',
	'title'       => esc_html__( 'Format: Video', 'kontrast' ),
	'desc'        => esc_html__( 'These settings enable you to embed videos into your posts.', 'kontrast' ),
	'pages'       => array( 'post' ),
	'context'     => 'normal',
	'priority'    => 'high',
	'fields'      => array(
		array(
			'label'		=> esc_html__( 'Video URL', 'kontrast' ),
			'id'		=> '_video_url',
			'type'		=> 'text',
			'desc'		=> ''
		)
	)
);

/*  Register meta boxes
/* ------------------------------------ */
	ot_register_meta_box( $page_options );
	ot_register_meta_box( $post_format_gallery );
	ot_register_meta_box( $post_format_audio );
	ot_register_meta_box( $post_format_video );
	ot_register_meta_box( $post_options );
}
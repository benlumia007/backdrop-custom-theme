<?php
/**
 * 
 */

namespace Backdrop\Custom\Theme\Theme;

use Backdrop\Contracts\Bootable;

class Component implements Bootable {

	public function theme_labels() {
		$labels = [
			'name'               => sprintf( esc_html__( '%s',                   'backdrop-custom-theme' ), 'Themes' ),
			'singular_name'      => sprintf( esc_html__( '%s',                   'backdrop-custom-theme' ), 'Theme' ),
			'name_admin_bar'     => sprintf( esc_html__( '%s',                   'backdrop-custom-theme' ), 'Theme' ),
			'add_new'            => sprintf( esc_html__( 'New %s',               'backdrop-custom-theme' ), 'Theme' ),
			'add_new_item'       => sprintf( esc_html__( 'Add New %s',           'backdrop-custom-theme' ), 'Theme' ),
			'edit_item'          => sprintf( esc_html__( 'Edit %s',              'backdrop-custom-theme' ), 'Theme' ),
			'new_item'           => sprintf( esc_html__( 'New %s',               'backdrop-custom-theme' ), 'Theme' ),
			'view_item'          => sprintf( esc_html__( 'View %s',              'backdrop-custom-theme' ), 'Theme' ),
			'search_items'       => sprintf( esc_html__( 'Search %s',            'backdrop-custom-theme' ), 'Themes' ),
			'not_found'          => sprintf( esc_html__( 'No %s Found',          'backdrop-custom-theme' ), 'Themes' ),
			'not_found_in_trash' => sprintf( esc_html__( 'No %s Found in Trash', 'backdrop-custom-theme' ), 'Themes' ),
		];

		return apply_filters( 'backdrop/custom/theme/labels', $labels );
	}

	/**
	 * Feature Taxonomy
	 */
	public function feature_labels() {
		$feature_labels = [
			'name'                       => __( 'Features',                           'backdrop-custom-theme' ),
			'singular_name'              => __( 'Feature',                            'backdrop-custom-theme' ),
			'menu_name'                  => __( 'Features',                           'backdrop-custom-theme' ),
			'name_admin_bar'             => __( 'Feature',                            'backdrop-custom-theme' ),
			'search_items'               => __( 'Search Features',                    'backdrop-custom-theme' ),
			'popular_items'              => __( 'Popular Features',                   'backdrop-custom-theme' ),
			'all_items'                  => __( 'All Features',                       'backdrop-custom-theme' ),
			'edit_item'                  => __( 'Edit Feature',                       'backdrop-custom-theme' ),
			'view_item'                  => __( 'View Feature',                       'backdrop-custom-theme' ),
			'update_item'                => __( 'Update Feature',                     'backdrop-custom-theme' ),
			'add_new_item'               => __( 'Add New Feature',                    'backdrop-custom-theme' ),
			'new_item_name'              => __( 'New Feature Name',                   'backdrop-custom-theme' ),
			'not_found'                  => __( 'No features found.',                 'backdrop-custom-theme' ),
			'no_terms'                   => __( 'No features',                        'backdrop-custom-theme' ),
			'pagination'                 => __( 'Features list navigation',           'backdrop-custom-theme' ),
			'list'                       => __( 'Features list',                      'backdrop-custom-theme' ),
	
			// Non-hierarchical only.
			'separate_items_with_commas' => __( 'Separate features with commas',      'backdrop-custom-theme' ),
			'add_or_remove_items'        => __( 'Add or remove features',             'backdrop-custom-theme' ),
			'choose_from_most_used'      => __( 'Choose from the most used features', 'backdrop-custom-theme' ),
		];

		return apply_filters( 'backdrop/custom/theme/feature/label', $feature_labels );
	}

	/**
	 * Feature Taxonomy
	 */
	public function layout_labels() {
		$layout_labels = [
			'name'                       => __( 'Layouts',                           'backdrop-custom-theme' ),
			'singular_name'              => __( 'Layout',                            'backdrop-custom-theme' ),
			'menu_name'                  => __( 'Layouts',                           'backdrop-custom-theme' ),
			'name_admin_bar'             => __( 'Layout',                            'backdrop-custom-theme' ),
			'search_items'               => __( 'Search Layouts',                    'backdrop-custom-theme' ),
			'popular_items'              => __( 'Popular Layouts',                   'backdrop-custom-theme' ),
			'all_items'                  => __( 'All Layouts',                       'backdrop-custom-theme' ),
			'edit_item'                  => __( 'Edit Layout',                       'backdrop-custom-theme' ),
			'view_item'                  => __( 'View Layout',                       'backdrop-custom-theme' ),
			'update_item'                => __( 'Update Layout',                     'backdrop-custom-theme' ),
			'add_new_item'               => __( 'Add New Layout',                    'backdrop-custom-theme' ),
			'new_item_name'              => __( 'New Layout Name',                   'backdrop-custom-theme' ),
			'not_found'                  => __( 'No Layouts found.',                 'backdrop-custom-theme' ),
			'no_terms'                   => __( 'No Layouts',                        'backdrop-custom-theme' ),
			'pagination'                 => __( 'Layouts list navigation',           'backdrop-custom-theme' ),
			'list'                       => __( 'Layouts list',                      'backdrop-custom-theme' ),
	
			// Non-hierarchical only.
			'separate_items_with_commas' => __( 'Separate Layouts with commas',      'backdrop-custom-theme' ),
			'add_or_remove_items'        => __( 'Add or remove Layouts',             'backdrop-custom-theme' ),
			'choose_from_most_used'      => __( 'Choose from the most used Layouts', 'backdrop-custom-theme' ),
		];

		return apply_filters( 'backdrop/custom/theme/layout/label', $layout_labels );
	}

	public function subject_labels() {
		$subject_labels = [
			'name'						=> __( 'Subjects',					'backdrop-custom-theme' ),
			'singular_name'				=> __( 'Subject',					'backdrop-custom-theme' ),
			'menu_name'					=> __( 'Subjects',					'backdrop-custom-theme' ),
			'name_admin_bar'			=> __( 'Subject',					'backdrop-custom-theme' ),
			'search_items'				=> __( 'Search Subjects',			'backdrop-custom-theme' ),
			'popular_items'				=> __( 'Popular Subjects',			'backdrop-custom-theme' ),
			'all_items'					=> __( 'All Subjects',				'backdrop-custom-theme' ),
			'edit_item'					=> __( 'Edit Subject',				'backdrop-custom-theme' ),
			'view_item'					=> __( 'View Subject',				'backdrop-custom-theme' ),
			'update_item'				=> __( 'Update Subject',			'backdrop-custom-theme' ),
			'add_new_item'				=> __( 'Add New Subject',			'backdrop-custom-theme' ),
			'new_item_name'				=> __( 'New Subject Name',			'backdrop-custom-theme' ),
			'not_found'					=> __( 'No subjects found.',		'backdrop-custom-theme' ),
			'no_terms'					=> __( 'No subjects',				'backdrop-custom-theme' ),
			'pagination'				=> __( 'Subjects list navigation',	'backdrop-custom-theme' ),
			'list'						=> __( 'Subjects list',				'backdrop-custom-theme' ),
	
			// Hierarchical only.
			'select_name'				=> __( 'Select Subject',			'backdrop-custom-theme' ),
			'parent_item'				=> __( 'Parent Subject',			'backdrop-custom-theme' ),
			'parent_item_colon'			=> __( 'Parent Subject:',			'backdrop-custom-theme' ),
		];

		return apply_filters( 'backdrop/custom/theme/subject/label', $subject_labels );
	}

    public function create_post_type_theme() {

        $args = [
			'labels' => $this->theme_labels(),
			'public' => true,
			'has_archive'  => true,
			'menu_icon'    => 'dashicons-category',
			'show_ui'      => true,
			'show_in_rest' => true,
			'supports'     => [ 'title', 'editor', 'thumbnail' ],
			'taxonomies'   => [ 'theme-subject' ],
			'rewrite'      => [ 'with_front' => false, 'slug' => 'theme' ]
		];

        register_post_type( 'backdrop-theme', $args );
    }

	public function create_post_type_theme_taxonomies() {
		$feature_args = [
			'labels'            => $this->feature_labels(),
			'public'            => true,
			'show_ui'           => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
			'show_admin_column' => true,
			'hierarchical'      => false,
			'show_in_rest'      => true,
		];

		$layout_args = [
			'labels'            => $this->layout_labels(),
			'public'            => true,
			'show_ui'           => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
			'show_admin_column' => true,
			'hierarchical'      => false,
			'show_in_rest'      => true,
		];

		$subject_args = [
			'labels'            => $this->subject_labels(),
			'public'            => true,
			'show_ui'           => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => true,
			'show_admin_column' => true,
			'hierarchical'      => false,
			'show_in_rest'      => true,
		];

		register_taxonomy( 'theme-feature', 'backdrop-theme', $feature_args );
		register_taxonomy( 'theme-layout', 'backdrop-theme', $layout_args );
		register_taxonomy( 'theme-subject', 'backdrop-theme', $subject_args );
	}

	public function posts_columns( $defaults ) {
		unset( $defaults['taxonomy-theme-feature'] );
		unset( $defaults['taxonomy-theme-layout'] );
		unset( $defaults['taxonomy-theme-subject'] );
		unset( $defaults['date'] );

		$defaults['riv_post_thumbs'] = __( 'Thumbnail' );
		$defaults['taxonomy-theme-feature'] = __( 'Features');
		$defaults['taxonomy-theme-layout'] = __( 'Layouts');
		$defaults['taxonomy-theme-subject'] = __( 'Subjects' );
		$defaults['date'] = __( 'Date' );

		return $defaults;
	}

	public function posts_custom_columns( $column_name ) {
		if ( $column_name === 'riv_post_thumbs' ) {
			echo the_post_thumbnail( array( 150, 150 ) );
		}
	}

    public function boot() : void {
        add_action( 'init', [ $this, 'create_post_type_theme' ] );
		add_action( 'init', [ $this, 'create_post_type_theme_taxonomies' ] );
		add_filter( 'manage_backdrop-theme_posts_columns', [ $this, 'posts_columns' ], 5 );
		add_action( 'manage_backdrop-theme_posts_custom_column', [ $this, 'posts_custom_columns'], 5, 2 );		
    }
}
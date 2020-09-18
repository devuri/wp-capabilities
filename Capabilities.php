<?php

namespace WPAdminForm\Admin;

/**
 *
 */
class Capabilities
{

	/**
	 * get the capability or return false if we cant find it.
	 *
	 * @param  string $cap the capability
	 * @return bool|string
	 */
	public static function get_capability( $cap = null ){

		if ( is_null( $cap ) ) {
			return false;
		}

		if ( ! in_array( $cap , self::allowed_capability() ) ) {
			return false;
		}
		return $cap;
	}

	/**
	 * A list of allowed Capabilities.
	 *
	 * @link https://wordpress.org/support/article/roles-and-capabilities/
	 * @return array
	 */
	public static function allowed_capability() {
		return array(

		// Super Admin
			'create_sites',
			'delete_sites',
			'manage_network',
			'manage_sites',
			'manage_network_users',
			'manage_network_plugins',
			'manage_network_themes',
			'manage_network_options',
			'upgrade_network',
			'setup_network',

		// Administrator
			'activate_plugins',
			'delete_others_pages',
			'delete_others_posts',
			'delete_pages',
			'delete_posts',
			'delete_private_pages',
			'delete_private_posts',
			'delete_published_pages',
			'delete_published_posts',
			'edit_dashboard',
			'edit_others_pages',
			'edit_others_posts',
			'edit_pages',
			'edit_posts',
			'edit_private_pages',
			'edit_private_posts',
			'edit_published_pages',
			'edit_published_posts',
			'edit_theme_options',
			'export',
			'import',
			'list_users',
			'manage_categories',
			'manage_links',
			'manage_options',
			'moderate_comments',
			'promote_users',
			'publish_pages',
			'publish_posts',
			'read_private_pages',
			'read_private_posts',
			'remove_users',
			'switch_themes',
			'upload_files',
			'customize',
			'delete_site',

		// Multisite  Admin
			'update_core',
			'update_plugins',
			'update_themes',
			'install_plugins',
			'install_themes',
			'delete_themes',
			'delete_plugins',
			'edit_plugins',
			'edit_themes',
			'edit_files',
			'edit_users',
			'add_users',
			'create_users',
			'delete_users',
			'unfiltered_html',

		// Editor
			'delete_others_pages',
			'delete_others_posts',
			'delete_pages',
			'delete_posts',
			'delete_private_pages',
			'delete_private_posts',
			'delete_published_pages',
			'delete_published_posts',
			'delete Reusable Blocks',
			'edit_others_pages',
			'edit_others_posts',
			'edit_pages',
			'edit_posts',
			'edit_private_pages',
			'edit_private_posts',
			'edit_published_pages',
			'edit_published_posts',
			'create Reusable Blocks',
			'edit Reusable Blocks',
			'manage_categories',
			'manage_links',
			'moderate_comments',
			'publish_pages',
			'publish_posts',
			'read_private_pages',
			'read_private_posts',
			'upload_files',

		// Author
			'delete_posts',
			'delete_published_posts',
			'edit_posts',
			'edit_published_posts',
			'publish_posts',
			'upload_files',

		// Contributor
			'delete_posts',
			'edit_posts',
			'read',
		);
	}
}

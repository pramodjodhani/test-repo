<?php
/**
 * Plugin name: Test plugin
 */

class TestPlugin {

	/**
	 * Run.
	 *
	 * @return void
	 */
	public static function run() {
		add_action( 'admin_bar_menu',
			function( $admin_bar ) {
				$admin_bar->add_menu(
					array(
						'id'     => 'menu-id',
						'parent' => null,
						'group'  => null,
						'title'  => 'Test plugin',
						'href'   => admin_url( 'admin.php?page=custom-page' ),
						'meta'   => array(
							'title' => __( 'Menu Title', 'textdomain' ), // This title will show on hover
						),
					)
				);
			},
			4000
		);
	}
}

TestPlugin::run();

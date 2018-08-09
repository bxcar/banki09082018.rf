<?php
/**
 * Responsible for promoting the giveaway.
 *
 * @link       http://bootstrapped.ventures
 * @since      2.1.0
 *
 * @package    Easy_Affiliate_Links
 * @subpackage Easy_Affiliate_Links/includes/admin
 */

/**
 * Responsible for promoting the giveaway.
 *
 * @since      2.1.0
 * @package    Easy_Affiliate_Links
 * @subpackage Easy_Affiliate_Links/includes/admin
 * @author     Brecht Vandersmissen <brecht@bootstrapped.ventures>
 */
class EAFL_Giveaway {

	/**
	 * Register actions and filters.
	 *
	 * @since    2.1.0
	 */
	public static function init() {
		$now = new DateTime();
		$giveaway_start = new DateTime( '2017-11-16 10:00:00', new DateTimeZone( 'Europe/Brussels' ) );
		$giveaway_end = new DateTime( '2017-11-24 10:00:00', new DateTimeZone( 'Europe/Brussels' ) );

		if ( $giveaway_start < $now && $now < $giveaway_end ) {
			add_action( 'admin_menu', array( __CLASS__, 'add_submenu_page' ), 99 );
			add_action( 'eafl_modal_notice', array( __CLASS__, 'modal_notice' ) );
		}
	}

	/**
	 * Add the Giveaway menu page.
	 *
	 * @since    2.1.0
	 */
	public static function add_submenu_page() {
		add_submenu_page( 'easyaffiliatelinks', 'Giveaway', '~ Plugin Giveaway! ~', 'manage_options', 'eafl_giveaway', array( __CLASS__, 'page_template' ) );
	}

	/**
	 * Template for the giveaway page.
	 *
	 * @since    2.1.0
	 */
	public static function page_template() {
		echo '<div class="wrap">';
		echo '<h1>Plugin Giveaway</h1>';
		echo '<a class="e-widget no-button" href="https://gleam.io/dY9yY/black-friday-2017" rel="nofollow">Black Friday Giveaway 2017</a>';
		echo '<script type="text/javascript" src="https://js.gleam.io/e.js" async="true"></script>';
		echo '</div>';
	}

	/**
	 * Show a notice in the modal.
	 *
	 * @since    2.1.0
	 */
	public static function modal_notice() {
		if ( ! EAFL_Addons::is_active( 'premium' ) ) {
			echo '<div class="eafl-giveaway-notice">';
			echo '<strong>Feeling lucky?</strong> Win plugins in our <a href="' . esc_url( admin_url( 'admin.php?page=eafl_giveaway' ) ) . '" target="_blank">Black Friday Giveaway</a>!';
			echo '</div>';
		}
	}
}

EAFL_Giveaway::init();

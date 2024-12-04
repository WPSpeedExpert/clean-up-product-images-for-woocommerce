<?php
/*
Plugin Name:          Clean Up Product Images for WooCommerce
Description:          Automatically delete a product's attached images when the product is deleted in WooCommerce.
Version:              1.0.1
WC requires at least: 4.0.0
WC tested up to:      9.4.2
Requires at least:    5.2
Requires PHP:         7.2
Author:               OctaHexa Media LLC
Author URI:           https://octahexa.com
Text Domain:          clean-up-product-images-for-woocommerce
Domain Path:          /languages
License:              GPLv2 or later
GitHub Plugin URI:    https://github.com/WPSpeedExpert/clean-up-product-images-for-woocommerce
GitHub Branch:        main
Primary Branch:       main
*/

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Load Plugin Text Domain
 */
function cupiwc_load_textdomain() {
    load_plugin_textdomain('clean-up-product-images-for-woocommerce', false, dirname(plugin_basename(__FILE__)) . '/languages');
}
add_action('plugins_loaded', 'cupiwc_load_textdomain');

/**
 * Check if WooCommerce is active
 */
if (in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {
    add_action('before_delete_post', 'clean_up_product_images_for_woocommerce', 10, 1);

    /**
     * Delete attached images when a WooCommerce product is deleted
     *
     * @param int $post_id The ID of the post being deleted.
     */
    function clean_up_product_images_for_woocommerce($post_id)
    {
        // Ensure this is a WooCommerce product
        if (get_post_type($post_id) !== 'product') {
            return;
        }

        // Get all attachments for the product
        $args = [
            'post_parent' => $post_id,
            'post_type'   => 'attachment',
            'numberposts' => -1,
            'post_status' => 'any',
        ];

        $attachments = get_children($args);

        // Delete attachments securely
        if (!empty($attachments)) {
            foreach ($attachments as $attachment) {
                wp_delete_attachment($attachment->ID, true); // Delete attachment file
                delete_post_meta($attachment->ID, ''); // Clean up metadata
                wp_delete_post($attachment->ID, true); // Remove post record
            }
        }
    }

} else {
    /**
     * Admin notice for missing WooCommerce dependency
     */
    add_action('admin_notices', function () {
        echo '<div class="notice notice-error is-dismissible"><p>';
        esc_html_e(
            'WooCommerce plugin is not activated. Please install and activate WooCommerce to use the Clean Up Product Images for WooCommerce plugin.',
            'clean-up-product-images-for-woocommerce'
        );
        echo '</p></div>';
    });
}

# Clean Up Product Images for WooCommerce

**Contributors:** octahexa, wp-speed-expert  
**Tags:** woocommerce, product images, delete images, cleanup, images  
**Requires at least:** 5.2  
**Tested up to:** 6.7  
**Requires PHP:** 7.2  
**Stable tag:** 1.0.1  
**License:** GPLv2 or later  
**License URI:** [https://www.gnu.org/licenses/gpl-2.0.html](https://www.gnu.org/licenses/gpl-2.0.html)  

Automatically delete a product's attached images when the product is deleted in WooCommerce.

---

## Description

**Clean Up Product Images for WooCommerce** helps you keep your WooCommerce store organized by automatically removing all images attached to a product when the product is deleted. This plugin is lightweight, efficient, and ensures that no orphaned images remain in your WordPress media library.

### Features
- Deletes all images attached to a WooCommerce product upon deletion.
- Lightweight and efficient—uses native WordPress and WooCommerce functions.
- Requires no configuration—just activate and use!
- Compatible with WooCommerce 4.0 and above.

### Why Use This Plugin?
Manually cleaning up product images after deleting a product can be tedious. This plugin automates the process, saving time and ensuring your site stays organized.

---

## Installation

1. Upload the plugin folder to the `/wp-content/plugins/` directory or install it via the WordPress Plugin Directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Ensure WooCommerce is active.
4. That's it! The plugin works automatically in the background.

---

## Frequently Asked Questions

### Does this plugin delete images for custom post types?
No, this plugin only works for WooCommerce products (`product` post type).

### What happens if WooCommerce is not active?
The plugin will not run and will display a notice in the WordPress admin area indicating that WooCommerce needs to be activated.

### Does this plugin remove other media files?
No, it only deletes images attached to WooCommerce products.

### Can I recover deleted images?
No, once images are deleted, they are permanently removed. Make sure to back up your site if you want to keep the images.

---

## Changelog

### 1.0.0
- Initial release.
- Automatically deletes all attached images when a WooCommerce product is deleted.

---

## Upgrade Notice

### 1.0.0
First release of the plugin. Install to automate the cleanup of product images in WooCommerce.

---

## Screenshots

1. Deleting a product in WooCommerce triggers the cleanup of attached images.
2. Notice in the admin area if WooCommerce is not active.

---

## License

This plugin is licensed under the GPLv2 or later. For more information, see [GNU GPLv2 License](https://www.gnu.org/licenses/gpl-2.0.html).

=== Hide Scrollbar Force ===
Contributors: saeedtx
Tags: scrollbar, hide, css, customization
Requires at least: 5.0
Tested up to: 7.1.2
Stable tag: 1.4
Requires PHP: 7.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Hides the scrollbar on your WordPress site while keeping the scroll functionality intact.

== Description ==
This plugin removes the visible scrollbar from your website across all major browsers (Chrome, Firefox, Safari, Edge) using clean CSS techniques. It ensures that users can still scroll through the content without seeing the scrollbar, providing a modern and seamless browsing experience.

Features:
* Visually hides the vertical and horizontal scrollbars.
* Keeps smooth scrolling via mouse wheel, keyboard, and touch fully functional.
* Lightweight with zero performance overhead (pure inline CSS injection).
* Compatible with modern page builders and responsive modal popups.

== Installation ==
1. Upload the `hide-scrollbar-force` folder to the `/wp-content/plugins/` directory, or install it directly via the WordPress Plugin Directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. The scrollbar is now hidden automatically with no configuration needed.

== Frequently Asked Questions ==
= Does this plugin affect scrolling functionality? =
No, it only hides the scrollbar visually. Users can still scroll smoothly using mouse wheels, trackpads, touch gestures, or keyboard arrow keys.

= Will it break modal windows or internal scrollable boxes? =
No, version 1.4 scopes rules strictly to the page viewport (`html, body`) and avoids breaking internal scrollable containers (like code blocks, tables, or modals).

== Changelog ==
= 1.4 =
* Tested and confirmed compatibility with WordPress 7.1.2.
* Added direct access security check (`ABSPATH`).
* Removed universal selector conflicts to preserve modal and internal container scrolling.
* Removed redundant closing PHP tag according to WordPress coding standards.

= 1.3 =
* Switched to wp_enqueue_style and wp_add_inline_style for WordPress standards compliance.
* Updated license to GPLv2 or later.

= 1.2 =
* Improved browser compatibility with forced CSS rules.
* Added higher priority to styles to prevent theme conflicts.

= 1.1 =
* Added wrapper technique for better content handling.

= 1.0 =
* Initial release.

== Upgrade Notice ==
= 1.4 =
Recommended update: Improved compatibility with popups/modals, enhanced security, and full compatibility with WordPress 7.1.2.
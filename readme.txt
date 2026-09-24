=== PLUGIN_TITLE ===
Contributors: iworks
Donate link: https://ko-fi.com/iworks?utm_source=upprev&utm_medium=readme-donate
Tags: box, notification, related, SEO, thumbnail
Requires at least: PLUGIN_REQUIRES_WORDPRESS
Tested up to: PLUGIN_TESTED_WORDPRESS
Stable tag: PLUGIN_VERSION
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

PLUGIN_DESCRIPTION

== Description ==

**Boost your content engagement with upPrev!**

upPrev displays an eye-catching, animated flyout or fade-in box with related or previous content when a reader nears the bottom of a post, page, or custom post type. Keep your visitors exploring your site by suggesting additional content right when their attention is highest.

**Features:**

- Animated flyout or fade-in box for previous, random, or related posts
- Multiple selection modes:
    - Previous post
    - Previous post in the same category
    - Previous post with the same tag
    - Random post
    - Related posts using YARPP (Yet Another Related Posts Plugin)
- Works with posts, pages, and custom post types
- Easy customization of appearance and content
- Mobile and tablet detection for optimal display
- Integration with YARPP for advanced related post suggestions
- Translation-ready with 14+ languages supported

== Installation ==

There are 3 ways to install this plugin:

= 1. The super-easy way =
1. In your Admin, go to menu Plugins > Add
1. Search for `upPrev`
1. Click to install
1. Activate the plugin
1. A new menu `upPrev` in `Appearance` will appear in your Admin

= 2. The easy way =
1. Download the plugin (.zip file) on the right column of this page
1. In your Admin, go to menu Plugins > Add
1. Select the button `Upload Plugin`
1. Upload the .zip file you just downloaded
1. Activate the plugin
1. A new menu `upPrev` in `Appearance` will appear in your Admin

= 3. The old and reliable way (FTP) =
1. Upload `upPrev` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. A new menu `upPrev` in `Appearance` will appear in your Admin

== Frequently Asked Questions ==

= upPrev is turned on, but there is no box, what now? =

First of all, check your template. To proper work plugin requires function `wp_head` and `wp_footer`. If your template doesn't use one of the themes, upPrev will not work. If you cant check this action in your templates manually use this code to check it: https://gist.github.com/378450

= How to add a default image to a post without a thumbnail? =

Use the `iworks_upprev_image` action, read more:

[How to add a default image to a post without a thumbnail?](http://upprev.iworks.pl/faq/how-to-add-default-image-to-post-without-thumbnail.html)

= How to change the post thumbnail to another image? =

Use the `iworks_upprev_get_the_post_thumbnail` filter, read more:

[How to change post thumbnail to another image?](http://upprev.iworks.pl/faq/how-to-change-post-thubnail-to-other-image.html)

= How to add upPrev for pages or custom post types? =

Yes. Just select post types on `Appearance -> upPrev -> Content` page in `Select post types` section.

= How I can customize it with my styles? =

See here: [How I can customize my styles?](http://upprev.iworks.pl/faq/how-i-can-customize-with-my-own-styles.html)

= Need more snippets? =

Visit: [upPrev: snippet archive](http://upprev.iworks.pl/tag/snippet)

== Screenshots ==

1. upPrev on post
2. upPrev options: appearance
3. upPrev options: content
4. upPrev options: links
5. upPrev options: cache

== Changelog ==

Project maintained on GitHub at [iworks/upprev](https://github.com/iworks/upprev).

= 4.2.0 - 2026-08-28 =
* **Dependencies**: Removed [Mobile Detect](http://mobiledetect.net/) dependency.
* **Improvement**: Added check to custom CSS value to avoid parsing non-string values. Props for [Der-Bank-Blog](https://wordpress.org/support/users/der-bank-blog/).
* **Improvement**: Added filter to custom CSS value. (`iworks/upprev/css`)
* **Refactoring**: Refactored custom CSS loading. Use `wp_add_inline_style()` function instead of direct echo.

= 4.1.3 - 2026-07-23 =
* **Dependencies**: Updated the [iWorks Options](https://github.com/iworks/wordpress-options-class) module to version 3.1.1 and the [iWorks Rate](https://github.com/iworks/iworks-rate) module to version 2.3.2.
* **Improvement**: Updated the build process.
* **Improvement**: Renamed `CSS` files for better recognition.

= 4.1.2 - 2025-06-16 =
* **Dependencies**: Updated the integrated [iWorks Options](https://github.com/iworks/wordpress-options-class) module to the latest version 3.0.7.
* **Dependencies**: Updated the integrated [iWorks Rate](https://github.com/iworks/iworks-rate) module to the latest version 3.0.1.

= 4.1.1 - 2025-03-24 =
* **Improvement**: Implemented translation support for GitHub releases, making the plugin more accessible to a global audience.
* **Improvement**: Improved the plugin update process for smoother and more reliable updates directly from GitHub releases.
* **Improvement**: Refactored the build process to deliver enhanced performance and improved efficiency.
* **Improvement**: The plugin repository has been successfully migrated to a new home on GitHub. This move will ensure continued maintenance and streamlined updates going forward.
* **Dependencies**: Updated the integrated [iWorks Options](https://github.com/iworks/wordpress-options-class) module to the latest version 2.9.9.
* **Fix**: Fixed a bug that could cause issues with null version values, improving overall stability.

= 4.1.0 - 2025-02-23 =
* **Dependencies**: Updated the [iWorks Options](https://github.com/iworks/wordpress-options-class) module to version 2.9.6.
* **Dependencies**: Updated the [iWorks Rate](https://github.com/iworks/iworks-rate) module to version 2.2.3.
* **Improvement**: The `iworks/upprev/wp_query/args` filter has been added.
* **Fix**: The `_load_textdomain_just_in_time()` notice has been fixed.

= 4.0.7 - 2022-06-02 =
* **Fix**: Fixed fade effect. Props for [George](https://wordpress.org/support/users/giorgos93/).
* **Fix**: Fixed wrong admin area JavaScript name. Props for [George](https://wordpress.org/support/users/giorgos93/).

= 4.0.6 - 2022-05-26 =
* **Fix**: Fixed undefined `$value`. Props for [Robert](https://wordpress.org/support/users/robertmindroi/).
* **Improvement**: Replaced `FILTER_SANITIZE_STRING` by `FILTER_DEFAULT` to avoid warning in PHP 8.1.
* **Dependencies**: Updated the [iWorks Options](https://github.com/iworks/wordpress-options-class) module to version 2.9.4.
* **Dependencies**: Updated the [iWorks Rate](https://github.com/iworks/iworks-rate) module to version 2.1.0.
* **Dependencies**: Updated [Mobile Detect](http://mobiledetect.net/) to 2.8.39.

= 4.0.5 - 2022-01-21 =
* **Fix**: Fixed "Settings" link on Plugins page.
* **Dependencies**: Updated the [iWorks Options](https://github.com/iworks/wordpress-options-class) module to version 2.8.0.
* **Dependencies**: Updated the [iWorks Rate](https://github.com/iworks/iworks-rate) module to version 2.0.6.

= 4.0.4 - 2021-08-31 =
* **Improvement**: Restored option "Hide on tablets".
* **Dependencies**: Back to [Mobile Detect](http://mobiledetect.net/) class for mobile/tablet detection, version 2.8.37.

= 4.0.3 - 2021-08-18 =
* **Fix**: Fixed categories limit to display.
* **Fix**: Fixed opacity issue when we click "close" button and scroll. Props for [George](https://wordpress.org/support/users/giorgos93/).
* **Fix**: Fixed `post_type` mismatch. Props for [George](https://wordpress.org/support/users/giorgos93/).
* **Improvement**: Improved category/tag select, first to try get entries from all, then, from any category/tag.

= 4.0.2 - 2021-08-16 =
* **Improvement**: Added option to hide re-open badge.
* **Fix**: Fixed double headers on configuration screen. Props for [George](https://wordpress.org/support/users/giorgos93/).
* **Fix**: Fixed missing custom element to open box. Props for [George](https://wordpress.org/support/users/giorgos93/).
* **Fix**: Fixed to greedy defaults.
* **Improvement**: Minor configuration screen tweaking.
* **Dependencies**: Updated the [iWorks Options](https://github.com/iworks/wordpress-options-class) module to version 2.7.0.

= 4.0.1 - 2021-08-12 =
* **Fix**: Fixed wrong plugin description. Props for [Patrick_D1985](https://wordpress.org/support/users/patrick_d1985/).
* **Fix**: Fixed WP CLI error. Props for [Patrick_D1985](https://wordpress.org/support/users/patrick_d1985/).
* **Improvement**: Removed post thumbnail on posts list.

= 4.0.0 - 2021-08-11 =
* **Improvement**: Added version number to upprev.css.
* **Fix**: Fixed bug with removing filter name.
* **Fix**: Fixed problem with $('body').offset() by changed it to scrollTop() function.
* **Improvement**: Added ajax request to load upPrevBox content.
* **Improvement**: Added capability filter *iworks_upprev_capability* - now you can easy change capability (default is manage_options).
* **Improvement**: Added categories exclude (only PRO version).
* **Improvement**: Added color chooser (only PRO version).
* **Improvement**: Added filter 'iworks_upprev_thumbnail_size' for thumbnail size.
* **Improvement**: Added free layouts: "Vertical Three".
* **Improvement**: Added pro layouts: "Bloginity style".
* **Improvement**: Added remebering usage "close" button.
* **Improvement**: Added settable header text thx to [pmfox](http://wordpress.org/support/profile/pmfox) [Can we change header text?](http://wordpress.org/support/topic/plugin-upprev-can-we-change-header-text).
* **Improvement**: Added tags exclude (only PRO version).
* **Improvement**: Check variable iworks_upprev in javascript before use it.
* **Improvement**: JavaScript & CSS files are minifized.
* **Improvement**: Replace moble detection function to [Mobile_Detect](http://mobiledetect.net).
* **Improvement**: Rework option page to easier configuration.
* **Dependencies**: Updated the [iWorks Options](https://github.com/iworks/wordpress-options-class) module to version 2.6.0.
* **Improvement**: Upgrade YARPP integration, minimum YARPP version: 3.5.x.
* **Translation**: Updated Hebrew translation by [של אודי בורג](http://blog.udiburg.com).
* **Refactoring**: Rebuild options screen, sidebar boxes are now manageable.
* **Refactoring**: Moved code to class.
* **Refactoring**: Rewrite on page options to use wp_localize_script.
* **Refactoring**: Used a proper way to ajax call.
* **Fix**: "Anlalitics" should be "Analytics" thx to Knut Sparhell.

For changelog entries older than 4.0.0, please see [CHANGELOG.md](CHANGELOG.md).

== Upgrade Notice ==

= 4.2.0 =

* Removed Mobile Detect dependency and added custom mobile/tablet size options.

= 4.0 =

* Added a simple configuration screen. Rebuild the options page for easier configuration.

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

= 3.3.30 - 2015-10-06 =
* **Fix**: Fixed a problem with showing the title if contains tags with attributes. Props for [Ovidiu](http://pacura.ru/).

= 3.3.29 - 2015-09-01 =
* **Translation**: Added Tagalog translation by [Kel DC](https://profiles.wordpress.org/kel-dc).

= 3.3.28 - 2015-08-25 =
* **Translation**: Added Slovak translation by Daniel Schmidt.

= 3.3.27 - 2015-08-18 =
* **Translation**: Added Dutch translation by [Ruud Kok](http://www.ruudkok.nl/).

= 3.3.26 - 2015-08-11 =
* **Fix**: Fixed empty post_type value thx to [Zeus](http://wordpress.org/support/profile/prabhakaraan) [UpPrev error - array_key_exists()!](http://wordpress.org/support/topic/upprev-error-array_key_exists).
* **Translation**: Added Italian translation by [Francesco Giossi](http://www.giossi.com/).

= 3.3.25 - 2015-08-04 =
* **Translation**: Updated Simplified Chinese translation by [Leo](http://smallseotips.com/).
* **Improvement**: Added filter '[iworks_upprev_box_title](http://upprev.iworks.pl/documentation/filter-reference/iworks_upprev_box_title)' for box title, return false to remove title.

= 3.3.24 - 2015-07-28 =
* **Fix**: Prevent to display upPrev box on attachment page thx to [Swaps4](http://wordpress.org/support/profile/swaps4) [upPrev displaying on attachment pages with no styling](http://wordpress.org/support/topic/upprev-displaying-on-attachment-pages-with-no-styling).
* **Improvement**: Remove add_contextual_help function (deprecated from 3.3).
* **Dependencies**: Updated IworksOptionClass to 2.0.0.

= 3.3.23 - 2015-07-21 =
* **Fix**: Default value only when is need thx to [Jeff](http://wordpress.org/support/profile/lambje) [Offset Not Working](http://wordpress.org/support/topic/offset-not-working).
* **Dependencies**: Updated IworksOptionClass to 1.7.7.

= 3.3.22 - 2015-07-14 =
* **Improvement**: Add [iworks_upprev_check filter](http://upprev.iworks.pl/documentation/filter-reference/iworks_upprev_check), see documentation: [Filter Reference – iworks_upprev_check](http://upprev.iworks.pl/fiter_reference_iworks_upprev_check.html).

= 3.3.21 - 2015-07-07 =
* **Improvement**: Replaced WP_PLUGIN_URL with plugins_url() thx to [tigr](http://wordpress.org/support/profile/tigr) [SSL compatibility](http://wordpress.org/support/topic/ssl-compatibility).

= 3.3.20 - 2015-06-30 =
* **Dependencies**: Updated IworksOptionClass to 1.7.4.
* **Improvement**: Check upPrev compatibility with WordPress 3.7.
* **Fix**: Fixed "last selected tab".

= 3.3.19 - 2015-06-23 =
* **Translation**: Updated Hebrew translation by [של אודי בורג](http://blog.udiburg.com).

= 3.3.18 - 2015-06-16 =
* **Translation**: Updated Bulgarian translation by [Martin Halachev](http://wordpress.org/support/profile/mhalachev).

= 3.3.17 - 2015-06-09 =
* **Fix**: Move custom CSS after wp_enqueue_style. thx to [007me].(http://wordpress.org/support/profile/007me) [Can't change font size and style and costumize close button].(http://wordpress.org/support/topic/cant-change-font-size-and-style-and-costumize-close-button).

= 3.3.16 - 2015-06-02 =
* **Fix**: Excerpt number of words to show option not working for a concrete excerpt. thx to [gyalokai].(http://wordpress.org/support/profile/gyalokai) [Excerpt number of words to show option not working](http://wordpress.org/support/topic/excerpt-number-of-words-to-show-option-not-working).
* **Dependencies**: Updated IworksOptionClass to 1.7.2.
* **Improvement**: Added box to front page thx to [SARed].(http://wordpress.org/support/profile/sared) [Using Upprev on a front page with latest posts?](http://wordpress.org/support/topic/using-upprev-on-a-front-page-with-latest-posts).

= 3.3.15 - 2015-05-26 =
* **Translation**: Added Hebrew translation by [עמיעד](http://hatul.info).

= 3.3.14 - 2015-05-19 =
* **Fix**: Fixed limit for taxonomies. Props for [darkjedipete](http://wordpress.org/support/profile/darkjedipete).

= 3.3.13 - 2015-05-12 =
* **Translation**: Added Czech translation by [Michal Bláha](http://michalblaha.cz/).

= 3.3.12 - 2015-05-05 =
* **Fix**: Fixed compatibility errors with YARPP 4.x version thx to [adamdport](http://wordpress.org/support/profile/adamdport).
* **Improvement**: Added CSS to changed tabs class in WordPress 3.5.
* **Improvement**: Check upPrev compatibility with WordPress 3.5.

= 3.3.11 - 2015-04-28 =
* **Translation**: Added Bulgarian translation by [Martin Halachev](http://wordpress.org/support/profile/mhalachev).

= 3.3.10 - 2015-04-21 =
* **Translation**: Added Spanish translation by [Ramón Rautenstrauch](http://www.apasionadosdelmarketing.es/about/).

= 3.3.9 - 2015-04-14 =
* **Translation**: Added Romanian translation by [Florin Arjocu](http://drumliber.ro/).

= 3.3.8 - 2015-04-07 =
* **Fix**: Critical update, plugin crash site if choosing no post types.

= 3.3.7 - 2015-03-31 =
* **Translation**: Added Russian translation by [Вадим Сохин](http://webbizreshenie.ru/).

= 3.3.6 - 2015-03-24 =
* **Translation**: Added German translation by [Mario Wolf](http://wolfmedien.de/).

= 3.3.5 - 2015-03-17 =
* **Fix**: Fixed double output when using YARPP thx to [gyutae](http://wordpress.org/support/profile/gyutae).
* **Fix**: Fixed visibility of developer admin options.

= 3.3.4 - 2015-03-10 =
* **Translation**: Added Brazilian Portuguese translation by [Leonardo Antonioli](http://www.tobeguarany.com/).
* **Fix**: Fixed minor description bug (thx Eva).

= 3.3.3 - 2015-03-03 =
* **Translation**: Added Vietnamese translation by [Xman](http://thegioimanguon.com/).
* **Fix**: Fixed usage of crc32 to build ids for tabbed config, which collapsed in other than utf8 charset.

= 3.3.2 - 2015-02-24 =
* **Improvement**: Added GA option: non-interaction to prevent events in bounce-rate calculation.

= 3.3.1 - 2015-02-17 =
* **Translation**: Added French translation by [Eva](http://myclientisrich-leblog.com/).

= 3.3 - 2015-02-10 =
* **Improvement**: Added option to hide upPrevBox on mobile devices, matching implemented from [WP Mobile Detector](http://wordpress.org/extend/plugins/wp-mobile-detector/) ticket from [forum](http://wordpress.org/support/topic/plugin-upprev-mobile-themes).

= 3.2 - 2015-02-03 =
* **Improvement**: Added action *[iworks_upprev_image](http://upprev.iworks.pl/documentation/action-reference/iworks_upprev_image)* - you can add own code to produce icon, when them don't support post-thumbnails.
* **Improvement**: Added thumbnail filter *iworks_upprev_get_the_post_thumbnail* - now you can easy change thumbnail.
* **Improvement**: Added purging transient cache entries from $wpdb->options table when turn off this cache [forum](http://wordpress.org/support/topic/plugin-upprev-crazy-number-of-wp-options-database-entries).
* **Improvement**: Add check _gaq object exist.
* **Improvement**: Checked compatibility to WordPress 3.3.
* **Dependencies**: Updated IworksOptionClass to version 1.0.1.

= 3.1.1 - 2015-01-27 =
* **Improvement**: Added ability to turn off "remove_all_filters" function.

= 3.1 - 2015-01-20 =
* **Improvement**: Changed GA trackEvent syntax.
* **Translation**: Added Turkish translation by [wpdestek](http://wordpress.org/support/profile/wpdestek).

= 3.0.1 - 2015-01-13 =
* **Fix**: Fixed printing GA code when "I don't have GA tracking on site." is unticked. [forum](http://wordpress.org/support/topic/plugin-upprev-google-analytics-tracking-code-error-ga-tracking-installed) thx [win101](http://wordpress.org/support/profile/win101d).

= 3.0 =
* **Fix**: Fixed end date filter for imported posts.
* **Fix**: Fixed javascript conflict on edit post screen.
* **Fix**: Fixed problem with unchecking 'Excerpts'. [forum](http://wordpress.org/support/topic/plugin-upprev-bugs-no-box-in-firefox-6-offset-doesnt-work-disable-excerpts-doesnt-work) thx [benjamin](http://wordpress.org/support/profile/kbenjamin).
* **Fix**: Fixed sticky posts display loop.
* **Fix**: Fixed thumbnail display problem.
* **Improvement**: Added filter '[iworks_upprev_box_item](http://upprev.iworks.pl/documentation/filter-reference/iworks-upprev-box-item)' for any item excerpt YARPPs.
* **Improvement**: Added GA track: view box and click link.
* **Improvement**: Added option *ignore sticky posts*.
* **Improvement**: Added sanitize function for offset.
* **Improvement**: Added thumbnail preview on posts/pages list.
* **Improvement**: Cleaning empty styles from custom CSS field.
* **Refactoring**: Option management.

= 2.3.7 - 2014-12-30 =
* **Fix**: Fixed problem for defaults post_type if no one choosed [forum](http://wordpress.org/support/topic/plugin-upprev-error).

= 2.3.6 - 2014-12-23 =
* **Fix**: Fixed problem with using thumbnails in themes with thumbnail support [forum](http://wordpress.org/support/topic/plugin-upprev-version-235-update-breaks-thumbnail-support).
* **Improvement**: Added custom CSS rules (forum](http://wordpress.org/support/topic/plugin-upprev-version-235-update-breaks-thumbnail-support).

= 2.3.5 - 2014-12-16 =
* **Fix**: Fixed problem with using thumbnails in themes without thumbnail support.

= 2.3.4 - 2014-12-09 =
* **Fix**: Fixed problem with default values and values saving (again).
* **Improvement**: Added correct way to enqueue style and JavaScript files.

= 2.3.3 - 2014-12-02 =
* **Improvement**: Removed configuration link on plugins list page for WordPress multisite.
* **Fix**: Fixed problem with post excerpt.
* **Fix**: Fixed problem with default values and values saving.

= 2.3.2 - 2014-11-25 =
* **Fix**: Fixed translation bug.
* **Improvement**: Removed date limit for random posts.
* **Fix**: Fixed open in new window bug.
* **Improvement**: Added limit to display only on selected post types [forum](http://wordpress.org/support/topic/plugin-upprev-previous-post-animated-notification-custom-post-types).

= 2.3.1 - 2014-11-18 =
* **Fix**: Fixed a small bug with the display option.

= 2.3 =
* **Improvement**: Added filter **iworks_upprev_box**.
* **Improvement**: Added tabbed options (based on [Breadcrumb NavXT](http://wordpress.org/extend/plugins/breadcrumb-navxt/) plugin.
* **Improvement**: Added prefix and suffix to urls.
* **Improvement**: Added option to allow open links in new window.
* **Improvement**: Added integration with [YARPP](http://wordpress.org/extend/plugins/yet-another-related-posts-plugin/).
* **Fix**: Fixed [Transients Cache Lifetime is set to wrong seconds](http://wordpress.org/support/topic/plugin-upprev-transients-cache-lifetime-is-set-to-wrong-seconds).
* **Fix**: Fixed deactivation hook option names.

= 2.2.1 - 2014-11-04 =
* **Fix**: Fixed display problem with document shorter than browser.
* **Improvement**: Added document post type as a checkbox list.

= 2.2 - 2014-10-28 =
* **Improvement**: Added upPrev configuration link to the admin bar.
* **Improvement**: Added registered custom posts.
* **Fix**: Fixed error if the behaviour of boxing display for HTML element.
* **Fix**: Fixed wrong method post_type selection.

= 2.1.2 - 2014-10-21 =
* **Improvement**: Remove margin-top for title element.
* **Improvement**: Added display taxonomies limit.

= 2.1.1 - 2014-10-14 =
* **Fix**: Fixed scroll down again, the box flies out, which -- on a small screen -- can obscure a big chunk of the content. [forum](http://wordpress.org/support/topic/plugin-upprev-return-to-top-of-post-after-clicking-x).

= 2.1 =
* **Improvement**: Added box width option.
* **Improvement**: Added box bottom and side margin option.
* **Improvement**: Added transient cache for scripts and styles.
* **Improvement**: Added actions: **iworks_upprev_box_before** and **iworks_upprev_box_after**, called inside the upPrevBox, before and after post. Now you can add some elements to upPrevBox without plugin modification.
* **Improvement**: Added option to display (or not) close button.
* **Improvement**: Added post type choose to post, page or any.
* **Improvement**: Added random order for displayed posts.

= 2.0.1 =
* **Fix**: Fixed translation load.
* **Improvement**: Added show box header option.
* **Improvement**: Added stamp for cache key.
* **Translation**: Added Polish translation by [Marcin Pietrzak](http://iworks.pl/).

= 2.0 =
* **Fix**: Fixed display upPrev box in case of an equal height of the window and the document.
* **Improvement**: Added to use transient cache.
* **Improvement**: Added thumbnail width (height depends on theme thumbnail).
* **Improvement**: Added prevent some options if the active theme does not support it.
* **Improvement**: Added activation & deactivation hooks (to setup defaults and remove config).
* **Improvement**: Removed all filters the_content for a post in the upPrev box.

= 1.0.1 - 2014-09-16 =
* **Improvement**: Added post_date as a parameter, to get real previous post.
* **Fix**: Fixed JavaScript error.
* **Improvement**: Added header for a simple method.

= 1.0 - 2014-09-09 =
* **Initial**: Copy and massive refactoring of plugin [upPrev Previous Post Animated Notification](http://wordpress.org/extend/plugins/upprev-nytimes-style-next-post-jquery-animated-fly-in-button/).

== Upgrade Notice ==

= 4.0 =

* Added a simple configuration screen. Rebuild the options page for easier configuration.

= 3.3.13 =

* Added Czech translation.

= 3.3.12 =

* Fixed using YARPP 4.x. Check upPrev compatibility with WordPress 3.5.

= 3.3.11 =

* Added Bulgarian translation.

= 3.3.10 =

* Added Spanish translation.

= 3.3.9 =

* Added Russian translation.

= 3.3.8 =

* Critical update to prevent site crash!

= 3.3.3.1 =

* Added Brazilian Portuguese translation.

= 3.0 =

* Added GA tracking for display and click. Add filter and action to modify the result.

= 2.3 =

* Added YARPP integration.

= 2.1 =

* Added support to custom post type.

= 2.1 =

* Added some appearance and cache improvements. Scripts and styles optimization. New order available: random.

= 2.0.1 =

* Added a Polish translation. Fix cache refresh missing after changing plugin configuration.

= 2.0 =

* More configuration options. Uses transient cache to store results. Optimization activation & deactivation process.


# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [3.3.30] - 2015-10-06
- **Fix**: Fixed a problem with showing the title if contains tags with attributes. Props for [Ovidiu](http://pacura.ru/).

## [3.3.29] - 2015-09-01
- **Translation**: Added Tagalog translation by [Kel DC](https://profiles.wordpress.org/kel-dc).

## [3.3.28] - 2015-08-25
- **Translation**: Added Slovak translation by Daniel Schmidt.

## [3.3.27] - 2015-08-18
- **Translation**: Added Dutch translation by [Ruud Kok](http://www.ruudkok.nl/).

## [3.3.26] - 2015-08-11
- **Fix**: Fixed empty post_type value thx to [Zeus](http://wordpress.org/support/profile/prabhakaraan) [UpPrev error - array_key_exists()!](http://wordpress.org/support/topic/upprev-error-array_key_exists).
- **Translation**: Added Italian translation by [Francesco Giossi](http://www.giossi.com/).

## [3.3.25] - 2015-08-04
- **Translation**: Updated Simplified Chinese translation by [Leo](http://smallseotips.com/).
- **Improvement**: Added filter '[iworks_upprev_box_title](http://upprev.iworks.pl/documentation/filter-reference/iworks_upprev_box_title)' for box title, return false to remove title.

## [3.3.24] - 2015-07-28
- **Fix**: Prevent to display upPrev box on attachment page thx to [Swaps4](http://wordpress.org/support/profile/swaps4) [upPrev displaying on attachment pages with no styling](http://wordpress.org/support/topic/upprev-displaying-on-attachment-pages-with-no-styling).
- **Improvement**: Remove add_contextual_help function (deprecated from 3.3).
- **Dependencies**: Updated IworksOptionClass to 2.0.0.

## [3.3.23] - 2015-07-21
- **Fix**: Default value only when is need thx to [Jeff](http://wordpress.org/support/profile/lambje) [Offset Not Working](http://wordpress.org/support/topic/offset-not-working).
- **Dependencies**: Updated IworksOptionClass to 1.7.7.

## [3.3.22] - 2015-07-14
- **Improvement**: Add [iworks_upprev_check filter](http://upprev.iworks.pl/documentation/filter-reference/iworks_upprev_check), see documentation: [Filter Reference – iworks_upprev_check](http://upprev.iworks.pl/fiter_reference_iworks_upprev_check.html).

## [3.3.21] - 2015-07-07
- **Improvement**: Replaced WP_PLUGIN_URL with plugins_url() thx to [tigr](http://wordpress.org/support/profile/tigr) [SSL compatibility](http://wordpress.org/support/topic/ssl-compatibility).

## [3.3.20] - 2015-06-30
- **Dependencies**: Updated IworksOptionClass to 1.7.4.
- **Improvement**: Check upPrev compatibility with WordPress 3.7.
- **Fix**: Fixed "last selected tab".

## [3.3.19] - 2015-06-23
- **Translation**: Updated Hebrew translation by [של אודי בורג](http://blog.udiburg.com).

## [3.3.18] - 2015-06-16
- **Translation**: Updated Bulgarian translation by [Martin Halachev](http://wordpress.org/support/profile/mhalachev).

## [3.3.17] - 2015-06-09
- **Fix**: Move custom CSS after wp_enqueue_style. thx to [007me](http://wordpress.org/support/profile/007me) [Can't change font size and style and costumize close button](http://wordpress.org/support/topic/cant-change-font-size-and-style-and-costumize-close-button).

## [3.3.16] - 2015-06-02
- **Fix**: Excerpt number of words to show option not working for a concrete excerpt. thx to [gyalokai](http://wordpress.org/support/profile/gyalokai) [Excerpt number of words to show option not working](http://wordpress.org/support/topic/excerpt-number-of-words-to-show-option-not-working).
- **Dependencies**: Updated IworksOptionClass to 1.7.2.
- **Improvement**: Added box to front page thx to [SARed](http://wordpress.org/support/profile/sared) [Using Upprev on a front page with latest posts?](http://wordpress.org/support/topic/using-upprev-on-a-front-page-with-latest-posts).

## [3.3.15] - 2015-05-26
- **Translation**: Added Hebrew translation by [עמיעד](http://hatul.info).

## [3.3.14] - 2015-05-19
- **Fix**: Fixed limit for taxonomies. Props for [darkjedipete](http://wordpress.org/support/profile/darkjedipete).

## [3.3.13] - 2015-05-12
- **Translation**: Added Czech translation by [Michal Bláha](http://michalblaha.cz/).

## [3.3.12] - 2015-05-05
- **Fix**: Fixed compatibility errors with YARPP 4.x version thx to [adamdport](http://wordpress.org/support/profile/adamdport).
- **Improvement**: Added CSS to changed tabs class in WordPress 3.5.
- **Improvement**: Check upPrev compatibility with WordPress 3.5.

## [3.3.11] - 2015-04-28
- **Translation**: Added Bulgarian translation by [Martin Halachev](http://wordpress.org/support/profile/mhalachev).

## [3.3.10] - 2015-04-21
- **Translation**: Added Spanish translation by [Ramón Rautenstrauch](http://www.apasionadosdelmarketing.es/about/).

## [3.3.9] - 2015-04-14
- **Translation**: Added Romanian translation by [Florin Arjocu](http://drumliber.ro/).

## [3.3.8] - 2015-04-07
- **Fix**: Critical update, plugin crash site if choosing no post types.

## [3.3.7] - 2015-03-31
- **Translation**: Added Russian translation by [Вадим Сохин](http://webbizreshenie.ru/).

## [3.3.6] - 2015-03-24
- **Translation**: Added German translation by [Mario Wolf](http://wolfmedien.de/).

## [3.3.5] - 2015-03-17
- **Fix**: Fixed double output when using YARPP thx to [gyutae](http://wordpress.org/support/profile/gyutae).
- **Fix**: Fixed visibility of developer admin options.

## [3.3.4] - 2015-03-10
- **Translation**: Added Brazilian Portuguese translation by [Leonardo Antonioli](http://www.tobeguarany.com/).
- **Fix**: Fixed minor description bug (thx Eva).

## [3.3.3] - 2015-03-03
- **Translation**: Added Vietnamese translation by [Xman](http://thegioimanguon.com/).
- **Fix**: Fixed usage of crc32 to build ids for tabbed config, which collapsed in other than utf8 charset.

## [3.3.2] - 2015-02-24
- **Improvement**: Added GA option: non-interaction to prevent events in bounce-rate calculation.

## [3.3.1] - 2015-02-17
- **Translation**: Added French translation by [Eva](http://myclientisrich-leblog.com/).

## [3.3] - 2015-02-10
- **Improvement**: Added option to hide upPrevBox on mobile devices, matching implemented from [WP Mobile Detector](http://wordpress.org/extend/plugins/wp-mobile-detector/) ticket from [forum](http://wordpress.org/support/topic/plugin-upprev-mobile-themes).

## [3.2] - 2015-02-03
- **Improvement**: Added action *[iworks_upprev_image](http://upprev.iworks.pl/documentation/action-reference/iworks_upprev_image)* - you can add own code to produce icon, when them don't support post-thumbnails.
- **Improvement**: Added thumbnail filter *iworks_upprev_get_the_post_thumbnail* - now you can easy change thumbnail.
- **Improvement**: Added purging transient cache entries from $wpdb->options table when turn off this cache [forum](http://wordpress.org/support/topic/plugin-upprev-crazy-number-of-wp-options-database-entries).
- **Improvement**: Add check _gaq object exist.
- **Improvement**: Checked compatibility to WordPress 3.3.
- **Dependencies**: Updated IworksOptionClass to version 1.0.1.

## [3.1.1] - 2015-01-27
- **Improvement**: Added ability to turn off "remove_all_filters" function.

## [3.1] - 2015-01-20
- **Improvement**: Changed GA trackEvent syntax.
- **Translation**: Added Turkish translation by [wpdestek](http://wordpress.org/support/profile/wpdestek).

## [3.0.1] - 2015-01-13
- **Fix**: Fixed printing GA code when "I don't have GA tracking on site." is unticked. [forum](http://wordpress.org/support/topic/plugin-upprev-google-analytics-tracking-code-error-ga-tracking-installed) thx [win101](http://wordpress.org/support/profile/win101d).

## [3.0] - 2015-01-06
- **Fix**: Fixed end date filter for imported posts.
- **Fix**: Fixed javascript conflict on edit post screen.
- **Fix**: Fixed problem with unchecking 'Excerpts'. [forum](http://wordpress.org/support/topic/plugin-upprev-bugs-no-box-in-firefox-6-offset-doesnt-work-disable-excerpts-doesnt-work) thx [benjamin](http://wordpress.org/support/profile/kbenjamin).
- **Fix**: Fixed sticky posts display loop.
- **Fix**: Fixed thumbnail display problem.
- **Improvement**: Added filter '[iworks_upprev_box_item](http://upprev.iworks.pl/documentation/filter-reference/iworks-upprev-box-item)' for any item excerpt YARPPs.
- **Improvement**: Added GA track: view box and click link.
- **Improvement**: Added option *ignore sticky posts*.
- **Improvement**: Added sanitize function for offset.
- **Improvement**: Added thumbnail preview on posts/pages list.
- **Improvement**: Cleaning empty styles from custom CSS field.
- **Refactoring**: Option management.

## [2.3.7] - 2014-12-30
- **Fix**: Fixed problem for defaults post_type if no one choosed [forum](http://wordpress.org/support/topic/plugin-upprev-error).

## [2.3.6] - 2014-12-23
- **Fix**: Fixed problem with using thumbnails in themes with thumbnail support [forum](http://wordpress.org/support/topic/plugin-upprev-version-235-update-breaks-thumbnail-support).
- **Improvement**: Added custom CSS rules (forum](http://wordpress.org/support/topic/plugin-upprev-version-235-update-breaks-thumbnail-support).

## [2.3.5] - 2014-12-16
- **Fix**: Fixed problem with using thumbnails in themes without thumbnail support.

## [2.3.4] - 2014-12-09
- **Fix**: Fixed problem with default values and values saving (again).
- **Improvement**: Added correct way to enqueue style and JavaScript files.

## [2.3.3] - 2014-12-02
- **Improvement**: Removed configuration link on plugins list page for WordPress multisite.
- **Fix**: Fixed problem with post excerpt.
- **Fix**: Fixed problem with default values and values saving.

## [2.3.2] - 2014-11-25
- **Fix**: Fixed translation bug.
- **Improvement**: Removed date limit for random posts.
- **Fix**: Fixed open in new window bug.
- **Improvement**: Added limit to display only on selected post types [forum](http://wordpress.org/support/topic/plugin-upprev-previous-post-animated-notification-custom-post-types).

## [2.3.1] - 2014-11-18
- **Fix**: Fixed a small bug with the display option.

## [2.3] - 2014-11-11
- **Improvement**: Added filter **iworks_upprev_box**.
- **Improvement**: Added tabbed options (based on [Breadcrumb NavXT](http://wordpress.org/extend/plugins/breadcrumb-navxt/) plugin.
- **Improvement**: Added prefix and suffix to urls.
- **Improvement**: Added option to allow open links in new window.
- **Improvement**: Added integration with [YARPP](http://wordpress.org/extend/plugins/yet-another-related-posts-plugin/).
- **Fix**: Fixed [Transients Cache Lifetime is set to wrong seconds](http://wordpress.org/support/topic/plugin-upprev-transients-cache-lifetime-is-set-to-wrong-seconds).
- **Fix**: Fixed deactivation hook option names.

## [2.2.1] - 2014-11-04
- **Fix**: Fixed display problem with document shorter than browser.
- **Improvement**: Added document post type as a checkbox list.

## [2.2] - 2014-10-28
- **Improvement**: Added upPrev configuration link to the admin bar.
- **Improvement**: Added registered custom posts.
- **Fix**: Fixed error if the behaviour of boxing display for HTML element.
- **Fix**: Fixed wrong method post_type selection.

## [2.1.2] - 2014-10-21
- **Improvement**: Remove margin-top for title element.
- **Improvement**: Added display taxonomies limit.

## [2.1.1] - 2014-10-14
- **Fix**: Fixed scroll down again, the box flies out, which -- on a small screen -- can obscure a big chunk of the content. [forum](http://wordpress.org/support/topic/plugin-upprev-return-to-top-of-post-after-clicking-x).

## [2.1] - 2014-10-07
- **Improvement**: Added box width option.
- **Improvement**: Added box bottom and side margin option.
- **Improvement**: Added transient cache for scripts and styles.
- **Improvement**: Added actions: **iworks_upprev_box_before** and **iworks_upprev_box_after**, called inside the upPrevBox, before and after post. Now you can add some elements to upPrevBox without plugin modification.
- **Improvement**: Added option to display (or not) close button.
- **Improvement**: Added post type choose to post, page or any.
- **Improvement**: Added random order for displayed posts.

## [2.0.1] - 2014-09-30
- **Fix**: Fixed translation load.
- **Improvement**: Added show box header option.
- **Improvement**: Added stamp for cache key.
- **Translation**: Added Polish translation by [Marcin Pietrzak](http://iworks.pl/).

## [2.0] - 2014-09-23
- **Fix**: Fixed display upPrev box in case of an equal height of the window and the document.
- **Improvement**: Added to use transient cache.
- **Improvement**: Added thumbnail width (height depends on theme thumbnail).
- **Improvement**: Added prevent some options if the active theme does not support it.
- **Improvement**: Added activation & deactivation hooks (to setup defaults and remove config).
- **Improvement**: Removed all filters the_content for a post in the upPrev box.

## [1.0.1] - 2014-09-16
- **Improvement**: Added post_date as a parameter, to get real previous post.
- **Fix**: Fixed JavaScript error.
- **Improvement**: Added header for a simple method.

## [1.0] - 2014-09-09
- **Initial**: Copy and massive refactoring of plugin [upPrev Previous Post Animated Notification](http://wordpress.org/extend/plugins/upprev-nytimes-style-next-post-jquery-animated-fly-in-button/).

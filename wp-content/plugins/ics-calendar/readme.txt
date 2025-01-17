=== ICS Calendar ===
Contributors: room34
Donate link: https://icscalendar.com
Tags: iCalendar, Google Calendar, Office 365, events, ICS feed
Requires at least: 4.9
Tested up to: 6.6
Requires PHP: 7.0
Stable tag: 11.3.4.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Easily add any iCalendar feed (Google Calendar, Microsoft 365, iCloud Calendar, etc.) to your WordPress site. Auto-updating, loads of options.

== Description ==

Using a simple shortcode, you can turn any iCalendar subscription (ICS) feed (Google Calendar, Microsoft Office 365, Apple iCloud, Airbnb, Vrbo, and many more) into a seamlessly integrated, auto-updating, zero-maintenance WordPress calendar.

Continue to manage your events in the calendar software you're already using! You'll automatically have an up-to-date calendar in your WordPress website with no extra work.

Display your calendar in month, list or week view. Many additional customization options are available. See our [User Guide](https://icscalendar.com/user-guide/) for full details.

**No API keys required!**

**Works with ANY calendar software** that generates a public iCalendar subscription link.

= Live Preview =

You can preview your own calendar in any ICS Calendar view at our website: [icscalendar.com/preview](https://icscalendar.com/preview/)

= Shortcode Builder =

We've made it easier than ever to get started using ICS Calendar with our new online shortcode builder: [icscalendar.com/shortcode-builder](https://icscalendar.com/shortcode-builder/)

= Language Support =

All date strings (days of the week, months, etc.) are automatically translated into your site's configured language (under **Settings > General > Language**) and date/time formats using core WordPress functionality. All text content for the calendar itself is displayed as-is from the feed.

The small amount of additional front-end displayed text generated by the plugin defaults to U.S. English, but also supports the following translations: Chinese, Danish, Dutch, Estonian, Finnish, French, German, Greek, Hungarian, Italian, Japanese, Korean, Latvian, Lithuanian, Norwegian, Polish, Portuguese, Russian, Spanish and Swedish.

Please contact us if you would like us to add support for your language!

_This plugin includes the PHP ICS Parser library by Jonathan Goode, John Grogg and Martin Thoma (MIT license)._

== Installation ==

Once the plugin is installed and activated, use the shortcode below (adding your own ICS feed URL between the quotation marks) to insert a calendar into your pages. Use our online [Shortcode Builder](https://icscalendar.com/shortcode-builder/) to easily create a customized shortcode, or consult the [User Guide](https://icscalendar.com/user-guide) for more information.

`[ics_calendar url=""]`

Be sure you are using the _iCalendar subscription (ICS)_ URL (i.e. for importing into a calendar program), not the URL for viewing a calendar in a web browser. To test if you have the correct URL, paste it directly into your browser address bar. It should download an `.ics` file, not display the calendar in the browser.

== Frequently Asked Questions ==

= How do I find my calendar's ICS feed URL? =

Different calendar systems have different ways to obtain the feed URL. You may need to consult your calendar software's documentation for assistance. Find instructions for commonly used calendars below.

You will also need to make sure that your calendar is public. Private calendars cannot be accessed by this plugin.

_Documentation quick links:_

* [Google Calendar](https://support.google.com/calendar/answer/37083#link)
* [Microsoft Office 365](https://support.office.com/en-us/article/share-your-calendar-in-outlook-on-the-web-7ecef8ae-139c-40d9-bae2-a23977ee58d5)
* [Apple iCloud](https://www.macobserver.com/tips/quick-tip/icloud-configure-public-calendar)

= How do I insert a calendar into my page? =

Use this shortcode, inserting your ICS feed URL between the quotation marks:

`[ics_calendar url=""]`

Be sure you are using the _iCalendar subscription (ICS)_ URL (i.e. for importing into a calendar program), not the URL for viewing a calendar in a web browser. To test if you have the correct URL, paste it directly into your browser address bar. It should download an `.ics` file, not display the calendar in the browser.

= Can I combine multiple calendars? =

Yes! You can combine multiple calendars by including more than one feed URL in the `url` parameter. __Separate the calendar URLs with one space or a pipe `|` character.__ Do not include any other delimiter characters, as they will be interpreted as part of the URL.

= Why isn't my calendar loading? =

This may be due to your server's configuration. This plugin requires either the PHP cURL extensions, or the `allow_url_fopen` PHP setting to be turned on. Check your PHP configuration or your server administrator if you think this may be the issue. You can also add `debug="true"` to your shortcode and view your page to see debugging output which may provide additional details about any connection issues.

= Why isn't my calendar updating? =

For performance, this plugin uses WordPress transients to store retrieved calendar data for one hour between requests to the calendar source server. If you have updated events that are not showing up in your page, visit the **ICS Calendar** page in your site admin and click the **Clear Cached Calendar Data** button.

Third-party caching plugins may interfere with ICS Calendar's feed syncing. If you are using a caching plugin and your calendar is not updating, try using the [AJAX](https://icscalendar.com/icsdocs/#ajax) option in your shortcode.

= Why are event times an hour off after Daylight Saving Time begins? =

PHP has two different ways of defining timezones: as a number of hours offset from GMT/UTC (e.g. "UTC-5"), or as a continent/city combination (e.g. "America/Chicago"). Timezones using UTC offsets do not handle Daylight Saving Time correctly (as noted in the [PHP documentation](https://www.php.net/manual/en/timezones.others.php)). Please check your WordPress timezone settings (__Settings > General > Timezone__). If it is set to a UTC offset, change it to the city closest to your location, in the same timezone. As of version 6.0 you can also set the timezone within the shortcode using the `tz` parameter. (Again, be sure to use a named region/city timezone, not a UTC offset.)

= Additional documentation and support =

Our [User Guide](https://icscalendar.com/user-guide/) includes extensive documentation of all features of the plugin, is frequently updated, and is translated into all languages supported by the plugin.

= Feature requests =

The paid [ICS Calendar Pro](https://icscalendar.com) add-on includes additional layout options, tools for customizing the calendar's appearance more easily than directly editing CSS, an improved insertion tool, and more. We are also constantly adding new features and refinements to _both_ the free and paid versions. If you have suggestions for features you'd like to see or any other additional input, please let us know by following the support link on the admin page or in the [WordPress support forums](https://wordpress.org/support/plugin/ics-calendar/)! The base plugin will always be free to use.

== Changelog ==

= 11.3.4.2 - 2024.10.01 =

* System Report:
  * Added new ICS Calendar settings.
  * Added relevant WordPress core settings.
  * Alphabetized Active Plugins list.

= 11.3.4.1 - 2024.09.28 =

* Modified `r34ics_ajax()` function's sanitization logic to use `wp_kses_post()` rather than `htmlspecialchars(strip_tags())`, which was causing some valid HTML to be stripped from the calendar output when using AJAX.

= 11.3.4 - 2024.09.24 =

* Lightbox:
  * Modified CSS to restrict lightbox dimensions on large displays. Lightbox now displays at a maximum of 800x600 pixels, centered in the window. (Applies only when using `toggle="lightbox"`.)
* Multi-day events:
  * Changed options for `extendmultiday` from true/false to `overnight`, `allday`, `both` or empty. The previous true/false values map to `allday` and empty. The new `overnight` value applies to "overnight" events with specified start and end times. The `allday` value (along with the previous true value) works by the previous logic, and applies only to multi-day, all-day events, to address situations where feeds do not conform to the iCalendar spec in handling the end date of multi-day, all-day events. The default is false/empty, with neither condition applying.

= 11.3.3.2 - 2024.09.18 =

* Modified logic around the `nolink` parameter, to strip an event's URL from the array during the initial parsing process, rather than relying on later conditionals in templating functions, which in some cases would still show the link even if `nolink` was set.
* Added support for the vendor-specific `X-MICROSOFT-CDO-BUSYSTATUS` field as a fallback for the iCalendar spec-compliant `STATUS` field.

= 11.3.3.1 - 2024.08.22 =

* AJAX:
  * Improved error handling when AJAX request fails. Removed repeated attempts on failure, due to the nature of the error being tested for.
  * CSS enhancements to approximate initial height allocated for the calendar, based on view. (Intended to improve Cumulative Layout Shift [CLS] scores with PageSpeed Insights.) Note: There is no way to precisely determine the height of the calendar before it's loaded.

= 11.3.3 - 2024.07.31 =

* Changed height on AJAX container while loading from `32px` to `75vh` to reduce impact on Cumulative Layout Shift (CLS) scores with Google PageSpeed Insights.
* Modified `sametab` parameter to support three values: `local`, `all`, and `none`. The default `local` option is the same default behavior as before (when the parameter is omitted altogether), `all` is equivalent to the previous `true` value, and `none` is a new option that will force *all* event links to open in a new tab. *Existing calendars do not need to be modified; the old values will continue to function as before.*
* Removed logic to insert `.offsite-link` CSS class in links that open in new tabs, since it was not being used anywhere in the plugin. If you have custom CSS that depends on this class, use this equivalent selector: `.ics-calendar a[target="_blank"]`
* Reverted change to conditional logic for events spanning two days, introduced in 11.3.2.1, because it is causing more problems than it is fixing. A new parameter will be introduced in the next update to make the 11.3.2.1 change optional for the smaller number of users who will benefit from it.

= 11.3.2.1 - 2024.07.19 =

* Changed names of settings actions to replace `admin_options` with `settings` for consistency with changes in 11.3.2.
* Modified logic in some calendar rendering functions to prevent them from running unnecessarily and slowing down the Block Editor.
* Removed a conditional that treated events spanning two days, with start and end times, as one-day events rather than multi-day events. This older logic was obviated by subsequent changes in the plugin's handling of multi-day events, but some users may be expecting the previous functionality. Please use the [WordPress Support Forums](https://wordpress.org/support/plugin/ics-calendar/) to report any issues.

= 11.3.2 - 2024.07.08 =

* Renamed and relabeled "admin-options" to "settings" for consistency and clarity in future code updates.
* Added **Increase memory limit when rendering calendars** setting, to allow for adjusting the system memory limit specifically when parsing calendar data. (Also added related `r34ics_memory_limit_mb()` and `r34ics_memory_limit_select()` functions.)
* Bug fix: Added missing `r34ics_display_calendar_event_item` filter on certain multi-day events.
* i18n: Updated translation strings.

= 11.3.1 - 2024.07.03 =

* jQuery:
  * Modified the `r34ics_init_start` and `r34ics_init_end` custom events to pass an `elem` parameter, containing the DOM object that called the `r34ics_init()` function. On calendars _not_ loaded via AJAX, the function runs on initial page load, and the value passed is null. When the calendar _is_ loaded via AJAX, the object is the `div.r34ics-ajax-container` element for that calendar. This allows custom functions using this event to have access to the properties of the DOM element, including the `id` attribute, so developers can write calendar-specific JavaScript.
* Miscellaneous:
  * Standardized all checks for ICS Calendar Pro to use `class_exists()` and removed some ICS Calendar Pro-specific JavaScript by using the `r34ics_init_end` event.
* i18n: Fixed incorrect text domain for translation strings in admin sidebar, and updated affected translation files.

= 11.3.0.1 - 2024.06.27 =

* Updated admin page to address possible issue of tabs not working.
* Added new plugin settings to System Report.
* Added `r34ics_raw_feed_strip_dtend_none()` function (using the `r34ics_display_calendar_preprocess_raw_feed` filter) to handle edge cases where feeds include the invalid `DTEND:None`. (This is an identified issue with easyVerein calendars.)

= 11.3.0 - 2024.06.13 =

* Admin:
  * Fixed minor issue with ICS Feed URL Tester changes in version 11.2.2 that prevented display of the tested URL after submitting.
  * Reorganized Settings tab with options grouped under subheadings.
* Basic Authentication:
  * Added support for including HTTP Basic Authentication user/pass parameters directly in the feed URL in the shortcode, in addition to the previous constant-based method. _This approach is still discouraged,_ since it involves putting the credentials directly in the shortcode and could potentially expose those credentials publicly if the plugin is deactivated, since WordPress outputs the text of any undefined shortcodes directly on the page. But _considering that HTTP Basic Authentication is inherently insecure,_ this should not be a significant issue in most cases. If you are concerned about the confidentiality of your basic auth credentials, please continue to use the old approach. (Note: This change only applies to the new feed request method introduced in version 11, so it will not work if the **Use legacy feed request method** option is turned on. When using the legacy method, you _must_ use the `basicauth` parameter in conjunction with the `R34ICS_FEED_BASICAUTH` constant in your `wp-config.php` file.)
* CSS:
  * Modified CSS for new `feedlabelindesc` so feed color dot only appears in event details hover box, and not in inline descriptions; added styling for feed labels in lightbox.
* Developer:
  * Added [`r34ics_display_calendar_event_item`](https://icscalendar.com/developer/#r34ics_display_calendar_event_item) filter. This filter runs immediately before a parsed event gets added to the data array for the calendar, allowing you to modify any event details as needed. This is very similar to our second example use case for the existing [`r34ics_display_calendar_filter_ics_data`](https://icscalendar.com/developer/#r34ics_display_calendar_filter_ics_data) filter, minus the need for five nested `foreach` loops!
* Event details hover/lightbox:
  * Moved recurrence description to top, below time.
  * Changed HTML wrapper for `img` from `div` to `figure`.
* Miscellaneous:
  * Changed language code in iCalendar output for `eventdl` to reflect site locale instead of hardcoding `EN`.
* Vendors:
  * Updated embedded ics-parser library to latest version (3.4.0+, up through commit [7286ce0](https://github.com/u01jmg3/ics-parser/commit/7286ce0ff37d5123094ffc8b8426d9dfcccca7f9).)
* i18n: Updated translation strings.
* Bumped 'tested up to' to 6.6.

= 11.2.2 - 2024.06.07 =

* Admin:
  * ICS Feed URL Tester enhancements. Added suggestions for handling some common situations that may cause a feed request to fail or return incorrect results.
  * CSS refinements.
  * Fixed a bug that caused ICS Feed URL Tester to always return an unknown error after changes introduced in version 11.1.0.
  * Updated action links on Plugins page.
* Shortcode:
  * Added `feedlabelindesc` parameter and related functionality.
* Miscellaneous:
  * Added `R34ICS::shortcode_feed_array_params` property and logic to split pipe-delimited, feed-related parameters into arrays for easier logic elsewhere, plus related functionality, including `r34ics_shortcode_feed_array_params` filter. (This is used by `feedlabelindesc` and may be used by other future enhancements.)
  * Modified `r34ics_has_desc()` function to support `feedlabelindesc`.

= 11.2.1 - 2024.05.30 =

* Shortcode:
  * Added `eventlocaltime` parameter. Will display all times in the local timezone of the individual event, if applicable. Note: When this parameter is used, the timezone abbreviation `T` will automatically be appended to the `timeformat` parameter while parsing the shortcode.
  * Added support for `T` (timezone abbreviation) in `timeformat` parameter. Note: Currently only supports placing `T` at the end of the string. (The timezone abbreviation will be inserted at the end of the time output, regardless of where `T` appears in the `timeformat` string.)
* Admin:
  * Reordered Settings tab items.

= 11.2.0 - 2024.05.29 =

* Admin:
  * Fixed issue after introduction of tabbed layout on ICS Calendar admin page that would cause the wrong tab to load after clicking buttons on the Utilities tab.
  * Added "System Report" link in sidebar.
* Shortcode:
  * Added `fulldateintable` parameter. By default, month and list views show only the day number in the table on desktop breakpoints, and use the date format defined by the `format` parameter for mobile breakpoints. When `fulldateintable="true"` is set, the `format` value will be used to display the date in the table on desktop as well.
* Miscellaneous:
	* Added check for `R34ICS` class already being defined, to prevent a potential fatal error on plugin activation.
	* Added list of valid view names to allow fallback to month view if an invalid name is used. Use the new `r34ics_views` filter to add any custom view template names to the list.
  * Modified loading logic to run `r34ics_update()` if the version number has *changed*, not just if it has increased.
  * Updated protected properties of the `R34ICS` class.
* Hotfix:
  * Modified CSS to prevent display of AJAX "loading" animation being stuck after the calendar loads.

= 11.1.0 - 2024.05.22 =

* Admin:
  * Redesigned admin screen with tabbed layout for improved usability, relabeled some elements, and updated links to User Guide documentation. Refactored associated code into discrete methods. Removed legacy JavaScript that was no longer in use.
* AJAX:
  * Added new **Always use AJAX to render calendars** admin setting. This will automatically force all calendars on the site to render asynchronously using AJAX.
  * Restructured AJAX rendering and added a JavaScript interval to automatically refresh all AJAX-loaded calendars on the same frequency as the site's configured **Transient (cache) expiration** setting. (Minimum of 300 seconds.) Provides a way for pages containing calendars to be left open indefinitely (e.g. for kiosk displays) and receive updates.
* Parameters:
  * Added new `hidecancelledevents` and `hidetentativeevents` shortcode parameters. These hide events with a `STATUS` value of `CANCELLED` or `TENTATIVE`, respectively.
* Miscellaneous:
  * Added fallback to get event URL from the URI property if it exists. The iCalendar spec includes a [URI](https://icalendar.org/iCalendar-RFC-5545/3-3-13-uri.html) property, but not a URL property. However in our practical experience the URL property is commonly used by calendar vendors.
  * Replaced several instances of null coalescing operators (`?? null`) with short ternary operators (`?: ''`) setting empty strings rather than null values for event properties. This should not produce any noticeable changes in most cases, but may occasionally allow for values to be returned that have been missing in the output under the old logic.
  * Updated the set of fields that are masked by the `maskinfo` parameter to account for changes in the ics-parser library.
* i18n: Updated translation strings.

= 11.0.1.2 - 2024.05.15 =

* Added `R34ICS::get_list_style_views()` and `r34ics_list_style_views` filter to allow external addition of list-style views for certain conditional logic.
* Performance improvements: Narrowed rough parsed date ranges defined in `R34ICS::display_calendar_date_range()` to reduce memory usage and processing time for calendars with a large number of recurring events.
* Admin page layout adjustments.
* Debugging: Removed restriction that only reports dynamic peak of memory usage if debug level is set to 2 or higher.
* Bumped 'tested up to' version to 6.5.3.

= 11.0.1.1 - 2024.05.02 =

* Developer:
  * Added `r34ics_display_calendar_after_args` action.

= 11.0.1 - 2024.05.02 =

* Basic/list views:
  * Pagination: changed default pagination count to 5 instead of using `posts_per_page` site option; cast pagination value as integer when set; fixed missing `#` in previous/next pagination URLs. Fixed two jQuery bugs.
* Week view:
  * Modified change from version 11.0.0.3 to adapt when the window is resized between phone and non-phone breakpoints. (The previous fix depended on the size of the window on initial page load.)
* Admin:
  * Added `r34ics_is_block_editor()` function, and logic to prevent unnecessary processing potentially occurring on Block Editor screens.
* Developer:
  * Added two new actions: `r34ics_shortcode_before_display_calendar` and `r34ics_shortcode_after_display_calendar`. These actions fire off in `R34ICS::shortcode()` before and after the call to `R34ICS::display_calendar()`.
  * Corrected `add_action()` to `add_filter()` for `r34ics_display_calendar_exclude_event` in `class-r34ics.php`.
* Miscellaneous:
  * Removed logic to run `gzdecode()` in `R34ICS::_url_get_contents()` because `wp_remote_get()` already does that. Eliminates appearance of numerous related PHP warnings in log files.

= 11.0.0.3 - 2024.04.23 =

* Week view:
  * Fixed JavaScript issue of containers not extending to the full width in mobile "list"-style layout when switching between weeks.
* ICS feed request functionality:
  * Updated `R34ICS::_url_get_contents()` to address some additional edge case issues introduced with the switch to `wp_remote_get()` in version 11.0.0 that were not fully resolved by the 11.0.0.1 update. Specifically, added customized handling of 301 and 302 redirects to use the `Location` header returned in the response object, rather than relying on the built-in redirection in `wp_remote_get()`, which was causing some hosts (including Google Calendar) to reject the request.
  * Added **Use legacy feed request method** option on settings page, and corresponding `R34ICS::_url_get_contents_legacy()` method. For sites that are still not successfully retrieving feeds with the fixes added in 11.0.0.1, this option reverts to using the old method for requesting feeds using cURL and fopen functions.
  * Updated debugging tools for internal testing during development.

(Note: Version 11.0.0.2 was intentionally removed due to a logistical issue.)

= 11.0.0.1 - 2024.04.18 = 

* Fixes an issue with HTTP headers in the new method of retrieving ICS feeds. The issue was hotfixed approximately one hour after the initial release, but some sites may have picked up the update within that hour. This update also increases the timeout from 5 to 30 seconds, to address potential issues with retrieving very large ICS files.

= 11.0.0 - 2024.04.18 =

**PLEASE NOTE: This version includes a significant rewrite of the function that retrieves the contents of ICS feed URLs. It is now using the built-in `wp_remote_get()` WordPress function (instead of PHP cURL and fopen functions as before), so it _should_ be fully compatible with all existing installations. However, if you encounter any new issues, please visit the [WordPress Support Forums](https://wordpress.org/support/plugin/ics-calendar/) for assistance.**

* Admin Settings:
  * Added **Allow access to these hostnames that resolve to reserved IP addresses** setting. This allows sites to access calendar servers on the same physical IP address as the web server, or within the same internal network. Previously this needed to be handled using custom PHP code as outlined in [this blog post](https://icscalendar.com/how-to-retrieve-feed-urls-over-a-local-network-private-reserved-ip-addresses-in-ics-calendar-10-12-2-and-later/).
* Code Refactoring:
  * Replaced previous cURL and fopen logic with `wp_remote_get()` in `R34ICS::_url_get_contents()` method. Correspondingly, deprecated the `curlopts` and `method` parameters. _Note: The second and fourth parameters of the protected method `R34ICS::_url_get_contents()` were **removed** rather than deprecated. No external plugins should be using this method other than ICS Calendar Pro, which has been correspondingly updated._
  * Removed admin notice checking for presence of cURL or fopen functions.
* WordPress Playground:
  * Added `r34ics_is_playground()` function to detect if running in [WordPress Playground](https://playground.wordpress.net).
* Miscellaneous:
  * Added missing fourth parameter to `r34ics_event_description_html` action.
  * Changed Room 34 Creative Services logo link on admin page sidebar.
  * Fixed PHP warning in `r34ics_system_report()` in rare situations where `get_option('active_plugins')` returns a plugin that is not included in `get_plugins()`. (May occur if the plugin has been manually removed from the file system.)
  * Modified `R34ICS::event_description_html()` to handle `$event['start_time']` and `$event['end_time']` as alternatives to `$event['start']` and `$event['end']`.
  * Updated header details in `ics-calendar.php`.
* a11y:
  * Changed CSS for `.ics-calendar-arrow-nav > *.inactive` to completely hide inactive arrow navigation elements (e.g. "Previous" while on first month, "Today" while on current month, etc.) rather than screening back their opacity. Modified jQuery corresponding to these elements to dynamically add `aria-hidden="true"` when `inactive` class is added.
* i18n:
  * Added and updated translation strings.
* Bumped 'tested up to' version to 6.5.2.

= Full Changelog =

_Changelog truncated here due to WordPress repository requirements._ Please see `changelog.txt` for older logs.
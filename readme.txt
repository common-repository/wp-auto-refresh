=== Auto Refresh ===
Contributors: xlrdxrevengex, wordpress answers
Tags: meta, wp_head, refresh
Requires at least: 2.8
Tested up to: 3.2
Stable tag: 1.1

This plugin will add a meta refresh tag when the wp_head function is called

== Description  ==

This plugin is great for people who have a very busy site and want a refresh every 10, 20, 30, 60, 1800 seconds or whatever you specify in the file. It has a built in filter for enabling this code on specific posts & pages.

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload `auto_refresh` directory to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
3. Then customize the plugin from the `/wp-content/plugins/refresh.php` file

== Frequently Asked Questions ==

= Can i change the refresh interval =

Yes. edit this line `echo "<meta http-equiv='refresh' content='10'>";` and change the `content='10'` to whatever you want (`content='120'` for 2 minutes)

== Changelog ==

= 1.0 =
* Start of project

= 1.1 =
* Added ability to assign to certain pages

= 1.1.2 =
* Added options page. (still in development)
== Configuration Examples ==

How to configure:
For more information see this link on the wordpress codex http://codex.wordpress.org/Conditional_Tags
Example Use of this code when only show this code if is single post 54 or page 23

`Function auto_refresh() {

    $ssingle = is_single ('54');
    issignlearray = is_single ( array (''));
    $ispage = is_page ('23');
    $ispagearray = is_page ( array (''));
        if ( $issingle && $issinglearray && $ispage && $ispagearray ) 
            echo "<meta http-equiv='refresh' content='10'>"; 
        else 
            echo "";
}`

Example Use of this code when only show this code if is single post's 54, 55, 56, 'about-me' or page 23, 24, 25, 26 'contact-us'

`function auto_refresh() {

    $issingle = is_single ('');
    $issignlearray = is_single ( array ('54, 55, 56, 'about-me''));
    $ispage = is_page ('23');
    $ispagearray = is_page ( array ('23, 24, 25, 26 'contact-us''));
        if ( $issingle && $issinglearray && $ispage && $ispagearray ) 
            echo "<meta http-equiv='refresh' content='10'>"; 
        else 
            echo "";
}`
For more information see this link on the wordpress codex http://codex.wordpress.org/Conditional_Tags

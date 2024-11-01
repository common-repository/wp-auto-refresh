<?php
/*
Plugin Name: Auto Refresh
Author: Tyler Yates (xlrdxrevengex)
Author URI: http://www.reptilejunkie.com
Description: Auto refresh the current pages being viewed every minute
Version: 1.1.2 beta
*/
// Please use the readme found in the plugin folder /wp-content/mu-plugins/auto_refresh/readme.txt or /wp-content/plugins/auto_refresh/readme.txt
//Begin Editing Here
function auto_refresh() {
// Use only one of them if it is just a single page then use $issingle if it is multiple pages use $issinglearray
$issingle = is_single ('');
$issignlearray = is_single ( array (''));
// Use only one of them if it is just a single page then use $ispage if it is multiple pages use $ispagearray
$ispage = is_page ('');
$ispagearray = is_page ( array (''));
	if ( $issingle && $issinglearray && $ispage && $ispagearray ) 
        //You can change the content number to what ever you want in seconds 2 minutes equal 120
	    echo "<meta http-equiv='refresh' content='10'>"; 
	else 
	    echo "";
}
//Do not edit below this
add_action('wp_head', 'auto_refresh');
//Lets add a menu item to wordpress admin section
add_action ('admin_menu','ar_add_options');
function ar_add_options() {
	add_options_page ('WP Auto Refresh', 'WP Auto Refresh', 8, 'wpautorefresh', 'ar_options_page');
}
function ar_options_page() {
	echo '<h4>Coming Soon!</h4>';
}
?>

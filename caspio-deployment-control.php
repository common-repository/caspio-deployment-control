<?php 
/*
Plugin Name: Caspio Deployment Control
Plugin URI: http://www.caspio.com
Description: Disables wptexturize and convert_chars filters on the_content for Caspio Bridge PHP SEO deployment support
Author: Caspio Inc.
Version: 1.0
Author URI: http://www.caspio.com
*/

remove_filter('the_content', 'wptexturize');
remove_filter('the_content', 'convert_chars');

?>

=== Caspio Deployment Control ===
Contributors: Caspio Inc.
Tags: caspio, bridge, datapage, deployment, seo, filters, php
Requires at least: 2.0.10
Tested up to: 2.8
Stable tag: 1.0

The Caspio Deployment Control plugin disables wptexturize and convert_chars filters on the_content for Caspio Bridge PHP SEO deployment support.

== Description ==

The Caspio Deployment Control plugin disables wptexturize and convert_chars filters on the_content for Caspio Bridge PHP SEO deployment support.

This plugin prevents WordPress from modifying the Caspio Bridge SEO deployment code. In order to deploy Caspio Bridge SEO DataPage in WordPress, you must have:

*Caspio Bridge account with activated SEO deployment and properly configured DataPage
*Installed and activated a PHP execution plugin for WordPress such as Exec-PHP (http://wordpress.org/extend/plugins/exec-php/). 
*Installed and activated the Caspio Deployment Control plugin for WordPress. 
*Caspio PHP SEO deploy code for your DataPage placed in your WordPress post or page. 

For compatibility with SEO deployment code, the Caspio Deployment Control disables the following WordPress content filters on the_content:

* wptexturize
* convert_chars 

See details about these filters at [http://codex.wordpress.org/How_WordPress_Processes_Post_Content](http://codex.wordpress.org/How_WordPress_Processes_Post_Content "How WordPress Processes Post Content")

For information about Caspio Bridge see the Caspio official site at [http://www.caspio.com](http://www.caspio.com "Caspio official site")

== Installation ==

If you have previously installed a WordPress plugin, you will find this installation fairly straightforward:

1. Download the Caspio Deployment Control plugin archive and extract the files
1. Copy the resulting caspio-deployment-control directory into /wp-content/plugins/
1. Activate the plugin through the 'Plugins' menu of WordPress

== Frequently Asked Questions ==

= What functionality will be disabled after activation the Caspio Deployment Control plugin? =

Two WordPress post content filters wptexturize and convert_chars will be disabled. For details about WordPress post content filters and their functionality see [http://codex.wordpress.org/How_WordPress_Processes_Post_Content](http://codex.wordpress.org/How_WordPress_Processes_Post_Content "How WordPress Processes Post Content").

= Where do I get support and other information about Caspio Bridge? =

For support and other information about Caspio Bridge, see the Caspio official site at [http://www.caspio.com](http://www.caspio.com "Caspio official site"), Caspio Bridge overview at [http://www.caspio.com/bridge/](http://www.caspio.com/bridge/ "Caspio Bridge Overview") and Caspio support page at [http://www.caspio.com/support/](http://www.caspio.com/support/ "Link to Caspio support page").


== Change Log ==

= 1.0 =

Initial Public Release
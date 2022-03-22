<?php
/**
 * @package plugin_1
 * @version 1.0
 */
/*
Plugin Name: Linkedin
Plugin URI: http://localhost:8887/IDAW/wordpress/
Description: Ceci est mon premier plugin
Author: Alexandre Favreau
Version: 1.0
Author URI: http://localhost:8887/IDAW/wordpress/
*/

add_action('wp_footer', 'fct_linkedin');

function fct_linkedin(){

    echo ('<a href="https://www.linkedin.com/in/alexandre-favreau-b27a13209/">Linkedin</a>');
}

?>
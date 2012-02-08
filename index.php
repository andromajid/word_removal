<?php
/**
 * Plugin buat mengganti kata2 sensor di post maupun di comment
 * @name word removal
 * @version 0.1
 * @author andromajid.com
 */
/*
Plugin Name: word removal
Plugin URI: http://andromajid.com/
Description: Plugin buat mengganti kata2 sensor di post maupun di comment
Version: 0.1
Author: Andro Majid
Author URI: http://andromajid.com/
*/
add_filter('the_content', 'change_word_content');
/**
 * function buat merubah kata 
 * @param String $content string content
 * @return String $content content that have been filter
 */
function change_word_content($content) {
  $content = str_replace('wordpress', '<a href="http://andromajid.com" target="__blank__">andro</a>', strtolower($content));
  return $content;
}

?>

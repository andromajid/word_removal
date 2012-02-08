<?php
add_action('admin_menu','word_remover_page');
/**
 * Function buat setting backend
 */
function word_remover_page() {
  add_submenu_page('plugins.php', __("setting word remover"), __("setting word remover"), 'manage_options', 'word_removal_conf');
}
?>

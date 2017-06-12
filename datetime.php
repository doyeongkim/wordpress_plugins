<? php

/*
Plugin Name: Date Time
Description: Wordpress plugin for datetime
Version: 040617
Author: Kim
*/

function datetime_js_add() {
   wp_register_script('datetime-script', plugins_url('/js/datetime.js', __FILE__));

    wp_enqueue_script('datetime-script');
}

add_action("wp_enqueue_scripts", "datetime_js_add");

?>

<?php
/*
Plugin Name: Disable Groundhogg Event Queue
Description: While this plugin is active, the Groundhogg event queue will not be processed.
Author: John Clark
Version: 0.0.1
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Plugin URI: https://github.com/sociocracyforall/disable-groundhogg-event-queue
Update URI: https://github.com/sociocracyforall/disable-groundhogg-event-queue
*/
/**
 * @package disable-groundhogg-event-queue
 * @version 0.0.1
 */

function disable_gh_event_queue() {
        error_log('GH event queue suppressed by Disable GH Event Queue plugin');
        return false;
}

add_filter('groundhogg/event_queue/is_enabled',
           'disable_gh_event_queue', 10, 0);

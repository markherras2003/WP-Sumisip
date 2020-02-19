<?php /**
 * This document contains all validation and loading settings.
 */

if( get_option('enable_notification') ) {
    require(SUMISIP_EVENTS . '/rest/settings/api-notifier.php');
}

if( get_option('enable_api_restriction') ) {
    require(SUMISIP_EVENTS . '/rest/settings/api-restrictions.php');
}

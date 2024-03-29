<?php

/**
 * Fired when the plugin is uninstalled.
 */

// If uninstall not called from WordPress, then exit.
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

require_once 'classes/Features/OptionsPermalinksPostTypes.php';
require_once 'classes/Features/OptionsPermalinksTaxonomies.php';
require_once 'classes/Features/OptionsReadingPostTypes.php';

Ptatap\Features\OptionsPermalinksPostTypes::deleteOptions();
Ptatap\Features\OptionsPermalinksTaxonomies::deleteOptions();
Ptatap\Features\OptionsReadingPostTypes::deleteOptions();

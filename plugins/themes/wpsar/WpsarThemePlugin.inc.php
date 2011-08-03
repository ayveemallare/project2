<?php

/**
 * @file WpsarThemePlugin.inc.php
 *
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class WpsarThemePlugin
 * @ingroup plugins_themes_wpsar
 *
 * @brief "Wpsar" theme plugin
 */

// $Id$


import('classes.plugins.ThemePlugin');

class WpsarThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'WpsarThemePlugin';
	}

	function getDisplayName() {
		return 'Wpsar Theme';
	}

	function getDescription() {
		return 'Wpsar-themed layout';
	}

	function getStylesheetFilename() {
		return 'wpsar.css';
	}

	function getLocaleFilename($locale) {
		return null; // No locale data
	}
}

?>

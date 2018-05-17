<?php
/*
Plugin Name:  PXX Charting
Plugin URI:   https://prosperity.exchange
Description:  Provides charts for Prosperity.Exchange
Version:      0.0.1
Author:       29A
Author URI:   !!! ADD GIT REPO HERE
License:      ??? What type of license
License URI:  ???
Text Domain:  ??? wporg
Domain Path:  ??? /languages
*/

if (!class_exists(“DevloungePluginSeries”)) {
	class DevloungePluginSeries {
		function DevloungePluginSeries() { //constructor

		}

	}

} //End Class DevloungePluginSeries


if (class_exists(“DevloungePluginSeries”)) {
	$dl_pluginSeries = new DevloungePluginSeries();
}

//Actions and Filters
if (isset($dl_pluginSeries)) {
//Actions

//Filters
}

?>
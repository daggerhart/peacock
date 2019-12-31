<?php
/*
Plugin Name: Toucan - Gutenberg Color Palette
Plugin URI: https://github.com/daggerhart/toucan-color-palette
Description: Customize the Gutenberg editor color palette.
Author: Jonathan Daggerhart
Version: 1.0
Author URI: https://www.daggerhart.com
*/

if ( file_exists( __DIR__ . "/vendor/autoload.php" ) ) {
	require_once __DIR__ . "/vendor/autoload.php";
	\Toucan\ColorPalette::bootstrap();
}

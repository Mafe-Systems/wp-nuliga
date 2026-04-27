=== Plugin Name ===
Contributors: (this should be a list of wordpress.org userid's)
Donate link: https://github.com/mjasny/
Tags: comments, spam
Requires at least: 3.0.1
Tested up to: 3.4
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Plugin for nuLiga.

== Description ==

This is a wordpress plugin for easy usage of [nuTab](https://harald-herberth.github.io/nuTab/).
Fetched data is cached for 10 minutes to reduce load on nuLiga servers.

Shortcodes available after activation:

* `[nuliga_tab url="..." verein="Club Name"]` – league table (with optional past/upcoming games)
* `[nuliga_plan url="..." verein="Club Name" alle="1"]` – class schedule
* `[nuliga_planverein club="12345" verein="Club Name"]` – full club schedule

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Download repository as zip archive
1. Upload the plugin through the 'Plugins' menu in WordPress
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Place the specific nuliga divs in your template, widgets or pages

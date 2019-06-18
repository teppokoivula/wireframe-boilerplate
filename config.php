<?php

/**
 * ProcessWire Configuration File
 *
 * Site-specific configuration for ProcessWire.
 * This config.php file was generated by the ProcessExportProfile module. 
 *
 * Please see the file /wire/config.php which contains all configuration options you may
 * specify here. Simply copy any of the configuration options from that file and paste
 * them into this file in order to modify them.
 *
 * ProcessWire 
 * Copyright (C) 2017 by Ryan Cramer
 * Licensed under MPL 2.0
 *
 * https://processwire.com
 *
 */

if(!defined("PROCESSWIRE")) die();

/*** SITE CONFIG *************************************************************************/

/**
 * Enable debug mode?
 *
 * Debug mode causes additional info to appear for use during dev and debugging.
 * This is almost always recommended for sites in development. However, you should
 * always have this disabled for live/production sites.
 *
 * @var bool
 *
 */
$config->debug = false;

/**
 * Default admin theme
 * 
 * Module name of default admin theme for guest and users that haven't already selected one
 *
 * Core options include: **AdminThemeDefault** or **AdminThemeReno** or **AdminThemeUikit**.
 * Additional options will depend on what other 3rd party AdminTheme modules you have installed.
 *
 * @var string
 *
 */
$config->defaultAdminTheme = 'AdminThemeUikit';

/**
 * MarkupMenu default options
 *
 * @var array
 *
 */
$config->MarkupMenu = [
    'templates' => [
        'nav' => '<nav class="{classes} menu--{menu_class_modifier}" aria-label="{aria_label}">%s</nav>',
    ],
];

/*** INSTALLER CONFIG ********************************************************************/



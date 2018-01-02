<?
// defines standard variables for filepaths, so only the config has to change when a path changes.
define('ROOTPATH', strlen(dirname($_SERVER['SCRIPT_NAME'])) > 1 ? dirname($_SERVER['SCRIPT_NAME']).'/' : '/');
// defines which viewpage the logged in user gets.
define('VIEWPATH', 'views/');
define('DATABASE', 'data/db.json');
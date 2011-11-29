<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Route example, add to your config/route.php
 *
 * @author              nutella
 * @modify by			nutella
 * @license             MIT
 * @version             0.1
 */


/*
| -------------------------------------------------------------------------
|
| Add .min before file extension to load minified version.
|
| In your html code reference to /css/foobar.css to load normal version and
| reference to /css/foobar.min.css to load minified version. The same for
| javascript files
|
| Load the normal version (point to real file on disk):
|
|		<link rel="stylesheet" href="/css/main.css"/>
|
| Load the minified version (point to fake file managed by routes):
|
|		<link rel="stylesheet" href="/css/main.min.css"/>
|
| -------------------------------------------------------------------------
*/

$route['js/(:any)\.min\.js'] = "min/$1.js";
$route['css/(:any)\.min\.css'] = "min/$1.css";
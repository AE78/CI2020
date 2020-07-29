<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['index/news'] = 'index/create';
/*$route['news/(:any)'] = 'news/view/$1';
$route['news'] = 'news';
$route[':any'] = 'pages/view/$1';
$route['default_controller'] = 'Pages';*/

$route['default_controller'] = 'Website'; 
$route['404_override'] = '';
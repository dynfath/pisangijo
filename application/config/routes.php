<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['default_controller'] = 'login/index';

$route['pelayan'] = 'pelayan/view';
$route['pelayan/(:any)'] = 'pelayan/view/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

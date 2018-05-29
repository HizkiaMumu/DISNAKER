<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] 	= 'welcome';
$route['profil/create'] = 'pencaker/create_profil'; //
$route['logout'] 				= 'admin/dashboard/logout';
$route['404_override'] 			= '';
$route['translate_uri_dashes'] 	= FALSE;

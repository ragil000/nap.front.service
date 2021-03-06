<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Dashboard_Controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['/'] = 'Dashboard_Controller/index';

$route['auth'] = 'Auth_Controller/auth';
$route['logout'] = 'Auth_Controller/logout';

$route['schedule/form'] = 'Dashboard_Controller/create_form';

$route['admin/login'] = 'admin/Auth_Controller/index';
$route['admin/auth'] = 'admin/Auth_Controller/auth';
$route['admin/logout'] = 'admin/Auth_Controller/logout';

$route['admin'] = 'admin/Dashboard_Controller/index';
$route['admin/dashboard'] = 'admin/Dashboard_Controller/index';

$route['admin/schedule'] = 'admin/Schedule_Controller/index';
$route['admin/schedule/form'] = 'admin/Schedule_Controller/create_form';

$route['admin/member'] = 'admin/Member_Controller/index';
$route['admin/member/form'] = 'admin/Member_Controller/create_form';
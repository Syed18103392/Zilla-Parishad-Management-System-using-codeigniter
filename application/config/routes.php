<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['login'] = 'pages/view_login';
$route['dashboard'] = 'pages/view_dashboard';
$route['logout'] = 'pages/admin_logout';

$route['view_income'] = 'income_controller/view_income';
$route['details_income/(:any)'] = 'income_controller/details_income/$1';
$route['income_status/(:any)'] = 'income_controller/income_status/$1';
$route['edit-income/(:any)'] = 'income_controller/edit_income_details/$1';
$route['approve-opening-income/(:any)'] = 'income_controller/approve_opening_income/$1';
$route['delete-opening-income/(:any)'] = 'income_controller/delete_opening_income/$1';
$route['delete-income/(:any)'] = 'income_controller/delete_single_income/$1';
$route['income_list'] = 'income_controller/income_list';
$route['add_income'] = 'income_controller/view_add_income';
$route['opening_income'] = 'income_controller/view_opening_income';
$route['new_opening_amount'] = 'income_controller/view_add_new_opening_amount';

$route['add_expenses'] = 'expenses_controller/view_add_expences';
$route['view_expenses'] = 'expenses_controller/view_expenses';
$route['expenses_details/(:any)'] = 'expenses_controller/details_expenses/$1';

$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view_login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

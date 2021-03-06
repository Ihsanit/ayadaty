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

/*--------------------------Customizing routing rules----------------------*/
/*$route['pagetry/(:num)']='doctor_c/pagination_try1/$1';*/
$route['logout']='user_c/logout';
$route['login']='user_c/login';
$route['signup']='user_c/signup';
$route['registerhospital']='hospital_c/register_hospital';
$route['hospitaldetail']='hospital_c/show_hospital_detail';
$route['showhospitals']='hospital_c/show_hospitals';
$route['showdoctors']='doctor_c/show_doctors';
$route['doctordetail/(:num)']='doctor_c/show_doctor_detail';
$route['showpagination']='doctor_c/pagination/$1';
$route['updateclinic']='doctor_c/update_clinic';
$route['addclinic']='doctor_c/add_clinic_data';
$route['updateexperience']='doctor_c/update_experience';
$route['addexperience']='doctor_c/add_experience_data';
$route['updatequalification']='doctor_c/update_qualification';
$route['addqualification']='doctor_c/add_qualification_data';
$route['updatedoctor']='doctor_c/update_doctor';
$route['editdoctor']='doctor_c/edit_doctor';
$route['registerdoctor']='doctor_c/register_doctor';
$route['dashboard']='admin_user_c/index';
$route['default_controller'] = 'home_c/index';
$route['(:any)']='home_c/index/$1';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

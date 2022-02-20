<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'welcomePage';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//Sidebar Routes
$route['dashboard'] = 'Admin_Controller/Admin/index';
$route['admin_profile'] = 'Admin_Controller/admin_profile/index';
$route['admin_list'] = 'Admin_Controller/Admin_list/index';
$route['lecturer_list'] = 'Admin_Controller/lecturer_list/index';
$route['hop_list'] = 'Admin_Controller/hop_list/index';
$route['quality_panel_list'] = 'Admin_Controller/qualityPanel_list/qualitypanelview';
$route['folder'] = 'Admin_Controller/batch/index';
$route['subject_folder'] = 'Admin_Controller/folder/index';



//Lecturer Routes
$route['lecturer'] = 'Admin_Controller/lecturer_list/index';
$route['lecturer/add'] = 'Admin_Controller/lecturer_list/input';
$route['lecturer/store'] = 'Admin_Controller/lecturer_list/store';
$route['lecturer/add_form'] = 'Admin_Controller/lecturer_list/input';
$route['lecturer/edit/(:any)'] = 'Admin_Controller/lecturer_list/edit/$1';
$route['lecturer/update/(:any)'] = 'Admin_Controller/lecturer_list/update/$1';
$route['lecturer/delete/(:any)'] = 'Admin_Controller/lecturer_list/delete/$1';

// Head of Program Routes
$route['hop'] = 'Admin_Controller/hop_list/index';
$route['hop/add'] = 'Admin_Controller/hop_list/input';
$route['hop/store'] = 'Admin_Controller/hop_list/store';
$route['hop/edit/(:any)'] = 'Admin_Controller/hop_list/edit/$1';
$route['hop/update/(:any)'] = 'Admin_Controller/hop_list/update/$1';
$route['hop/delete/(:any)'] = 'Admin_Controller/hop_list/delete/$1';

//The Quality Panel Routes
$route['qualityPanel'] = 'Admin_Controller/qualityPanel_list/index';
$route['qualityPanel/add'] = 'Admin_Controller/qualityPanel_list/input';
$route['qualityPanel/store'] = 'Admin_Controller/qualityPanel_list/store';
$route['qualityPanel/edit/(:any)'] = 'Admin_Controller/qualityPanel_list/edit/$1';
$route['qualityPanel/update/(:any)'] = 'Admin_Controller/qualityPanel_list/update/$1';
$route['qualityPanel/delete/(:any)'] = 'Admin_Controller/qualityPanel_list/delete/$1';

//The Batch Routes
$route['batch'] = 'Admin_Controller/batch/index';
$route['batch/add'] = 'Admin_Controller/batch/input';


//The Folder Routes
$route['folder'] = 'Admin_Controller/folder/index';
$route['folder/add_subject'] = 'Admin_Controller/folder/add_new_subject';


/*// Route for Lecturer // */

//Lecturer Login Routes
$route['lecturer/login'] = 'Login/lecturer_login';
$route['lecturer/dashboard'] = 'Lecturer_Controller/lecturer';
$route['lecturer/logout'] = 'Lecturer_Controller/lecturer/logout';
$route['lecturer/folder'] = 'Lecturer_Controller/lecturer_folder';

//Subject Routes
$route['subject/Network_Security'] = 'Lecturer_Controller/lecturer_subject/Network_Security';
$route['Net_Sec/CSI'] = 'Lecturer_Controller/lecturer_subject/Net_Sec_CSI';
$route['Net_Sec/CSI/upload'] = 'Lecturer_Controller/lecturer_subject/Net_Sec_CSI_upload';

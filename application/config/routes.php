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
$route['default_controller'] = 'site';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/* Site Routing */
$route['testimony'] = 'site/testimony';
$route['contact-us'] = 'site/contact';

/* About Routing */
$route['about/our-team'] = 'site/about/team';
$route['about/facilitator'] = 'site/about/facilitator';
$route['about/praktisi-wirausaha'] = 'site/about/praktisi-wirausaha';
$route['about/working-with-us'] = 'site/about/working-with-us';

/* Service Routing */
$route['service/training-provider'] = 'site/services/training-provider';
$route['service/event-organizer'] = 'site/services/event-organizer';
$route['service/wedding-organizer'] = 'site/services/wedding-organizer';
$route['service/merchandising'] = 'site/services/merchandising';

/* Archive Routing */
$route['service/event-organizer/archive/(:num)'] = 'archive/event/$1';
$route['service/training-provider/(:any)'] = 'archive/training/$1';

/* Login Routing */
$route['auth/login'] = 'administrator/login';
$route['auth/logout'] = 'administrator/login/logout';

/* Back End Dashboard */
$route['admin'] = 'administrator/dashboard';
$route['admin/manage/pages'] = 'administrator/dashboard/pages';
$route['admin/manage/team'] = 'administrator/dashboard/team';
$route['admin/manage/facilitator'] = 'administrator/dashboard/facilitator';
$route['admin/manage/praktisi-wirausaha'] = 'administrator/dashboard/praktisi';
$route['admin/manage/working-with-us'] = 'administrator/dashboard/working';
$route['admin/manage/setting'] = 'administrator/dashboard/setting';
$route['admin/manage/contact'] = 'administrator/dashboard/contact';
$route['admin/manage/client'] = 'administrator/dashboard/client';
$route['admin/manage/testimony'] = 'administrator/dashboard/testimony';
$route['admin/manage/training-services'] = 'administrator/dashboard/services';
$route['admin/manage/wedding-organizer'] = 'administrator/dashboard/wedding';
$route['admin/manage/merchandising'] = 'administrator/dashboard/merchandising';
$route['admin/manage/social-media'] = 'administrator/dashboard/social';
$route['admin/manage/archive'] = 'administrator/dashboard/archive';

/* Gallery Archive */
$route['admin/manage/training/gallery'] = 'administrator/dashboard/gallery/training';
$route['admin/manage/event/gallery'] = 'administrator/dashboard/gallery/event';
$route['admin/manage/event/gallery/detail/(:num)'] = 'administrator/dashboard/detail/event/$1';
$route['admin/manage/training/gallery/detail/(:num)'] = 'administrator/dashboard/detail/training/$1';

/* Back End Archive Route */
$route['admin/manage/archive/training-provider'] = 'administrator/dashboard/training';
$route['admin/manage/archive/event-organizer'] = 'administrator/dashboard/event';

/* Admin Slider */
$route['admin/manage/slider/homepage'] = 'administrator/dashboard/slider/homepage';
$route['admin/manage/slider/wedding-organizer'] = 'administrator/dashboard/slider/wedding';
$route['admin/manage/slider/merchandising'] = 'administrator/dashboard/slider/merchandising';
$route['admin/manage/slider/training-provider'] = 'administrator/dashboard/slider/training';
$route['admin/manage/slider/event-organizer'] = 'administrator/dashboard/slider/event';

$route['admin/manage/team/edit/(:num)'] = 'administrator/dashboard/team';


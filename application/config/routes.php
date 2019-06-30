<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'Front';
$route['home']='front';
$route['blog']='Front/blog';
$route['blog_detail/(:any)']="front/blog_detail/$1";

$route['messageadd']="front/messageadd";
$route['contact']="front/contact";
$route['az']='front/dildeyisdir/az';
$route['en']='front/dildeyisdir/en';
$route['portfolio']='Front/portfolio';
$route['port_detail/(:any)']='Front/port_detail/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

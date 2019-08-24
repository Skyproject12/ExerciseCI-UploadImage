<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']='home/index';/*nama controller/nama function*/
$route['learning']='learning/index';
$route['create']='create/index';
$route['aboutus']='aboutus/index';
$route['login']='login/index';
$route['signin']='signin/index';
$route['challenge']='Challenge/index';
$route['events']='events/index';
$route['(:any)']='home/gethomeberita/$1';
/*$route['(:any)']='home/view/$1';*/
$route['404_override']='';
$route['translate_uri_dashes'] = FALSE;

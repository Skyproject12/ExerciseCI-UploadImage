<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*link tempat menyimpan view*/ $route['posts/create']='Posts/data'; /*nama controller/nama function*/
/*link tempat menyimpan view*/ $route['posts/update']='Posts/update'; /*nama controller/nama function*/
/*link tempat menyimpan view*/ $route['posts/ (:any)']='Posts/view/$1'; /*nama controller/nama function/nama file php*/
/*link tempat menyimpan view*/ $route['posts'] ='Posts/index'; /*nama controller/nama function/nama file php*/
/*link tempat menyimpan view*/ $route['default_controller'] = 'pages/view';
/*link tempat menyimpan view*/ $route['(:any)']='pages/view/$1';
/*link tempat menyimpan view*/ $route['404_override'] = '';
/*link tempat menyimpan view*/ $route['translate_uri_dashes'] = FALSE;

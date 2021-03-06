<?php

//define Routes
$route['/'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/index'] = array('controller' => 'IndexController', 'uniqueName' => 'index');
$route['/index.html'] = array('controller' => 'IndexController', 'uniqueName' => 'index');


$route['/login'] = array('controller' => 'LoginController', 'uniqueName' => 'login');
$route['/login.html'] = array('controller' => 'LoginController', 'uniqueName' => 'login');

$route['/logout'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');
$route['/logout.html'] = array('controller' => 'LogoutController', 'uniqueName' => 'logout');


$route['/rangliste.html'] = array('controller' => 'RanglisteController', 'uniqueName' => 'rangliste');
$route['/rangliste'] = array('controller' => 'RanglisteController', 'uniqueName' => 'rangliste');

$route['/anmeldung.html'] = array('controller' => 'AnmeldungController', 'uniqueName' => 'anmeldung');
$route['/anmeldung'] = array('controller' => 'AnmeldungController', 'uniqueName' => 'anmeldung');
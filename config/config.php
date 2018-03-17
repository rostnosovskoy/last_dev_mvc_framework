<?php

//use lib\Config;

Config::set('site_name', "Your site");
Config::set('languages', ['en', 'fr']);

Config::set('routes', [
    'default' => '',
    'admin' => 'admin_'
]);

Config::set('default_route', 'default');
Config::set('default_language', 'en');
Config::set('default_controller', 'pages');
Config::set('default_action', 'index');
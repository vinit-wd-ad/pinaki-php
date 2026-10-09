<?php

define('ABS_PATH', __DIR__ . '/');
// define('BASE_URL', 'https://pinaki.adsensedesigns.com/');
// define('BASE_URL', 'http://localhost/Pinaki/');
define('BASE_URL', 'http://local.pinaki.com/');

$url = $_SERVER['REQUEST_URI'];

$active = '';


if ($url === '/') {
    $page_active = 'home';
    $ser_active = '';
    $active = '';
} else if ($url === '/about') {
    $page_active = 'about';
    $ser_active = '';
    $active = '';
} else if ($url === '/services') {
    $page_active = 'services';
    $ser_active = '';
    $active = '';
} else if ($url === '/regulatory-affairs') {
    $ser_active = 'regulatory-affairs';
    $page_active = 'services';
    $active = '';
} else if ($url === '/legal-services') {
    $ser_active = 'legal-services';
    $page_active = 'services';
    $active = '';
} else if ($url === '/quality-assurance') {
    $ser_active = 'quality-assurance';
    $page_active = 'services';
    $active = '';
} else if ($url === '/cdsco-dcgi-license') {
    $active = 'cdsco-dcgi-license';
    $page_active = 'services';
     $ser_active = '';
} else if ($url === '/nppa-pricing-overcharging-matters') {
    $active = 'nppa-pricing-overcharging-matters';
    $page_active = 'services';
     $ser_active = '';
} else if ($url === '/fssai-food-license') {
    $active = 'fssai-food-license';
    $page_active = 'services';
     $ser_active = '';
} else if ($url === '/legalization-mea-embassy') {
    $active = 'legalization-mea-embassy';
    $page_active = 'services';
     $ser_active = '';
} else if ($url === '/state-license') {
    $active = 'state-license';
    $page_active = 'services';
     $ser_active = '';
} else if ($url === '/central-bureau-of-narcotics-quota') {
    $active = 'central-bureau-of-narcotics-quota';
    $page_active = 'services';
     $ser_active = '';
} else if ($url === '/dsir') {
    $active = 'dsir';
    $page_active = 'services';
     $ser_active = '';
} else if ($url === '/our-clients') {
    $page_active = 'our-clients';
    $ser_active = '';
    $active = '';
} else if ($url === '/contact') {
    $page_active = 'contact';
    $ser_active = '';
    $active = '';
} else {
    $active = '';
    $page_active = '';
    $ser_active = '';
}

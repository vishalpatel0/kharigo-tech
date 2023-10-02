<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about-us', 'Home::about_Us');
$routes->get('/services', 'Home::services');
$routes->get('/pricing-plans', 'Home::pricing_plans');
$routes->get('/contact-us', 'Home::contact_us');

$routes->post('/submit_enquiry', 'Home::submit_enquiry');
$routes->post('/contact_support', 'Home::contact_support');

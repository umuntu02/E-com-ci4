<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


 $views = [
    '/'                            => 'root',
    'home',
    'shop',
    'blog',
    'about',
    'contact',
    'cart',
];

// ---

foreach ($views as $key => $val) {
    $url = is_int($key) ? $val : $key;
    $routes->get($url, "ViewController::$val");
}

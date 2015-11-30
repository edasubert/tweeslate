<?php
use Cake\Routing\Router;

Router::plugin('TctTwitterSource', function ($routes) {
    $routes->fallbacks('DashedRoute');
});

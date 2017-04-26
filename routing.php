<?php
// ROUTING
include 'dispatcher.php';
$parsed_url = parse_url($_SERVER['REQUEST_URI']);
foreach ($aRoutes as $aRoute) {
    if (BASE_PATH . $aRoute['rule'] == rtrim($parsed_url['path'], '/')) {
        include $aRoute['controller'] . '.php';
    }
}
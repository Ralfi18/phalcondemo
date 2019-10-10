<?php

use Phalcon\Loader;

$loader = new Loader();

/**
 * Register Namespaces
 */
$loader->registerNamespaces([
    'Phalcondemo\Models' => APP_PATH . '/common/models/',
    'Phalcondemo'        => APP_PATH . '/common/library/',
]);

/**
 * Register module classes
 */
$loader->registerClasses([
    'Phalcondemo\Modules\Frontend\Module' => APP_PATH . '/modules/frontend/Module.php',
    'Phalcondemo\Modules\Cli\Module'      => APP_PATH . '/modules/cli/Module.php'
]);

$loader->register();

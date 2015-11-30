<?php

use Cake\Core\Configure;
use Cake\Core\Configure\Engine\PhpConfig;

// Use composer to load the autoloader.
require ROOT . DS . 'plugins' . DS . 'TctTwitterSource' . DS . 'vendor' . DS . 'autoload.php';

Configure::load('twitter', 'default');
?>

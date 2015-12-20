<?php
// Use composers autoload.php if available
if (file_exists(dirname(__FILE__) . '/../vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/../vendor/autoload.php';
} elseif (file_exists(dirname(__FILE__) . '/../../../autoload.php')) {
    require_once dirname(__FILE__) . '/../../../autoload.php';
} else {
    throw new \RuntimeException("Please run 'composer install' first to set up autoloading.");
}

error_reporting(E_ERROR | E_PARSE | E_COMPILE_ERROR);

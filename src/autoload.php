<?php


if (file_exists(dirname(__DIR__) . '/vendor/autoload.php')) {

    require_once(dirname(__DIR__) . '/vendor/autoload.php');
    defined('VENDOR_DIR') or define('VENDOR_DIR', dirname(__DIR__) . '/vendor');

} elseif (file_exists(dirname(__DIR__) . '/../vendor/autoload.php')) {

    require_once(dirname(__DIR__) . '/../vendor/autoload.php');
    defined('VENDOR_DIR') or define('VENDOR_DIR', dirname(__DIR__) . '/../vendor');
}



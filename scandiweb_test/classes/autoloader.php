<?php

spl_autoload_register( function($class) {
    $path = $_SERVER['DOCUMENT_ROOT'] . '/demo/src/classes/';
    require_once  $path . $class .'.php';
   });

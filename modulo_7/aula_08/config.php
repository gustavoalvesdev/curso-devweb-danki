<?php 

spl_autoload_register(function ($class) {
    if (file_exists('classes' . DIRECTORY_SEPARATOR . $class . '.php')) {
        require 'classes' . DIRECTORY_SEPARATOR . $class . '.php';
    }
});

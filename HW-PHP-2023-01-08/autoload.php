<?php

function myAutoloader(string $class)
{
    include_once(str_replace('\\', '/', __DIR__ . "/$class.php"));
}

spl_autoload_register('myAutoloader');
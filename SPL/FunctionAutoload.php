<?php
// function Autoload($className)
// {
//     require_once 'libs/' . $className . '.php';
// }
// spl_autoload_register('Autoload');

function Autoload($className)
{
    // require_once 'libs/' . $className . '.php';
    set_include_path('libs/');
    spl_autoload($className);
}
spl_autoload_register('Autoload');
Bootstrap::run();

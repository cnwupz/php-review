<?php
spl_autoload_extensions('.php,.class.php');
set_include_path(get_include_path() . PATH_SEPARATOR . 'libs' . PATH_SEPARATOR);
spl_autoload_register();

Bootstrap::run();

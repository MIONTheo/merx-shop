<?php

require __DIR__ . '/kirby/bootstrap.php';

echo (new Kirby())->render();

// if(extension_loaded('gd')&& function_exists('gd_info')){
//     echo "Gd installed";
// }else {
//     echo "Gd not installed";
// }

// echo phpinfo();

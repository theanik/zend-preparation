<?php


// in this way we can see all installed extension
// echo phpinfo();
// print_r(get_loaded_extensions());
echo shell_exec("php -m");

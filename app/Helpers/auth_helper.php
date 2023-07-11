<?php

use CodeIgniter\Config\Services;

if(! function_exists('current_user')){
    function current_user(){
        $auth = Services::auth();
        return $auth->getCurrentUser();
    }
}
?>
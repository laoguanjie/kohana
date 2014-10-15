<?php

class Model_Url {

    public static function zboot(){
        $route = APPPATH.'classes/Controller/config/route.php';
        if(is_readable($route)){
            require_once($route);
        }
    }
}
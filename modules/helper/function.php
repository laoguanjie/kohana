<?php defined('SYSPATH') or die('No direct script access.');


function d($info){
    echo Debug::vars($info);
}

function dd($info){
    d($info);
    die;
}

function dlog($info){
    $info = var_export($info,true);
    $today_path = APPPATH."/logs/";

    if(!is_dir($today_path)) {
        mkdir($today_path, 0777);
        chmod($today_path, 0777);
    }

    $filename = 'test.log';
    $filename = $today_path . $filename;
    $is_chmod = !file_exists($filename);

    error_log(date('Y-m-d H:i:s') . ' ' .$info . "\n", 3, $filename);
    if(true == $is_chmod){
        chmod($filename, 0777);
    }

}
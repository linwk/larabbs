<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/3/27
 * Time: 14:27
 */
function route_class(){
    return str_replace('.','-',Route::currentRouteName());
}
<?php
/**
 * Created by PhpStorm.
 * User: pasargad
 * Date: 07/28/2019
 * Time: 06:36 PM
 */

namespace Core;


class View
{
public static function rander($src,$arg=[]){
extract($arg);
$file='../App/Views/'.$src.'.php';
return require_once $file;
}
public static function lt($src,$arg=[],$dir){
    extract($arg);
$file='../App/Views/'.$dir.'/layout/'.$src.'.php';
return include_once $file;
}
}
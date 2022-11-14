<?php
/**
 * Created by PhpStorm.
 * User: pasargad
 * Date: 07/28/2019
 * Time: 11:50 PM
 */

namespace Core;


class Error
{
public static function handel($e){
    $line=$e->getLine();
    $code=$e->getCode();
    $file=$e->getFile();
    $mess=$e->getMessage();
if(true){
echo 'Eror: in line'.$line.'and in File '.$file.' message:'.$mess;
}else{
    $log=__DIR__.'/../stroge/logsError/'.date('Y-m-d').'.txt';
    ini_set('error_log',$log);
    $mess='Eror: in line '.$line.' and in File '.$file.' message: '.$mess;
    error_log($mess);
    view::rander('defult/404',[
        'title'=>'چیزی یافت نشد'
    ]);
}
}
}
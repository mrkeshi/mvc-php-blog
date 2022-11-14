<?php
session_start();
ob_start();

require_once '../App/Model/jdf.php';
require_once '../vendor/autoload.php';
require_once '../App/addRouter.php';
$url=$_SERVER['QUERY_STRING'];
set_exception_handler('\Core\Error::handel');
$obj->okmatch($url);

?>
<?php
/*spl_autoload_register('myAutolaoder');


 function myAutolaoder($className){
$path="classes/";
$ext=".class.php";
$fullpath=$path.$className.$ext;

if(!file_exists($fullpath)){
    	return false;
    }
    include_once $fullPath;
}*/



spl_autoload_register('myAutoLoader');

 function myAutoLoader($className){

    $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if(strpos($url,'include')!==false){
        $path='../classes/';
    }else{
        $path='classes/';
    }
    $ext='.class.php';
    require_once $path.$className.$ext;
 }
?>
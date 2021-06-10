<?php
// echo md5("rohit123");exit;
session_start();
// session_destroy();
// print_r($_SESSION);
$mod='login';
$do='index';
$id='';
if(isset($_SESSION['logindtl'])){
	if(isset($_GET['url'])){
		$url=explode('/',rtrim($_GET['url'],'/'));
		
		$mod=$url[0];
		if(isset($url[1]))
			$do=$url[1];

		if(isset($url[2]))
			$id=$url[2];
		if($mod=='login' && $do=='index'){
			$mod="banner";
			$do="index";		
		}
	}
	else{
		$mod="banner";
		$do="index";
	}
}

// session_start(); 
include "config/config.php";
include 'libs/Db.php';
$dbobj=new Db;
include "header.php";
if(file_exists("modules/$mod/$do.php")){
	include "modules/$mod/$do.php";
}else{
		include "modules/photo_gallary/index.php";
}
include 'footer.php';
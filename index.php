<?php 
session_start();
// error_reporting(0);
$mod='banner';
$do='index';
$id='';
if(isset($_GET['url'])){
	$url=explode('/',rtrim($_GET['url'],'/'));
	$mod=$url[0];

	if(isset($url[1]))
		$do=$url[1];

	if(isset($url[2]))
		$id=$url[2];
}
include 'config/config.php';
include 'libs/Db.php';
$dbobj=new Db;
include 'header.php';
if(file_exists("modules/$mod/$do.php")){
	include "modules/$mod/$do.php";
}else{
	include 'modules/banner/index.php';
}
include 'footer.php';
?>
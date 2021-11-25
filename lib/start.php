<?php
	mb_internal_encoding("UTF-8");
//	error_reporting(E_ALL);
//	ini_set("display_errors", 1);
	session_start();
	
	$message = false;
	define("SECRET", "jsdkhfisjf");
	define("ADM_LOGIN", "admin");
	define("ADM_PASSWORD", "b747fbec132a81c160a2164c791018dd");
	
	define("DB_HOST", "localhost");
	define("DB_USER", "root");
	define("DB_PASSWORD", "");
	define("DB_NAME", "faberlicengine");
	
	define("SMS_USER", "");
	define("SMS_PASSWORD", md5(""));
	define("SMS_PHONE", "");
	
	define("DIRECT_TOKEN", "");
	
	define("FORMAT_DATE", "Y.m.d H:i:s");
	// z:\home\localhost\www\landing\
	require_once "D:\openserver\OpenServer\domains/faberlicengine\lib\start.php";
	require_once "D:\openserver\OpenServer\domains/faberlicengine\lib\start.php";
?>
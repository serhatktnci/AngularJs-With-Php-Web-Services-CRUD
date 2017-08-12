<?php
	error_reporting(E_ALL);
	date_default_timezone_set("UTC");
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

	include "framework.php";
	Helper::parseJsonPostData();

	if($_SERVER["REQUEST_METHOD"] == "OPTIONS")
	{
		die("GET,POST,PUT,DELETE");
	}

	$section = @$_GET['s'];
	$task = @$_GET['t'];

	//login required pages
	if($section == "panel")
	{
		$userId = @$_REQUEST['userId'];
		$token =  @$_REQUEST['auth_token'];
		
		if(!Helper::checkLogin($userId,$token))
		{
			$r = new Response();
			$r->errorCode = 1;
			$r->message = "Login Required";
			$r->writeJson();
			die();
		}
	}

	$section = ucfirst($section)."Controller";
	
	$controller = new $section();
	$controller->$task();
	
?>

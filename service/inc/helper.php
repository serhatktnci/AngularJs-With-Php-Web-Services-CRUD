<?php

	class Helper
	{
		
		static function checkLogin($userId, $token)
		{	
			$correctToken = self::generateToken($userId) ;
			return $correctToken == $token;
		}
			
		static function generateToken($userId)
		{
			//TODO connect to database here to read keyword
			$keyword = "COKZORBIRKELIME";
			$str = $keyword.$userId.substr($keyword,0,2);
			return sha1($str);
		}
		
		static function parseJsonPostData()
		{
			$headers = getallheaders();
			if(isset($headers['Content-Type']) && substr( $headers['Content-Type'],0,16) == "application/json"){
				$_POST = array_merge($_POST, (array) json_decode(trim(file_get_contents('php://input')), true));
				$_REQUEST = array_merge($_REQUEST, (array) json_decode(trim(file_get_contents('php://input')), true));
			}
			
		}
		
		
		
	}
?>
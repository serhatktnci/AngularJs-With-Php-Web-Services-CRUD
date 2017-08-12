<?php
class Response
{
	public $errorCode;
	public $message ; 
	public $data;
	
	function __construct()
	{
		$this->errorCode = 0;
	}
	
	
	public function writeJson()
	{
		echo json_encode($this);		
	}
}

?>
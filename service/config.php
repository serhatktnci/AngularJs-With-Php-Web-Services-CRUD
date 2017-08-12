<?php

	$db_host = "localhost";
	$db_name = "db_name";
	$db_username = "db_username";
	$db_password = "";

	$database = new PDO("mysql:dbname={$db_name};host={$db_host}", $db_username, $db_password);

    class PPDB extends PDO
	{
		public function query($query)
		{
			$result = parent::query($query);
			if((int) $this->errorCode() > 0)
			{
				$error = $this->errorInfo();
				global $db_name;

			}
			return $result;	
		}
	}
?>
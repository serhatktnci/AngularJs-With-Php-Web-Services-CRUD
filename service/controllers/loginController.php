<?php
class LoginController
{
    function login()
    {
        global $database;
        $user = $_POST['loginParams'];

        $response  = new Response();
        $result = $database->query("SELECT * FROM admin_user WHERE username ='".$user["username"]."' AND password = '".$user["password"]."' LIMIT 1");

        if($result->rowCount())
        {
            foreach($result as $row)
            {
                $userId = $row["id"];
                $response->data = new stdClass();
                $response->data->auth_token = Helper::generateToken($userId);
                $response->data->userId = $userId;
            }
        }
        else
        {
            $response->errorCode = 2;
            $response->message = "Yanlış kullanıcı adı ve şifre girdiniz.";
        }
        $response->writeJson();

    }
}
	

	
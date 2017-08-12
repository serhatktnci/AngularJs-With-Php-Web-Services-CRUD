<?php
	class PanelController
	{
		function addContent()
		{
			global $database;
        		$content = json_decode(json_encode($_POST["params"]), FALSE);
                        if($database->query("INSERT INTO content(title, content) VALUES('{$content->title}', '{$content->content}')")) {
				echo "ok";
			} else {
				echo "not ok";
			}
			
		}

		function getContent()
		{
			global $database;
			$result = $database->query("SELECT * FROM content");
			
			$arr = array();
			foreach($result as $row)
			{	
				$obj = new stdClass();
				$obj->id = $row['id'];
				$obj->title = $row['title'];
				$obj->content =$row['content'];
                                $obj->created_at =$row['created_at'];
				$arr[] = $obj;
			}
			
			echo json_encode($arr);
		}
                
                function deleteContent(){
                    if(isset($_GET['id'])){                        
			global $database;
			$id = $_GET["id"];
			$database->query("DELETE FROM content WHERE id = {$id}");
                    }
                }
				
	}

?>
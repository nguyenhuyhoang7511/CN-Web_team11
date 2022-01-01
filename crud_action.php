<?php
require_once("DBController.php");
$db_handle = new DBController();

$action = $_POST["action"];
if(!empty($action)) {
	switch($action) {		
		case "add":
			// $date = date('Y-m-d H:i:s');
			// $Username = "Nguyễn Huy Hoàng";
		    $query = "INSERT INTO db_comment(message) VALUES('".$_POST["txtmessage"]."')";
			// $query ="INSERT INTO comment(user_comment,message,date) VALUES ('" . $Username . "','" . $_POST["txtmessage"] . "','" . $date . "')";
		    $insert_id = $db_handle->insert($query);
		    if($insert_id){
				  echo '<div class="message-box"  id="message_' . $insert_id . '">
						<div>
						<button class="btnEditAction" name="edit" onClick="showEditBox(this,' . $insert_id . ')">Edit</button>
<button class="btnDeleteAction" name="delete" onClick="callCrudAction(\'delete\',' . $insert_id . ')">Delete</button>
						</div>
						<div class="message-content">' . $_POST["txtmessage"] . '</div></div>';
			}
			break;
			
		case "edit":
		    $query = "UPDATE db_comment set message = '".$_POST["txtmessage"]."' WHERE  id=".$_POST["message_id"];
		    $result = $db_handle->execute($query);
			if($result){
				  echo $_POST["txtmessage"];
			}
			break;			
		
		case "delete": 
		    if(!empty($_POST["message_id"])) {
		        $query = "DELETE FROM db_comment WHERE id=".$_POST["message_id"];
		        $result = $db_handle->execute($query);
			}
			break;
	}
}
?>
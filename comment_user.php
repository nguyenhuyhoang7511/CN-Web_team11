<?php
require_once("DBController.php");
$db_handle = new DBController();
    if(isset($_POST["nameUS"]))  
    {  
        echo  ($_POST["nameUS"]);
        $query2 = "INSERT INTO db_comment(user_comment) VALUES('".$_POST["nameUS"]."')";
        $insert_id = $db_handle->insert($query2);
    }

?>

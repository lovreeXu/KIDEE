<?php  
  

if($_POST['username']!=NULL && $_POST['pwd']!=NULL &&$_POST['new_pwd']!=NULL)
{

	$json=json_encode(array(
	"result" => "1"
	));
}
 else
 {
 	$json=json_encode(array(
	"result" => "0"
	));
 }
 
echo $json;  
  
?>
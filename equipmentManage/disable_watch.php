<?php

if($_POST['kid']!=NULL)
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

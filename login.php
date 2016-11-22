<?php  
  
//header('Content-type:text/json');

//这句是重点，它告诉接收数据的对象此页面输出的是json数据；  

if($_POST['username']=="123" && $_POST['pwd']=="123")
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
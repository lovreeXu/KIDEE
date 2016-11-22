<?php
if($_POST['usertype']!=NULL && $_POST['value']!=NULL)
{
	$json=json_encode(array(
    "p_username"=>"1235467@qq.com",
  "p_number"=>"18868877877",
  "pid"=>"1234567",
  "kids"=>array(
    array("kid"=>"12312312",
          "k_number"=>"18868877577",
          "imei"=>"123456789123456",
          "k_nickname"=>"大狗",
          "qrcode"=>"32431421"),
    array("kid"=>"323123212",
          "k_number"=>"18868877677",
          "imei"=>"123456787123456",
          "k_nickname"=>"二狗",
          "qrcode"=>"32451421"),
		array("kid"=>"323123212",
          "k_number"=>"18868877677",
          "imei"=>"123456787123456",
          "k_nickname"=>"xiao狗",
          "qrcode"=>"32451421"),
		array("kid"=>"323123212",
 				 "k_number"=>"18868877677",
 				 "imei"=>"123456787123456",
 				 "k_nickname"=>"4狗",
 				 "qrcode"=>"32451421")
  )

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

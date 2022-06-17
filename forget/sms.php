<?php 
//include('../../database.php');

//##########################################################################
// ITEXMO SEND SMS API - PHP - CURL-LESS METHOD
// Visit www.itexmo.com/developers.php for more info about this API
//##########################################################################
function itexmo($number,$message,$apicode,$passwd){
		$url = 'https://www.itexmo.com/php_api/api.php';
		$itexmo = array('1' => $number, '2' => $message, '3' => $apicode, 'passwd' => $passwd);
		$param = array(
			'http' => array(
				'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
				'method'  => 'POST',
				'content' => http_build_query($itexmo),
			),
		);
		$context  = stream_context_create($param);
		return file_get_contents($url, false, $context);
}
//##########################################################################

$num1 = $number1;
//$num = "09065084748";
$password = md5("password");
$sql1 = "UPDATE login SET password = '$password' WHERE id_num='$id_num'";
$result1 = mysqli_query($conn, $sql1);

$api = "TR-ROMEL005770_9KDWB";
$apiPass = "kc]u!&4%xq";

				$msg = "Account Info: USERNAME: ".$id_num. " PASSWORD: password,  Please change it immediately";
				$result = itexmo($num1,$msg,$api, $apiPass);
				if ($result == ""){
				echo "iTexMo: No response from server!!! Please Connect to the internet for SMS notification Purpose ";	
				}else if ($result == 0){
				//echo "Message Sent!";
				}
				else{	
				echo "Error Num ". $result . " was encountered!";
				}

	

 ?>
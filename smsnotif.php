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
$sms_i = date('d');
$sql1 = "SELECT id_num FROM releasing WHERE sms_i = '$sms_i'";
$result1 = mysqli_query($conn,$sql1);
$b_name = mysqli_fetch_assoc($result1);

$id_num = $b_name['id_num'];

$sqltxt = "SELECT contact_num FROM login WHERE id_num='$id_num'";
$txtres = mysqli_query($conn, $sqltxt);
$numrow = mysqli_fetch_assoc($txtres);



if (mysqli_num_rows($txtres)!=0) {

	$num1 = $numrow["contact_num"];

$api = "TR-JAIRU184101_43FQG";
$apiPass = "kjllmby[9}";

				$msg = "I would like to remind you that tomorrow is the returning date of the item you borrow Thank You";
				$result = itexmo($num1,$msg,$api, $apiPass);
				if ($result == ""){
				echo "iTexMo: No response from server!!! Please Connect to the internet for SMS notification Purpose ";	
				}else if ($result == 0){
				//echo "Message Sent!";
				}
				else{	
				echo "Error Num ". $result . " was encountered!";
				}
}
	

 ?>
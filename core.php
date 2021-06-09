<?php
	/* Main server source code */

	$servers = array(
		"https://cdn.krnl.ca",
		"https://k-storage.com"
	);
	$scores = array(0,0);

	for($i = 0; $i < sizeof($servers); $i++)
	{
		$ch = curl_init($servers[$i] . '/syschain/score');
		
		curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0');
		curl_setopt($ch, CURLOPT_REFERER, $servers[$i] . '/servsys/score');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		$data = curl_exec($ch);
        
		$scores[$i] = intval($data);
		echo $data . ',';
		
        curl_close($ch);
	}
	$server = $servers[array_keys($scores, min($scores))[0]];
	echo $server;
?>

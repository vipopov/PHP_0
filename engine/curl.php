<?php

$url = 'http://azartmax.info/githubcrawler';

//The IP address of the proxy you want to send
// URL from proxy get https://hidemy.name/ua/proxy-list/?maxtime=700#list
//your request through.
$proxyIP = '31.186.102.165';

//The port that the proxy is listening on.
$proxyPort = '3128';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL , 1);
curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

//Set the proxy IP.
curl_setopt($ch, CURLOPT_PROXY, $proxyIP);

//Set the port.
curl_setopt($ch, CURLOPT_PROXYPORT, $proxyPort);

//Specify the username and password.
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$proxyUsername:$proxyPassword");

//Execute the request.
$output = curl_exec($ch);

//Check for errors.
if(curl_errno($ch)){
	echo "cURL got error: " . curl_error($ch) . ". Error number is: " . curl_errno($ch) . "<br />";
	// cURL got error: Proxy CONNECT aborted. Error number is: 56
	// after this error Proxy still can work fine
	if (curl_errno($ch) == 56) {
		sleep(10);
		$output = curl_exec($ch);
		if(curl_errno($ch)){
			echo "cURL got error: " . curl_error($ch) . ". Error number is: " . curl_errno($ch);
		}
	}
}

//Print the output.
echo $output;
<?php
// code from https://thisinterestsme.com/php-curl-proxy/

// test url is crawler.salomoon.info

//The URL you want to send a cURL proxy request to.
$url = 'http://repaircountry.info/';

//The IP address of the proxy you want to send
// URL from proxy get https://hidemy.name/ua/proxy-list/?maxtime=700#list
//your request through.
$proxyIP = '31.186.102.165';

//The port that the proxy is listening on.
$proxyPort = '3128';

//The username for authenticating with the proxy.
$proxyUsername = 'myusername';

//The password for authenticating with the proxy.
$proxyPassword = 'mypassword';


$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL , 1);

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
    throw new Exception(curl_error($ch));
}

//Print the output.
echo $output;

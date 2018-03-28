<?php
//$access_token = 'zy9bDK/VoakRWSYKudJrh4CxL0Nlcyvz9tHJ6bLmUIPx0CiRiSmIAArfbqFpeGFd0/tVCzRgEAn1Nyp+Vb2QaUMkoLxxzxLYGWUzz+M1pS7bHHBL4+fufL0wCTLbwqY8wnrusEk4o3DjJJHNwvQBggdB04t89/1O/w1cDnyilFU=';
echo 'verify.php'

$clientid = '1570757358';
$clientsecret = '63027787afefca74c046df98f144a3df';
$url = 'https://api.line.me/v2/oauth/accessToken';
$headers = array('Content-Type:application/x-www-form-urlencoded');
$body =	'grant_type=client_credentials&client_id=' . $clientid .'client_secret=' . $clientsecret;

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);

curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			
$result = curl_exec($ch);
curl_close($ch);
echo $result;
?>
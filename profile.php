<?php
$userid = 'fennxfoci';
$bearer = 'gO9loblB5FjTffIbSm/JdZxwA1uZlwQbpmAIis6oWHWqB1g/C6F34UIN2yn29V7R0/tVCzRgEAn1Nyp+Vb2QaUMkoLxxzxLYGWUzz+M1pS4h0FvMK82Hdb2grrg6hO/m9qMMW++evdahTcbD9hrB2o9PbdgDzCFqoOLOYbqAITQ=';
//$url = 'https://api.line.me/v2/bot/profile/' . $userid;
$url = 'https://api.line.me/v2/bot/profile/fennxfoci';
//$headers = array('Authorization: Bearer ' . $bearer);
$headers = array('Authorization: Bearer JVc7NIOEz1KDqtec2VfpoVK8m1f7krwhB1hXNWBn3Ncsn6UQ+KZ03QyqQWlDg0gz0/tVCzRgEAn1Nyp+Vb2QaUMkoLxxzxLYGWUzz+M1pS7Glo0orHx89grcKIWj+wxKBu7EnXdb/bc3pgzu7JTS349PbdgDzCFqoOLOYbqAITQ=');

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_GET, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			
$result = curl_exec($ch);
curl_close($ch);
echo $result;
?>

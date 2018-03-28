<?php
$userid = 'fennxfoci';
$bearer = 'gO9loblB5FjTffIbSm/JdZxwA1uZlwQbpmAIis6oWHWqB1g/C6F34UIN2yn29V7R0/tVCzRgEAn1Nyp+Vb2QaUMkoLxxzxLYGWUzz+M1pS4h0FvMK82Hdb2grrg6hO/m9qMMW++evdahTcbD9hrB2o9PbdgDzCFqoOLOYbqAITQ=';
//$url = 'https://api.line.me/v2/bot/profile/' . $userid;
$url = 'https://api.line.me/v2/bot/profile/fennxfoci';
//$headers = array('Authorization: Bearer ' . $bearer);
$headers = array('Authorization: Bearer j3sRJUIlCeYWjDGVeQBW9b7fx2ab2rK9E6E3OOZdU0/tVCzRgEAn1Nyp+Vb2QaUMkoLxxzxLYGWUzz+M1pS4XUwdidk0QbkyZXGznJWsoJ+bBvjpWEyJIBdZlzw2unY9PbdgDzCFqoOLOYbqAITQ=');

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_GET, 1);

curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			
$result = curl_exec($ch);
curl_close($ch);
echo $result;
?>

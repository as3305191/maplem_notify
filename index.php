<?php
$headers = array(
    'Content-Type: multipart/form-data',
    'Authorization:Bearer JVtjbu74jAWWb6QxvLRbZSD3019wrUP4qQNSdPAEKkC'
);
$message = array(
    'message' => 'Hello,123~'
);
$ch = curl_init();
curl_setopt($ch , CURLOPT_URL , "https://notify-api.line.me/api/notify");
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $message);
$result = curl_exec($ch);
curl_close($ch);
?>
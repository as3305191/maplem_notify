<?php


function index(){
    $headers = array(
        'Content-Type: multipart/form-data',
        'Authorization:Bearer xNNncDgnhWFeWGzWkCuJSwewhkxmEcZFERwFOngfKb4'
    );

  
    $message = array(
        'message' => 123123,
    );

    $ch = curl_init();
    curl_setopt($ch , CURLOPT_URL , "https://notify-api.line.me/api/notify");
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $message);
    $result = curl_exec($ch);
    curl_close($ch);

}

?>
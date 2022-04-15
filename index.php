<?php


function index(){
    $key = json_encode($_POST["key"]);
    $msg = json_encode($_POST["msg"]);
    $msg1 = json_decode($_POST["msg"]);
    $msg2 = $_POST["msg"];
    $headers = array(
        'Content-Type: multipart/form-data',
        'Authorization:Bearer '.$key 
    );

    $message = array(
        'message' =>$msg.$msg1.$msg2 
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
<?php
$curl = curl_init();
$botKey = '';
$chatId = '';
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.telegram.org/$botKey/sendDocument",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('chat_id' => $chatId,'document'=> new CURLFILE(rand() . date('Y-m-d') .'_db.sql')),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
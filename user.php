<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://127.0.0.1:8000/api/iapprove/signin?email=iapprove@nmbz.co.zw&password=p@55w0rd",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_HTTPHEADER => array(
    "Cookie: PHPSESSID=7pm3abgq9t43m4bkf650seuvl2"
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>
<html>
<head>
  <meta http-equiv="refresh" content="10">
</head>
</html>
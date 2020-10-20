<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://graph.microsoft.com/v1.0/me/sendMail",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"{\r\n  \"message\": {\r\n    \"subject\": \"Meet for lunch?\",\r\n    \"body\": {\r\n      \"contentType\": \"Text\",\r\n      \"content\": \"The new cafeteria is open.\"\r\n    },\r\n    \"toRecipients\": [\r\n      {\r\n        \"emailAddress\": {\r\n          \"address\": \"iapprove@nmbz.co.zw\"\r\n        }\r\n      }\r\n    ],\r\n    \"ccRecipients\": [\r\n      {\r\n        \"emailAddress\": {\r\n          \"address\": \"iapprove@nmbz.co.zw\"\r\n        }\r\n      }\r\n    ]\r\n  },\r\n  \"saveToSentItems\": \"false\"\r\n}",
  CURLOPT_HTTPHEADER => array(
    "Content-Type: application/json",
    "SdkVersion: postman-graph/v1.0",
    "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJub25jZSI6IjJkUE5qZ2VRakw0NVYyd2ZTZWk3NUlVa0lkOV9uenJyVko3Z2FJYnB2LWMiLCJhbGciOiJSUzI1NiIsIng1dCI6ImtnMkxZczJUMENUaklmajRydDZKSXluZW4zOCIsImtpZCI6ImtnMkxZczJUMENUaklmajRydDZKSXluZW4zOCJ9.eyJhdWQiOiJodHRwczovL2dyYXBoLm1pY3Jvc29mdC5jb20iLCJpc3MiOiJodHRwczovL3N0cy53aW5kb3dzLm5ldC80YWM2NzRlOC04YmY4LTQxZGYtODU1Ny1hZTA2M2RkMmIwMzYvIiwiaWF0IjoxNjAzMTAxMzMyLCJuYmYiOjE2MDMxMDEzMzIsImV4cCI6MTYwMzEwNTIzMiwiYWNjdCI6MCwiYWNyIjoiMSIsImFpbyI6IkFTUUEyLzhSQUFBQWhCRzkyckROM2VTNHU0VFQxc0pRbW02UDNYNkJodDJQS0hSUzMvSHkrVVU9IiwiYW1yIjpbInB3ZCJdLCJhcHBfZGlzcGxheW5hbWUiOiJpYXBwcm92ZSIsImFwcGlkIjoiNjgyYzE4MzctMmI5Mi00ZmYyLWJlOWItOWJkM2RmN2ZlNzgzIiwiYXBwaWRhY3IiOiIxIiwiZmFtaWx5X25hbWUiOiJpYXBwcm92ZSIsImdpdmVuX25hbWUiOiJubWJ6IiwiaWR0eXAiOiJ1c2VyIiwiaXBhZGRyIjoiMTk2LjQ0LjE4Ni4xNCIsIm5hbWUiOiJubWJ6IGlhcHByb3ZlIiwib2lkIjoiMzQ0NjA4MGItYTNiMS00OTkwLTllMTktNWU4NDAxYjA0MGVkIiwib25wcmVtX3NpZCI6IlMtMS01LTIxLTEwODAwNTA2MjYtMTA5MTkxMzIxLTE3ODg2MzczMjAtNjg4NDQiLCJwbGF0ZiI6IjE0IiwicHVpZCI6IjEwMDMyMDAwQkVCN0MxNDUiLCJyaCI6IjAuQUFBQTZIVEdTdmlMMzBHRlY2NEdQZEt3TmpjWUxHaVNLX0pQdnB1YjA5OV81NE5jQU9JLiIsInNjcCI6IkFwcGxpY2F0aW9uLlJlYWQuQWxsIEFwcGxpY2F0aW9uLlJlYWRXcml0ZS5BbGwgQ2FsZW5kYXJzLlJlYWQgRGlyZWN0b3J5LkFjY2Vzc0FzVXNlci5BbGwgRG9tYWluLlJlYWQuQWxsIGVtYWlsIE1haWwuU2VuZCBvcGVuaWQgUGVvcGxlLlJlYWQgUGVvcGxlLlJlYWQuQWxsIFByZXNlbmNlLlJlYWQgUHJlc2VuY2UuUmVhZC5BbGwgcHJvZmlsZSBVc2VyLlJlYWQgVXNlci5SZWFkLkFsbCBVc2VyLlJlYWRCYXNpYy5BbGwiLCJzdWIiOiI3OEExVlBXVlZEbG9kckZ2YmlrUkktRFB6MVlxazRVUWpsUkNucjBZWnpVIiwidGVuYW50X3JlZ2lvbl9zY29wZSI6IkFGIiwidGlkIjoiNGFjNjc0ZTgtOGJmOC00MWRmLTg1NTctYWUwNjNkZDJiMDM2IiwidW5pcXVlX25hbWUiOiJpYXBwcm92ZUBubWJ6LmNvLnp3IiwidXBuIjoiaWFwcHJvdmVAbm1iei5jby56dyIsInV0aSI6IjMySWxiWXcyVDBDSDBVd0xoZ2ZBQUEiLCJ2ZXIiOiIxLjAiLCJ3aWRzIjpbImI3OWZiZjRkLTNlZjktNDY4OS04MTQzLTc2YjE5NGU4NTUwOSJdLCJ4bXNfc3QiOnsic3ViIjoiTVpnb3ZEaW5IUDR4YzZVSm5sLXNmbDFiQ1ItYWZiUjY4RnYySnZwd1NvOCJ9LCJ4bXNfdGNkdCI6MTU4NzM3OTg5Nn0.LvjUpTk-unLu4UsEnGAgKVGU4kk7U7AjO2wzwlG3htqsP8lLBvvhddy5hG5WjZThb8p8W2xlxUZ0hdIqY9_gihffOWxcHCiz_lGEK-tP7R4smQp92HoqHuKwSUAtKxBCwa8mrkRtSSpYpRFagEBfJAWlZ2fFQKCoO7oSqM-v-h_Lx59aT2mwG4mZGBKfy8iWmSIX-f4g7QBJrabzRuqVKG4mWpZKlpKgp2a6Mz7o-T-nWp2brUjACpFJ3g2WLW09kzsTyLIuV_davOfIbaigtz2NZqkRv0YnWF50_YL0hYsoryclForMu4cDkUnYwiS8ewIkvlL7iLYXsA5_q1ZpYw"
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


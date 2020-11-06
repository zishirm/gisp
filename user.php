<?php

        $username = "iapprove@nmbz.co.zw";
        $password =  "p@55w0rd";
        $client_id = "682c1837-2b92-4ff2-be9b-9bd3df7fe783";
        $client_secret = "jwZ_dY92-bfFAg_kG17sJ74Y6Wc..4r67R";


        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://login.microsoftonline.com/4ac674e8-8bf8-41df-8557-ae063dd2b036/oauth2/v2.0/token",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "grant_type=password&client_id=".$client_id."&client_secret=".$client_secret."&scope=https%3A//graph.microsoft.com/.default&userName=".$username."&password=".$password."",
          CURLOPT_HTTPHEADER => array(
            "Content-Type: application/x-www-form-urlencoded",
            "SdkVersion: postman-graph/v1.0",
            "Cookie: x-ms-gateway-slice=prod; stsservicecookie=ests; fpc=Anjq2Q_0wWhEnNPzD4dHrE5VpwgxAQAAAORt9tYOAAAAoqJNLAEAAAAzb_bWDgAAAA"
            ),
                ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
       try{
        $token = json_decode($response)->access_token;
       }
       catch(\Exception $e){
          return $response = "Network Failure";
       }
     
      $recipient = "couragetbarwe@gmail.com";
      $subject = "Test";
      echo $message = "The message here";
      
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
        CURLOPT_POSTFIELDS =>"{\r\n  \"message\": {\r\n    \"subject\": \"".$subject."\",\r\n    \"body\": {\r\n      \"contentType\": \"Text\",\r\n      \"content\": \"".$message."\"\r\n    },\r\n    \"toRecipients\": [\r\n      {\r\n        \"emailAddress\": {\r\n          \"address\": \"".$recipient."\"\r\n        }\r\n      }\r\n    ],\r\n  },\r\n  \"saveToSentItems\": \"true\"\r\n}",
        CURLOPT_HTTPHEADER => array(
          "Content-Type: application/json",
          "SdkVersion: postman-graph/v1.0",
          "Authorization: Bearer ".$token
        ),
      ));

      $response = curl_exec($curl);
     

      curl_close($curl);


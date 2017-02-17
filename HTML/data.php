<?php
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'http://www.pgyer.com/apiv1/app/viewGroup');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, 'aId=486475715bfe0c085ca739fb&_api_key=8c9f2b525341cd8401cc9d5');
    $response = curl_exec($curl);
    if(curl_errno($curl)){
        echo curl_error($curl);
    }
    curl_close($curl);
    echo $response;
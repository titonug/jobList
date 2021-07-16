<?php

namespace App\Libraries;

class Curl
{
    public function curl($url2, $headers, $method, $data_array){

        $this->url = env('BASE_URL');
        $this->curl = curl_init();
        curl_setopt($this->curl, CURLOPT_URL, $this->url . $url2);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($this->curl, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, json_encode($data_array));
        curl_setopt($this->curl, CURLOPT_HTTPHEADER, $headers);
        $this->list = curl_exec($this->curl);
        curl_close($this->curl);

        $this->data = json_decode($this->list, TRUE);

        return $this->data;
    }
}
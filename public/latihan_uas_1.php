<?php

$url = 'https://jsonplaceholder.typicode.com/posts';

//inisialisasi curl
$ch = curl_init();

//eksekusi curl untuk mengambil dengan metode get
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//ekesekusi curl
$response = curl_exec($ch);

//menutup curl
curl_close($ch);

//mengubah json menajdi array
$data = json_decode($response, true);

//menampilkan hasil data
print_r($data);


?>
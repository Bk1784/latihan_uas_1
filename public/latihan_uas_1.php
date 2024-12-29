<?php


$url = 'https://jsonplaceholder.typicode.com/posts';


//inisialisasi curl
$ch = curl_init();

//set opsi untuk metode get
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


//ekesekusi curl
$response = curl_exec($ch);

//menutup curl
curl_close($ch);

$data = json_decode($response, true);

$items = array_slice($data, 0, 5);

//menampilkan hasil data
print_r($items );


?>
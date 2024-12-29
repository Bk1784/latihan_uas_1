<?php

$url = 'https://jsonplaceholder.typicode.com/posts';

// data yang akan dikirim (format array php)
$data = array(
    'title' => 'belajar api dengan PHP',
    'body' => 'ini adalah contoh penggunaan post request',
    'userId' => 1 
);

//inisialisasi curl
$ch = curl_init();

//set opsi untuk metode post dan kirim data
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

//set agar hasil dikembalikan sebagai string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//ekesekusi curl
$response = curl_exec($ch);

//menutup curl
curl_close($ch);

//menampilkan hasil data
echo $response;


?>
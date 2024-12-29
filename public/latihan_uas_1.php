<?php

//url API tujuan (dengan ID data yang ingin dihapus)
$url = 'https://jsonplaceholder.typicode.com/posts/1';


//inisialisasi curl
$ch = curl_init();

//set opsi untuk metode delete
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

//set agar hasil dikembalikan sebagai string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//ekesekusi curl
$response = curl_exec($ch);

//menutup curl
curl_close($ch);

//menampilkan hasil data
echo $response;


?>
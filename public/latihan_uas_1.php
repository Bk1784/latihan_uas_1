<?php


$url = 'https://jsonplaceholder.typicode.com/posts';

// data yang akan dikirim
$data = array(
    'title' => 'Belajar Bersama Bagus Kurniawan',
    'body' => 'belajar bersama specialis cyber security red team, enjoy the hacking',
    'userId' => 3 //untuk mengirim data baru ke api yang sama cukup ubah data array ini

);

//inisialisasi curl
$ch = curl_init();

//set opsi untuk metode POST
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content_Type:application/json'));

//set agar hasil dikembalikan sebagai string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//ekesekusi curl
$response = curl_exec($ch);

//menutup curl
curl_close($ch);

//menampilkan hasil data
echo $response;


?>
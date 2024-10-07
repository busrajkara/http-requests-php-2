<?php
$file = 'data.json';
$data = array(
    "id" => 1,
    "title" => "updated title",
    "body" => "updated body",
    "userId" => 1
);
$current_data = json_decode(file_get_contents($file), true);
$current_data[0] = $data; // İlk veriyi güncelle

file_put_contents($file, json_encode($current_data)); // Güncellenmiş veriyi yaz

echo "PUT İsteği Başarılı!\n";
print_r($current_data);
?>
 
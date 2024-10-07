<?php
$file = 'data.json';
$data = array(
    "title" => "foo",
    "body" => "bar",
    "userId" => 1
);
$current_data = json_decode(file_get_contents($file), true);
$current_data[] = $data; // Yeni veriyi ekle

file_put_contents($file, json_encode($current_data)); // Güncellenmiş veriyi yaz

echo "POST İsteği Başarılı!\n";
print_r($current_data);
?>

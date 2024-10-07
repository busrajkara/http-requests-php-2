<?php
$file = 'data.json';
$current_data = json_decode(file_get_contents($file), true);
array_splice($current_data, 0, 1); // İlk veriyi sil

file_put_contents($file, json_encode($current_data)); // Güncellenmiş veriyi yaz

echo "DELETE İsteği Başarılı!";
?>

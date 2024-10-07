<?php
$file = 'data.json'; // Yerel JSON dosya yolu
$response = file_get_contents($file);

if ($response !== false) {
    $data = json_decode($response, true);
    echo "GET İsteği Başarılı!\n";
    print_r($data);
} else {
    echo "GET İsteği Hatası!";
}
?>

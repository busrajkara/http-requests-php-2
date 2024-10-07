# Hello Kitty Temalı PHP ile HTTP İstekleri

Bu projede, PHP kullanarak HTTP isteklerini gerçekleştirmek için dört temel örnek oluşturdum: GET, POST, PUT ve DELETE. Bu istekler, web üzerindeki veri ile etkileşimde bulunmama yardımcı oluyor. Örneklerde kendi yerel sunucumda çalışabilmem için herhangi bir API kullanmıyorum.

## Proje Yapısı

Projem aşağıdaki dosyaları içeriyor:

```
http_requests/
│
├── get_request.php
├── post_request.php
├── put_request.php
└── delete_request.php
```

### 1. `get_request.php`

Bu dosya, belirli bir kaynağı almak için GET isteği yapıyor. Örneğin, yerel dosyadan veri alıyorum.

```php
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
```

- **Açıklama**: 
  - `file_get_contents($file)` fonksiyonu, belirtilen yerel dosyadan veri alıyor.
  - Eğer istek başarılıysa, alınan verileri ekrana yazdırıyorum.

### 2. `post_request.php`

Bu dosya, yeni bir kaynak oluşturmak için POST isteği yapıyor. Örneğin, yerel bir dosyaya veri yazıyorum.

```php
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
```

- **Açıklama**: 
  - Yeni bir veri oluşturup bunu yerel dosyaya yazıyorum.
  - Eğer işlem başarılıysa, güncellenmiş veriyi ekrana yazdırıyorum.

### 3. `put_request.php`

Bu dosya, var olan bir kaynağı güncellemek için PUT isteği yapıyor.

```php
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
```

- **Açıklama**: 
  - Yerel dosyadaki ilk veriyi güncelleyip güncellenmiş veriyi yazıyorum.
  - Eğer işlem başarılıysa, güncellenmiş veriyi ekrana yazdırıyorum.

### 4. `delete_request.php`

Bu dosya, belirli bir kaynağı silmek için DELETE isteği yapıyor.

```php
<?php
$file = 'data.json';
$current_data = json_decode(file_get_contents($file), true);
array_splice($current_data, 0, 1); // İlk veriyi sil

file_put_contents($file, json_encode($current_data)); // Güncellenmiş veriyi yaz

echo "DELETE İsteği Başarılı!";
?>
```

- **Açıklama**: 
  - Yerel dosyadaki ilk veriyi siliyorum ve güncellenmiş veriyi yazıyorum.
  - Eğer işlem başarılıysa, işlem başarılı olarak kabul ediliyor.

## Kullanım

Bu dosyaları çalıştırmak için bilgisayarımda PHP yüklü olmalı. Her bir dosyayı terminal veya komut istemcisinde çalıştırarak örnek HTTP isteklerini deneyebilirim.

### Gereksinimler

- PHP 7.x veya üstü

## Sonuç

Bu proje, HTTP isteklerini anlamama ve PHP kullanarak veri ile nasıl etkileşimde bulunacağımı öğrenmeme yardımcı olacak. Daha fazla bilgi için [PHP Manual](https://www.php.net/manual/en/) belgesine göz atabilirim.
```

Bu içeriği doğrudan GitHub'a yükleyebilirsin. Başka bir konuda yardımcı olabilir miyim?

İşte Hello Kitty temalı bir README dosyası içeriği. Bu dosya, PHP ile HTTP isteklerini gerçekleştiren örnekler için hazırlanmıştır:

```
# Hello Kitty Temalı PHP ile HTTP İstekleri

Bu projede, PHP kullanarak HTTP isteklerini gerçekleştirmek için dört temel örnek oluşturdum: GET, POST, PUT ve DELETE. Bu istekler, web üzerindeki API'lerle etkileşimde bulunmama yardımcı oluyor. Örneklerimi `jsonplaceholder.typicode.com` adlı bir test API'sini kullanarak gerçekleştirdim.

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

Bu dosya, belirli bir kaynağı almak için GET isteği yapıyor. Örneğin, belirli bir gönderiyi (post) almak için kullanıyorum. 

```php
<?php
$url = "https://jsonplaceholder.typicode.com/posts/1"; // Örnek API URL'si
$response = file_get_contents($url);

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
  - `file_get_contents($url)` fonksiyonu, belirtilen URL'den veri alıyor.
  - Eğer istek başarılıysa, alınan verileri ekrana yazdırıyorum.

### 2. `post_request.php`

Bu dosya, yeni bir kaynak oluşturmak için POST isteği yapıyor. Örneğin, yeni bir gönderi oluşturmak için kullanıyorum.

```php
<?php
$url = "https://jsonplaceholder.typicode.com/posts";
$data = array(
    "title" => "foo",
    "body" => "bar",
    "userId" => 1
);
$options = array(
    'http' => array(
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => json_encode($data),
    ),
);
$context  = stream_context_create($options);
$response = file_get_contents($url, false, $context);

if ($response !== false) {
    echo "POST İsteği Başarılı!\n";
    print_r(json_decode($response, true));
} else {
    echo "POST İsteği Hatası!";
}
?>
```

- **Açıklama**: 
  - `file_get_contents($url, false, $context)` fonksiyonu, belirtilen URL'ye yeni bir veri gönderiyor.
  - Eğer istek başarılıysa, oluşturulan veriyi ekrana yazdırıyorum.

### 3. `put_request.php`

Bu dosya, var olan bir kaynağı güncellemek için PUT isteği yapıyor.

```php
<?php
$url = "https://jsonplaceholder.typicode.com/posts/1";
$data = array(
    "id" => 1,
    "title" => "updated title",
    "body" => "updated body",
    "userId" => 1
);
$options = array(
    'http' => array(
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'PUT',
        'content' => json_encode($data),
    ),
);
$context  = stream_context_create($options);
$response = file_get_contents($url, false, $context);

if ($response !== false) {
    echo "PUT İsteği Başarılı!\n";
    print_r(json_decode($response, true));
} else {
    echo "PUT İsteği Hatası!";
}
?>
```

- **Açıklama**: 
  - `file_get_contents($url, false, $context)` fonksiyonu, belirtilen URL'deki veriyi güncelliyor.
  - Eğer istek başarılıysa, güncellenen veriyi ekrana yazdırıyorum.

### 4. `delete_request.php`

Bu dosya, belirli bir kaynağı silmek için DELETE isteği yapıyor.

```php
<?php
$url = "https://jsonplaceholder.typicode.com/posts/1";
$options = array(
    'http' => array(
        'method'  => 'DELETE',
    ),
);
$context  = stream_context_create($options);
$response = file_get_contents($url, false, $context);

if ($response !== false) {
    echo "DELETE İsteği Başarılı!";
} else {
    echo "DELETE İsteği Hatası!";
}
?>
```

- **Açıklama**: 
  - `file_get_contents($url, false, $context)` fonksiyonu, belirtilen URL'deki veriyi siliyor.
  - Eğer istek başarılıysa, işlem başarılı olarak kabul ediliyor.

## Kullanım

Bu dosyaları çalıştırmak için bilgisayarımda PHP yüklü olmalı. Her bir dosyayı terminal veya komut istemcisinde çalıştırarak örnek HTTP isteklerini deneyebilirim.

### Gereksinimler

- PHP 7.x veya üstü
- `file_get_contents()` fonksiyonunun etkin olması (Varsayılan olarak etkindir)

## Sonuç

Bu proje, HTTP isteklerini anlamama ve PHP kullanarak API'lerle nasıl etkileşimde bulunacağımı öğrenmeme yardımcı olacak. Daha fazla bilgi için [PHP Manual](https://www.php.net/manual/en/) belgesine göz atabilirim.
```

Bu içeriği doğrudan GitHub'a yükleyebilirsin. Başka bir konuda yardımcı olabilir miyim?

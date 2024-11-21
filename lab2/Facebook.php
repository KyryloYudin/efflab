<?php

require_once 'SocialNetwork.php';

class Facebook implements SocialNetwork {
    public function connect($login, $password) {
        echo "Підключено до Facebook з логіном: $login\n";
    }

    public function postMessage($message) {
        echo "Повідомлення на Facebook: $message\n";
    }
}

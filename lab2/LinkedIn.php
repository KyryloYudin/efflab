<?php

require_once 'SocialNetwork.php';

class LinkedIn implements SocialNetwork {
    public function connect($login, $password) {
        echo "Підключено до LinkedIn з email: $login\n";
    }

    public function postMessage($message) {
        echo "Повідомлення на LinkedIn: $message\n";
    }
}

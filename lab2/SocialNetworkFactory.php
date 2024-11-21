<?php

require_once 'Facebook.php';
require_once 'LinkedIn.php';

class SocialNetworkFactory {
    public static function create($type) {
        switch ($type) {
            case 'facebook':
                return new Facebook();
            case 'linkedin':
                return new LinkedIn();
            default:
                throw new Exception("Невідома соціальна мережа");
        }
    }
}

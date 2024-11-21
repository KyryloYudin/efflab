<?php

interface SocialNetwork {
    public function connect($login, $password);
    public function postMessage($message);
}

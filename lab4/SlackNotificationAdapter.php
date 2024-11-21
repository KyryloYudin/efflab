<?php
require_once 'Notification.php';

class SlackNotificationAdapter implements Notification
{
    private $login;
    private $apiKey;
    private $chatId;

    public function __construct(string $login, string $apiKey, string $chatId)
    {
        $this->login = $login;
        $this->apiKey = $apiKey;
        $this->chatId = $chatId;
    }

    public function send(string $title, string $message): void
    {
        echo "Sent Slack message to chat '{$this->chatId}' with title '$title' that says '$message'.\n";
    }
}

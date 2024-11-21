<?php
require_once 'Notification.php';

class SMSNotificationAdapter implements Notification
{
    private $phone;
    private $sender;

    public function __construct(string $phone, string $sender)
    {
        $this->phone = $phone;
        $this->sender = $sender;
    }

    public function send(string $title, string $message): void
    {
        echo "Sent SMS from '{$this->sender}' to '{$this->phone}' with title '$title' that says '$message'.\n";
    }
}

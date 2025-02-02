<?php
require_once 'Notification.php';

class EmailNotification implements Notification
{
    private $adminEmail;

    public function __construct(string $adminEmail)
    {
        $this->adminEmail = $adminEmail;
    }

    public function send(string $title, string $message): void
    {
        echo "Sent email with title '$title' to '{$this->adminEmail}' that says '$message'.\n";
    }
}

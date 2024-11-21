<?php
require_once 'EmailNotification.php';
require_once 'SlackNotificationAdapter.php';
require_once 'SMSNotificationAdapter.php';

$emailNotification = new EmailNotification("admin@example.com");
$emailNotification->send("Server Alert", "Server is down!");

$slackNotification = new SlackNotificationAdapter("slack_user", "slack_api_key", "chat_123");
$slackNotification->send("Server Alert", "Server is down!");

$smsNotification = new SMSNotificationAdapter("+123456789", "MyService");
$smsNotification->send("Server Alert", "Server is down!");

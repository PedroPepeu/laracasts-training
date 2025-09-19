<?php 
    class Notification 
    {
        public function __construct(
            public string $message,
        ) {}

        public function send(): void
        {
            echo "Show flash message: " . $this->message;
        }
    }

    class EmailNotification extends Notification
    {
        public function send(): void
        {
            echo "Send email: " . $this->message;
        }
    }

    $notification = new Notification('Hello, world!');
    $notification->send();

    $emailNotification = new EmailNotification('Hello, world!');
    $emailNotification->send();
?>
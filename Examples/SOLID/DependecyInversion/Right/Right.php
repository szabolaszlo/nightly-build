<?php

interface MessengerInterface
{
    public function send($to, $title, $message);
}

class EmailSender implements MessengerInterface
{
    public function setProtocol($protocol)
    {

    }

    public function send($to, $title, $message)
    {

    }
}

class Notification
{
    private MessengerInterface $messenger;

    public function __construct(MessengerInterface $messenger)
    {
        $this->messenger = $messenger;
    }

    public function notify($to, $title, $message)
    {
        $this->messenger->send($to, $title, $message);
    }
}

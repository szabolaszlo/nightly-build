<?php

class EmailSender
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
    private EmailSender $emailSender;

    public function __construct()
    {
        $this->emailSender = new EmailSender();
    }

    public function notify($to, $title, $message)
    {
        $this->emailSender->setProtocol('smtp');
        $this->emailSender->send($to, $title, $message);
    }
}

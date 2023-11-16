<?php

interface EmailAble
{
    public function getEmail();

    public function getName();
}

interface PhoneCallAble
{
    public function getPhoneNumber();

    public function getName();
}

class User implements EmailAble, PhoneCallAble
{
    protected string $name;
    protected string $email;
    protected string $phone;
    protected string $address;
    protected string $age;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function getAge(): string
    {
        return $this->age;
    }

    public function setAge(string $age): void
    {
        $this->age = $age;
    }

    public function getPhoneNumber()
    {
    }
}

class EmailService
{
    protected $sender;

    public function sendEmail(EmailAble $user, $message)
    {
        // send email, need $user->getEmail(), $user->getName()
    }
}

class PhoneService
{
    public function call(PhoneCallAble $user)
    {
        // phone call, need $user->getPhoneNumber(), $user->getName()
    }
}

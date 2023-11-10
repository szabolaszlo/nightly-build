<?php

class User
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
}

class EmailService
{
    protected $sender;

    public function sendEmail(User $user, $message)
    {
        // send email, need $user->getEmail(), $user->getName()
    }
}

class PhoneService
{
    public function call(User $user)
    {
        // phone call, need $user->getPhoneNumber(), $user->getName()
    }
}

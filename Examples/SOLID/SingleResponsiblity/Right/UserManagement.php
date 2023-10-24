<?php

namespace Examples\SOLID\SingleResponsibility\Right;

class UserManagement
{
    private $userRepository;

    private $logger;

    public function __construct(
        UserRepositoryInterface $userRepository,
        LoggerInterface         $logger)
    {
        $this->userRepository = $userRepository;
        $this->logger = $logger;
    }

    public function isRegistered($userName, $password)
    {
        $user = $this->userRepository->findByNameAndPassword($userName, $password);

        if (!$user) {
            $this->logger->addLog("User not registered");
            return false;
        }

        return true;
    }
}


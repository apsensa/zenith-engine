<?php

declare(strict_types=1);

namespace Apsensa\ZenithEngine\Command;

readonly class UserRegistrationCommand
{
    public function __construct(
        private string $username,
        private string $password,
    )
    {
    }

    public function getEmail(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}
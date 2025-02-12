<?php

declare(strict_types=1);

namespace Apsensa\ZenithEngine\CommandHandler;

use Apsensa\ZenithEngine\Command\UserRegistrationCommand;

class UserRegistrationCommandHandler
{
    public function handle(UserRegistrationCommand $userRegistrationCommand): void
    {
        var_dump($userRegistrationCommand);
        die;
    }
}
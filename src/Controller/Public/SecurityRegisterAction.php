<?php

declare(strict_types=1);

namespace Apsensa\ZenithEngine\Controller\Front;

use Apsensa\ZenithEngine\CommandHandler\UserRegistrationCommandHandler;
use Apsensa\ZenithEngine\Factory\Command\UserRegistrationCommandFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SecurityRegisterAction extends AbstractController
{
    public function __construct(
        private readonly UserRegistrationCommandFactory $userRegistrationCommandFactory,
        private readonly UserRegistrationCommandHandler $userRegistrationCommandHandler,
    )
    {
    }

    public function __invoke(Request $request): Response
    {
        if ($request->isMethod(Request::METHOD_POST)) {
            $userRegistrationCommand = $this->userRegistrationCommandFactory->createFromRequest($request);
            $this->userRegistrationCommandHandler->handle($userRegistrationCommand);
        }

        return $this->render('public/registration/register.html.twig');
    }
}
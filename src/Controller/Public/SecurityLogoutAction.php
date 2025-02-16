<?php

declare(strict_types=1);

namespace Apsensa\ZenithEngine\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityLogoutAction extends AbstractController
{
    public function __invoke(): Response
    {
        return new Response();
    }
}
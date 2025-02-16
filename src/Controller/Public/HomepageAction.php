<?php

declare(strict_types=1);

namespace Apsensa\ZenithEngineBundle\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomepageAction extends AbstractController
{
    public function __invoke(): Response
    {
        return $this->render('@Zenith/templates/public/homepage.html.twig');
    }
}
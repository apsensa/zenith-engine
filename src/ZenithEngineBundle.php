<?php

declare(strict_types=1);

namespace Apsensa\ZenithEngineBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class ZenithEngineBundle extends AbstractBundle
{
    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        // load an XML, PHP or YAML file
//        $container->import('Resources/config/config.yaml');
//        $container->import('Resources/config/services.yaml');
//        $container->import('Resources/config/routes.yaml');

//        // you can also add or replace parameters and services
//        $container->parameters()
//            ->set('acme_hello.phrase', $config['phrase'])
//        ;
//
//        if ($config['scream']) {
//            $container->services()
//                ->get('acme_hello.printer')
//                ->class(ScreamingPrinter::class)
//            ;
//        }
    }
}
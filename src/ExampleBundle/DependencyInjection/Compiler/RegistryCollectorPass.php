<?php

namespace ExampleBundle\DependencyInjection\Compiler;

use ExampleBundle\Service\RegistryService;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class RegistryCollectorPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $taggedServices = $container->findTaggedServiceIds('example.service');
        $definition = $container->getDefinition(RegistryService::class);

        foreach ($taggedServices as $id => $attr) {
            $definition->addMethodCall('addService', [$id]);
        }
    }
}

<?php

namespace ExampleBundle\DependencyInjection\Compiler;

use ExampleBundle\Service\TaskRegistryService;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class TaskCollectorPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $taggedServices = $container->findTaggedServiceIds('example.task');
        $definition = $container->getDefinition(TaskRegistryService::class);

        foreach ($taggedServices as $id => $attr) {
            $definition->addMethodCall('addService', [$id]);
        }
    }
}

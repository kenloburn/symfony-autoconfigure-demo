<?php

namespace ExampleBundle;

use ExampleBundle\DependencyInjection\Compiler\RegistryCollectorPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ExampleBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new RegistryCollectorPass());
    }
}

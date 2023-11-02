<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle;

use Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\BuiltinType\Types;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class SharedBundle extends AbstractBundle
{
    public function getPath(): string
    {
        return __DIR__;
    }

    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->loadFromExtension('doctrine', [
            'dbal' => [
                'types' => Types::BUILTIN_TYPES_MAP
            ],
        ]);
    }
}

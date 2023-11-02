<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle;

use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class SharedBundle extends AbstractBundle
{
    public function getPath(): string
    {
        return __DIR__;
    }
}

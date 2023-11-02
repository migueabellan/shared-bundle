<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\Mapping;

use Migueabellan\SharedBundle\Domain\ValueObject\Text;
use Migueabellan\SharedBundle\Infrastructure\Persistence\Doctrine\BuiltinType\AbstractTextType;

class TextType extends AbstractTextType
{
    protected function className(): string
    {
        return Text::class;
    }
}

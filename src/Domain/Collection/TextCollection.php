<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Domain\Collection;

use Migueabellan\SharedBundle\Domain\ValueObject\Text;

final class TextCollection extends AbstractCollection
{
    protected function className(): string
    {
        return Text::class;
    }
}

<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Tests\Domain\Collection;

use Migueabellan\SharedBundle\Domain\Collection\AbstractCollection;
use Migueabellan\SharedBundle\Domain\ValueObject\Text;

final class AbstractCollectionTester extends AbstractCollection
{
    protected function className(): string
    {
        return Text::class;
    }
}

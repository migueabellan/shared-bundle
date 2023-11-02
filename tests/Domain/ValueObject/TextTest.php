<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Tests\Domain\ValueObject;

use Migueabellan\SharedBundle\Domain\ValueObject\Text;
use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{
    public function testValueObject()
    {
        $value = 'text';

        $text = Text::from($value);

        $this->assertEquals(Text::class, get_class($text));
        $this->assertEquals($value, $text->value());
        $this->assertEquals($value, $text);
    }
}

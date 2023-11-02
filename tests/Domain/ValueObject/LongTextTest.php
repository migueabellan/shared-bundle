<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Tests\Domain\ValueObject;

use Migueabellan\SharedBundle\Domain\ValueObject\LongText;
use PHPUnit\Framework\TestCase;

class LongTextTest extends TestCase
{
    public function testValueObject()
    {
        $value = 'text';
        $text = LongText::from($value);

        $this->assertEquals(LongText::class, get_class($text));
        $this->assertEquals($value, $text->value());
        $this->assertEquals($value, $text);
    }
}

<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Tests\Domain\ValueObject;

use Migueabellan\SharedBundle\Domain\Exception\InvalidArgumentException;
use Migueabellan\SharedBundle\Domain\ValueObject\Text;
use PHPUnit\Framework\TestCase;

class TextTest extends TestCase
{
    public function testNotValid()
    {
        $this->expectException(InvalidArgumentException::class);

        $value = 'string string string string string string string string string string
            string string string string string string string string string string string
            string string string string string string string string string string string
            string string string string string';

            Text::from($value);
    }

    public function testValueObject()
    {
        $value = 'string';
        $text = Text::from($value);

        $this->assertEquals(Text::class, get_class($text));
        $this->assertEquals($value, $text->value());
        $this->assertEquals($value, $text);
    }
}

<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Tests\Domain\ValueObject;

use Migueabellan\SharedBundle\Domain\Exception\InvalidArgumentException;
use Migueabellan\SharedBundle\Domain\ValueObject\Str;
use PHPUnit\Framework\TestCase;

class StrTest extends TestCase
{
    public function testNotValid()
    {
        $this->expectException(InvalidArgumentException::class);

        $value = 'string string string string string string string string string string
            string string string string string string string string string string string
            string string string string string string string string string string string
            string string string string string';

        Str::from($value);
    }

    public function testValueObject()
    {
        $value = 'string';

        $str = Str::from($value);

        $this->assertEquals(Str::class, get_class($str));
        $this->assertEquals($value, $str->value());
        $this->assertEquals($value, $str);
    }
}

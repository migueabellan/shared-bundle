<?php

declare(strict_types=1);

namespace Migueabellan\SharedBundle\Tests\Domain\Collection;

use Migueabellan\SharedBundle\Domain\ValueObject\Str;
use PHPUnit\Framework\TestCase;

class AbstractCollectionTest extends TestCase
{
    public function testCollection()
    {
        $array = [
            Str::from('a'),
            Str::from('b'),
            Str::from('c')
        ];

        $collection = AbstractCollectionTester::from($array);

        $this->assertEquals(AbstractCollectionTester::class, get_class($collection));
        $this->assertEquals(3, $collection->count());
        $this->assertEquals($array, $collection->items());
        $this->assertFalse($collection->isEmpty());
    }

    public function testEmpty()
    {
        $collection = AbstractCollectionTester::empty();

        $this->assertEquals(AbstractCollectionTester::class, get_class($collection));
        $this->assertEquals(0, $collection->count());
        $this->assertEquals([], $collection->items());
        $this->assertTrue($collection->isEmpty());
    }

    public function testAddItem()
    {
        $a = Str::from('c');
        $b = Str::from('b');
        $c = Str::from('c');
        $array = [$a, $b];

        $collection = AbstractCollectionTester::from($array);

        $this->assertEquals(2, $collection->count());

        $collection->addItem($c);

        $this->assertEquals(3, $collection->count());
    }

    public function testRemoveItem()
    {
        $a = Str::from('c');
        $b = Str::from('b');
        $c = Str::from('c');
        $array = [$a, $b, $c];

        $collection = AbstractCollectionTester::from($array);

        $this->assertEquals(3, $collection->count());

        $collection->removeItem($c);

        $this->assertEquals(2, $collection->count());
    }
}

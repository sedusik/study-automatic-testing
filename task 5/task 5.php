

/*
Напишите тесты для функции gt($value, $other), которая возвращает true в том случае, если $value > $other, и false в иных случаях.

<?php

gt(3, 1); // true

gt(3, 3); // false

gt(1, 3); // false




*/

//Мое решение:


<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

use function App\Implementations\gt;

class TestSolution extends TestCase
{
    public function testGt()
    {
        // BEGIN (write your solution here)
        $this->assertEquals(true, gt(3, 1));
        $this->assertEquals(false, gt(3, 3));
        $this->assertEquals(false, gt(1, 3));
        // END
    }
}

//Решение учителя



namespace App\Tests;

use PHPUnit\Framework\TestCase;

use function App\Implementations\gt;

class TestSolution extends TestCase
{
    public function testGt()
    {
        // BEGIN
        $this->assertFalse(gt(0, 0));
        $this->assertTrue(gt(1, 0));
        $this->assertFalse(gt(-3, 1));
        // END
    }
}
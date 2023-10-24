

/*
Напишите тесты для функции without($coll, $values). Она принимает два массива, исключает из первого те значения, которые содержатся во втором и возвращает новый массив.

<?php

without([2, 1, 2, 3], [1, 2]); // [3]
without([2, 1, 2, 3]); // [2, 1, 2, 3]



*/

//Мое решение:


<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

use function App\Implementations\without;

class TestSolution extends TestCase
{
    public function testWithout()
    {
        $this->assertEquals([3], without([2, 1, 2, 3], [1, 2]));
        $this->assertEquals([2, 1, 2, 3], without([2, 1, 2, 3]));
        $this->assertEquals([], without([], []));
    }
}
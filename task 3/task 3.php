

/*
Напишите тесты для функции take($items, $n), которая возвращает первые n элементов из массива. По умолчанию n равен 1.

take([], 2); // []
take([1, 2, 3]); // [1]
take([1, 2, 3], 2); // [1, 2]
take([4, 3], 9); // [4, 3]


*/

//Мое решение:


<?php

namespace App\Tests;

use Webmozart\Assert\Assert;

use function App\Implementations\take;

$functionName = getenv('FUNCTION_VERSION');

require_once __DIR__ . "/../implementations/take.{$functionName}.php";

Assert::eq(take([], 2), []);
Assert::eq(take([1, 2, 3]), [1]);
Assert::eq(take([1, 2, 3], 2), [1, 2]);
Assert::eq(take([4, 3], 9), [4, 3]);
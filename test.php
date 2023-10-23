

/*
Напишите тесты для функции get($collection, $key, $defaultValue). Эта функция извлекает значение из ассоциативного массива при условии, что ключ существует. В ином случае возвращается defaultValue.

<?php

get(['hello' => 'world'], 'hello'); // world
get(['hello' => 'world'], 'hello', 'kitty'); // world
get([], 'hello', 'kitty'); // kitty
Тесты должны быть построены по такому же принципу, как это описывалось в теории урока: проверка через if и исключение в случае провала теста.

Для хорошего тестирования этой функции понадобится как минимум три теста:

Проверка, что функция возвращает нужное значение по существующему ключу (прямой тест на работоспособность)
Проверка на то, что возвращается значение по умолчанию, если ключа нет
Проверка на то, что возвращается значение по существующему ключу, даже если передано значение по умолчанию (пограничный случай)

*/

//Мое решение:


<?php

namespace App\Tests;

use function App\Implementations\get;

$functionName = getenv('FUNCTION_VERSION');

require_once __DIR__ . "/../implementations/get.{$functionName}.php";

if (get(['hello' => 'world'], 'hello') !== 'world') {
    throw new \Exception('Функция работает неверно!');
}
if (get(['hello' => 'world'], 'hello', 'kitty') !== 'world') {
    throw new \Exception('Функция работает неверно!');
}
if (get([], 'hello', 'kitty') !== 'kitty') {
    throw new \Exception('Функция работает неверно!');
}


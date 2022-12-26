<?php

# Модуль Тесты функции для FunctionsStd.php
## часть 1. NS, подключенные пакеты, модули
namespace AllomirStart\Tests\Functions\FunctionsStd11Test;

use Webmozart\Assert\Assert;

use function AllomirStart\Functions\FunctionsStd\capitalize;

## Часть 2. Тесты (модули)
## Часть 2.1. тесты модульные вручную (Без программы)
function testCapitalize()
{
    ### Утверждение истиности Представление с помощью if
    if (capitalize('hello') !== 'Hello') {
        throw new \Exception("Результат функция неверно");
    }
    if (capitalize('') !== '') {
        throw new \Exception('Функция работает неверно!');
    }

    ### Утверждение истиности Представление с помощью assert()
    assert(capitalize('') === '');
    assert(capitalize('hello') === 'Hello');

    ### Утверждение истиности Представление с помощью пакет webmozart/assert
    Assert::eq(capitalize('hello'), 'Hello');
    Assert::eq(capitalize(''), '');

    ### Завершение теста
    echo "testCapitalize(11): ok";
}

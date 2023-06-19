<?php

### Настройка проекта. namespace. namespace скрипты, модули, список загрузки
namespace Allomir\Start\Tests\Functions\StandardTest;

use Webmozart\Assert\Assert;

use function Allomir\Start\Functions\Standard\getNumberAsWord;

## Список 1. Тесты-функции. Functions\Standard
function testGetNumberAsWordVar1()
{
    # Список Утверждения истиности if Exception
    if (getNumberAsWord(3) !== 'three') {
        throw new \Exception("Результат функция неверно");
    }
    if (getNumberAsWord(99) !== '') {
        throw new \Exception('Функция работает неверно!');
    }

    # Результат теста
    echo "test1 getNumberAsWord: ok";
    echo PHP_EOL;
}

function testGetNumberAsWordVar2()
{
    # Список Утверждения истиности assert()
    assert(getNumberAsWord(3) === 'three');
    assert(getNumberAsWord(99) === '');

    # Результат теста
    echo "test2 getNumberAsWord: ok";
    echo PHP_EOL;
}

function testGetNumberAsWordVar3()
{
    # Список Утверждения истиности webmozart/assert
    Assert::eq(getNumberAsWord(3), 'three');
    Assert::eq(getNumberAsWord(99), '');

    # Результат теста
    echo "test3 getNumberAsWord: ok";
    echo PHP_EOL;
}

<?php

### Настройка проекта. namespace. namespace скрипты, модули, список загрузки
namespace Allomir\Start\Tests\Functions;

use PHPUnit\Framework\TestCase;

use function Allomir\Start\Functions\Standard\getNumberAsWord;

## Список 1. Тесты-методы. Functions\Standard
class StandardUnitTest extends TestCase
{
    public function testGetNumberAsWordVar1()
    {
        ### Список Утверждения истиности фреймворк phpunit/phpunit
        $this->assertEquals('three', getNumberAsWord(3));
        $this->assertEquals('', getNumberAsWord(99));
    }

    public function testGetNumberAsWordVar2()
    {
        ### Список Утверждения истиности фреймворк phpunit/phpunit
        $this->assertEquals('three', getNumberAsWord(3));
        $this->assertEquals('', getNumberAsWord(99));
    }
}

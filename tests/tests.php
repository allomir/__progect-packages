<?php

### Настройка проекта. namespace. namespace скрипты, модули, список загрузки
namespace Allomir\Start\Tests;

use Allomir\Start\Tests\Functions\StandardTest;

### Настройка проекта. namespace. настройка Composer autoload ~ Абсолютный путь с ..
$status_result = null;
$autoload1 = __DIR__ . "/../vendor/autoload.php";
$autoload2 = __DIR__ . "/../../../vendor/autoload.php";

if (file_exists($autoload1)) {
    $status_result = require_once($autoload1);
} else {
    $status_result = require_once($autoload2);
}

echo "namespace. настройка Composer autoload: ";
if ($status_result) {
    echo('Выполнено');
} else {
    echo('Не выполено');
}
echo PHP_EOL;

### Часть 1. Тестирование Standard
echo "Результаты:" . PHP_EOL;
StandardTest\testGetNumberAsWordVar1();
StandardTest\testGetNumberAsWordVar2();
StandardTest\testGetNumberAsWordVar3();

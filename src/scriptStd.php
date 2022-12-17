<?php

# Скрипт стандартный
## часть 1. NS, подключенные пакеты, модули
    ### пространство имен script, обычно не требуется
namespace AllomirPackages\scriptStd;

use Funct\Collection as FC;
use Tightenco\Collect\Support\Collection;
use AllomirPackages\Functions\FunctionsStd as FunctionsStd;

## Чвсть 2. Автозагрузчик composer

$autoload1 = __DIR__ . "/../vendor/autoload.php";
$autoload2 = __DIR__ . "/../../../vendor/autoload.php";

if (file_exists($autoload1)) {
    require_once($autoload1);
} else {
    require_once($autoload2);
}

## Часть 3. Решения
## Часть 3.1. Funct
$arr = [11,12,13,14,15];
echo FC\first($arr);

## Часть 3.2. Collect
echo PHP_EOL;

$collection = collect(['taylor', 'abigail', null])->map(function ($name) {
    return strtoupper($name);
})->all();
print_r($collection);

## Часть 3.3. Решение

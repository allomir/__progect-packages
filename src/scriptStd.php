<?php

# Скрипт стандартный
## часть 1. NS, подключенные пакеты, модули
    #* namespace AllomirStart\scriptStd;

use Funct\Collection as Funct;
use Tightenco\Collect\Support\Collection;

use function AllomirStart\Functions\FunctionsStd\capitalize;

## Чвсть 2. Автозагрузчик composer

$autoload1 = __DIR__ . "/../vendor/autoload.php";
$autoload2 = __DIR__ . "/../../../vendor/autoload.php";

if (file_exists($autoload1)) {
    require_once($autoload1);
} else {
    require_once($autoload2);
}

## Часть 3. Задачи
echo "Результаты:";

$result = "PHP " . phpversion();
if (false) {
    $exc = new Exception('Ошибочка');
    throw $exc;
}

echo PHP_EOL;
print_r($result);

## Часть 3.1. funct/funct
$arr = [11,12,13,14,15];
$result = Funct\first($arr);

echo PHP_EOL;
print_r($result);

## Часть 3.2. tightenco/collect
$result = collect(['taylor', 'abigail', null])->map(function ($name) {
    return strtoupper($name);
})->all();

echo PHP_EOL;
print_r($result);

## Часть 3.3. Задача
$result = capitalize('hello');

echo PHP_EOL;
print_r($result);

## Часть 4. Завершение
echo PHP_EOL;

<?php

# Скрипт Тесты
    #* ССЫЛКА. scriptStd.php
## часть 1. NS, подключенные пакеты, модули
    #* namespace AllomirStart\scriptTestsStd;

use function AllomirStart\Tests\Functions\FunctionsStdTest\testCapitalize;

## Чвсть 2. Автозагрузчик composer

$autoload1 = __DIR__ . "/../vendor/autoload.php";
$autoload2 = __DIR__ . "/../../../vendor/autoload.php";

if (file_exists($autoload1)) {
    require_once($autoload1);
} else {
    require_once($autoload2);
}
## Часть 3. Тесты (задачи)
echo "Результаты:";

## Чвсть 3.1. тесты FunctionsStdTest.php
testCapitalize();

## Часть 4. Завершение
echo PHP_EOL;

<?php

# Скрипт Тесты
    # **# scriptStd.php
## часть 1. NS, подключенные пакеты, модули
    // namespace AllomirStart\scriptTestsStd;

use AllomirStart\Tests\Functions\FunctionsStd21Test;

use function AllomirStart\Tests\Functions\FunctionsStd11Test\testCapitalize;

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

## Чвсть 3.1. тесты FunctionsStd11Test.php
echo PHP_EOL;
testCapitalize();

## Чвсть 3.2. тесты FunctionsStd21Test.php
$testFunctionsStd21 = new FunctionsStd21Test();

echo PHP_EOL;
$testFunctionsStd21->testCapitalize();

echo(PHP_EOL . '------------------------------------------' . PHP_EOL);

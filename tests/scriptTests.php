<?php
## часть 1. NS, подключенные пакеты, модули

namespace Tests\scriptTests;

use Tests\Functions\FunctionsStdTest as functionsStdTest;

## Чвсть 2. Автозагрузчик composer

$autoload1 = __DIR__ . "/../vendor/autoload.php";
$autoload2 = __DIR__ . "/../../../vendor/autoload.php";

if (file_exists($autoload1)) {
    require_once($autoload1);
} else {
    require_once($autoload2);
}

## Чвсть 3.1. тесты FunctionsStdTest.php

functionsStdTest\capitalizeTest('hello', "hello");


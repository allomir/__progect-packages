<?php

## Скрипт стандартный
### NS, подключенные пакеты, модули
namespace Allomir\Start;
    // namespace скриптов используется как продолжение пространства имен для модулей - однокоренное пространство
    // !!! не должен содержать название файла (\scriptStd), только название директории
    // это позволяет подключать модули у которых namespace является продолжением скрипта (однокоренное пространство)
    // у всех скриптов одного уровня один namespace

use Funct\Collection as CollectionF;
use Tightenco\Collect\Support\Collection;
use Allomir\Start\Functions\Standard as Funstions;
    // загрузка пространстрва имен класса или модуля с функциями
    // позволяет подключать класс или функции модуля с сокращенным названием


### Автозагрузчик composer #Классический
$autoload1 = __DIR__ . "/../vendor/autoload.php";
$autoload2 = __DIR__ . "/../../../vendor/autoload.php";

if (file_exists($autoload1)) {
    require_once($autoload1);
} else {
    require_once($autoload2);
}

### Часть 1. Характеристики проекта
// require_once(__DIR__ . '/Functions/Standard.php');
    // Если не включен Автозагрузчик Классический

echo(PHP_EOL . '------------------start------------------' . PHP_EOL);

$projInfo = Funstions\getProjectCharacteristics();
$autoload = Funstions\getComposerFileNameAutoload();

echo "Характеристики проекта, functions/standard:";
echo PHP_EOL;
print_r($projInfo);
echo(PHP_EOL . '------------------------------------------' . PHP_EOL);

### Часть 1.1. Автозагрузчик composer #Подключение самостоятельным модулем (не загруженным в composer.json)
// require_once($autoload);
    // Автозагрузчик composer необходимо вызывать до вызова любых функций используемые в автозагрузке (с помощью composer.json)
    // Если вызывается (после функций, и без Автозагрузчика классического) - ошибка повторного подключения getProjectCharacteristics()

echo "Автозагрузчик - подключение:";
echo PHP_EOL;
print_r('');
echo(PHP_EOL . '------------------------------------------' . PHP_EOL);

### Часть 2. PHP info
    // true - настройка невкл
    // false - настройка вкл
echo "о программа PHP:";

if (true) {
    echo PHP_EOL;
    print_r("PHP " . phpversion());
}
if (false) {
    echo PHP_EOL;
    print_r(phpinfo());
}

echo(PHP_EOL . PHP_EOL . '------------------------------------------' . PHP_EOL);

### Часть 2.1. PHP Исключения
if (false) {
    $exc = new \Exception('Ошибочка');
    throw $exc;
}
    // true - исключение невкл
    // false - исключение вкл (выброс исключения)

### Часть 3.1. Задача funct/funct
$arr = [11,12,13,14,15];
$result = CollectionF\first($arr);

echo "Результат, funct/funct:";
echo PHP_EOL;
print_r($result);
echo(PHP_EOL . PHP_EOL . '------------------------------------------' . PHP_EOL);

### Часть 4.1. Задача tightenco/collect
$result = collect(['taylor', 'abigail', null])->map(function ($name) {
    return strtoupper($name);
})->all();

echo "Результат, tightenco/collect:";
echo PHP_EOL;
print_r($result);
echo(PHP_EOL . '------------------------------------------' . PHP_EOL);

### Часть 4.1. Задача Functions/FileSystem
$result = collect(['taylor', 'abigail', null])->map(function ($name) {
    return strtoupper($name);
})->all();

echo "Результат, Functions/FileSystem:";
echo PHP_EOL;
print_r($result);
echo(PHP_EOL . '------------------------------------------' . PHP_EOL);

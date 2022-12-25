<?php

# модуль стандартный функции
## часть 1. NS, подключенные пакеты, модули
namespace AllomirStart\Functions\FunctionsStd;

## Часть 2. Функции (задачи)
## Часть 2.1. Функция
function capitalize($text)
{
    if ($text === '') {
        return '';
    }

    $firstSymbol = strtoupper($text[0]);
    $restSubstring = substr($text, 1);
    return "{$firstSymbol}{$restSubstring}";
}

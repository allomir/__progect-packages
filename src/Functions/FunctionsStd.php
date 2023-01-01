<?php

# модуль стандартный функции
## часть 1. NS, подключенные пакеты, модули
namespace AllomirStart\Functions\FunctionsStd;

## Часть 2. Задачи (Функции)
## Часть 2.1. Задача
function capitalize($text)
{
    if ($text === '') {
        return '';
    }

    $firstSymbol = strtoupper($text[0]);
    $restSubstring = substr($text, 1);
    return "{$firstSymbol}{$restSubstring}";
}

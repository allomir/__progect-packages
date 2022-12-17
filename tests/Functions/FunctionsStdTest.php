<?php
## часть 1. NS, подключенные пакеты, модули

namespace Tests\Functions\FunctionsStdTest;

use AllomirPackages\Functions\FunctionsStd as functionsStd;

# тесты модульные вручную (Без программы) с помощью стандартных функций

function capitalizeTest($qustion, $result) {
    if (functionsStd\capitalize($qustion) !== $result) {
        throw new \Exception ("Результат функция неверно");
    }
}





<?php

# модуль стандартный функции
## NS, подключенные пакеты, модули
namespace Allomir\Start\Functions\Standard;

## Часть 2.1. Задача
    // автоопределение проект-характеристики по ключевым директориям /src /vendor считая от начала
    // проект-директория (корневая директория) название
    // проект-директория (корневая директория) путь
    // не использует автозагрузку composer, подключать require_once()
    // используются только встроенные функции

function getProjectCharacteristics(): array
{
    $projectCharacteristics = [
        'dirPath' => getProjectDirPath(),
        'dirName' => getProjectDirName(),
        'composerFileNameAutoload' => getComposerFileNameAutoload(),
    ];

    return $projectCharacteristics;
}

function getProjectDirPath(): ?string
{
    // Как модуль-функции
    // Определяется по файнловой структуре проекта - файлы и директории внутри проект-директории
    // /src - метка-директория в пути FunctionsStd. Cчитая от начала строки. Не рекомендуется использовать вне проектов
    // _project, __project, project - дополнительная проверка, все проекты должны начинатся с _project, __project, project
    // /vendor не всегда присутсвует в проекте, особенно в начале разработки

    // Как зависимость
    // Определяется по файнловой структуре проекта - файлы и директории внутри проект-директории
    // /vendor - метка-директория в пути FunctionsStd. Cчитая от начала строки. Не рекомендуется использовать вне проектов

    $path = __DIR__;
    $idSRC = strpos($path, '/src/');
    $projectDirPath = substr($path, 0, $idSRC);
    
    return $projectDirPath;
}

function getProjectDirName(): ?string
{
    return pathinfo(getProjectDirPath())['basename'];
}

function getComposerFileNameAutoload(): ?string
{
    return getProjectDirPath() . '/vendor/autoload.php';
}

function intoPathAbs($filePath)
{
    if (strpos($filePath, "./") === 0) {
        $filePath = substr($filePath, 2);
    }
    if (strpos($filePath, "/") !== 0) {
        $filePath = __DIR__ . "/" . $filePath;
    }

    return $filePath;
}

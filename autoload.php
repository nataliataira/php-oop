<?php

spl_autoload_register(function (string $className){

    $basePath = __DIR__ . DIRECTORY_SEPARATOR . $className;
    $entireClassPath = str_replace('Alura\\Bank', 'src', $basePath);
    $entireClassPath = str_replace('\\', DIRECTORY_SEPARATOR, $entireClassPath); // DIRECTORY_SEPARATOR is a default constant of PHP
    $entireClassPath .= '.php';

    if (file_exists($entireClassPath)) {
        require_once $entireClassPath;
    } else {
        echo "Caminho \"$entireClassPath\" não encontrado!";
        exit();
    }
});
<?php

namespace AthenaBridge\Laminas\Config\Reader;

class Ini extends \Laminas\Config\Reader\Ini
{
    public static function loadFile(string $file): array
    {
        return (new self()) -> fromFile($file);
    }
}
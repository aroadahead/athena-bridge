<?php

namespace AthenaBridge\Laminas\Config\Reader;

class Yaml extends \Laminas\Config\Reader\Yaml
{
    public static function loadFile(string $file): array
    {
        return (new self()) -> fromFile($file);
    }
}
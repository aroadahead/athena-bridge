<?php

namespace AthenaBridge\Laminas\Config\Reader;

class Xml extends \Laminas\Config\Reader\Xml
{
    public static function loadFile(string $file): array
    {
        return (new self()) -> fromFile($file);
    }
}
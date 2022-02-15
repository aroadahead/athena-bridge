<?php

namespace AthenaBridge\Laminas\Config\Reader;

class Json extends \Laminas\Config\Reader\Json
{
    public static function loadFile(string $file): array
    {
        return (new self()) -> fromFile($file);
    }
}
<?php

namespace AthenaBridge\Laminas\Config;

use AthenaException\Config\ConfigNodeNotFoundException;

class Config extends \Laminas\Config\Config
{
    public function getOrFail(string $node, mixed $default = null): Config
    {
        if (!$this -> has($node)) {
            throw new ConfigNodeNotFoundException("Config node: $node does not exist.");
        }
        return $this -> get($node, $default);
    }

    public function has(string $node): bool
    {
        return $this -> offsetExists($node);
    }
}
<?php

namespace Framework\Support;

use Exception;

class Config
{
    protected $config;

    public function load(string $config)
    {
        $configDir = __DIR__.'/../../config';

        if(! file_exists($path = ($configDir."/".$config.".php"))){
           throw new Exception('Config file not found in '.$path);
        }

        return require $path;
    }
}
<?php

namespace Framework\Database;

use Framework\Support\Config;

class Connection
{

    private static $instance;

    private static $driver = 'mysql';

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    public static function getInstance()
    {
        if (!self::$instance) {

            self::$instance = new \PDO(
                self::dns(),
                self::username(),
                self::password(),
                self::options()
            );
        }

        return self::$instance;
    }

    private static function loadconfig()
    {
        $config = new Config;

        return $config->load('database')['drivers'][self::$driver];
    }

    private static function dns()
    {
        $config = self::loadconfig();

        $config['port'] = $config['port'] ?? '3306';

        return self::$driver . ":host={$config['host']};dbname={$config['database']};port={$config['port']}";
    }

    private static function username()
    {
        return self::loadconfig()['username'];
    }

    private static function password()
    {
        return self::loadconfig()['password'];
    }
    
    private static function options()
    {
        return !empty(self::loadconfig()['options'])
            ? self::loadconfig()['options']
            : null;
    }
}

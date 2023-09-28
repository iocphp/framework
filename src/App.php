<?php

declare(strict_types=1);

namespace iocphp;

class App
{
    private function __construct()
    {
    }

    /**
     * 框架服务运行入口.
     *
     * @param string             $namespace 应用命名空间
     * @param class-string<IApp> $app
     */
    public static function run(string $app, ?callable $callback = null): void
    {
        echo 'Hello world';
    }
}
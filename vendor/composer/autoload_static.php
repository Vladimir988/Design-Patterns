<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5e853d3f046a8fd6af5e548547e4d96c
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DesignPatterns\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DesignPatterns\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5e853d3f046a8fd6af5e548547e4d96c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5e853d3f046a8fd6af5e548547e4d96c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

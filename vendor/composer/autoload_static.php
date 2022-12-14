<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf88ba1f1f3961da06530b35e5be0e09e
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Windows10\\Composer\\' => 19,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Windows10\\Composer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf88ba1f1f3961da06530b35e5be0e09e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf88ba1f1f3961da06530b35e5be0e09e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf88ba1f1f3961da06530b35e5be0e09e::$classMap;

        }, null, ClassLoader::class);
    }
}

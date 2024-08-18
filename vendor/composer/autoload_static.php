<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit842607e13c4de41e3d9f9bb9397d0470
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Aternos\\Taskmaster\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Aternos\\Taskmaster\\' => 
        array (
            0 => __DIR__ . '/..' . '/aternos/taskmaster/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit842607e13c4de41e3d9f9bb9397d0470::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit842607e13c4de41e3d9f9bb9397d0470::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit842607e13c4de41e3d9f9bb9397d0470::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit842607e13c4de41e3d9f9bb9397d0470::$classMap;

        }, null, ClassLoader::class);
    }
}
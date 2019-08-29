<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit170b5cd1194f2be91b8920188a52b1bf
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CodeSwitch\\Skeleton\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CodeSwitch\\Skeleton\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'CodeSwitch\\Skeleton\\Loader' => __DIR__ . '/../..' . '/src/Loader.php',
        'CodeSwitch\\Skeleton\\Skeleton' => __DIR__ . '/../..' . '/src/Skeleton.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit170b5cd1194f2be91b8920188a52b1bf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit170b5cd1194f2be91b8920188a52b1bf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit170b5cd1194f2be91b8920188a52b1bf::$classMap;

        }, null, ClassLoader::class);
    }
}

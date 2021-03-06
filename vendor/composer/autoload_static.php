<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita3931444e95616190ae8b57e596f9190
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'FC\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'FC\\' => 
        array (
            0 => __DIR__ . '/..' . '/FC',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita3931444e95616190ae8b57e596f9190::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita3931444e95616190ae8b57e596f9190::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita3931444e95616190ae8b57e596f9190::$classMap;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6b54efc309f5da2a70cab2ee93e0213f
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kaream\\Contact\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kaream\\Contact\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6b54efc309f5da2a70cab2ee93e0213f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6b54efc309f5da2a70cab2ee93e0213f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6b54efc309f5da2a70cab2ee93e0213f::$classMap;

        }, null, ClassLoader::class);
    }
}
<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2a27608e7bd3492abe4245699017886d
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2a27608e7bd3492abe4245699017886d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2a27608e7bd3492abe4245699017886d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2a27608e7bd3492abe4245699017886d::$classMap;

        }, null, ClassLoader::class);
    }
}

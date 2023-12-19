<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit14d60e5f12b3152db7a85215f96ee600
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rakit\\Validation\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rakit\\Validation\\' => 
        array (
            0 => __DIR__ . '/..' . '/rakit/validation/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit14d60e5f12b3152db7a85215f96ee600::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit14d60e5f12b3152db7a85215f96ee600::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit14d60e5f12b3152db7a85215f96ee600::$classMap;

        }, null, ClassLoader::class);
    }
}

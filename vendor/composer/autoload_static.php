<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb1ff049edbd874dddc2fc39ad8930322
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nexio\\Payments\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nexio\\Payments\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb1ff049edbd874dddc2fc39ad8930322::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb1ff049edbd874dddc2fc39ad8930322::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb1ff049edbd874dddc2fc39ad8930322::$classMap;

        }, null, ClassLoader::class);
    }
}
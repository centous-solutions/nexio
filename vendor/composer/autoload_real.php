<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb1ff049edbd874dddc2fc39ad8930322
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitb1ff049edbd874dddc2fc39ad8930322', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb1ff049edbd874dddc2fc39ad8930322', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb1ff049edbd874dddc2fc39ad8930322::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}

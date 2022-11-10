<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfbf98a2dd1c6275ccbda80d35965902c
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'StoutLogic\\AcfBuilder\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'StoutLogic\\AcfBuilder\\' => 
        array (
            0 => __DIR__ . '/..' . '/stoutlogic/acf-builder/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/inflector/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfbf98a2dd1c6275ccbda80d35965902c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfbf98a2dd1c6275ccbda80d35965902c::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitfbf98a2dd1c6275ccbda80d35965902c::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitfbf98a2dd1c6275ccbda80d35965902c::$classMap;

        }, null, ClassLoader::class);
    }
}
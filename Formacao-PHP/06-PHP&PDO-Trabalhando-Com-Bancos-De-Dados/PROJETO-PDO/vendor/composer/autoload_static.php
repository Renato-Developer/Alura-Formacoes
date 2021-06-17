<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6e3f7e754d42b61e2f1058b76d102fdf
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\Pdo\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\Pdo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6e3f7e754d42b61e2f1058b76d102fdf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6e3f7e754d42b61e2f1058b76d102fdf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6e3f7e754d42b61e2f1058b76d102fdf::$classMap;

        }, null, ClassLoader::class);
    }
}

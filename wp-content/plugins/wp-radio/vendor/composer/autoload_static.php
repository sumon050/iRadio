<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9260211ef3a74241093139feddc2eb5b
{
    public static $files = array (
        '9e4824c5afbdc1482b6025ce3d4dfde8' => __DIR__ . '/..' . '/league/csv/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'League\\Csv\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'League\\Csv\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/csv/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9260211ef3a74241093139feddc2eb5b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9260211ef3a74241093139feddc2eb5b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9260211ef3a74241093139feddc2eb5b::$classMap;

        }, null, ClassLoader::class);
    }
}
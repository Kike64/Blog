<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6fbabd3d38477cbb21cdb8c12fc3831f
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Phroute\\Phroute\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Phroute\\Phroute\\' => 
        array (
            0 => __DIR__ . '/..' . '/phroute/phroute/src/Phroute',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6fbabd3d38477cbb21cdb8c12fc3831f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6fbabd3d38477cbb21cdb8c12fc3831f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

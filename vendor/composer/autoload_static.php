<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita2895f202b57fd28b0f73fd47b723100
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'BT\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'BT\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita2895f202b57fd28b0f73fd47b723100::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita2895f202b57fd28b0f73fd47b723100::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

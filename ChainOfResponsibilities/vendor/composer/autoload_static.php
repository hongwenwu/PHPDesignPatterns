<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6732c436e62f52b0ac9fbe0401f21428
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6732c436e62f52b0ac9fbe0401f21428::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6732c436e62f52b0ac9fbe0401f21428::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit42365c11c524180ba6bc810ac4c52d73
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit42365c11c524180ba6bc810ac4c52d73::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit42365c11c524180ba6bc810ac4c52d73::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

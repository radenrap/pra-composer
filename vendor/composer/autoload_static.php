<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit909f8f6f5d8e508acf2c901d027eaa8f
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit909f8f6f5d8e508acf2c901d027eaa8f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit909f8f6f5d8e508acf2c901d027eaa8f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
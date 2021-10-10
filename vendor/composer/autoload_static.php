<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5376d19fb059f4bfe86007064701ebcd
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5376d19fb059f4bfe86007064701ebcd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5376d19fb059f4bfe86007064701ebcd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

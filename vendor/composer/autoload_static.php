<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit523cacb9a7a88ebba8f44ae00cac1870
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'AdminPostNotifier\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'AdminPostNotifier\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit523cacb9a7a88ebba8f44ae00cac1870::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit523cacb9a7a88ebba8f44ae00cac1870::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

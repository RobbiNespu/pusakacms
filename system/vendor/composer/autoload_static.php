<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite223c66bcabaed30ebe5ef899f166afd
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Nyankod\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Nyankod\\' => 
        array (
            0 => __DIR__ . '/..' . '/nyankod/jsonfiledb/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
        'L' => 
        array (
            'Lex' => 
            array (
                0 => __DIR__ . '/..' . '/pyrocms/lex/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite223c66bcabaed30ebe5ef899f166afd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite223c66bcabaed30ebe5ef899f166afd::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite223c66bcabaed30ebe5ef899f166afd::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}

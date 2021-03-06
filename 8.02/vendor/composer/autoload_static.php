<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInited53c2983789c7180554deb6fa0dbd12
{
    public static $files = array (
        'a1736b5196a1aa0cf9f0a30b41a3d847' => __DIR__ . '/../8.02',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'system\\' => 7,
        ),
        'h' => 
        array (
            'houdunwang\\' => 11,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'G' => 
        array (
            'Gregwar\\Captcha\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'system\\' => 
        array (
            0 => __DIR__ . '/../8.02',
        ),
        'houdunwang\\' => 
        array (
            0 => __DIR__ . '/../8.02',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../8.02',
        ),
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/vendor',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/vendor',
        ),
        'Gregwar\\Captcha\\' => 
        array (
            0 => __DIR__ . '/vendor',
        ),
    );

    public static $prefixesPsr0 = array (
        'U' => 
        array (
            'Upload' => 
            array (
                0 => __DIR__ . '/vendor',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInited53c2983789c7180554deb6fa0dbd12::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInited53c2983789c7180554deb6fa0dbd12::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInited53c2983789c7180554deb6fa0dbd12::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}

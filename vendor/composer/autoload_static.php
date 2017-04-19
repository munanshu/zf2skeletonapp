<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit067902e58167df99c3c10eefcf52b741
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zend\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zend\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zendframework/library/Zend',
        ),
    );

    public static $prefixesPsr0 = array (
        'Z' => 
        array (
            'ZendXml\\' => 
            array (
                0 => __DIR__ . '/..' . '/zendframework/zendxml/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit067902e58167df99c3c10eefcf52b741::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit067902e58167df99c3c10eefcf52b741::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit067902e58167df99c3c10eefcf52b741::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}

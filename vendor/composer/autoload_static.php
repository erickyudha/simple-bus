<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcf0cf06708b1ae5221bf8e93cc21c6bb
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'EasyRdf\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'EasyRdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyrdf/easyrdf/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcf0cf06708b1ae5221bf8e93cc21c6bb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcf0cf06708b1ae5221bf8e93cc21c6bb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcf0cf06708b1ae5221bf8e93cc21c6bb::$classMap;

        }, null, ClassLoader::class);
    }
}
<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbc23f26848f696835f41588a3d296535
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Automattic\\WooCommerce\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Automattic\\WooCommerce\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/woocommerce/src/WooCommerce',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbc23f26848f696835f41588a3d296535::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbc23f26848f696835f41588a3d296535::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

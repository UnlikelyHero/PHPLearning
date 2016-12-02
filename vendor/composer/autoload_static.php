<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit49e97c52800707c84930e1ec17686e4e
{
    public static $classMap = array (
        'Connection' => __DIR__ . '/../..' . '/core/database/connection.php',
        'Post' => __DIR__ . '/../..' . '/arrays/index.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/querybuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/request.php',
        'Router' => __DIR__ . '/../..' . '/core/router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit49e97c52800707c84930e1ec17686e4e::$classMap;

        }, null, ClassLoader::class);
    }
}

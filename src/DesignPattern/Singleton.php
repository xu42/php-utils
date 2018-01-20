<?php

namespace Xu42\Utilities\DesignPattern;


/**
 * Trait Singleton
 * @package Xu42\Utilities
 */
trait Singleton
{
    private static $instance = null;

    final public static function singleton()
    {
        if (null === static::$instance) {
            static::$instance = new static;
        }
        return static::$instance;
    }

}

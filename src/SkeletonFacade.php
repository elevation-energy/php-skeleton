<?php

namespace Elevation\Skeleton;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Elevation\Skeleton\SkeletonClass
 */
class SkeletonFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'skeleton';
    }
}

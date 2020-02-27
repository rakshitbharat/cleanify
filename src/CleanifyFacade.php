<?php

namespace Rakshitbharat\Cleanify;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rakshitbharat\Cleanify\Skeleton\SkeletonClass
 */
class CleanifyFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'cleanify';
    }
}
